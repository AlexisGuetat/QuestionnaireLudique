<?php

namespace ATC\AppBundle\Controller;

use ATC\AppBundle\Entity\Themes;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Console\Application;

class ThemeController extends Controller
{
    public function indexAction()
    {   
        $bdd = $this->getDoctrine()->getManager();

        $themes =   $bdd->getRepository('ATCAppBundle:Themes')->findAll();
        
        return $this->render('ATCAppBundle:Questionnaire:Theme/index.html.twig',array(
            'themes' => $themes
        ));
    }



    
}

