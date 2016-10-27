<?php
/**
 * Author: Rene Torres
 */

namespace Parkstreet\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class IndexController
 * @package Parkstreet\AppBundle\Controller
 */
class IndexController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        return $this->render("ParkstreetAppBundle:Index:index.html.twig");
    }    
}
