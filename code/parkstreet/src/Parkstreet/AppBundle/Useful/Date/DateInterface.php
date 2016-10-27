<?php
/**
 * Author: Rene Torres
 */

namespace Parkstreet\AppBundle\Useful\Date;

/**
 * Interface DateInterface
 * @package Parkstreet\AppBundle\Useful\Date
 */
interface DateInterface
{    
    /**
    * Return the last month to date
    */
    public function getLastMonthToDate();
    
    /**
    * Return the this month date
    */
    public function getThisMonth();
    
    /**
    * Return the this year date
    */
    public function getThisYear();
    
    /**
    * Return the last year date
    */
    public function getLastYear();
    
    /**
    * Return the array of $dates
    */
    public function getDates();
}