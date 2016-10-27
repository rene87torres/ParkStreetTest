<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
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
