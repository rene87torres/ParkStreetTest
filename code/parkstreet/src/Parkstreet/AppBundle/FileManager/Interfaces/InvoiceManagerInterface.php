<?php
/**
 * Author: Rene Torres
 */

namespace Parkstreet\AppBundle\FileManager\Interfaces;

/**
 * Interface InvoiceManagerInterface
 * @package Parkstreet\AppBundle\FileManager\Interfaces
 */
interface InvoiceManagerInterface
{
    /**
     * Return the set of invoices
     * @param array $params
     * @return mixed
     */
    public function getAll(array $params);

    /**
     * Return the invoice filtered by id
     * @param $id
     * @return mixed
     */
    public function getById($id);

    /**
     * Add/Update the invoice
     * @param array $data
     * @return mixed
     */
    public function save(array $data);

    /**
     * Delete the invoice
     * @param $id
     * @return mixed
     */
    public function delete($id);
}