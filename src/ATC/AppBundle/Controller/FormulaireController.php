<?php

namespace ATC\AppBundle\Controller;

use ATC\AppBundle\Entity\Formulaire;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class FormulaireController extends Controller
{
    public function indexAction()
    {
        return $this->render('ATCAppBundle:Formulaire:index.html.twig');
    }

    public function addAction(Request $request)
    {   
        $formulaire = new Formulaire();

        $nom        = !empty($request->query->get('nom'))           ? $request->query->get('nom')       : "";
        $theme      = !empty($request->query->get('theme'))         ? $request->query->get('theme')     : "";
        $difficulte = !empty($request->query->get('difficulte'))    ? $request->query->get('difficulte'): "";

        $formulaire->setNom($nom);
        $formulaire->setTheme($theme);
        $formulaire->setDifficulte($difficulte);
        //$formulaire->setIdQuestionnaire('4');

        $manager = $this->getDoctrine()->getManager();
        $manager->persist($formulaire);
        $manager->flush();

        
        if($request->isMethod('POST')){
            return $this->render('ATCAppBundle:Administrateur:add.html.twig',array(
                'nom'           => $nom,
                'theme'         => $theme,
                'difficulte'    => $difficulte
            ));
        
        }

        return $this->render('ATCAppBundle:Administrateur:index.html.twig');
        
    }
    
    public function add2Action(Request $request)
    {   
            return $this->render('ATCAppBundle:Administrateur:add2.html.twig');
    }
}

