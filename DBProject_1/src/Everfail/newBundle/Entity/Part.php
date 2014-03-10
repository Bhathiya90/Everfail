<?php

namespace Everfail\newBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Part
 */
class Part
{
    /**
     * @var string
     */
    private $partName;

    /**
     * @var string
     */
    private $price;

    /**
     * @var string
     */
    private $id;

    /**
     * @var \Everfail\newBundle\Entity\Vendor
     */
    private $vendor;

    /**
     * @var \Everfail\newBundle\Entity\Service
     */
    private $service;

    /**
     * @var \Everfail\newBundle\Entity\Category
     */
    private $category;


    /**
     * Set partName
     *
     * @param string $partName
     * @return Part
     */
    public function setPartName($partName)
    {
        $this->partName = $partName;
    
        return $this;
    }

    /**
     * Get partName
     *
     * @return string 
     */
    public function getPartName()
    {
        return $this->partName;
    }

    /**
     * Set price
     *
     * @param string $price
     * @return Part
     */
    public function setPrice($price)
    {
        $this->price = $price;
    
        return $this;
    }

    /**
     * Get price
     *
     * @return string 
     */
    public function getPrice()
    {
        return $this->price;
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
     * Set vendor
     *
     * @param \Everfail\newBundle\Entity\Vendor $vendor
     * @return Part
     */
    public function setVendor(\Everfail\newBundle\Entity\Vendor $vendor = null)
    {
        $this->vendor = $vendor;
    
        return $this;
    }

    /**
     * Get vendor
     *
     * @return \Everfail\newBundle\Entity\Vendor 
     */
    public function getVendor()
    {
        return $this->vendor;
    }

    /**
     * Set service
     *
     * @param \Everfail\newBundle\Entity\Service $service
     * @return Part
     */
    public function setService(\Everfail\newBundle\Entity\Service $service = null)
    {
        $this->service = $service;
    
        return $this;
    }

    /**
     * Get service
     *
     * @return \Everfail\newBundle\Entity\Service 
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Set category
     *
     * @param \Everfail\newBundle\Entity\Category $category
     * @return Part
     */
    public function setCategory(\Everfail\newBundle\Entity\Category $category = null)
    {
        $this->category = $category;
    
        return $this;
    }

    /**
     * Get category
     *
     * @return \Everfail\newBundle\Entity\Category 
     */
    public function getCategory()
    {
        return $this->category;
    }
}
