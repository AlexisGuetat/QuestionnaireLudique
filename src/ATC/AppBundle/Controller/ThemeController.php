<?php

namespace ATC\AppBundle\Controller;

use ATC\AppBundle\Entity\Themes;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Console\Application;

class ThemeController extends Controller
{
    public function indexAction(Request $request)
    {   
        $bdd = $this->getDoctrine()->getManager();
        
        $difficulte_nom = $request->attributes->get('difficulte');

        $difficulte = $bdd->getRepository('ATCAppBundle:Difficulte')->getByNom($difficulte_nom);

        $themes =   $bdd->getRepository('ATCAppBundle:Themes')->findAll();
        
        var_dump($difficulte);

        return $this->render('ATCAppBundle:Questionnaire:Theme/index.html.twig',array(
            'themes' => $themes,
            'difficulte' => $difficulte
        ));
    }



    
}

