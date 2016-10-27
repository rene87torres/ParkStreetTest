<?php
/**
 * Author: Rene Torres
 */

namespace Parkstreet\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Class ProductController
 * @package Parkstreet\AppBundle\Controller
 */
class ProductController extends Controller
{
	/**
     * @Route("/render-product", 
     * options = { "expose" = true }, 
     * name = "render_product")
     */
    public function renderProductAction()
	{
        return $this->render("ParkstreetAppBundle:Product:list.html.twig");
    }
	
    /**
     * @Route("/list-products/{offset}{limit}", 
     * options = { "expose" = true }, 
     * defaults = { "offset" = 0, "limit" = 10 },
     * name="list_products")
     */
    public function loadAllAction($offset, $limit)
	{		
		$response = $this->get("parkstreet_app.product")->getAll($offset, $limit);
	
		return new JsonResponse($response);
    }
	
	/**
     * @Route("/load-products-by-client/{clientId}", 
     * options = { "expose" = true }, 
     * name="load_products_by_client")
     */
    public function loadAllByProductAction($clientId)
	{		
		$response['data'] = $this->get("parkstreet_app.product")->getAllByClient($clientId);
	
		return new JsonResponse($response);
    }
	
	/**
     * @Route("/create-product", 
     * options = { "expose" = true }, 
     * name="create_product")
     */
	public function createAction()
	{
		
	}
	
	/**
     * @Route("/update-product", 
     * options = { "expose" = true }, 
     * name="update_product")
     */
	public function updateAction()
	{
		
	}
	
	/**
     * @Route("/delete-product/{productId}", 
     * options = { "expose" = true }, 
     * name="delete_invoice")
     */
	public function deleteAction($productId)
	{
		$response = $this->get("parkstreet_app.product")->delete($productId);
		
		return new JsonResponse($response);
	}
}