<?php

namespace Everfail\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Customer
 */
class Customer
{
    /**
     * @var string
     */
    private $custName;

    /**
     * @var string
     */
    private $custId;

    /**
     * @var string
     */
    private $eMail;


    /**
     * Set custName
     *
     * @param string $custName
     * @return Customer
     */
    public function setCustName($custName)
    {
        $this->custName = $custName;

        return $this;
    }

    /**
     * Get custName
     *
     * @return string 
     */
    public function getCustName()
    {
        return $this->custName;
    }

    /**
     * Set custId
     *
     * @param string $custId
     * @return Customer
     */
    public function setCustId($custId)
    {
        $this->custId = $custId;

        return $this;
    }

    /**
     * Get custId
     *
     * @return string 
     */
    public function getCustId()
    {
        return $this->custId;
    }

    /**
     * Set eMail
     *
     * @param string $eMail
     * @return Customer
     */
    public function setEMail($eMail)
    {
        $this->eMail = $eMail;

        return $this;
    }

    /**
     * Get eMail
     *
     * @return string 
     */
    public function getEMail()
    {
        return $this->eMail;
    }
}
