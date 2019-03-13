<?php
namespace ATC\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DifficulteController extends Controller
{   
    public function indexAction(Request $request)
    {   
        // on stocke dans la session le theme
        $themeName = $request->get('theme');
       

        return $this->render('ATCAppBundle:Questionnaire:Difficulte/index.html.twig', array('themeName' => $themeName));
    }
 
}


?>