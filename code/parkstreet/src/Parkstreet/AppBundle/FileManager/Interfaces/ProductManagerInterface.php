<?php
/**
 * Author: Rene Torres
 */

namespace Parkstreet\AppBundle\FileManager\Interfaces;

/**
 * Interface ProductManagerInterface
 * @package Parkstreet\AppBundle\FileManager\Interfaces
 */
interface ProductManagerInterface
{
    /**
     * Return the set of products
     * @param array $ofset
     * @param array $limit
     * @return mixed
     */
    public function getAll($ofset, $limit);
    
    /**
     * Return the set of products filtered by client id
     * @param array $clientId
     * @return mixed
     */
    public function getAllByClient($clientId);

    /**
     * Return the product filtered by id
     * @param $id
     * @return mixed
     */
    public function getById($id);

    /**
     * Add/Update the product
     * @param array $data
     * @return mixed
     */
    public function save(array $data);

    /**
     * Delete the product
     * @param $id
     * @return mixed
     */
    public function delete($id);
}