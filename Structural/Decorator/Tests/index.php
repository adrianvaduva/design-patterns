<?php
require_once '../../../bootstrap.php';

use DesignPatterns\Structural\Decorator\ExtraCheese;
use DesignPatterns\Structural\Decorator\Margherita;
use DesignPatterns\Structural\Decorator\Pastrami;
use DesignPatterns\Structural\Decorator\Pepperoni;
use DesignPatterns\Structural\Decorator\Pizza;

function makePizza(Pizza $pizza)
{
    echo "Your order: " . $pizza->getDescription();
    echo ", costs " . $pizza->calculatePrice();
    echo PHP_EOL;
}

echo "Test Pastrami Pizza" . PHP_EOL;
$pizza = new Pastrami();
makePizza($pizza);

echo PHP_EOL . "Test Margherita Pizza with pepperoni" . PHP_EOL;
$pizza = new Margherita();
$pizza = new Pepperoni($pizza);
makePizza($pizza);

echo PHP_EOL . "Test Margherita Pizza with pepperoni and with extra cheese " . PHP_EOL;
$pizza = new Margherita();
$pizza = new Pepperoni($pizza);
$pizza = new ExtraCheese($pizza);
makePizza($pizza);
