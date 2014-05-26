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
            if (0 === strpos($pathinfo, '/hello')) {
                // user_homepage
                if (preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_homepage')), array (  '_controller' => 'Bdls\\userBundle\\Controller\\DefaultController::indexAction',));
                }

                // bdls_projet_homepage
                if (preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'bdls_projet_homepage')), array (  '_controller' => 'BdlsProjetBundle:Default:index',));
                }

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

        // bdls_projet_connect
        if ($pathinfo === '/connect') {
            return array (  '_controller' => 'Bdls\\ProjetBundle\\Controller\\PollController::connectAction',  '_route' => 'bdls_projet_connect',);
        }


        if (0 === strpos($pathinfo, '/s')) {
            // bdls_projet_share
            if ($pathinfo === '/share') {
                return array (  '_controller' => 'Bdls\\ProjetBundle\\Controller\\PollController::shareAction',  '_route' => 'bdls_projet_share',);
            }

            // bdls_projet_sent
            if ($pathinfo === '/sent') {
                return array (  '_controller' => 'Bdls\\ProjetBundle\\Controller\\PollController::sentAction',  '_route' => 'bdls_projet_sent',);
            }

        }

        // bdls_projet_view
        if ($pathinfo === '/view') {
            return array (  '_controller' => 'Bdls\\ProjetBundle\\Controller\\PollController::viewAction',  '_route' => 'bdls_projet_view',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'Bdls\\ProjetBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
                }

                // login_check
                if ($pathinfo === '/login_check') {
                    return array('_route' => 'login_check');
                }

            }

            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
