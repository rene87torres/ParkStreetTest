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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // render_client
        if ($pathinfo === '/render-client') {
            return array (  '_controller' => 'Parkstreet\\AppBundle\\Controller\\ClientController::renderClientAction',  '_route' => 'render_client',);
        }

        // list_clients
        if (0 === strpos($pathinfo, '/list-clients') && preg_match('#^/list\\-clients(?:/(?P<offset>[^/]+)(?:(?P<limit>[^/]++))?)?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'list_clients')), array (  'offset' => 0,  'limit' => 10,  '_controller' => 'Parkstreet\\AppBundle\\Controller\\ClientController::loadAllAction',));
        }

        // create_client
        if ($pathinfo === '/create-client') {
            return array (  '_controller' => 'Parkstreet\\AppBundle\\Controller\\ClientController::createAction',  '_route' => 'create_client',);
        }

        // update_client
        if ($pathinfo === '/update-client') {
            return array (  '_controller' => 'Parkstreet\\AppBundle\\Controller\\ClientController::updateAction',  '_route' => 'update_client',);
        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'Parkstreet\\AppBundle\\Controller\\IndexController::indexAction',  '_route' => 'homepage',);
        }

        // render_invoice
        if ($pathinfo === '/render-invoice') {
            return array (  '_controller' => 'Parkstreet\\AppBundle\\Controller\\InvoiceController::renderInvoiceAction',  '_route' => 'render_invoice',);
        }

        // list_invoices
        if (0 === strpos($pathinfo, '/list-invoices') && preg_match('#^/list\\-invoices(?:/(?P<offset>[^/]+)(?:(?P<limit>[^/]++))?)?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'list_invoices')), array (  'offset' => 0,  'limit' => 10,  '_controller' => 'Parkstreet\\AppBundle\\Controller\\InvoiceController::loadAllAction',));
        }

        // create_invoice
        if ($pathinfo === '/create-invoice') {
            return array (  '_controller' => 'Parkstreet\\AppBundle\\Controller\\InvoiceController::createAction',  '_route' => 'create_invoice',);
        }

        // update_invoice
        if ($pathinfo === '/update-invoice') {
            return array (  '_controller' => 'Parkstreet\\AppBundle\\Controller\\InvoiceController::updateAction',  '_route' => 'update_invoice',);
        }

        // render_product
        if ($pathinfo === '/render-product') {
            return array (  '_controller' => 'Parkstreet\\AppBundle\\Controller\\ProductController::renderProductAction',  '_route' => 'render_product',);
        }

        if (0 === strpos($pathinfo, '/l')) {
            // list_products
            if (0 === strpos($pathinfo, '/list-products') && preg_match('#^/list\\-products(?:/(?P<offset>[^/]+)(?:(?P<limit>[^/]++))?)?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'list_products')), array (  'offset' => 0,  'limit' => 10,  '_controller' => 'Parkstreet\\AppBundle\\Controller\\ProductController::loadAllAction',));
            }

            // load_products_by_client
            if (0 === strpos($pathinfo, '/load-products-by-client') && preg_match('#^/load\\-products\\-by\\-client/(?P<clientId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'load_products_by_client')), array (  '_controller' => 'Parkstreet\\AppBundle\\Controller\\ProductController::loadAllByProductAction',));
            }

        }

        // create_product
        if ($pathinfo === '/create-product') {
            return array (  '_controller' => 'Parkstreet\\AppBundle\\Controller\\ProductController::createAction',  '_route' => 'create_product',);
        }

        // update_product
        if ($pathinfo === '/update-product') {
            return array (  '_controller' => 'Parkstreet\\AppBundle\\Controller\\ProductController::updateAction',  '_route' => 'update_product',);
        }

        // delete_invoice
        if (0 === strpos($pathinfo, '/delete-product') && preg_match('#^/delete\\-product/(?P<productId>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_invoice')), array (  '_controller' => 'Parkstreet\\AppBundle\\Controller\\ProductController::deleteAction',));
        }

        // fos_js_routing_js
        if (0 === strpos($pathinfo, '/js/routing') && preg_match('#^/js/routing(?:\\.(?P<_format>js|json))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_js_routing_js')), array (  '_controller' => 'fos_js_routing.controller:indexAction',  '_format' => 'js',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
