<?php
/**
 * Author: Rene Torres
 */

namespace Parkstreet\AppBundle\FileManager;

use Parkstreet\AppBundle\FileManager\Interfaces\ProductManagerInterface;
use Parkstreet\AppBundle\Entity\Product;

/**
 * Class ProductManager
 * @package Parkstreet\AppBundle\FileManager
 */
class ProductManager extends BaseManager implements ProductManagerInterface
{
    /**
     * Set the repository class
     * @return mixed
     */
    public function initRepository()
    {
        $this->repository = $this->em->getRepository("ParkstreetAppBundle:Product");
    }

    /**
     * Return the set of products
     * @param array $ofset
     * @param array $limit
     * @return mixed
     */
    public function getAll($ofset, $limit)
    {
        return $this->getRepository()->retrieveAll($ofset, $limit);
    }
    
    /**
     * Return the set of products filtered by client id
     * @param array $clientId
     * @return mixed
     */
    public function getAllByClient($clientId)
    {
        return $this->getRepository()->retrieveAllByClient($clientId);
    }

    /**
     * Return the product filtered by id
     * @param $id
     * @return mixed
     */
    public function getById($id)
    {
        return $this->getRepository()->retrieveById($id);
    }

    /**
     * Add/Update the product
     * @param array $data
     * @return mixed
     */
    public function save(array $data)
    {
        try {
            $product = $data['action'] == parent::ADD ? new Product() : $this->repository->find($data['id']);
            $product->setDescription($data['description']);
            $product->setClient($this->em->getRepository("ParkstreetAppBundle:Client")->find($data['client_id']));
                 
            if ($data['action'] == parent::ADD) {
                $this->em->persist($product);
            }

            $this->em->flush();

            return array('status' => 200, 'msg' => $data['action'] == parent::ADD ? "The product was added successfully!" : "The product was updated successfully!");

        } catch (\Exception $exc) {
            return array('status' => 200, 'msg' => "An error occurred when trying to save the product: " . $exc->getMessage());
        }
    }

    /**
     * Delete the product
     * @param $id
     * @return mixed
     */
    public function delete($id)
    {
        try {
            $product = $this->repository->find($id);

            $this->em->remove($product);
            $this->em->flush();
            
            return array('status' => 200, 'msg' => "The Product was deleted successfully!");
        } catch (\Exception $exc) {
            return array('status' => 500, 'error' => "An error occurred while trying to delete the product: " . $exc->getMessage());
        }
    }
}