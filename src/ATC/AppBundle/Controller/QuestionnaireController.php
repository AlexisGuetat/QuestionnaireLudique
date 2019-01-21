<?php

namespace ATC\AppBundle\Controller;

use  ATC\AppBundle\Entity\Questionnaire;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class QuestionnaireController extends Controller
{
    public function indexAction(Request $request)
    {
        $pseudo = $request->query->get('pseudo'); 
        return $this->render('ATCAppBundle:Questionnaire:index.html.twig',array('pseudo'=>$pseudo));
    }

    public function facileAction(Request $request)
    {
        $pseudo = $request->query->get('pseudo'); 
        return $this->render('ATCAppBundle:Questionnaire:Difficulte/facile.html.twig',array('pseudo'=>$pseudo));
    }

    public function moyenAction(Request $request)
    {
        $pseudo = $request->query->get('pseudo'); 
        return $this->render('ATCAppBundle:Questionnaire:Difficulte/moyen.html.twig',array('pseudo'=>$pseudo));
    }

    public function difficileAction(Request $request)
    {
        $pseudo = $request->query->get('pseudo'); 
        return $this->render('ATCAppBundle:Questionnaire:Difficulte/difficile.html.twig',array('pseudo'=>$pseudo));
    }

    public function mathAction(Request $request)
    {
        $pseudo = $request->query->get('pseudo'); 
        return $this->render('ATCAppBundle:Questionnaire:Theme/math.html.twig',array('pseudo'=>$pseudo));
    }


}
