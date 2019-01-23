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
        $formulaire->setNom($request['nom']);
        $formulaire->setTheme(($request['theme']));
        $formulaire->setDifficulte($request['difficulte']);

        $manager = $this->getDoctrine()->getManager();
        $manager->persist();
        $manager->flush();

        if($request->isMethod('POST')){
            return $this->redirect('administrateur_ajout_formulaire',array('id'=> $formulaire->getId()));
        }

        return $this->render('ATCAppBundle:Formulaire:index.html.twig');
    }
}
