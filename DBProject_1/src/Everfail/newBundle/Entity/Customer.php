<?php

namespace Everfail\newBundle\Entity;

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
    private $email;

    /**
     * @var string
     */
    private $id;


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
     * Set email
     *
     * @param string $email
     * @return Customer
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
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
}
