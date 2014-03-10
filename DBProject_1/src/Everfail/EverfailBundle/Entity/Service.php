<?php

namespace Everfail\Bundle\Entity;

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
     * @var string
     */
    private $serviceid;

    /**
     * @var \Everfail\Bundle\Entity\Car
     */
    private $regNumber;

    /**
     * @var \Everfail\Bundle\Entity\Invoice
     */
    private $invoice;

    /**
     * @var \Everfail\Bundle\Entity\Customer
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
     * Get serviceid
     *
     * @return string 
     */
    public function getServiceid()
    {
        return $this->serviceid;
    }

    /**
     * Set regNumber
     *
     * @param \Everfail\Bundle\Entity\Car $regNumber
     * @return Service
     */
    public function setRegNumber(\Everfail\Bundle\Entity\Car $regNumber = null)
    {
        $this->regNumber = $regNumber;

        return $this;
    }

    /**
     * Get regNumber
     *
     * @return \Everfail\Bundle\Entity\Car 
     */
    public function getRegNumber()
    {
        return $this->regNumber;
    }

    /**
     * Set invoice
     *
     * @param \Everfail\Bundle\Entity\Invoice $invoice
     * @return Service
     */
    public function setInvoice(\Everfail\Bundle\Entity\Invoice $invoice = null)
    {
        $this->invoice = $invoice;

        return $this;
    }

    /**
     * Get invoice
     *
     * @return \Everfail\Bundle\Entity\Invoice 
     */
    public function getInvoice()
    {
        return $this->invoice;
    }

    /**
     * Set cust
     *
     * @param \Everfail\Bundle\Entity\Customer $cust
     * @return Service
     */
    public function setCust(\Everfail\Bundle\Entity\Customer $cust = null)
    {
        $this->cust = $cust;

        return $this;
    }

    /**
     * Get cust
     *
     * @return \Everfail\Bundle\Entity\Customer 
     */
    public function getCust()
    {
        return $this->cust;
    }
}
