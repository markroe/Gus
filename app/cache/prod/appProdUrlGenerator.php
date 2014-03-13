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
        'webcans' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Roelab\\GusBundle\\Controller\\DefaultController::webcansAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/webcans',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'editwebcan' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Roelab\\GusBundle\\Controller\\DefaultController::editwebcanAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/editwebcan',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'deletewebcan' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Roelab\\GusBundle\\Controller\\DefaultController::deletewebcanAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/deletewebcan',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'webjobs' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Roelab\\GusBundle\\Controller\\DefaultController::webjobsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/webjobs',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'editwebjob' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Roelab\\GusBundle\\Controller\\DefaultController::editwebjobAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/editwebjob',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'deletewebjob' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Roelab\\GusBundle\\Controller\\DefaultController::deletewebjobAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/deletewebjob',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Roelab\\GusBundle\\Controller\\DefaultController::emailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'emailcans' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Roelab\\GusBundle\\Controller\\DefaultController::emailcansAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/emailcans',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'editemailcan' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Roelab\\GusBundle\\Controller\\DefaultController::editemailcanAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/editemailcan',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'deleteemailcan' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Roelab\\GusBundle\\Controller\\DefaultController::deleteemailcanAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/deleteemailcan',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'emailjobs' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Roelab\\GusBundle\\Controller\\DefaultController::emailjobsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/emailjobs',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'editemailjob' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Roelab\\GusBundle\\Controller\\DefaultController::editemailjobAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/editemailjob',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'deleteemailjob' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Roelab\\GusBundle\\Controller\\DefaultController::deleteemailjobAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/deleteemailjob',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'data' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Roelab\\GusBundle\\Controller\\DefaultController::dataAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/data',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'dlpcans' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Roelab\\GusBundle\\Controller\\DefaultController::dlpcansAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/dlpcans',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'editdlpcan' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Roelab\\GusBundle\\Controller\\DefaultController::editdlpcanAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/editdlpcan',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'deletedlpcan' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Roelab\\GusBundle\\Controller\\DefaultController::deletedlpcanAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/deletedlpcan',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'dlpjobs' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Roelab\\GusBundle\\Controller\\DefaultController::dlpjobsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/dlpjobs',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'editdlpjob' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Roelab\\GusBundle\\Controller\\DefaultController::editdlpjobAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/editdlpjob',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'deletedlpjob' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Roelab\\GusBundle\\Controller\\DefaultController::deletedlpjobAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/deletedlpjob',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'status' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Roelab\\GusBundle\\Controller\\DefaultController::statusAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/status',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'webstatus' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Roelab\\GusBundle\\Controller\\DefaultController::webstatusAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/webstatus',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'emailstatus' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Roelab\\GusBundle\\Controller\\DefaultController::emailstatusAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/emailstatus',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'dlpstatus' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Roelab\\GusBundle\\Controller\\DefaultController::dlpstatusAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/dlpstatus',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'settings' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Roelab\\GusBundle\\Controller\\DefaultController::settingsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/settings',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'general' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Roelab\\GusBundle\\Controller\\DefaultController::generalAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/general',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'editgeneral' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Roelab\\GusBundle\\Controller\\DefaultController::editgeneralAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/editgeneral',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ipaddresses' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Roelab\\GusBundle\\Controller\\DefaultController::ipaddressesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ipaddresses',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'deleteip' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Roelab\\GusBundle\\Controller\\DefaultController::deleteipAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/deleteip',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'editip' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Roelab\\GusBundle\\Controller\\DefaultController::editipAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/editip',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'clients' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Roelab\\GusBundle\\Controller\\DefaultController::clientsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/clients',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'deleteclient' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Roelab\\GusBundle\\Controller\\DefaultController::deleteclientAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/deleteclient',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'editclient' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Roelab\\GusBundle\\Controller\\DefaultController::editclientAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/editclient',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
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
