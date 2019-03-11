<?php

namespace ATC\AppBundle\Controller;

use ATC\AppBundle\Entity\Questionnaire;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use ATC\AppBundle\Entity\Question;

class FormulaireController extends Controller
{
    public function indexAction()
    {
        return $this->render('ATCAppBundle:Formulaire:index.html.twig');
    }


    
}

