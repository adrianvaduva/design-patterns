<?php

namespace DesignPatterns\Structural\Decorator;

class Pepperoni extends PizzaDecorator
{
    private const PRICE = 3;

    public function getDescription(): string
    {
        return $this->pizza->getDescription() . " with pepperoni";
    }

    public function calculatePrice(): int
    {
        return $this->pizza->calculatePrice() + self::PRICE;
    }
}