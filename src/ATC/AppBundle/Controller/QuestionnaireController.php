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

    public function addAction(Request $request)
    {   
        $questionnaire = new Questionnaire();

        $titre      = !empty($request->query->get('titre'))         ? $request->query->get('titre')     : "";
        $theme      = !empty($request->query->get('theme'))         ? $request->query->get('theme')     : "";
        $difficulte = !empty($request->query->get('difficulte'))    ? $request->query->get('difficulte'): "";

        $questionnaire->setTitre($titre);
        $questionnaire->setTheme($theme);
        $questionnaire->setDifficulte($difficulte);

        $manager = $this->getDoctrine()->getManager();
        $manager->persist($questionnaire);
        $manager->flush();

            return $this->render('ATCAppBundle:Administrateur:add.html.twig',array(
                'titre'         => $titre,
                'theme'         => $theme,
                'difficulte'    => $difficulte
            ));
    }

    public function add2Action(Request $request)
    {   
            return $this->render('ATCAppBundle:Administrateur:add2.html.twig');
    }

}
