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

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Roelab\\GusBundle\\Controller\\DefaultController::welcomeAction',  '_route' => '_welcome',);
        }

        // web
        if ($pathinfo === '/web') {
            return array (  '_controller' => 'Roelab\\GusBundle\\Controller\\DefaultController::webAction',  '_route' => 'web',);
        }

        // email
        if ($pathinfo === '/email') {
            return array (  '_controller' => 'Roelab\\GusBundle\\Controller\\DefaultController::emailAction',  '_route' => 'email',);
        }

        // data
        if ($pathinfo === '/data') {
            return array (  '_controller' => 'Roelab\\GusBundle\\Controller\\DefaultController::dataAction',  '_route' => 'data',);
        }

        if (0 === strpos($pathinfo, '/s')) {
            // schedule
            if ($pathinfo === '/schedule') {
                return array (  '_controller' => 'Roelab\\GusBundle\\Controller\\DefaultController::scheduleAction',  '_route' => 'schedule',);
            }

            // settings
            if ($pathinfo === '/settings') {
                return array (  '_controller' => 'Roelab\\GusBundle\\Controller\\DefaultController::settingsAction',  '_route' => 'settings',);
            }

        }

        // hello
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'hello')), array (  '_controller' => 'Roelab\\GusBundle\\Controller\\DefaultController::helloAction',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
