<?php

namespace ATC\AppBundle\Controller;


use  ATC\AppBundle\Entity\Questionnaire;
use ATC\AppBundle\Entity\Question;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use ATC\AppBundle\Entity\Joueur;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class QuestionnaireController extends Controller
{   

    public function addAction(Request $request){   
       
        $bdd = $this->getDoctrine()->getManager();

        #Récupération valeur dans la requête      en marron c'est la recupération de la valeur des name= dans le front
        $titre          = !empty($request->get('titre'))         ? $request->get('titre')     : "";
        $themeName      = !empty($request->get('theme'))         ? $request->get('theme')     : "";
        $difficulteName = !empty($request->get('difficulte'))    ? $request->get('difficulte'): "";
        
        $theme          =  $bdd->getRepository('ATCAppBundle:Themes')->findOneByNom($themeName);
        $difficulte     =  $bdd->getRepository('ATCAppBundle:Difficulte')->findOneByNom($difficulteName);
        
        $questionnaire = $bdd->getRepository("ATCAppBundle:Questionnaire")->findOneByTitre($titre);
        
        if($questionnaire != null) {
            throw new NotFoundHttpException("Ce titre de questionnaire existe déja. Veuillez un trouver un autre");
        }
     
        #Remplit l'objet questionnaire et les valeures recupéré ci-dessus
        $questionnaire = new Questionnaire();
        $questionnaire->setTitre($titre);
        $questionnaire->setTheme($theme);
        $questionnaire->setDifficulte($difficulte);


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
    public function viewAction(SessionInterface $session,$theme,$difficulte) {  

        $bdd = $this->getDoctrine()->getManager();

        // si le theme est math alors on genere le questionnaire automatiquement 
        if($theme == 'Mathematiques'){

                // recuperation des Objet theme et difficulte en fonction de leur nom
                $themeO = $bdd->getRepository('ATCAppBundle:Themes')->findOneByNom($theme);
                $difficulteO = $bdd->getRepository('ATCAppBundle:Difficulte')->findOneByNom($difficulte);

                // creation du questionnaire à la volé
                $questionnaire = new Questionnaire();
                $titre = "Calcul " . $difficulte ;
                $session->set('titre', $titre);

                $questionnaire->setTitre( $titre );
                $questionnaire->setTheme($themeO);
                $questionnaire->setDifficulte($difficulteO);

                //on crée nos variables pour faire les calculs
                $valeur1 = 0;
                $valeur2 = 0;
                $tableau_de_operateur = [];


                switch ($difficulte) {
                    case 'facile' || 'FACILE':
                        
                        $valeur1 = rand(0,3);
                        $valeur2 = rand(0,3);
                        $tableau_de_operateur = ['+','-'];
                        
                        break;
                    
                    case 'moyen' || 'MOYEN':

                        $valeur1 = rand(0,6);
                        $valeur2 = rand(0,6);
                        $tableau_de_operateur = ['+','-','*'];

                        break;
                    case 'difficile' || 'DIFFICILE':

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
                $intitule = $valeur1 . " " . $operateur . " ". $valeur2 . " = ";

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

            
                return $this->render('ATCAppBundle:Questionnaire:index.html.twig', array(
                            'questionObj'   => $question,
                            'questionnaire' => $questionnaire
                    ));

            }else{

            $theme       = $bdd->getRepository('ATCAppBundle:Themes')->findOneByNom($theme);
            $difficulte  = $bdd->getRepository('ATCAppBundle:Difficulte')->findOneByNom($difficulte);
                
        
            // ON RECUPERE TOUS LES QUESTIONNAIRES AYANT L'ID ET LA DIFFICULTE PASSEE EN PARAMETRE
            $questionnaires = $bdd->getRepository('ATCAppBundle:Questionnaire')->findBy(array('theme' => $theme,
                                                                                                'difficulte' => $difficulte));
            
            // ON SELECTIONNE DE MANIERE ALEATOIRE UN QUESTIONNAIRE PARMI CEUX RECUPERER
            if ($questionnaires == null) {
                throw new NotFoundHttpException("Pas de questionnaire pour cette difficulte et ce theme.");
                    }

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
                                    ->findAllQuestionByQuestionnaire($questionnaire);

            
            if(!isset($listeQuestions[0]))
            {
                throw new NotFoundHttpException("Pas de question pour le questionnaire n° " . $id . " qui se nomme " . $questionnaire->getTitre() ." ... Va vite le completer !");
            }

            $session->set('titre', $questionnaire->getTitre());

        
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

    public function scoreAction(SessionInterface $session, Request $request){

        // recuperation des valeurs passé en parametre
        $score = $request->get('score');
        $titre = $request->get('nom_questionnaire');
        $theme = $request->get('theme_questionnaire');
        $difficulte = $request->get('difficulte_questionnaire');

        $bdd =  $this->getDoctrine()->getManager();

        $questionnaire = $bdd->getRepository('ATCAppBundle:Questionnaire')->findOneByTitre($titre);
        
        //recuperation du questionnaire
        $questionnaire = new Questionnaire();
        $questionnaire->setTheme( $bdd->getRepository('ATCAppBundle:Themes')->findOneByNom($theme));
        $questionnaire->setDifficulte( $bdd->getRepository('ATCAppBundle:Difficulte')->findOneByNom($difficulte));

        //creation du joueur
        $joueur = new Joueur();
        $joueur->setQuestionnaire($questionnaire);
        $joueur->setDate(date("Y-m-d H:i:s"));
        $joueur->setScore($score);
        $joueur->setPseudo($session->get('pseudo'));

    
        return $this->render("ATCAppBundle:Score:index.html.twig",array(
            'joueur' => $joueur
        ));
    }

    


}
