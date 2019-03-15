<?php

namespace ATC\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use ATC\AppBundle\Entity\Joueur;
use ATC\AppBundle\Entity\Questionnaire;

class JoueurController extends Controller
{
    public function addAction(SessionInterface $session, Request $request)
    {
        $bdd = $this->getDoctrine()->getManager();
        $em = $this->container->get('doctrine')->getEntityManager();

        $pseudo     = $session->get('pseudo');
        $theme_req  = $session->get('theme');
        $titre      = $session->get('titre');
        $score      = $request->get('score');

        //var_dump($request);
        $questionnaire = $bdd->getRepository('ATCAppBundle:Questionnaire')->findOneByTitre($titre);
        var_dump($questionnaire);
      
        if ( $questionnaire == null )
        {
            // on recupere nos requetes
           
            $difficulte_req = $request->get('difficulte');

        
            //on les convertit en object
            $theme = $bdd->getRepository('ATCAppBundle:Themes')->findOneByNom($theme_req);
            $difficulte = $bdd->getRepository('ATCAppBundle:Difficulte')->findOneByNom($difficulte_req);
            
            var_dump( $theme);

            // on crée un nouveau questionnaire que l'on va ajouté à la base
            $questionnaire = new Questionnaire();
            $questionnaire->setTitre($titre);
            $questionnaire->setDifficulte($difficulte);
            $questionnaire->setTheme($theme);
           

        }
        
        var_dump($questionnaire);

        $joueur = new Joueur();
        $joueur->setPseudo($pseudo);
        $joueur->setScore($score);
        $joueur->setDate(new \DateTime('now'));
        $joueur->setQuestionnaire($questionnaire);

        $em->persist($joueur);
        $em->flush();

       return $this->render('ATCAppBundle::index.html.twig');

    }
}

?>