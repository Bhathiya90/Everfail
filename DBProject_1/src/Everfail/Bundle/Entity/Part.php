<?php

namespace Everfail\Bundle\Entity;

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
    private $partId;

    /**
     * @var \Everfail\Bundle\Entity\Vendor
     */
    private $vendor;

    /**
     * @var \Everfail\Bundle\Entity\Service
     */
    private $service;

    /**
     * @var \Everfail\Bundle\Entity\Category
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
     * Get partId
     *
     * @return string 
     */
    public function getPartId()
    {
        return $this->partId;
    }

    /**
     * Set vendor
     *
     * @param \Everfail\Bundle\Entity\Vendor $vendor
     * @return Part
     */
    public function setVendor(\Everfail\Bundle\Entity\Vendor $vendor = null)
    {
        $this->vendor = $vendor;

        return $this;
    }

    /**
     * Get vendor
     *
     * @return \Everfail\Bundle\Entity\Vendor 
     */
    public function getVendor()
    {
        return $this->vendor;
    }

    /**
     * Set service
     *
     * @param \Everfail\Bundle\Entity\Service $service
     * @return Part
     */
    public function setService(\Everfail\Bundle\Entity\Service $service = null)
    {
        $this->service = $service;

        return $this;
    }

    /**
     * Get service
     *
     * @return \Everfail\Bundle\Entity\Service 
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Set category
     *
     * @param \Everfail\Bundle\Entity\Category $category
     * @return Part
     */
    public function setCategory(\Everfail\Bundle\Entity\Category $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \Everfail\Bundle\Entity\Category 
     */
    public function getCategory()
    {
        return $this->category;
    }
}
