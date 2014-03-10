<?php

namespace Everfail\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Car
 */
class Car
{
    /**
     * @var string
     */
    private $regNumber;


    /**
     * Get regNumber
     *
     * @return string 
     */
    public function getRegNumber()
    {
        return $this->regNumber;
    }
}
