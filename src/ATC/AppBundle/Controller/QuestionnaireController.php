<?php

namespace ATC\AppBundle\Controller;

use  ATC\AppBundle\Entity\Questionnaire;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class QuestionnaireController extends Controller
{
    public function indexAction(Request $request)
    {
        $pseudo = $request->query->get('pseudo'); 
        return $this->render('ATCAppBundle:Questionnaire:index.html.twig',array('pseudo'=>$pseudo));
    }

    public function facileAction(Request $request)
    {
        $pseudo = $request->query->get('pseudo'); 
        return $this->render('ATCAppBundle:Questionnaire:Difficulte/facile.html.twig',array('pseudo'=>$pseudo));
    }

    public function moyenAction(Request $request)
    {
        $pseudo = $request->query->get('pseudo'); 
        return $this->render('ATCAppBundle:Questionnaire:Difficulte/moyen.html.twig',array('pseudo'=>$pseudo));
    }

    public function difficileAction(Request $request)
    {
        $pseudo = $request->query->get('pseudo'); 
        return $this->render('ATCAppBundle:Questionnaire:Difficulte/difficile.html.twig',array('pseudo'=>$pseudo));
    }

    public function mathAction(Request $request)
    {
        $pseudo = $request->query->get('pseudo'); 
        return $this->render('ATCAppBundle:Questionnaire:Theme/math.html.twig',array('pseudo'=>$pseudo));
    }

    public function addAction(Request $request)
    {   
       
        #Récupération valeur dans la requête      en marron c'est la recupération de la valeur des name= dans le front
        $titre      = !empty($request->query->get('titre'))         ? $request->query->get('titre')     : "";
        $theme      = !empty($request->query->get('theme'))         ? $request->query->get('theme')     : "";
        $difficulte = !empty($request->query->get('difficulte'))    ? $request->query->get('difficulte'): "";
        
        #Remplit l'objet questionnaire et les valeures recupéré ci-dessus
        $questionnaire = new Questionnaire();
        $questionnaire->setTitre($titre);
        $questionnaire->setTheme($theme);
        $questionnaire->setDifficulte($difficulte);


        #On envois l'objet questionnaire dans la base de donnée 
        $manager = $this->getDoctrine()->getManager();
        $manager->persist($questionnaire);
        $manager->flush();

<<<<<<< HEAD
            return $this->render('ATCAppBundle:Administrateur:add.html.twig',array(
=======
        
        
            return $this->render('ATCAppBundle:Question:add.html.twig',array(
>>>>>>> bc8b9a416890ee06b2a936893d34c7328def114f
                'titre'         => $titre,
                'theme'         => $theme,
                'difficulte'    => $difficulte
            ));
    }

    public function add2Action(Request $request)
    {   
            return $this->render('ATCAppBundle:Administrateur:add2.html.twig');
    }

}
