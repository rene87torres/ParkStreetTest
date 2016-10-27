<?php
/**
 * Author: Rene Torres
 */

namespace Parkstreet\AppBundle\Useful\Pagination;

/**
 * Class Pager
 * @package Parkstreet\AppBundle\Useful\Pagination
 */
class Pager
{
    private $page;
    private $maxPerPage;
    private $lastPage;
    private $nbResults;
    private $results;

    /**
    * Class Constructor
    */
    public function __construct()
    {
    }

    /**
     * Initialize the pager
     * @param $page
     * @param $maxPerPage
     * @param $nbResults
     * @param $results
     */
    public function init($page, $maxPerPage, $nbResults, $results)
    {
        $this->setCurrentPage($page);
        $this->setMaxPerPage($maxPerPage);
        $this->setNbResults($nbResults);
        $this->setLastPage(ceil($this->getNbResults() / $this->getMaxPerPage()));
        $this->setResults($results);
    }

    /**
     * Set the current page
     * @param $page
     */
    public function setCurrentPage($page)
    {
        $this->page = $page;
    }

    /**
     * Set the max of the items to display per page
     * @param $maxPerPage
     */
    public function setMaxPerPage($maxPerPage)
    {
        $this->maxPerPage = $maxPerPage;
    }

    /**
     * Set the last page
     * @param $lastPage
     */
    public function setLastPage($lastPage)
    {
        $this->lastPage = $lastPage;
    }

    /**
     * Set the number of results
     * @param $nbResults
     */
    public function setNbResults($nbResults)
    {
        $this->nbResults = $nbResults;
    }

    /**
     * Set the results
     * @param $results
     */
    public function setResults($results)
    {
        $this->results = $results;
    }

    /**
     * Return the current page
     * @return mixed
     */
    public function getCurrentPage()
    {
        return $this->page;
    }

    /**
     * Return the max of items allows to display
     * @return mixed
     */
    public function getMaxPerPage()
    {
        return $this->maxPerPage;
    }

    /**
     * Return the last page
     * @return mixed
     */
    public function getLastPage()
    {
        return $this->lastPage;
    }

    /**
     * Return the number of results
     * @return mixed
     */
    public function getNbResults()
    {
        return $this->nbResults;
    }

    /**
     * Return the partial total of results
     * @return int
     */
    public function getPartialTotal()
    { 
        return $this->getCurrentPage() * $this->getMaxPerPage() + count($this->getResults());
    }

    /**
     * Return the array with the specific information of current items
     * @return mixed
     */
    public function getResults()
    {
        return $this->results;
    }

    /**
     * Returns true if the current query requires pagination.
     *
     * @return boolean
     */
    public function haveToPaginate()
    {
        return $this->getMaxPerPage() && $this->getNbResults() > $this->getMaxPerPage();
    }

    /**
     * Returns an array of page numbers to use in pagination links.
     *
     * @param  integer $nbLinks The maximum number of page numbers to return
     *
     * @return array
     */
    public function getLinks($nbLinks = 5)
    {
        $links = array();
        $tmp = $this->page - floor($nbLinks / 2);
        $check = $this->lastPage - $nbLinks + 1;
        $limit = $check > 0 ? $check : 1;
        $begin = $tmp > 0 ? ($tmp > $limit ? $limit : $tmp) : 1;

        $i = (int)$begin;

        while ($i < $begin + $nbLinks && $i <= $this->lastPage) {
            $links[] = $i++;
        }

        return $links;
    }

    /**
     * Return an array with whole information to make the pagination
     * @return array
     */
    public function getData()
    {
        return array(
            'current_page' => $this->getCurrentPage() + 1,
            'last_page' => $this->getLastPage(),
            'partial_total' => $this->getPartialTotal(),
            'total' => $this->getNbResults(),
            'have_to_paginate' => $this->haveToPaginate(),
            'links' => $this->getLinks()
        );
    }
}