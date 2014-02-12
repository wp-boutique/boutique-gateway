<?php namespace Boutique\Gateway;

interface GatewayInterface {

    /**
     * Charge a transaction
     * @param  integer $orderId
     */
    public function charge($orderId);

    /**
     * Refund a transaction
     * @param  integer $orderId
     */
    public function refund($orderId);

    /**
     * Cancel a transaction
     * @param  integer $orderId
     */
    public function cancel($orderId);

    /**
     * Gateway form
     * @return mixed
     */
    public function form();
}