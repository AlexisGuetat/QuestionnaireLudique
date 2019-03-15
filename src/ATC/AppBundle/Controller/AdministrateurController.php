<?php

namespace ATC\AppBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AdministrateurController extends Controller
{
    /**
     * affiche la page de la création du questionnaire
     * 
     */
    public function indexAction()
    {   
        $bdd        = $this->getDoctrine()->getManager();
        $themes     =   $bdd->getRepository('ATCAppBundle:Themes')->findAll();
        $difficultes =   $bdd->getRepository('ATCAppBundle:Difficulte')->findAll();

        return $this->render('ATCAppBundle:Administrateur:index.html.twig',array(
            'themes' => $themes,
            'difficultes' => $difficultes
        ));
    }

    /**
     * supprime un questionnaire 
     * @var request 
     */
    public function deleteAction(Request $request)
    {
        $bdd = $this->getDoctrine()->getEntityManager();

        if($request->isMethod("POST")){
            
            $titreQuestionnaire = $request->get('titre');

            $questionnaire = $bdd->getRepository("ATCAppBundle:Questionnaire")->findOneByTitre($titreQuestionnaire);

            $bdd->remove($questionnaire);
            $bdd->flush();
            
            $questionnaires = $bdd->getRepository("ATCAppBundle:Questionnaire")->findAll();
            return $this->render("ATCAppBundle:Administrateur:delete.html.twig",array("questionnaires" => $questionnaires));
        }
        else
        {
            $questionnaires = $bdd->getRepository("ATCAppBundle:Questionnaire")->findAll();

            return $this->render("ATCAppBundle:Administrateur:delete.html.twig",array("questionnaires" => $questionnaires));
        }
    }

}
