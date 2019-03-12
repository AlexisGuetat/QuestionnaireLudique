<?php

namespace ATC\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class ThemeController extends Controller
{
    public function indexAction(SessionInterface $session,Request $request){

        // on stocke dans la session le pseudo
        $pseudo = $request->get('pseudo');
        $session->set('pseudo', $pseudo);
     
        $bdd = $this->getDoctrine()->getManager();
        $themes = $bdd->getRepository('ATCAppBundle:Themes')->findAll();

        return $this->render('ATCAppBundle:Questionnaire:Theme/index.html.twig',array('themes' => $themes));
    }
   
}

