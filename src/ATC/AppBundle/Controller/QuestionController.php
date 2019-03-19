<?php

namespace ATC\AppBundle\Controller;


use Proxies\__CG__\ATC\AppBundle\Entity\Question;
use ATC\AppBundle\Entity\Questionnaire;
use ATC\AppBundle\Entity\Contenu;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\JsonResponse;

class QuestionController extends Controller
{
    /**
     * ajout d'une question
     */
    public function addAction(Request $request){  

        $bdd = $this->getDoctrine()->getManager();
        $questions = $bdd->getRepository("ATCAppBundle:Question")->findAll();
        
        // AJOUT DE LA QUESTION
        $intitule               = !empty($request->query->get('intitule'))              ? $request->query->get('intitule')              : "";
        $reponseUnJuste         = !empty($request->query->get('reponseUnJuste'))        ? $request->query->get('reponseUnJuste')        : "";
        $reponseDeuxFausse      = !empty($request->query->get('reponseDeuxFausse'))     ? $request->query->get('reponseDeuxFausse')     : "";
        $reponseTroisFausse     = !empty($request->query->get('reponseTroisFausse'))    ? $request->query->get('reponseTroisFausse')    : "";
        $reponseQuatreFausse    = !empty($request->query->get('reponseQuatreFausse'))   ? $request->query->get('reponseQuatreFausse')   : "";

        $questionTest = $bdd->getRepository("ATCAppBundle:Question")->findOneByIntitule($intitule);
    
        if(in_array($questionTest, $questions) || $questionTest != null) {
            throw new NotFoundHttpException("Cette intitule de question existe déja. Veuillez un trouver un autre");
        }

            $questionO = new Question();
            $questionO->setIntitule($intitule);
            $questionO->setReponseUnJuste($reponseUnJuste);
            $questionO->setReponseDeuxFausse($reponseDeuxFausse);
            $questionO->setReponseTroisFausse($reponseTroisFausse);
            $questionO->setReponseQuatreFausse($reponseQuatreFausse);
            $questionO->setReponseExplication(" - ");

            $manager = $this->getDoctrine()->getManager();
            $manager->persist($questionO);
            $manager->flush();
            
            //AJOUT DANS LA TABLE CONTENU LE LIEN ENTRE LA QUESTION ET LE QUESTIONNAIRE
            
            $titreQuestionnaire     = !empty($request->attributes->get('titre'))     ? $request->attributes->get('titre')     : "";

            $questionnaire = new Questionnaire();

            if ( empty($titreQuestionnaire)){
                throw new NotFoundHttpException("Aucun titre de questionnaire récupéré.");
            }
                $questionnaire = $bdd->getRepository('ATCAppBundle:Questionnaire')->findOneByTitre($titreQuestionnaire);
            
            if( null === $questionnaire){
                throw new NotFoundHttpException("Aucun id pour le questionnaire avec le titre " . $titreQuestionnaire);
            }

            $idquestionnaire = $questionnaire->getId();

           
            $contenu = new Contenu();
            $contenu->setQuestion($questionO);
            $contenu->setQuestionnaire($questionnaire);

           
            $manager = $this->getDoctrine()->getManager();
            $manager->persist($contenu);
            $manager->flush();

            //AJOUT DU COMPTEUR DE QUESTION
            $bdd = $this->getDoctrine()->getManager();


            $nombreDeQuestion = $this->getDoctrine()
                ->getEntityManager()
                ->getRepository('ATCAppBundle:Question')
                ->countQuestionByQuestionnaire($questionnaire);



            if(empty($nombreDeQuestion))
            {
                throw new NotFoundHttpException("Impossible de récupérer le nombre de question du questionnaire " . $idquestionnaire);
            }

            return $this->render('ATCAppBundle:Question:add.html.twig', array(
                'nombre_question' => $nombreDeQuestion
            ));
    }

    /**
     * affiche les valeurs d'une question
     */
    public function showAction(Request $request){

        $bdd = $this->getDoctrine()->getManager();

        $ntituleQuestion = $request->get('intitule_question');
        $question     = $bdd->getRepository("ATCAppBundle:Question")->findOneByIntitule($ntituleQuestion);
        
        $data = array();

       
           $data['intitule']      = $question->getIntitule();
           $data['reponseUne']    = $question->getReponseUnJuste();
           $data['reponseDeux']   = $question->getReponseDeuxFausse();
           $data['reponseTrois']  = $question->getReponseTroisFausse();
           $data['reponseQuatre'] = $question->getReponseQuatreFausse();
            
           return new JsonResponse($data);
    }

    /**
     * affiche les valeurs d'une question
     */
    public function updateAction(Request $request){
        
        $intitule_before_update =  $request->get('intitule_before_update');
        $intitule = $request->get('intitule');
        $repJuste = $request->get('question_juste');
        $repFaux1 = $request->get('question_fausse');
        $repFaux2 = $request->get('question_fausse2');
        $repFaux3 = $request->get('question_fausse3');


        $bdd = $this->getDoctrine()->getManager();
        $em = $this->container->get('doctrine')->getEntityManager();

        $question  = $bdd->getRepository("ATCAppBundle:Question")->findOneByIntitule($intitule_before_update);

        $question->setIntitule($intitule);
        $question->setQuestionUnJuste($repJuste);
        $question->setQuestionDeuxFausse($repFaux1);
        $question->setQuestionTroisFausse($repFaux2);
        $question->setQuestionQuatresFausse($repFaux3);
        
        $em->persist($question);
        $em->flush();

        return ;
    }
    
   
}
