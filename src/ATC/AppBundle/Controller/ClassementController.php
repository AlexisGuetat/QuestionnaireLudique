<?php

namespace ATC\AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ClassementController extends Controller
{
    public function indexAction()
    {   
        $bdd = $this->getDoctrine()->getManager();

        $joueurs =  $this->getDoctrine()
                         ->getEntityManager()
                         ->getRepository('ATCAppBundle:Joueur')
                         ->findBy(array(), array('score' => 'desc'));

        return $this->render('ATCAppBundle:Classement:index.html.twig', array(
            'joueurs' => $joueurs
        ));
    }
}
