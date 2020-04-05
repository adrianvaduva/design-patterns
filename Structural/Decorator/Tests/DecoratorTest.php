<?php

namespace DesignPatterns\Structural\Decorator\Tests;

use DesignPatterns\Structural\Decorator\ExtraCheese;
use DesignPatterns\Structural\Decorator\Margherita;
use DesignPatterns\Structural\Decorator\Pastrami;
use DesignPatterns\Structural\Decorator\Pepperoni;
use PHPUnit\Framework\TestCase;

class DecoratorTest extends TestCase
{
    public function testCanCalculatePriceForBasicPastramiPizza()
    {
        $pizza = new Pastrami();

        $this->assertSame(12, $pizza->calculatePrice());
        $this->assertSame('Pizza Pastrami', $pizza->getDescription());
    }

    public function testCanCalculatePriceForMargheritaPizzaWithPepperoni()
    {
        $pizza = new Margherita();
        $pizza = new Pepperoni($pizza);

        $this->assertSame(13, $pizza->calculatePrice());
        $this->assertSame('Pizza Margherita with pepperoni', $pizza->getDescription());
    }

    public function testCanCalculatePriceForMargheritaPizzaWithPepperoniAndExtraCheese()
    {
        $pizza = new Margherita();
        $pizza = new Pepperoni($pizza);
        $pizza = new ExtraCheese($pizza);

        $this->assertSame(15, $pizza->calculatePrice());
        $this->assertSame('Pizza Margherita with pepperoni with extra cheese', $pizza->getDescription());
    }
}