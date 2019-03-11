<?php

namespace ATC\AppBundle\Controller;


use  ATC\AppBundle\Entity\Joueur;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ClassementController extends Controller
{
    public function indexAction()
    {   
        $bdd = $this->getDoctrine()->getManager();

        $joueurs =  $bdd->getRepository('ATCAppBundle:Joueur')->findAll();

        return $this->render('ATCAppBundle:Classement:index.html.twig', array(
            'joueurs' => $joueurs
        ));
    }
}
