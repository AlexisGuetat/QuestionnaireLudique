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
        $titre          = !empty($request->query->get('titre'))         ? $request->query->get('titre')     : "";
        $themeName      = !empty($request->query->get('theme'))         ? $request->query->get('theme')     : "";
        $difficulteName = !empty($request->query->get('difficulte'))    ? $request->query->get('difficulte'): "";
        
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

    public function viewAction($id,$theme,$difficulte) {       
            
            $questionnaires = $bdd->getRepository('ATCAppBundle:Questionnaire')->findAll();

            if ($id === null) {
                throw new NotFoundHttpException("Aucun id de questionnaire récupéré.");
                    }
          
            $bdd = $this->getDoctrine()->getManager();

            $questionnaire  =  $bdd->getRepository('ATCAppBundle:Questionnaire')->find($id);

            if ($questionnaire === null) {
                throw new NotFoundHttpException("Aucun questionnaire ayant l'id " .$id.'     trouvé.');
                    }
            
            $listeQuestions = $this->getDoctrine()
                                   ->getEntityManager()
                                   ->getRepository('ATCAppBundle:Question')
                                   ->findAllQuestionByQuestionnaire($id,$theme,$difficulte);
            
            return $this->render('ATCAppBundle:Questionnaire:index.html.twig', array(
            'questionnaire'      => $questionnaire, 
            'listeQuestions'     => $listeQuestions 
          ));
        

          
    }

    public function completeViewAction(){
        
        $questionnaireIncomplets =  $this->getDoctrine()
                                         ->getEntityManager()
                                         ->getRepository('ATCAppBundle:Questionnaire')
                                         ->findAllQuestionnaireByUncompletede();
       
        return $this->render('ATCAppBundle:Questionnaire:complete.html.twig',array(
            'questionnaireIncomplets' => $questionnaireIncomplets
        ));
    }

    public function completeRedirectAction(Request $request){

            $titre = $request->query->get('titre') ;
            return $this->redirectToRoute('question_ajout' ,array(
                'titre' => $titre
            ));
    }

    


}
