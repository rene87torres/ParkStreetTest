<?php
/**
 * Author: Rene Torres
 */

namespace Parkstreet\AppBundle\FileManager;

use Parkstreet\AppBundle\FileManager\Interfaces\InvoiceManagerInterface;
use Parkstreet\AppBundle\Entity\Invoice;

/**
 * Class InvoiceManager
 * @package Parkstreet\AppBundle\FileManager
 */
class InvoiceManager extends BaseManager implements InvoiceManagerInterface
{     
    /**
     * Set the repository class
     * @return mixed
     */
    public function initRepository()
    {
        $this->repository = $this->em->getRepository("ParkstreetAppBundle:Invoice");
    }

    /**
     * Return the set of invoices
     * @param array $params
     * @return mixed
     */
    public function getAll(array $params)
    {
        $response = $this->getRepository()->retrieveAll($params);

        return $response;
    }

    /**
     * Return the invoice filtered by id
     * @param $id
     * @return mixed
     */
    public function getById($id)
    {
        return $this->getRepository()->retrieveById($id);
    }

    /**
     * Add/Update the invoice
     * @param array $data
     * @return mixed
     */
    public function save(array $data)
    {
        try {
            $invoice = $data['action'] == parent::ADD ? new Invoice() : $this->repository->find($data['id']);
            $invoice->setDate($data['date']);
            $invoice->setClient($this->em->getRepository("ParkstreetAppBundle:Client")->find($data['client_id']));
                 
            if ($data['action'] == parent::ADD) {
                $this->em->persist($invoice);
            }

            $this->em->flush();

            return array('status' => 200, 'msg' => $data['action'] == parent::ADD ? "The invoice was added successfully!" : "The invoice was updated successfully!");

        } catch (\Exception $exc) {
            return array('status' => 200, 'msg' => "An error occurred when trying to save the invoice: " . $exc->getMessage());
        }
    }

    /**
     * Delete the invoice
     * @param $id
     * @return mixed
     */
    public function delete($id)
    {
        try {
            $invoice = $this->repository->find($id);

            $this->em->remove($invoice);
            $this->em->flush();

            return array('status' => 200, 'msg' => "The invoice was deleted successfully.");
        } catch (\Exception $exc) {
            return array('status' => 200, 'msg' => "The following error occurred while trying to remove the invoice: " . $exc->getMessage());
        }
    }
}
