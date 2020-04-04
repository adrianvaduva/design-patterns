<?php

namespace DesignPatterns\Creational\FactoryMethod\Tests;

use DesignPatterns\Creational\FactoryMethod\AirCourier;
use DesignPatterns\Creational\FactoryMethod\GroundCourier;
use DesignPatterns\Creational\FactoryMethod\PlaneTransport;
use DesignPatterns\Creational\FactoryMethod\TruckTransport;
use PHPUnit\Framework\TestCase;

class FactoryMethodTest extends TestCase
{
    public function testCanCreatePlaneTransport()
    {
        $courier = new AirCourier();
        $transport = $courier->getCourierTransport();
        $this->assertInstanceOf(PlaneTransport::class, $transport);
    }

    public function testCanCreateTruckTransport()
    {
        $courier = new GroundCourier();
        $transport = $courier->getCourierTransport();
        $this->assertInstanceOf(TruckTransport::class, $transport);
    }
}

