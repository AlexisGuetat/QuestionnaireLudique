<?php

namespace ATC\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use ATC\AppBundle\Entity\Joueur;
use ATC\AppBundle\Entity\Questionnaire;
use ATC\AppBundle\Entity\Themes;
use ATC\AppBundle\Entity\Difficulte;

class JoueurController extends Controller
{
    public function addAction(SessionInterface $session, Request $request)
    {
        $bdd = $this->getDoctrine()->getManager();
        $em = $this->container->get('doctrine')->getEntityManager();

        $pseudo = $session->get('pseudo');
        $score  = $request->get('score');
        
        $questionnaire_titre = $request->get("titre");

        //var_dump($request);
        $questionnaire = $bdd->getRepository('ATCAppBundle:Questionnaire')->findOneByTitre($questionnaire_titre);

              
        if ( $questionnaire == null)
        {
            // on recupere nos requetes
            $titre_req = $request->get('titre');
            $theme_req = $request->get('theme');
            $difficulte_req = $request->get('difficulte');

            //on les convertit en object
            $theme = $bdd->getRepository('ATCAppBundle:Themes')->findOneByNom($theme_req);
            $difficulte = $bdd->getRepository('ATCAppBundle:Difficulte')->findOneByNom($difficulte_req);

            // on crée un nouveau questionnaire que l'on va ajouté à la base
            $questionnaire = new Questionnaire();
            $questionnaire->setTitre($titre_req);
            $questionnaire->setDifficulte($difficulte);
            $questionnaire->setTheme($theme);

        }
       
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