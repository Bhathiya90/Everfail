<?php

namespace Everfail\newBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Car
 */
class Car
{
    /**
     * @var string
     */
    private $brand;

    /**
     * @var \DateTime
     */
    private $manufactureYear;

    /**
     * @var string
     */
    private $id;


    /**
     * Set brand
     *
     * @param string $brand
     * @return Car
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;
    
        return $this;
    }

    /**
     * Get brand
     *
     * @return string 
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Set manufactureYear
     *
     * @param \DateTime $manufactureYear
     * @return Car
     */
    public function setManufactureYear($manufactureYear)
    {
        $this->manufactureYear = $manufactureYear;
    
        return $this;
    }

    /**
     * Get manufactureYear
     *
     * @return \DateTime 
     */
    public function getManufactureYear()
    {
        return $this->manufactureYear;
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
