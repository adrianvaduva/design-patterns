<?php

namespace DesignPatterns\Creational\FactoryMethod;

use DesignPatterns\Creational\FactoryMethod\Transport;

abstract class Courier
{
    abstract function getCourierTransport(): Transport;

    public function sendCourier()
    {
        $transport = $this->getCourierTransport();
        $transport->ready();
        $transport->dispatch();
        $transport->deliver();
    }
}