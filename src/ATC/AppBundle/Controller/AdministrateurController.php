<?php

namespace ATC\AppBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdministrateurController extends Controller
{
    public function indexAction()
    {
        return $this->render('ATCAppBundle:Administrateur:index.html.twig');
    }

}
