<?php namespace Boutique\Gateway;

use Boutique\Invoice\InvoiceInterface;

abstract class Gateway {

    /**
     * Invoice Implementation
     * @var Boutique\Invoice\InvoiceInterface
     */
    protected $invoice;

    /**
     * Class constructor
     * @param GatewayInterface $gateway
     */
    public function __construct(InvoiceInterface $invoice)
    {
        $this->invoice = $invoice;
    }

}