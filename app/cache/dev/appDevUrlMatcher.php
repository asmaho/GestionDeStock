<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
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

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/fournisseur')) {
            // htm_fournisseur_homepage
            if ($pathinfo === '/fournisseur') {
                return array (  '_controller' => 'HTM\\FournisseurBundle\\Controller\\DefaultController::indexAction',  '_route' => 'htm_fournisseur_homepage',);
            }

            // htm_fournisseur_notification_affiche
            if ($pathinfo === '/fournisseur/notification') {
                return array (  '_controller' => 'HTM\\FournisseurBundle\\Controller\\NotificationController::afficheAction',  '_route' => 'htm_fournisseur_notification_affiche',);
            }

            // htm_fournisseur_produitfournisseur
            if ($pathinfo === '/fournisseur/produitfournisseur') {
                return array (  '_controller' => 'HTM\\FournisseurBundle\\Controller\\NotificationController::indexAction',  '_route' => 'htm_fournisseur_produitfournisseur',);
            }

        }

        if (0 === strpos($pathinfo, '/magasinier')) {
            // htm_magasinier_homepage
            if ($pathinfo === '/magasinier') {
                return array (  '_controller' => 'HTM\\MagasinierBundle\\Controller\\DefaultController::indexAction',  '_route' => 'htm_magasinier_homepage',);
            }

            // htm_magasinier_produitenstock
            if (0 === strpos($pathinfo, '/magasinier/produitenstock') && preg_match('#^/magasinier/produitenstock(?:/(?P<categorie>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'htm_magasinier_produitenstock')), array (  '_controller' => 'HTM\\MagasinierBundle\\Controller\\ProduitEnStockController::indexAction',  'categorie' => NULL,));
            }

        }

        // htm_user_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'htm_user_homepage');
            }

            return array (  '_controller' => 'HTM\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'htm_user_homepage',);
        }

        // admin_login
        if ($pathinfo === '/admin/login') {
            return array (  '_controller' => 'HTM\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'admin_login',);
        }

        // magasinier_login
        if ($pathinfo === '/magasinier/login') {
            return array (  '_controller' => 'HTM\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'magasinier_login',);
        }

        // fournisseur_login
        if ($pathinfo === '/fournisseur/login') {
            return array (  '_controller' => 'HTM\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fournisseur_login',);
        }

        // admin_check
        if ($pathinfo === '/admin/login_check') {
            return array (  '_controller' => 'HTM\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'admin_check',);
        }

        // magasinier_check
        if ($pathinfo === '/magasinier/login_check') {
            return array (  '_controller' => 'HTM\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'magasinier_check',);
        }

        // fournisseur_check
        if ($pathinfo === '/fournisseur/login_check') {
            return array (  '_controller' => 'HTM\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fournisseur_check',);
        }

        if (0 === strpos($pathinfo, '/admin')) {
            // admin_logout
            if ($pathinfo === '/admin/logout') {
                return array (  '_controller' => 'FosUserUserBundle:Security:logout',  '_route' => 'admin_logout',);
            }

            if (0 === strpos($pathinfo, '/admin/p')) {
                if (0 === strpos($pathinfo, '/admin/produit')) {
                    // produit_index
                    if (rtrim($pathinfo, '/') === '/admin/produit') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_produit_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'produit_index');
                        }

                        return array (  '_controller' => 'HTM\\StockBundle\\Controller\\ProduitController::indexAction',  '_route' => 'produit_index',);
                    }
                    not_produit_index:

                    // produit_show
                    if (preg_match('#^/admin/produit/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_produit_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'produit_show')), array (  '_controller' => 'HTM\\StockBundle\\Controller\\ProduitController::showAction',));
                    }
                    not_produit_show:

                    // produit_new
                    if ($pathinfo === '/admin/produit/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_produit_new;
                        }

                        return array (  '_controller' => 'HTM\\StockBundle\\Controller\\ProduitController::newAction',  '_route' => 'produit_new',);
                    }
                    not_produit_new:

                    // produit_edit
                    if (preg_match('#^/admin/produit/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_produit_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'produit_edit')), array (  '_controller' => 'HTM\\StockBundle\\Controller\\ProduitController::editAction',));
                    }
                    not_produit_edit:

                    // produit_delete
                    if (preg_match('#^/admin/produit/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_produit_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'produit_delete')), array (  '_controller' => 'HTM\\StockBundle\\Controller\\ProduitController::deleteAction',));
                    }
                    not_produit_delete:

                }

                if (0 === strpos($pathinfo, '/admin/pointdevente')) {
                    // pointdevente_index
                    if (rtrim($pathinfo, '/') === '/admin/pointdevente') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_pointdevente_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'pointdevente_index');
                        }

                        return array (  '_controller' => 'HTM\\StockBundle\\Controller\\PointDeVenteController::indexAction',  '_route' => 'pointdevente_index',);
                    }
                    not_pointdevente_index:

                    // pointdevente_show
                    if (preg_match('#^/admin/pointdevente/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_pointdevente_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pointdevente_show')), array (  '_controller' => 'HTM\\StockBundle\\Controller\\PointDeVenteController::showAction',));
                    }
                    not_pointdevente_show:

                    // pointdevente_new
                    if ($pathinfo === '/admin/pointdevente/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_pointdevente_new;
                        }

                        return array (  '_controller' => 'HTM\\StockBundle\\Controller\\PointDeVenteController::newAction',  '_route' => 'pointdevente_new',);
                    }
                    not_pointdevente_new:

                    // pointdevente_edit
                    if (preg_match('#^/admin/pointdevente/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_pointdevente_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pointdevente_edit')), array (  '_controller' => 'HTM\\StockBundle\\Controller\\PointDeVenteController::editAction',));
                    }
                    not_pointdevente_edit:

                    // pointdevente_delete
                    if (preg_match('#^/admin/pointdevente/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_pointdevente_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pointdevente_delete')), array (  '_controller' => 'HTM\\StockBundle\\Controller\\PointDeVenteController::deleteAction',));
                    }
                    not_pointdevente_delete:

                }

            }

            if (0 === strpos($pathinfo, '/admin/magasinier')) {
                // magasinier_index
                if (rtrim($pathinfo, '/') === '/admin/magasinier') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_magasinier_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'magasinier_index');
                    }

                    return array (  '_controller' => 'HTM\\StockBundle\\Controller\\MagasinierController::indexAction',  '_route' => 'magasinier_index',);
                }
                not_magasinier_index:

                // magasinier_show
                if (preg_match('#^/admin/magasinier/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_magasinier_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'magasinier_show')), array (  '_controller' => 'HTM\\StockBundle\\Controller\\MagasinierController::showAction',));
                }
                not_magasinier_show:

                // magasinier_new
                if ($pathinfo === '/admin/magasinier/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_magasinier_new;
                    }

                    return array (  '_controller' => 'HTM\\StockBundle\\Controller\\MagasinierController::newAction',  '_route' => 'magasinier_new',);
                }
                not_magasinier_new:

                // magasinier_edit
                if (preg_match('#^/admin/magasinier/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_magasinier_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'magasinier_edit')), array (  '_controller' => 'HTM\\StockBundle\\Controller\\MagasinierController::editAction',));
                }
                not_magasinier_edit:

                // magasinier_delete
                if (preg_match('#^/admin/magasinier/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_magasinier_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'magasinier_delete')), array (  '_controller' => 'HTM\\StockBundle\\Controller\\MagasinierController::deleteAction',));
                }
                not_magasinier_delete:

            }

            if (0 === strpos($pathinfo, '/admin/fournisseur')) {
                // fournisseur_index
                if (rtrim($pathinfo, '/') === '/admin/fournisseur') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fournisseur_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fournisseur_index');
                    }

                    return array (  '_controller' => 'HTM\\StockBundle\\Controller\\FournisseurController::indexAction',  '_route' => 'fournisseur_index',);
                }
                not_fournisseur_index:

                // fournisseur_show
                if (preg_match('#^/admin/fournisseur/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fournisseur_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fournisseur_show')), array (  '_controller' => 'HTM\\StockBundle\\Controller\\FournisseurController::showAction',));
                }
                not_fournisseur_show:

                // fournisseur_new
                if ($pathinfo === '/admin/fournisseur/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fournisseur_new;
                    }

                    return array (  '_controller' => 'HTM\\StockBundle\\Controller\\FournisseurController::newAction',  '_route' => 'fournisseur_new',);
                }
                not_fournisseur_new:

                // fournisseur_edit
                if (preg_match('#^/admin/fournisseur/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fournisseur_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fournisseur_edit')), array (  '_controller' => 'HTM\\StockBundle\\Controller\\FournisseurController::editAction',));
                }
                not_fournisseur_edit:

                // fournisseur_delete
                if (preg_match('#^/admin/fournisseur/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_fournisseur_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fournisseur_delete')), array (  '_controller' => 'HTM\\StockBundle\\Controller\\FournisseurController::deleteAction',));
                }
                not_fournisseur_delete:

            }

            if (0 === strpos($pathinfo, '/admin/categorie')) {
                // categorie_index
                if (rtrim($pathinfo, '/') === '/admin/categorie') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_categorie_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'categorie_index');
                    }

                    return array (  '_controller' => 'HTM\\StockBundle\\Controller\\CategorieController::indexAction',  '_route' => 'categorie_index',);
                }
                not_categorie_index:

                // categorie_show
                if (preg_match('#^/admin/categorie/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_categorie_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorie_show')), array (  '_controller' => 'HTM\\StockBundle\\Controller\\CategorieController::showAction',));
                }
                not_categorie_show:

                // categorie_new
                if ($pathinfo === '/admin/categorie/new') {
                    return array (  '_controller' => 'HTM\\StockBundle\\Controller\\CategorieController::newAction',  '_route' => 'categorie_new',);
                }

                // categorie_create
                if ($pathinfo === '/admin/categorie/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_categorie_create;
                    }

                    return array (  '_controller' => 'HTM\\StockBundle\\Controller\\CategorieController::createAction',  '_route' => 'categorie_create',);
                }
                not_categorie_create:

                // categorie_edit
                if (preg_match('#^/admin/categorie/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_categorie_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorie_edit')), array (  '_controller' => 'HTM\\StockBundle\\Controller\\CategorieController::editAction',));
                }
                not_categorie_edit:

                // categorie_deletee
                if (preg_match('#^/admin/categorie/(?P<id>[^/]++)/deletee$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_categorie_deletee;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorie_deletee')), array (  '_controller' => 'HTM\\StockBundle\\Controller\\CategorieController::deleteeAction',));
                }
                not_categorie_deletee:

            }

            if (0 === strpos($pathinfo, '/admin/salepointproduct')) {
                // salepointproduct_index
                if (rtrim($pathinfo, '/') === '/admin/salepointproduct') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_salepointproduct_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'salepointproduct_index');
                    }

                    return array (  '_controller' => 'HTM\\StockBundle\\Controller\\SalePointProductController::indexAction',  '_route' => 'salepointproduct_index',);
                }
                not_salepointproduct_index:

                // salepointproduct_show
                if (preg_match('#^/admin/salepointproduct/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_salepointproduct_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'salepointproduct_show')), array (  '_controller' => 'HTM\\StockBundle\\Controller\\SalePointProductController::showAction',));
                }
                not_salepointproduct_show:

                // salepointproduct_new
                if ($pathinfo === '/admin/salepointproduct/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_salepointproduct_new;
                    }

                    return array (  '_controller' => 'HTM\\StockBundle\\Controller\\SalePointProductController::newAction',  '_route' => 'salepointproduct_new',);
                }
                not_salepointproduct_new:

                // salepointproduct_edit
                if (preg_match('#^/admin/salepointproduct/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_salepointproduct_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'salepointproduct_edit')), array (  '_controller' => 'HTM\\StockBundle\\Controller\\SalePointProductController::editAction',));
                }
                not_salepointproduct_edit:

                // salepointproduct_delete
                if (preg_match('#^/admin/salepointproduct/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_salepointproduct_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'salepointproduct_delete')), array (  '_controller' => 'HTM\\StockBundle\\Controller\\SalePointProductController::deleteAction',));
                }
                not_salepointproduct_delete:

            }

            // htm_stock
            if ($pathinfo === '/admin') {
                return array (  '_controller' => 'HTM\\StockBundle\\Controller\\DefaultController::indexAction',  '_route' => 'htm_stock',);
            }

            // htm_stock_rechercheProduit
            if ($pathinfo === '/admin/recherche') {
                return array (  '_controller' => 'HTM\\StockBundle\\Controller\\ProduitController::rechercheTraitementAction',  '_route' => 'htm_stock_rechercheProduit',);
            }

            // htm_stock_stockglobale
            if (0 === strpos($pathinfo, '/admin/stockglobale') && preg_match('#^/admin/stockglobale(?:/(?P<categorie>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'htm_stock_stockglobale')), array (  '_controller' => 'HTM\\StockBundle\\Controller\\ProduitEnStockController::indexAction',  'categorie' => NULL,));
            }

            if (0 === strpos($pathinfo, '/admin/facture')) {
                // htm_stock_Facture_ajout
                if ($pathinfo === '/admin/facture/ajout') {
                    return array (  '_controller' => 'HTM\\StockBundle\\Controller\\FactureController::ajoutAction',  '_route' => 'htm_stock_Facture_ajout',);
                }

                // htm_stock_Facture
                if ($pathinfo === '/admin/facture') {
                    return array (  '_controller' => 'HTM\\StockBundle\\Controller\\FactureController::afficheAction',  '_route' => 'htm_stock_Facture',);
                }

                // htm_stock_Facture_modif
                if (0 === strpos($pathinfo, '/admin/facture/modif') && preg_match('#^/admin/facture/modif/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'htm_stock_Facture_modif')), array (  '_controller' => 'HTM\\StockBundle\\Controller\\FactureController::modifierAction',));
                }

                // htm_stock_Facture_supp
                if (0 === strpos($pathinfo, '/admin/facture/supp') && preg_match('#^/admin/facture/supp/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'htm_stock_Facture_supp')), array (  '_controller' => 'HTM\\StockBundle\\Controller\\FactureController::supprimerAction',));
                }

            }

        }

        // htm_stock_choisir_langue
        if (0 === strpos($pathinfo, '/choisir-langue') && preg_match('#^/choisir\\-langue/(?P<langue>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'htm_stock_choisir_langue')), array (  '_controller' => 'HTM\\StockBundle\\Controller\\DefaultController::choisirLangueAction',));
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'HTM\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'HTM\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'HTM\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        if (0 === strpos($pathinfo, '/magasinier')) {
            // produit_en_stock
            if ($pathinfo === '/magasinier/produitEnStock') {
                return array (  'categorie' => NULL,  'page' => 1,  '_controller' => 'HTM\\MagasinierBundle\\Controller\\ProduitEnStockController::indexAction',  '_route' => 'produit_en_stock',);
            }

            if (0 === strpos($pathinfo, '/magasinier/s')) {
                if (0 === strpos($pathinfo, '/magasinier/supply')) {
                    // supply
                    if ($pathinfo === '/magasinier/supply') {
                        return array (  '_controller' => 'HTM\\MagasinierBundle\\Controller\\ProduitEnStockController::SupplyAction',  '_route' => 'supply',);
                    }

                    // supply_list
                    if ($pathinfo === '/magasinier/supply_list') {
                        return array (  '_controller' => 'HTM\\MagasinierBundle\\Controller\\ProduitEnStockController::SupplyListAction',  '_route' => 'supply_list',);
                    }

                    // make_new_supply
                    if (0 === strpos($pathinfo, '/magasinier/supply/new') && preg_match('#^/magasinier/supply/new/(?P<idProduit>[^/]++)/(?P<iduser>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'make_new_supply')), array (  '_controller' => 'HTM\\MagasinierBundle\\Controller\\ProduitEnStockController::SupplyNewAction',));
                    }

                }

                // list_supply_sortie
                if (0 === strpos($pathinfo, '/magasinier/sortie') && preg_match('#^/magasinier/sortie/(?P<idPoint>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'list_supply_sortie')), array (  '_controller' => 'HTM\\MagasinierBundle\\Controller\\ProduitEnStockController::SupplyIndexAction',));
                }

            }

            // list_supply_entre
            if ($pathinfo === '/magasinier/entre') {
                return array (  '_controller' => 'HTM\\MagasinierBundle\\Controller\\ProduitEnStockController::SupplySortieIndexAction',  '_route' => 'list_supply_entre',);
            }

            // change-statut
            if (0 === strpos($pathinfo, '/magasinier/change-statut') && preg_match('#^/magasinier/change\\-statut/(?P<id>[^/]++)/(?P<statut>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'change-statut')), array (  '_controller' => 'HTM\\MagasinierBundle\\Controller\\ProduitEnStockController::changeStatutAction',));
            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            // stock_globale
            if ($pathinfo === '/admin/StockGlobale') {
                return array (  'categorie' => NULL,  'page' => 1,  '_controller' => 'HTM\\StockBundle\\Controller\\ProduitEnStockController::indexAction',  '_route' => 'stock_globale',);
            }

            // admin_list_supply_entre
            if ($pathinfo === '/admin/entre') {
                return array (  '_controller' => 'HTM\\StockBundle\\Controller\\ProduitEnStockController::SupplySortieIndexAction',  '_route' => 'admin_list_supply_entre',);
            }

            // admin_change_statut
            if (0 === strpos($pathinfo, '/admin/change-statut') && preg_match('#^/admin/change\\-statut/(?P<id>[^/]++)/(?P<statut>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_change_statut')), array (  '_controller' => 'HTM\\StockBundle\\Controller\\ProduitEnStockController::changeStatutAction',));
            }

            if (0 === strpos($pathinfo, '/admin/produitfournisseur')) {
                // produitfournisseur_index
                if (rtrim($pathinfo, '/') === '/admin/produitfournisseur') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_produitfournisseur_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'produitfournisseur_index');
                    }

                    return array (  '_controller' => 'HTM\\StockBundle\\Controller\\ProduitFournisseurController::indexAction',  '_route' => 'produitfournisseur_index',);
                }
                not_produitfournisseur_index:

                // produitfournisseur_new
                if ($pathinfo === '/admin/produitfournisseur/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_produitfournisseur_new;
                    }

                    return array (  '_controller' => 'HTM\\StockBundle\\Controller\\ProduitFournisseurController::newAction',  '_route' => 'produitfournisseur_new',);
                }
                not_produitfournisseur_new:

                // produitfournisseur_show
                if (preg_match('#^/admin/produitfournisseur/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_produitfournisseur_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'produitfournisseur_show')), array (  '_controller' => 'HTM\\StockBundle\\Controller\\ProduitFournisseurController::showAction',));
                }
                not_produitfournisseur_show:

                // produitfournisseur_edit
                if (preg_match('#^/admin/produitfournisseur/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_produitfournisseur_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'produitfournisseur_edit')), array (  '_controller' => 'HTM\\StockBundle\\Controller\\ProduitFournisseurController::editAction',));
                }
                not_produitfournisseur_edit:

                // produitfournisseur_delete
                if (preg_match('#^/admin/produitfournisseur/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_produitfournisseur_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'produitfournisseur_delete')), array (  '_controller' => 'HTM\\StockBundle\\Controller\\ProduitFournisseurController::deleteAction',));
                }
                not_produitfournisseur_delete:

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
