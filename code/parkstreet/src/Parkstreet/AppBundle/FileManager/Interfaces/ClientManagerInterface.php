<?php
/**
 * Author: Rene Torres
 */

namespace Parkstreet\AppBundle\FileManager\Interfaces;

/**
 * Interface ClientManagerInterface
 * @package Parkstreet\AppBundle\FileManager\Interfaces
 */
interface ClientManagerInterface
{
    /**
     * Return the set of clients filetered
     * @param $offset
     * @param $limit
     * @return mixed
     */
    public function getAllFiltered($offset, $limit);
    
    /**
     * Return the set of clients
     * @return mixed
     */
    public function getAll();

    /**
     * Return the client filtered by id
     * @param $id
     * @return mixed
     */
    public function getById($id);

    /**
     * Add/Update the client
     * @param array $data
     * @return mixed
     */
    public function save(array $data);

    /**
     * Remove the client
     * @param $clientId
     * @return mixed
     */
    public function delete($clientId);
}