<?php
/**
 * Author: Rene Torres
 */

namespace Parkstreet\AppBundle\Useful\Date;

/**
 * Class Date
 * @package Parkstreet\AppBundle\Useful\Date
 */
class Date implements DateInterface
{
    private $currentDate;
    private $lastMonthToDate;
    private $thisMonth;
    private $thisYear;
    private $lastYear;

    /**
    * Class Constructor
    */
    public function __construct()
    {
        $this->currentDate = new \DateTime('now');
        $this->lastMonthToDate = new \DateTime('now');
        $this->thisMonth = new \DateTime('now');
        $this->thisYear = new \DateTime('now');
        $this->lastYear = new \DateTime('now');
        $this->initDates();
    }
    
    /**
    * Initialize dates
    */
    public function initDates()
    {
        $this->initLastMonthToDate();
        $this->initThisMonth();
        $this->initThisYear();
        $this->initLastYear();
    }
    
    /**
    * Initialize the last month to date
    */
    public function initLastMonthToDate()
    {
        $this->lastMonthToDate->sub(new \DateInterval('P1M'));
        $this->lastMonthToDate->setDate((Integer)$this->lastMonthToDate->format('Y'), (Integer)$this->lastMonthToDate->format('m'), 2);
    }
    
    /**
    * Initialize the this month date
    */
    public function initThisMonth()
    {
        $this->thisMonth->setDate((Integer)$this->thisMonth->format('Y'), (Integer)$this->thisMonth->format('m'), 2);
    }
    
    /**
    * Initialize the this year date
    */
    public function initThisYear()
    {
        $this->thisYear->setDate((Integer)$this->thisYear->format('Y'), 1, 2);
    }
    
    /**
    * Initialize the last year date
    */
    public function initLastYear()
    {
        $this->lastYear->sub(new \DateInterval('P1Y'));
        $this->lastYear->setDate((Integer)$this->lastYear->format('Y'), 1, 2);
    }
    
    /**
    * Return the last month to date
    */
    public function getLastMonthToDate()
    {
        return $this->lastMonthToDate->format('Y-m-d');;
    }
    
    /**
    * Return the this month date
    */
    public function getThisMonth()
    {
        return $this->thisMonth->format('Y-m-d');;
    }
    
    /**
    * Return the this year date
    */
    public function getThisYear()
    {
        return $this->thisYear->format('Y-m-d');;
    }
    
    /**
    * Return the last year date
    */
    public function getLastYear()
    {
        return $this->lastYear->format('Y-m-d');
    }
    
    /**
    * Return the array of $dates
    */
    public function getDates()
    {
        $dates[] = array('value' => $this->getLastMonthToDate(), 'description' => "Last month to date");
        $dates[] = array('value' => $this->getThisMonth(), 'description' => "This month");
        $dates[] = array('value' => $this->getThisYear(), 'description' => "This year");
        $dates[] = array('value' => $this->getLastYear(), 'description' => "Last year");
        
        return $dates;
    }
}