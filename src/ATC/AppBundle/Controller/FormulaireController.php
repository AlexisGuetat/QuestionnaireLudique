<?php

namespace ATC\AppBundle\Controller;

use ATC\AppBundle\Entity\Formulaire;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class FormulaireController extends Controller
{
    public function indexAction()
    {
        return $this->render('ATCAppBundle:Formulaire:index.html.twig');
    }

    public function addAction(Request $request)
    {   
        $formulaire = new Formulaire();
        $formulaire->setNom('NOM du formulaire');
        $formulaire->setTheme('MATH');
        $formulaire->setDifficulte('FACILE');
        $formulaire->setIdQuestionnaire('4');

        $manager = $this->getDoctrine()->getManager();
        $manager->persist($formulaire);
        $manager->flush();

        
        if($request->isMethod('POST')){
            return $this->render('ATCAppBundle:Administrateur:add.html.twig');
        
        }

        return $this->render('ATCAppBundle:Administrateur:index.html.twig');
        
    }
}
