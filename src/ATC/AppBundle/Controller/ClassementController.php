<?php

namespace ATC\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ClassementController extends Controller
{
    public function indexAction()
    {
        return $this->render('ATCAppBundle:Classement:index.html.twig');
    }
}
