<?php namespace Boutique\Gateway;

class Pickup extends Gateway implements GatewayInterface {

    /**
     * Gateway title
     * @var string
     */
    public static $title = "Pickup";

    /**
     * Gateway description
     * @var string
     */
    public static $description = "Standard gateway for pickup-orders without payments online.";

    /**
     * Charge invoice
     * @return boolean
     */
    public function charge()
    {
        return $this->invoice->process();
    }

    /**
     * Refund invoice
     * @return boolean
     */
    public function refund()
    {
        return $this->invoice->refuned();
    }

    /**
     * Cancel invoice
     * @return boolean
     */
    public function cancel()
    {
        return $this->invoice->cancel();
    }

    /**
     * Gateway form
     * @return null
     */
    public function form()
    {
        return null;
    }

}