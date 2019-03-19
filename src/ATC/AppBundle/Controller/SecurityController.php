<?php


namespace ATC\AppBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request; 
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class SecurityController extends Controller
{
    
    public function loginAction(Request $request, SessionInterface $session)
    {
        $bdd = $this->getDoctrine()->getManager();
        $users = $bdd->getRepository("ATCAppBundle:Users")->findAll();
    
        $email  = $request->get('email');
        $mdp    = $request->get('mdp');
        
        $user = $bdd->getRepository("ATCAppBundle:Users")->findOneByEmail($email);
        
        
        if($user == null or in_array($user,$users) == false ){

            throw new NotFoundHttpException("Pas d'email trouvé.");
        }
        else{
            if($mdp != $user->getMdp()){

                throw new NotFoundHttpException("Mot de passe incorrect.");
            }
            else{

                $session->set("user","Admin");
                return $this->render('ATCAppBundle::index.html.twig');

            }
        }
        
    }
    
}
?>