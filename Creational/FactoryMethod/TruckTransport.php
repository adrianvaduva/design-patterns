<?php

namespace DesignPatterns\Creational\FactoryMethod;

use DesignPatterns\Creational\FactoryMethod\Transport;

class TruckTransport implements Transport
{
    public function ready(): void
    {
        echo "Courier ready to be sent to the truck\n";
    }

    public function dispatch(): void
    {
        echo "Courier is on your way on the truck\n";
    }

    public function deliver(): void
    {
        echo "Courier from the truck is delivered to you\n";
    }
}