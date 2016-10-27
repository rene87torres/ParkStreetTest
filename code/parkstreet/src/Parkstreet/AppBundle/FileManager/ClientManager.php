<?php
/**
 * Author: Rene Torres
 */

namespace Parkstreet\AppBundle\FileManager;

use Parkstreet\AppBundle\FileManager\Interfaces\ClientManagerInterface;
use Parkstreet\AppBundle\Entity\Client;

/**
 * Class ClientManager
 * @package Parkstreet\AppBundle\FileManager
 */
class ClientManager extends BaseManager implements ClientManagerInterface
{
    /**
     * Set the repository class
     * @return mixed
     */
    public function initRepository()
    {
        $this->repository = $this->em->getRepository("ParkstreetAppBundle:Client");
    }

    /**
     * Return the set of clients filtered
     * @param $offset
     * @param $limit
     * @return mixed
     */
    public function getAllFiltered($offset, $limit)
    {
        return $this->getRepository()->retrieveAllFiltered($offset, $limit);
    }
    
    /**
     * Return the set of clients
     * @return mixed
     */
    public function getAll()
    {
        return $this->getRepository()->retrieveAll();
    }

    /**
     * Return the client filtered by id
     * @param $id
     * @return mixed
     */
    public function getById($id)
    {
        return $this->getRepository()->retrieveById($id);
    }

    /**
     * Add/Update the client
     * @param array $data
     * @return mixed
     */
    public function save(array $data)
    {
        try {
            $client = $data['action'] == parent::ADD ? new Client() : $this->repository->find($data['id']);
            $client->setName($data['name']);          
                 
            if ($data['action'] == parent::ADD) {
                $this->em->persist($client);
            }

            $this->em->flush();

            return array('status' => 200, 'msg' => $data['action'] == parent::ADD ? "The client was added successfully!" : "The invoice was client successfully!");

        } catch (\Exception $exc) {
            return array('status' => 200, 'msg' => "An error occurred when trying to save the client: " . $exc->getMessage());
        }
    }

    /**
     * Remove the client
     * @param $clientId
     * @return mixed
     */
    public function delete($clientId)
    {
        try {
            $client = $this->repository->find($id);

            $this->em->remove($client);
            $this->em->flush();

            return array('status' => 200, 'msg' => "The client was deleted successfully.");
        } catch (\Exception $exc) {
            return array('status' => 200, 'msg' => "The following error occurred while trying to remove the client: " . $exc->getMessage());
        }
    }

}