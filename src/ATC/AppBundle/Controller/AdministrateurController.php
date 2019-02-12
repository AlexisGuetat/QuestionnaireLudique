<?php

namespace ATC\AppBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdministrateurController extends Controller
{
    public function indexAction()
    {   
        $bdd = $this->getDoctrine()->getManager();
        $themes =   $bdd->getRepository('ATCAppBundle:Themes')->findAll();

        return $this->render('ATCAppBundle:Administrateur:index.html.twig',array(
            'themes' => $themes
        ));
    }

}
