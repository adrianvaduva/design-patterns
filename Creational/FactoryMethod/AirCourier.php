<?php

namespace DesignPatterns\Creational\FactoryMethod;

use DesignPatterns\Creational\FactoryMethod\Transport;
use DesignPatterns\Creational\FactoryMethod\PlaneTransport;

class AirCourier extends Courier
{
    function getCourierTransport(): Transport
    {
        return new PlaneTransport();
    }
}