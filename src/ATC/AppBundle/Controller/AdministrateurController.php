<?php

namespace ATC\AppBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use ATC\AppBundle\Entity\Question;

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
        else if($request->isXmlHttpRequest())
        {
            $titreQuestionnaire = $request->get('titre');
            $questionnaire      = $bdd->getRepository("ATCAppBundle:Questionnaire")->findOneByTitre($titreQuestionnaire);
            $listeQuestions = $this->getDoctrine()
            ->getEntityManager()
            ->getRepository('ATCAppBundle:Question')
            ->findAllQuestionByQuestionnaire($questionnaire);
            
            $data = array();

            foreach ($listeQuestions as $question) {
               
               $questionTab['intitule']      = $question->getIntitule();
               $questionTab['reponseUne']    = $question->getReponseUnJuste();
               $questionTab['reponseDeux']   = $question->getReponseDeuxFausse();
               $questionTab['reponseTrois']  = $question->getReponseTroisFausse();
               $questionTab['reponseQuatre'] = $question->getReponseQuatreFausse();
               array_push($data,$questionTab);             
            }

          
            return new JsonResponse($data);
        }
        else
        {
            $questionnaires = $bdd->getRepository("ATCAppBundle:Questionnaire")->findAll();

            return $this->render("ATCAppBundle:Administrateur:delete.html.twig",array("questionnaires" => $questionnaires));
        }
    }

}
