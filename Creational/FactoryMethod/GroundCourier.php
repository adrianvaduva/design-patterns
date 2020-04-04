<?php

namespace DesignPatterns\Creational\FactoryMethod;

use DesignPatterns\Creational\FactoryMethod\Transport;
use DesignPatterns\Creational\FactoryMethod\TruckTransport;
use DesignPatterns\Creational\FactoryMethod\Courier;

class GroundCourier extends Courier
{
    function getCourierTransport(): Transport
    {
        return new TruckTransport();
    }
}