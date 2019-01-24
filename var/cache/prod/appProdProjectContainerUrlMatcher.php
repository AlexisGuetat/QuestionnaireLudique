<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        // homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'ATC\\AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/questionnaire')) {
            // questionnaire
            if ('/questionnaire' === $pathinfo) {
                return array (  '_controller' => 'ATC\\AppBundle\\Controller\\QuestionnaireController::indexAction',  '_route' => 'questionnaire',);
            }

            if (0 === strpos($pathinfo, '/questionnaire/facile')) {
                // questionnaire_facile
                if ('/questionnaire/facile' === $pathinfo) {
                    return array (  '_controller' => 'ATC\\AppBundle\\Controller\\QuestionnaireController::facileAction',  '_route' => 'questionnaire_facile',);
                }

                // questionnaire_facile_math
                if ('/questionnaire/facile/math' === $pathinfo) {
                    return array (  '_controller' => 'ATC\\AppBundle\\Controller\\QuestionnaireController::mathAction',  '_route' => 'questionnaire_facile_math',);
                }

            }

            // questionnaire_moyen
            if ('/questionnaire/moyen' === $pathinfo) {
                return array (  '_controller' => 'ATC\\AppBundle\\Controller\\QuestionnaireController::moyenAction',  '_route' => 'questionnaire_moyen',);
            }

            // questionnaire_difficile
            if ('/questionnaire/difficile' === $pathinfo) {
                return array (  '_controller' => 'ATC\\AppBundle\\Controller\\QuestionnaireController::difficileAction',  '_route' => 'questionnaire_difficile',);
            }

        }

        // administrateur
        if ('/administrateur' === $pathinfo) {
            return array (  '_controller' => 'ATC\\AppBundle\\Controller\\AdministrateurController::indexAction',  '_route' => 'administrateur',);
        }

        if (0 === strpos($pathinfo, '/administrateur/ajout_formulaire')) {
            // administrateur_ajout_formulaire
            if ('/administrateur/ajout_formulaire' === $pathinfo) {
                return array (  '_controller' => 'ATC\\AppBundle\\Controller\\FormulaireController::addAction',  '_route' => 'administrateur_ajout_formulaire',);
            }

            // administrateur_ajout_formulaire2
            if ('/administrateur/ajout_formulaire2' === $pathinfo) {
                return array (  '_controller' => 'ATC\\AppBundle\\Controller\\FormulaireController::add2Action',  '_route' => 'administrateur_ajout_formulaire2',);
            }

        }

        // classement
        if ('/classement' === $pathinfo) {
            return array (  '_controller' => 'ATC\\AppBundle\\Controller\\ClassementController::indexAction',  '_route' => 'classement',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
