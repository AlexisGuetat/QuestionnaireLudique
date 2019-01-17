<?php

namespace ATC\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ATCAppBundle:Default:index.html.twig');
    }
}
