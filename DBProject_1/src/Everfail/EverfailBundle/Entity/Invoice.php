<?php

namespace Everfail\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Invoice
 */
class Invoice
{
    /**
     * @var \DateTime
     */
    private $paymentdate;

    /**
     * @var string
     */
    private $invoiceId;


    /**
     * Set paymentdate
     *
     * @param \DateTime $paymentdate
     * @return Invoice
     */
    public function setPaymentdate($paymentdate)
    {
        $this->paymentdate = $paymentdate;

        return $this;
    }

    /**
     * Get paymentdate
     *
     * @return \DateTime 
     */
    public function getPaymentdate()
    {
        return $this->paymentdate;
    }

    /**
     * Get invoiceId
     *
     * @return string 
     */
    public function getInvoiceId()
    {
        return $this->invoiceId;
    }
}
