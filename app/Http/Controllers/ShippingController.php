<?php

namespace App\Http\Controllers;

use App\Contracts\Services\ShippingServiceInterface;

class ShippingController
{
    protected ShippingServiceInterface $shippingService;

    /**
     * ShippingController constructor.
     * @param ShippingServiceInterface $shippingService
     */
    public function __construct(ShippingServiceInterface $shippingService)
    {
        $this->shippingService = $shippingService;
    }
}
