<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appDevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_bar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchBarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search_bar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_purge' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:purgeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/purge',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_info' => array (  0 =>   array (    0 => 'about',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:infoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'about',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler/info',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_router' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.router:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/router',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception_css' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:cssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception.css',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_twig_error_test' => array (  0 =>   array (    0 => 'code',    1 => '_format',  ),  1 =>   array (    '_controller' => 'twig.controller.preview_error:previewErrorPageAction',    '_format' => 'html',  ),  2 =>   array (    'code' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'code',    ),    2 =>     array (      0 => 'text',      1 => '/_error',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'htm_fournisseur_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'HTM\\FournisseurBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/fournisseur',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'htm_fournisseur_notification_affiche' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'HTM\\FournisseurBundle\\Controller\\NotificationController::afficheAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/fournisseur/notification',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'htm_fournisseur_produitfournisseur' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'HTM\\FournisseurBundle\\Controller\\NotificationController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/fournisseur/produitfournisseur',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'htm_magasinier_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'HTM\\MagasinierBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/magasinier',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'htm_magasinier_produitenstock' => array (  0 =>   array (    0 => 'categorie',  ),  1 =>   array (    '_controller' => 'HTM\\MagasinierBundle\\Controller\\ProduitEnStockController::indexAction',    'categorie' => NULL,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'categorie',    ),    1 =>     array (      0 => 'text',      1 => '/magasinier/produitenstock',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'htm_user_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'HTM\\UserBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'HTM\\UserBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'magasinier_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'HTM\\UserBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/magasinier/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fournisseur_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'HTM\\UserBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/fournisseur/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_check' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'HTM\\UserBundle\\Controller\\SecurityController::checkAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/login_check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'magasinier_check' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'HTM\\UserBundle\\Controller\\SecurityController::checkAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/magasinier/login_check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fournisseur_check' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'HTM\\UserBundle\\Controller\\SecurityController::checkAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/fournisseur/login_check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FosUserUserBundle:Security:logout',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'produit_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'HTM\\StockBundle\\Controller\\ProduitController::indexAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/produit/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'produit_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'HTM\\StockBundle\\Controller\\ProduitController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/produit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'produit_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'HTM\\StockBundle\\Controller\\ProduitController::newAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/produit/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'produit_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'HTM\\StockBundle\\Controller\\ProduitController::editAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/produit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'produit_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'HTM\\StockBundle\\Controller\\ProduitController::deleteAction',  ),  2 =>   array (    '_method' => 'DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/produit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pointdevente_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'HTM\\StockBundle\\Controller\\PointDeVenteController::indexAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/pointdevente/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pointdevente_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'HTM\\StockBundle\\Controller\\PointDeVenteController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/pointdevente',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pointdevente_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'HTM\\StockBundle\\Controller\\PointDeVenteController::newAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/pointdevente/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pointdevente_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'HTM\\StockBundle\\Controller\\PointDeVenteController::editAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/pointdevente',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pointdevente_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'HTM\\StockBundle\\Controller\\PointDeVenteController::deleteAction',  ),  2 =>   array (    '_method' => 'DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/pointdevente',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'magasinier_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'HTM\\StockBundle\\Controller\\MagasinierController::indexAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/magasinier/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'magasinier_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'HTM\\StockBundle\\Controller\\MagasinierController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/magasinier',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'magasinier_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'HTM\\StockBundle\\Controller\\MagasinierController::newAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/magasinier/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'magasinier_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'HTM\\StockBundle\\Controller\\MagasinierController::editAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/magasinier',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'magasinier_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'HTM\\StockBundle\\Controller\\MagasinierController::deleteAction',  ),  2 =>   array (    '_method' => 'DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/magasinier',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fournisseur_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'HTM\\StockBundle\\Controller\\FournisseurController::indexAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/fournisseur/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fournisseur_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'HTM\\StockBundle\\Controller\\FournisseurController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/fournisseur',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fournisseur_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'HTM\\StockBundle\\Controller\\FournisseurController::newAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/fournisseur/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fournisseur_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'HTM\\StockBundle\\Controller\\FournisseurController::editAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/fournisseur',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fournisseur_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'HTM\\StockBundle\\Controller\\FournisseurController::deleteAction',  ),  2 =>   array (    '_method' => 'DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/fournisseur',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'categorie_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'HTM\\StockBundle\\Controller\\CategorieController::indexAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/categorie/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'categorie_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'HTM\\StockBundle\\Controller\\CategorieController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/categorie',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'categorie_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'HTM\\StockBundle\\Controller\\CategorieController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/categorie/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'categorie_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'HTM\\StockBundle\\Controller\\CategorieController::createAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/categorie/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'categorie_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'HTM\\StockBundle\\Controller\\CategorieController::editAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/categorie',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'categorie_deletee' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'HTM\\StockBundle\\Controller\\CategorieController::deleteeAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/deletee',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/categorie',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'salepointproduct_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'HTM\\StockBundle\\Controller\\SalePointProductController::indexAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/salepointproduct/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'salepointproduct_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'HTM\\StockBundle\\Controller\\SalePointProductController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/salepointproduct',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'salepointproduct_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'HTM\\StockBundle\\Controller\\SalePointProductController::newAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/salepointproduct/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'salepointproduct_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'HTM\\StockBundle\\Controller\\SalePointProductController::editAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/salepointproduct',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'salepointproduct_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'HTM\\StockBundle\\Controller\\SalePointProductController::deleteAction',  ),  2 =>   array (    '_method' => 'DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/salepointproduct',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'htm_stock' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'HTM\\StockBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'htm_stock_rechercheProduit' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'HTM\\StockBundle\\Controller\\ProduitController::rechercheTraitementAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/recherche',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'htm_stock_stockglobale' => array (  0 =>   array (    0 => 'categorie',  ),  1 =>   array (    '_controller' => 'HTM\\StockBundle\\Controller\\ProduitEnStockController::indexAction',    'categorie' => NULL,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'categorie',    ),    1 =>     array (      0 => 'text',      1 => '/admin/stockglobale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'htm_stock_Facture_ajout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'HTM\\StockBundle\\Controller\\FactureController::ajoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/facture/ajout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'htm_stock_Facture' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'HTM\\StockBundle\\Controller\\FactureController::afficheAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/facture',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'htm_stock_Facture_modif' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'HTM\\StockBundle\\Controller\\FactureController::modifierAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/facture/modif',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'htm_stock_Facture_supp' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'HTM\\StockBundle\\Controller\\FactureController::supprimerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/facture/supp',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'htm_stock_choisir_langue' => array (  0 =>   array (    0 => 'langue',  ),  1 =>   array (    '_controller' => 'HTM\\StockBundle\\Controller\\DefaultController::choisirLangueAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'langue',    ),    1 =>     array (      0 => 'text',      1 => '/choisir-langue',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'HTM\\UserBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_check' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'HTM\\UserBundle\\Controller\\SecurityController::checkAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'HTM\\UserBundle\\Controller\\SecurityController::logoutAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_profile_show' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_profile_edit' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_register' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/check-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_confirm' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/register/confirm',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_confirmed' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/confirmed',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_request' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/request',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_send_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/send-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/check-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_reset' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/resetting/reset',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_change_password' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/change-password',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'produit_en_stock' => array (  0 =>   array (  ),  1 =>   array (    'categorie' => NULL,    'page' => 1,    '_controller' => 'HTM\\MagasinierBundle\\Controller\\ProduitEnStockController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/magasinier/produitEnStock',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'supply' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'HTM\\MagasinierBundle\\Controller\\ProduitEnStockController::SupplyAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/magasinier/supply',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'supply_list' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'HTM\\MagasinierBundle\\Controller\\ProduitEnStockController::SupplyListAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/magasinier/supply_list',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'make_new_supply' => array (  0 =>   array (    0 => 'idProduit',    1 => 'iduser',  ),  1 =>   array (    '_controller' => 'HTM\\MagasinierBundle\\Controller\\ProduitEnStockController::SupplyNewAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'iduser',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idProduit',    ),    2 =>     array (      0 => 'text',      1 => '/magasinier/supply/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'list_supply_sortie' => array (  0 =>   array (    0 => 'idPoint',  ),  1 =>   array (    '_controller' => 'HTM\\MagasinierBundle\\Controller\\ProduitEnStockController::SupplyIndexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idPoint',    ),    1 =>     array (      0 => 'text',      1 => '/magasinier/sortie',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'list_supply_entre' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'HTM\\MagasinierBundle\\Controller\\ProduitEnStockController::SupplySortieIndexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/magasinier/entre',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'change-statut' => array (  0 =>   array (    0 => 'id',    1 => 'statut',  ),  1 =>   array (    '_controller' => 'HTM\\MagasinierBundle\\Controller\\ProduitEnStockController::changeStatutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'statut',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/magasinier/change-statut',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'stock_globale' => array (  0 =>   array (  ),  1 =>   array (    'categorie' => NULL,    'page' => 1,    '_controller' => 'HTM\\StockBundle\\Controller\\ProduitEnStockController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/StockGlobale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_list_supply_entre' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'HTM\\StockBundle\\Controller\\ProduitEnStockController::SupplySortieIndexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/entre',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_change_statut' => array (  0 =>   array (    0 => 'id',    1 => 'statut',  ),  1 =>   array (    '_controller' => 'HTM\\StockBundle\\Controller\\ProduitEnStockController::changeStatutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'statut',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/change-statut',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'produitfournisseur_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'HTM\\StockBundle\\Controller\\ProduitFournisseurController::indexAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/produitfournisseur/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'produitfournisseur_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'HTM\\StockBundle\\Controller\\ProduitFournisseurController::newAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/produitfournisseur/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'produitfournisseur_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'HTM\\StockBundle\\Controller\\ProduitFournisseurController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/produitfournisseur',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'produitfournisseur_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'HTM\\StockBundle\\Controller\\ProduitFournisseurController::editAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/produitfournisseur',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'produitfournisseur_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'HTM\\StockBundle\\Controller\\ProduitFournisseurController::deleteAction',  ),  2 =>   array (    '_method' => 'DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/produitfournisseur',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
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