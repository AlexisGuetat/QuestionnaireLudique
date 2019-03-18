<?php


namespace ATC\AppBundle\Controller;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\BrowserKit\Request;

class SecurityController extends Controller
{
    
    public function showAction()
    {
        return $this->render('security/login.html.twig');
    }

    public function loginAction(Request $request)
    {
        if($request->isMethod('GET'))
        {
        }
        else if($request->isMethod('POST')){

        $userName = $request->get('_username');
        return $this->render('homepage', array(
            'userName' => $userName
        ));
    }
    }
}
?>