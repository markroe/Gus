<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRoutes = array(
        '_welcome' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Roelab\\GusBundle\\Controller\\DefaultController::welcomeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'web' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Roelab\\GusBundle\\Controller\\DefaultController::webAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/web',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Roelab\\GusBundle\\Controller\\DefaultController::emailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'data' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Roelab\\GusBundle\\Controller\\DefaultController::dataAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/data',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'schedule' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Roelab\\GusBundle\\Controller\\DefaultController::scheduleAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/schedule',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'settings' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Roelab\\GusBundle\\Controller\\DefaultController::settingsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/settings',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'hello' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'Roelab\\GusBundle\\Controller\\DefaultController::helloAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/hello',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
