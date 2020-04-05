<?php

namespace DesignPatterns\Structural\Decorator;

class ExtraCheese extends PizzaDecorator
{
    private const PRICE = 2;

    public function getDescription(): string
    {
        return $this->pizza->getDescription() . " with extra cheese";
    }

    public function calculatePrice(): int
    {
        return $this->pizza->calculatePrice() + self::PRICE;
    }
}