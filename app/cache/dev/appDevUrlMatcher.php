<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/css/styles')) {
            // _assetic_2814d27
            if ($pathinfo === '/css/styles.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '2814d27',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_2814d27',);
            }

            // _assetic_2814d27_0
            if ($pathinfo === '/css/styles_part_1_style_1.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '2814d27',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_2814d27_0',);
            }

        }

        if (0 === strpos($pathinfo, '/js/1aa6170')) {
            // _assetic_1aa6170
            if ($pathinfo === '/js/1aa6170.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '1aa6170',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_1aa6170',);
            }

            if (0 === strpos($pathinfo, '/js/1aa6170_part_1_')) {
                // _assetic_1aa6170_0
                if ($pathinfo === '/js/1aa6170_part_1_jquery.min_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '1aa6170',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_1aa6170_0',);
                }

                // _assetic_1aa6170_1
                if ($pathinfo === '/js/1aa6170_part_1_menu_2.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '1aa6170',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_1aa6170_1',);
                }

                // _assetic_1aa6170_2
                if ($pathinfo === '/js/1aa6170_part_1_rss_3.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '1aa6170',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_1aa6170_2',);
                }

                // _assetic_1aa6170_3
                if ($pathinfo === '/js/1aa6170_part_1_zjquery.easing.1.3_4.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '1aa6170',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_1aa6170_3',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

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
