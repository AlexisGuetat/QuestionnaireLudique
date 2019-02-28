<?php

namespace ATC\AppBundle\Controller;


use  ATC\AppBundle\Entity\Questionnaire;
use  ATC\AppBundle\Entity\Question;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use ATC\AppBundle\Repository\QuestionnaireRepository;
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

    public function viewAction($theme,$difficulte) {       
            
            $theme_id = $theme;
            $difficulte_id = $difficulte;
            var_dump($theme_id);
            var_dump($difficulte_id);
            $bdd = $this->getDoctrine()->getManager();

            $questionnaire = $bdd->getRepository('ATCAppBundle:Questionnaire')->findOneRandQuestionnaireByTheme($theme,$difficulte);
            
            if ($questionnaire === null) {
                throw new NotFoundHttpException("Aucun questionnaire récupéré.");
                    }
          
            $id  =  $questionnaire->getId();
                
            if ($id === null) {
                throw new NotFoundHttpException("Aucun id de questionnaire récupéré.");
                    }
            
            var_dump($id);

             $listeQuestions = $this->getDoctrine()
                                   ->getEntityManager()
                                   ->getRepository('ATCAppBundle:Question')
                                   ->findAllQuestionByQuestionnaire($id,$theme_id,$difficulte_id);
            
                                   var_dump($theme_id . " "  .$difficulte_id);

            return $this->render('ATCAppBundle:Questionnaire:index.html.twig', array(
            'questionnaire'      => $questionnaire, 
            'listeQuestions'     => $listeQuestions 
          ));
        

          
    }

    public function completeViewAction(Request $request){
        
            if ($request->isMethod('post')) {

                $titre = $request->get('titre') ;

                if ($titre == null) {
                    throw new NotFoundHttpException("Aucun Questionnaire trouvé avec ce titre.");
                }

                return $this->redirectToRoute('ajout_question/'.$titre ,array(
                    'titre' => $titre
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

    


}
