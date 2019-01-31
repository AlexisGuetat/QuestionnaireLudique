<?php

namespace ATC\AppBundle\Controller;


use ATC\AppBundle\Entity\Question;
use ATC\AppBundle\Entity\Questionnaire;
use ATC\AppBundle\Entity\Contenu;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class QuestionController extends Controller
{
    public function addAction(Request $request)
    {   
        // AJOUT DE LA QUESTION
        $intitule               = !empty($request->query->get('intitule'))              ? $request->query->get('intitule')              : "";
        $reponseUnJuste         = !empty($request->query->get('reponseUnJuste'))        ? $request->query->get('reponseUnJuste')        : "";
        $reponseDeuxFausse      = !empty($request->query->get('reponseDeuxFausse'))     ? $request->query->get('reponseDeuxFausse')     : "";
        $reponseTroisFausse     = !empty($request->query->get('reponseTroisFausse'))    ? $request->query->get('reponseTroisFausse')    : "";
        $reponseQuatreFausse    = !empty($request->query->get('reponseQuatreFausse'))   ? $request->query->get('reponseQuatreFausse')   : "";
        //$reponseExplication   = !empty($request->query->get('reponseExplication'))    ? $request->query->get('reponseExplication')    : "";

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
        $bdd                    = $this->getDoctrine()->getManager();
        
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

        return $this->render('ATCAppBundle:Question:add.html.twig');
    }

   
}
