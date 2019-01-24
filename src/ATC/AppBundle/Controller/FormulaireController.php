<?php

namespace ATC\AppBundle\Controller;

use ATC\AppBundle\Entity\Questionnaire;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use ATC\AppBundle\Entity\Question;

class FormulaireController extends Controller
{
    public function indexAction()
    {
        return $this->render('ATCAppBundle:Formulaire:index.html.twig');
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

