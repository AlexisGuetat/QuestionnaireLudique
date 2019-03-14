<?php
namespace ATC\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class DifficulteController extends Controller
{   
    public function indexAction(SessionInterface $session,Request $request)
    {   
        // on stocke dans la session le theme
        $themeName = $request->get('theme');
        $session->set('theme', $themeName);

        return $this->render('ATCAppBundle:Questionnaire:Difficulte/index.html.twig', array('themeName' => $themeName));
    }
 
}


?>