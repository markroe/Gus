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

        if (0 === strpos($pathinfo, '/web')) {
            // web
            if ($pathinfo === '/web') {
                return array (  '_controller' => 'Roelab\\GusBundle\\Controller\\DefaultController::webAction',  '_route' => 'web',);
            }

            // webcans
            if ($pathinfo === '/webcans') {
                return array (  '_controller' => 'Roelab\\GusBundle\\Controller\\DefaultController::webcansAction',  '_route' => 'webcans',);
            }

        }

        // editwebcan
        if (0 === strpos($pathinfo, '/editwebcan') && preg_match('#^/editwebcan/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'editwebcan')), array (  '_controller' => 'Roelab\\GusBundle\\Controller\\DefaultController::editwebcanAction',));
        }

        // deletewebcan
        if (0 === strpos($pathinfo, '/deletewebcan') && preg_match('#^/deletewebcan/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'deletewebcan')), array (  '_controller' => 'Roelab\\GusBundle\\Controller\\DefaultController::deletewebcanAction',));
        }

        // webjobs
        if ($pathinfo === '/webjobs') {
            return array (  '_controller' => 'Roelab\\GusBundle\\Controller\\DefaultController::webjobsAction',  '_route' => 'webjobs',);
        }

        // editwebjob
        if (0 === strpos($pathinfo, '/editwebjob') && preg_match('#^/editwebjob/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'editwebjob')), array (  '_controller' => 'Roelab\\GusBundle\\Controller\\DefaultController::editwebjobAction',));
        }

        // deletewebjob
        if (0 === strpos($pathinfo, '/deletewebjob') && preg_match('#^/deletewebjob/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'deletewebjob')), array (  '_controller' => 'Roelab\\GusBundle\\Controller\\DefaultController::deletewebjobAction',));
        }

        if (0 === strpos($pathinfo, '/e')) {
            if (0 === strpos($pathinfo, '/email')) {
                // email
                if ($pathinfo === '/email') {
                    return array (  '_controller' => 'Roelab\\GusBundle\\Controller\\DefaultController::emailAction',  '_route' => 'email',);
                }

                // emailcans
                if ($pathinfo === '/emailcans') {
                    return array (  '_controller' => 'Roelab\\GusBundle\\Controller\\DefaultController::emailcansAction',  '_route' => 'emailcans',);
                }

            }

            // editemailcan
            if (0 === strpos($pathinfo, '/editemailcan') && preg_match('#^/editemailcan/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'editemailcan')), array (  '_controller' => 'Roelab\\GusBundle\\Controller\\DefaultController::editemailcanAction',));
            }

        }

        // deleteemailcan
        if (0 === strpos($pathinfo, '/deleteemailcan') && preg_match('#^/deleteemailcan/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'deleteemailcan')), array (  '_controller' => 'Roelab\\GusBundle\\Controller\\DefaultController::deleteemailcanAction',));
        }

        if (0 === strpos($pathinfo, '/e')) {
            // emailjobs
            if ($pathinfo === '/emailjobs') {
                return array (  '_controller' => 'Roelab\\GusBundle\\Controller\\DefaultController::emailjobsAction',  '_route' => 'emailjobs',);
            }

            // editemailjob
            if (0 === strpos($pathinfo, '/editemailjob') && preg_match('#^/editemailjob/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'editemailjob')), array (  '_controller' => 'Roelab\\GusBundle\\Controller\\DefaultController::editemailjobAction',));
            }

        }

        if (0 === strpos($pathinfo, '/d')) {
            // deleteemailjob
            if (0 === strpos($pathinfo, '/deleteemailjob') && preg_match('#^/deleteemailjob/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'deleteemailjob')), array (  '_controller' => 'Roelab\\GusBundle\\Controller\\DefaultController::deleteemailjobAction',));
            }

            // data
            if ($pathinfo === '/data') {
                return array (  '_controller' => 'Roelab\\GusBundle\\Controller\\DefaultController::dataAction',  '_route' => 'data',);
            }

            // dlpcans
            if ($pathinfo === '/dlpcans') {
                return array (  '_controller' => 'Roelab\\GusBundle\\Controller\\DefaultController::dlpcansAction',  '_route' => 'dlpcans',);
            }

        }

        // editdlpcan
        if (0 === strpos($pathinfo, '/editdlpcan') && preg_match('#^/editdlpcan/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'editdlpcan')), array (  '_controller' => 'Roelab\\GusBundle\\Controller\\DefaultController::editdlpcanAction',));
        }

        if (0 === strpos($pathinfo, '/d')) {
            // deletedlpcan
            if (0 === strpos($pathinfo, '/deletedlpcan') && preg_match('#^/deletedlpcan/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'deletedlpcan')), array (  '_controller' => 'Roelab\\GusBundle\\Controller\\DefaultController::deletedlpcanAction',));
            }

            // dlpjobs
            if ($pathinfo === '/dlpjobs') {
                return array (  '_controller' => 'Roelab\\GusBundle\\Controller\\DefaultController::dlpjobsAction',  '_route' => 'dlpjobs',);
            }

        }

        // editdlpjob
        if (0 === strpos($pathinfo, '/editdlpjob') && preg_match('#^/editdlpjob/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'editdlpjob')), array (  '_controller' => 'Roelab\\GusBundle\\Controller\\DefaultController::editdlpjobAction',));
        }

        // deletedlpjob
        if (0 === strpos($pathinfo, '/deletedlpjob') && preg_match('#^/deletedlpjob/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'deletedlpjob')), array (  '_controller' => 'Roelab\\GusBundle\\Controller\\DefaultController::deletedlpjobAction',));
        }

        // status
        if ($pathinfo === '/status') {
            return array (  '_controller' => 'Roelab\\GusBundle\\Controller\\DefaultController::statusAction',  '_route' => 'status',);
        }

        // webstatus
        if ($pathinfo === '/webstatus') {
            return array (  '_controller' => 'Roelab\\GusBundle\\Controller\\DefaultController::webstatusAction',  '_route' => 'webstatus',);
        }

        // emailstatus
        if ($pathinfo === '/emailstatus') {
            return array (  '_controller' => 'Roelab\\GusBundle\\Controller\\DefaultController::emailstatusAction',  '_route' => 'emailstatus',);
        }

        // dlpstatus
        if ($pathinfo === '/dlpstatus') {
            return array (  '_controller' => 'Roelab\\GusBundle\\Controller\\DefaultController::dlpstatusAction',  '_route' => 'dlpstatus',);
        }

        // settings
        if ($pathinfo === '/settings') {
            return array (  '_controller' => 'Roelab\\GusBundle\\Controller\\DefaultController::settingsAction',  '_route' => 'settings',);
        }

        // general
        if ($pathinfo === '/general') {
            return array (  '_controller' => 'Roelab\\GusBundle\\Controller\\DefaultController::generalAction',  '_route' => 'general',);
        }

        // editgeneral
        if (0 === strpos($pathinfo, '/editgeneral') && preg_match('#^/editgeneral/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'editgeneral')), array (  '_controller' => 'Roelab\\GusBundle\\Controller\\DefaultController::editgeneralAction',));
        }

        // ipaddresses
        if ($pathinfo === '/ipaddresses') {
            return array (  '_controller' => 'Roelab\\GusBundle\\Controller\\DefaultController::ipaddressesAction',  '_route' => 'ipaddresses',);
        }

        // deleteip
        if (0 === strpos($pathinfo, '/deleteip') && preg_match('#^/deleteip/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'deleteip')), array (  '_controller' => 'Roelab\\GusBundle\\Controller\\DefaultController::deleteipAction',));
        }

        // editip
        if (0 === strpos($pathinfo, '/editip') && preg_match('#^/editip/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'editip')), array (  '_controller' => 'Roelab\\GusBundle\\Controller\\DefaultController::editipAction',));
        }

        // clients
        if ($pathinfo === '/clients') {
            return array (  '_controller' => 'Roelab\\GusBundle\\Controller\\DefaultController::clientsAction',  '_route' => 'clients',);
        }

        // deleteclient
        if (0 === strpos($pathinfo, '/deleteclient') && preg_match('#^/deleteclient/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'deleteclient')), array (  '_controller' => 'Roelab\\GusBundle\\Controller\\DefaultController::deleteclientAction',));
        }

        // editclient
        if (0 === strpos($pathinfo, '/editclient') && preg_match('#^/editclient/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'editclient')), array (  '_controller' => 'Roelab\\GusBundle\\Controller\\DefaultController::editclientAction',));
        }

        // hello
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'hello')), array (  '_controller' => 'Roelab\\GusBundle\\Controller\\DefaultController::helloAction',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
