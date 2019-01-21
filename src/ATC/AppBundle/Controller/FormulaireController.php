<?php

namespace ATC\AppBundle\Controller;
use ATC\AppBundle\Entity\Formulaire;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class FormulaireController extends Controller
{
    public function indexAction()
    {
        return $this->render('ATCAppBundle:Formualaire:index.html.twig');
    }

    public function addAction(Request $request)
    {
        $formulaire = new Formulaire();
        $formulaire->setNom($request['nom']);
        $formulaire->setTheme(($request['theme']));
        $formulaire->setDifficulte($request['difficulte']);
        
    }
}
