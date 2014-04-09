<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/h')) {
            // bdls_projet_homepage
            if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'bdls_projet_homepage')), array (  '_controller' => 'BdlsProjetBundle:Default:index',));
            }

            // bdls_projet_index
            if ($pathinfo === '/home') {
                return array (  '_controller' => 'Bdls\\ProjetBundle\\Controller\\IndexController::indexAction',  '_route' => 'bdls_projet_index',);
            }

        }

        // bdls_projet_dashboard
        if ($pathinfo === '/dash') {
            return array (  '_controller' => 'Bdls\\ProjetBundle\\Controller\\DashboardController::indexAction',  '_route' => 'bdls_projet_dashboard',);
        }

        // bdls_projet_about
        if ($pathinfo === '/about') {
            return array (  '_controller' => 'Bdls\\ProjetBundle\\Controller\\AboutController::indexAction',  '_route' => 'bdls_projet_about',);
        }

        // bdls_projet_forgot
        if ($pathinfo === '/forgot') {
            return array (  '_controller' => 'Bdls\\ProjetBundle\\Controller\\IndexController::forgotAction',  '_route' => 'bdls_projet_forgot',);
        }

        // bdls_projet_creation
        if ($pathinfo === '/creation') {
            return array (  '_controller' => 'Bdls\\ProjetBundle\\Controller\\PollController::createAction',  '_route' => 'bdls_projet_creation',);
        }

        // bdls_projet_login
        if ($pathinfo === '/log') {
            return array (  '_controller' => 'Bdls\\ProjetBundle\\Controller\\UserController::loginAction',  '_route' => 'bdls_projet_login',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
