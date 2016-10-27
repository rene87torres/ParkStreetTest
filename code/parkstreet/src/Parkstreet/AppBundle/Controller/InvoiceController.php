<?php
/**
 * Author: Rene Torres
 */

namespace Parkstreet\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Resquest;

/**
 * Class InvoiceController
 * @package Parkstreet\AppBundle\Controller
 */
class InvoiceController extends Controller
{
	/**
     * @Route("/render-invoice", 
     * options = { "expose" = true }, 
     * name = "render_invoice")
     */
    public function renderInvoiceAction()
	{
        return $this->render("ParkstreetAppBundle:Invoice:list.html.twig");
    }
	
    /**
     * @Route("/list-invoices/{offset}{limit}", 
     * options = { "expose" = true }, 
     * defaults = { "offset" = 0, "limit" = 10 },
     * name="list_invoices")
     */
    public function loadAllAction($offset, $limit)
	{
		$params = array(
			'offset' => $offset * $limit,
			'limit' => $limit,
			'filter' => array()
		);
		
		//Get invoices filtered by params
		$response = $this->get("parkstreet_app.invoice")->getAll($params);
		
		//Prepare data to be paginated
		$this->get("parkstreet_app.pager")->init($offset, $limit, $response['total'], $response['data']);
		$response['pager'] = $this->get("parkstreet_app.pager")->getData();
		
		//Get the clients to populate the dropdown
		$response['clients'] = $this->get("parkstreet_app.client")->getAll();
		
		//Get the dates to populate dropdown
		$response['dates'] = $this->get("parkstreet_app.date")->getDates();
	
		return new JsonResponse($response);
    }
	
	/**
     * @Route("/create-invoice", 
     * options = { "expose" = true }, 
     * name="create_invoice")
     */
	public function createAction()
	{
		
	}
	
	/**
     * @Route("/update-invoice", 
     * options = { "expose" = true }, 
     * name="update_invoice")
     */
	public function updateAction()
	{
		
	}
	
	/**
     * @Route("/delete-invoice/{invoiceId}", 
     * options = { "expose" = true }, 
     * name="delete_invoice")
     */
	public function deleteAction($invoiceId)
	{
		$response = $this->get("parkstreet_app.invoice")->delete($invoiceId);
		
		return new JsonResponse($response);
	}
}
