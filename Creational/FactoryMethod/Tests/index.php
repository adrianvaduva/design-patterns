<?php
require_once '../../../bootstrap.php';

use DesignPatterns\Creational\FactoryMethod\AirCourier;
use DesignPatterns\Creational\FactoryMethod\Courier;
use DesignPatterns\Creational\FactoryMethod\GroundCourier;

function deliverCourier(Courier $courier)
{
    $courier->sendCourier();
}

echo "Test GroundCourier\n";
deliverCourier(new GroundCourier());


echo "Test AirCourier\n";
deliverCourier(new AirCourier());