<?php

namespace DesignPatterns\Creational\FactoryMethod;

use DesignPatterns\Creational\FactoryMethod\Transport;

class PlaneTransport implements Transport
{
    public function ready(): void
    {
        echo "Courier ready to be sent to the plane\n";
    }

    public function dispatch(): void
    {
        echo "Courier is on your way on the plane\n";
    }

    public function deliver(): void
    {
        echo "Courier from the plane is delivered to you\n";
    }
}