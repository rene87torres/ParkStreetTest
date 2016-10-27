<?php
/**
 * Author: Rene Torres
 */

namespace Parkstreet\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Class ClientController
 * @package Parkstreet\AppBundle\Controller
 */
class ClientController extends Controller
{
	/**
     * @Route("/render-client", 
     * options = { "expose" = true }, 
     * name = "render_client")
     */
    public function renderClientAction()
	{
        return $this->render("ParkstreetAppBundle:Client:list.html.twig");
    }
	
    /**
     * @Route("/list-clients/{offset}{limit}", 
     * options = { "expose" = true }, 
     * defaults = { "offset" = 0, "limit" = 10 },
     * name="list_clients")
     */
    public function loadAllAction($offset, $limit)
	{		
		$response = $this->get("parkstreet_app.client")->getAllFiltered($offset, $limit);
	
		return new JsonResponse($response);
    }
	
	/**
     * @Route("/create-client", 
     * options = { "expose" = true }, 
     * name="create_client")
     */
	public function createAction()
	{
		
	}
	
	/**
     * @Route("/update-client", 
     * options = { "expose" = true }, 
     * name="update_client")
     */
	public function updateAction()
	{
		
	}
	
	/**
     * @Route("/delete-client/{clientId}", 
     * options = { "expose" = true }, 
     * name="delete_invoice")
     */
	public function deleteAction($clientId)
	{
		$response = $this->get("parkstreet_app.client")->delete($clientId);
		
		return new JsonResponse($response);
	}
}