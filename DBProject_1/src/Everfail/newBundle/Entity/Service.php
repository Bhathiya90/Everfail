<?php

namespace Everfail\newBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Service
 */
class Service
{
    /**
     * @var \DateTime
     */
    private $serviceDate;

    /**
     * @var string
     */
    private $serviceCharge;

    /**
     * @var string
     */
    private $note;

    /**
     * @var integer
     */
    private $currentMileage;

    /**
     * @var string
     */
    private $id;

    /**
     * @var \Everfail\newBundle\Entity\Car
     */
    private $car;

    /**
     * @var \Everfail\newBundle\Entity\Invoice
     */
    private $invoice;

    /**
     * @var \Everfail\newBundle\Entity\Customer
     */
    private $cust;


    /**
     * Set serviceDate
     *
     * @param \DateTime $serviceDate
     * @return Service
     */
    public function setServiceDate($serviceDate)
    {
        $this->serviceDate = $serviceDate;
    
        return $this;
    }

    /**
     * Get serviceDate
     *
     * @return \DateTime 
     */
    public function getServiceDate()
    {
        return $this->serviceDate;
    }

    /**
     * Set serviceCharge
     *
     * @param string $serviceCharge
     * @return Service
     */
    public function setServiceCharge($serviceCharge)
    {
        $this->serviceCharge = $serviceCharge;
    
        return $this;
    }

    /**
     * Get serviceCharge
     *
     * @return string 
     */
    public function getServiceCharge()
    {
        return $this->serviceCharge;
    }

    /**
     * Set note
     *
     * @param string $note
     * @return Service
     */
    public function setNote($note)
    {
        $this->note = $note;
    
        return $this;
    }

    /**
     * Get note
     *
     * @return string 
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set currentMileage
     *
     * @param integer $currentMileage
     * @return Service
     */
    public function setCurrentMileage($currentMileage)
    {
        $this->currentMileage = $currentMileage;
    
        return $this;
    }

    /**
     * Get currentMileage
     *
     * @return integer 
     */
    public function getCurrentMileage()
    {
        return $this->currentMileage;
    }

    /**
     * Get id
     *
     * @return string 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set car
     *
     * @param \Everfail\newBundle\Entity\Car $car
     * @return Service
     */
    public function setCar(\Everfail\newBundle\Entity\Car $car = null)
    {
        $this->car = $car;
    
        return $this;
    }

    /**
     * Get car
     *
     * @return \Everfail\newBundle\Entity\Car 
     */
    public function getCar()
    {
        return $this->car;
    }

    /**
     * Set invoice
     *
     * @param \Everfail\newBundle\Entity\Invoice $invoice
     * @return Service
     */
    public function setInvoice(\Everfail\newBundle\Entity\Invoice $invoice = null)
    {
        $this->invoice = $invoice;
    
        return $this;
    }

    /**
     * Get invoice
     *
     * @return \Everfail\newBundle\Entity\Invoice 
     */
    public function getInvoice()
    {
        return $this->invoice;
    }

    /**
     * Set cust
     *
     * @param \Everfail\newBundle\Entity\Customer $cust
     * @return Service
     */
    public function setCust(\Everfail\newBundle\Entity\Customer $cust = null)
    {
        $this->cust = $cust;
    
        return $this;
    }

    /**
     * Get cust
     *
     * @return \Everfail\newBundle\Entity\Customer 
     */
    public function getCust()
    {
        return $this->cust;
    }
}
