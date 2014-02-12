<?php namespace Boutique\Gateway;

class Gateway {

    /**
     * Order Implementation
     * @var Boutique\Order\OrderInterface
     */
    protected $order;

    /**
     * Gateway implementation
     * @var Boutique\Gateway\GatewayInterface
     */
    protected $gateway;

    /**
     * Class constructor
     * @param GatewayInterface $gateway
     */
    public function __construct(OrderInterface $order, GatewayInterface $gateway)
    {
        $this->order = $order;
        $this->gateway = $gateway;
    }

}