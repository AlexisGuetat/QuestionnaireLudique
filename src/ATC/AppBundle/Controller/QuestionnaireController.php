<?php

namespace ATC\AppBundle\Controller;


use  ATC\AppBundle\Entity\Questionnaire;
use ATC\AppBundle\Entity\Question;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class QuestionnaireController extends Controller
{   
    public function indexDifficulteAction(Request $request){
        $pseudo = $request->query->get('pseudo'); 
        return $this->render('ATCAppBundle:Questionnaire:Difficulte/index.html.twig',array('pseudo'=>$pseudo));
    }

    public function addAction(Request $request){   
       
        $bdd = $this->getDoctrine()->getManager();

        #Récupération valeur dans la requête      en marron c'est la recupération de la valeur des name= dans le front
        $titre          = !empty($request->get('titre'))         ? $request->get('titre')     : "";
        $themeName      = !empty($request->get('theme'))         ? $request->get('theme')     : "";
        $difficulteName = !empty($request->get('difficulte'))    ? $request->get('difficulte'): "";
        
        $theme          =  $bdd->getRepository('ATCAppBundle:Themes')->findByNom($themeName);
        $difficulte     =  $bdd->getRepository('ATCAppBundle:Difficulte')->findByNom($difficulteName);

        $themeID        = $theme[0]->getId();
        $difficulteID   = $difficulte[0]->getId();
           
        #Remplit l'objet questionnaire et les valeures recupéré ci-dessus
        $questionnaire = new Questionnaire();
        $questionnaire->setTitre($titre);
        $questionnaire->setIdTheme($themeID);
        $questionnaire->setIdDifficulte($difficulteID);


        #On envois l'objet questionnaire dans la base de donnée 
        $manager = $this->getDoctrine()->getManager();
        $manager->persist($questionnaire);
        $manager->flush();
        
                
            return $this->render('ATCAppBundle:Question:add.html.twig' ,array(
                'titre' => $questionnaire->getTitre()
            ));
    }

    /**
     * Renvoie sur la page de question
     * @param String $theme nom du theme
     * @param String $difficulte nom de la difficulte
     * @return View
     */
    public function viewAction($theme,$difficulte) {  

        $bdd = $this->getDoctrine()->getManager();

    // si le theme est math alors on genere le questionnaire automatiquement 
    if($theme == 'Mathematique'){

            // creation du questionnaire à la volé
            $questionnaireMath = new Questionnaire();
            $questionnaireMath->setTitre("Calcul");
            //$questionnaireMath->setIdTheme(1);
           // $questionnaireMath->setDifficulte($bdd->getRepository('ATCAppBundle:Difficulte')->find(array('nom'=>$difficulte))->getId());

            //on crée nos variables pour faire les calculs
            $valeur1 = 0;
            $valeur2 = 0;
            $tableau_de_operateur = [];

            // on recupere le niveau de difficultée
            $niveau_de_difficulte = $difficulte;

            switch ($niveau_de_difficulte) {
                case 'FACILE':
                    
                    $valeur1 = rand(0,3);
                    $valeur2 = rand(0,3);
                    $tableau_de_operateur = ['+','-'];
                    

                    break;
                
                case 'MOYEN':

                    $valeur1 = rand(0,6);
                    $valeur2 = rand(0,6);
                    $tableau_de_operateur = ['+','-','*'];

                    break;
                case 'DIFFICILE':

                    $valeur1 = rand(0,9);
                    $valeur2 = rand(0,9);
                    $tableau_de_operateur = ['+','-','*','/'];

                    break;
                
                default:
                    # code...
                    break;
            }

            // on recupere l'index d'une valeur aleatoire du tableau
            $index = array_rand($tableau_de_operateur,1);
            $operateur = $tableau_de_operateur[$index] ;

            // on le met sous forme de chaine de caractere pour afficher la question
            $intitule = $valeur1 . " " . $operateur . " ". $valeur2 ;

            // on fait le culcul pour avoir la reponse
            $reponse =  0; 
            switch ($operateur) {
                case '+':   $reponse = $valeur1 +  $valeur2;
                    break;
                case '-':   $reponse = $valeur1 -  $valeur2; 
                    break;
                case '*':   $reponse = $valeur1 *  $valeur2;
                    break;
                case '/':   $reponse = $valeur1 /  $valeur2;
                    break;
            }

            // comme ce sont des enfants 4 - 7 = 0
            $reponse = $reponse < 0 ? 0 : $reponse;

            
          

            // on crée un nouvel question avec les données crées
            $question = new Question();
            $question->setIntitule($intitule);
            $question->setReponseUnJuste($reponse);
            $question->setReponseDeuxFausse($reponse + 1);
            $question->setReponseTroisFausse($reponse + 2);
            $question->setReponseQuatreFausse($reponse + 3);

            var_dump($questionnaireMath);
             return $this->render('ATCAppBundle:Questionnaire:index.html.twig', array(
                        'questionObj'   => $question,
                        'questionnaireMath' => $questionnaireMath
                  ));

        }else{

       

        $theme_id       = $bdd->getRepository('ATCAppBundle:Themes')->findOneBy(array('nom'=> $theme))->getId();
        $difficulte     = $bdd->getRepository('ATCAppBundle:Difficulte')->findOneBy(array('nom'=>$difficulte));
            
      
        // ON RECUPERE TOUS LES QUESTIONNAIRES AYANT L'ID ET LA DIFFICULTE PASSEE EN PARAMETRE
        $questionnaires = $bdd->getRepository('ATCAppBundle:Questionnaire')->findBy(array('id_theme' => $theme_id,
                                                                                         'difficulte' => $difficulte));
        
        // ON SELECTIONNE DE MANIERE ALEATOIRE UN QUESTIONNAIRE PARMI CEUX RECUPERER
        $questionnaire = $questionnaires[array_rand($questionnaires,1)];
        
    

        if ($questionnaire === null) {
            throw new NotFoundHttpException("Aucun questionnaire récupéré.");
                }
      
        $id  =  $questionnaire->getId();
            
        if ($id === null) {
            throw new NotFoundHttpException("Aucun id de questionnaire récupéré.");
                }
        
         $listeQuestions = array();
         $listeQuestions = $this->getDoctrine()
                               ->getEntityManager()
                               ->getRepository('ATCAppBundle:Question')
                               ->findAllQuestionByQuestionnaire($id,$theme_id,$difficulte->getId());

        
        if(!isset($listeQuestions[0]))
        {
            throw new NotFoundHttpException("Pas de question pour le questionnaire n° " . $id . " qui se nomme " . $questionnaire->getTitre() ." ... Va vite le completer !");
        }

      
        return $this->render('ATCAppBundle:Questionnaire:index.html.twig', array(
        'questionnaire'      => $questionnaire, 
        'listeQuestions'     => $listeQuestions
        
          ));
        }

          
    }

    public function completeViewAction(Request $request){
        
            if ($request->isMethod('post')) {

                $titre = $request->get('titre') ;

                if ($titre == null) {
                    throw new NotFoundHttpException("Aucun Questionnaire trouvé.");
                }

                $bdd = $this->getDoctrine()->getManager();

                $questionnaire =  $bdd->getRepository('ATCAppBundle:Questionnaire')->findOneBy(array('titre'=>$titre));

                return $this->render('ATCAppBundle:Question:add.html.twig' ,array(
                    'titre' => $questionnaire->getTitre()
                ));
        }
        else{
            
            $questionnaireIncomplets =  $this->getDoctrine()
            ->getEntityManager()
            ->getRepository('ATCAppBundle:Questionnaire')
            ->findAllQuestionnaireByUncompletede();

            return $this->render('ATCAppBundle:Questionnaire:complete.html.twig',array(
            'questionnaireIncomplets' => $questionnaireIncomplets
            ));
        }
    }

    public function scoreAction(Request $request){

        $score = $request->get('score');
        $titre = $request->get('nom_questionnaire');
        

        $bdd =  $this->getDoctrine()->getManager();

        if( ($request->get('nom_questionnaire') !=  "Calcul" )){
            
            $questionnaire = $bdd->getRepository('ATCAppBundle:Questionnaire')->findOneBy(array('titre'=> $titre));
            $theme = $bdd->getRepository('ATCAppBundle:Themes')->find($questionnaire->getIdTheme());
            $difficulte =$bdd->getRepository('ATCAppBundle:Difficulte')->find($questionnaire->getDifficulte()); 
            $titre = $questionnaire->getTitre();
    

        }else{

            $difficulte = $request->get('difficulte_questionnaire');
            $theme = "Mathematiques";
            $titre = "Calcul";

        }
        
    
        return $this->render("ATCAppBundle:Score:index.html.twig",array(
            'score' => $score,
            'questionnaire' => $questionnaire,
            'difficulte' => $difficulte,
            'theme' => $theme
        ));
    }

    


}
