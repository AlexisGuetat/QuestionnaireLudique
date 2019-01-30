<?php

namespace ATC\AppBundle\Controller;


use ATC\AppBundle\Entity\Question;
use ATC\AppBundle\Entity\Questionnaire;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class QuestionController extends Controller
{
    public function addAction(Request $request)
    {   
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

        return $this->render('ATCAppBundle:Question:add.html.twig');
    }

   
}
