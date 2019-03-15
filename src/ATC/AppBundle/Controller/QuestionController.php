<?php

namespace ATC\AppBundle\Controller;


use ATC\AppBundle\Entity\Question;
use ATC\AppBundle\Entity\Questionnaire;
use ATC\AppBundle\Entity\Contenu;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Doctrine\ORM\EntityNotFoundException;

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

        $question = $bdd->getRepository("ATCAppBundle:Question")->findOneByIntitule($intitule);
    
        if(in_array($question, $questions) || $question != null) {
            throw new NotFoundHttpException("Cette intitule de question existe déja. Veuillez un trouver un autre",null);
        }

            $question = new Question();
            $question->setIntitule($intitule);
            $question->setReponseUnJuste($reponseUnJuste);
            $question->setReponseDeuxFausse($reponseDeuxFausse);
            $question->setReponseTroisFausse($reponseTroisFausse);
            $question->setReponseQuatreFausse($reponseQuatreFausse);
            $question->setReponseExplication(" - ");

            $manager = $this->getDoctrine()->getManager();
            $manager->persist($question);
            $manager->flush();
            
            //AJOUT DANS LA TABLE CONTENU LE LIEN ENTRE LA QUESTION ET LE QUESTIONNAIRE
            
            $titreQuestionnaire     = !empty($request->attributes->get('titre'))              ? $request->attributes->get('titre')             : "";

            $questionnaire = new Questionnaire();

            if ( empty($titreQuestionnaire))
            {
                throw new NotFoundHttpException("Aucun titre de questionnaire récupéré.");
            }
                $questionnaire = $bdd->getRepository('ATCAppBundle:Questionnaire')->findOneBy(array('titre' => $titreQuestionnaire));
            

            if( null === $questionnaire)
            {
                throw new NotFoundHttpException("Aucun id pour le questionnaire avec le titre " . $titreQuestionnaire);
            }

            $idquestionnaire = $questionnaire->getId();

            $contenu        = new Contenu();
            $contenu->setIdQuestion($question->getId());
            $contenu->setIdQuestionnaire($idquestionnaire);

            $manager = $this->getDoctrine()->getManager();
            $manager->persist($contenu);
            $manager->flush();

            //AJOUT DU COMPTEUR DE QUESTION
            $bdd = $this->getDoctrine()->getManager();

            
            $nombreDeQuestion = $this->getDoctrine()
                ->getEntityManager()
                ->getRepository('ATCAppBundle:Question')
                ->countQuestionByQuestionnaire($idquestionnaire);

            if(empty($nombreDeQuestion))
            {
                throw new NotFoundHttpException("Impossible de récupérer le nombre de question du questionnaire " . $idquestionnaire);
            }

            return $this->render('ATCAppBundle:Question:add.html.twig', array(
                'nombre_question' => $nombreDeQuestion
            ));
        }
    
   
}
