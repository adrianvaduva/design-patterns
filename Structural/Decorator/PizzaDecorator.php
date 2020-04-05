<?php

namespace DesignPatterns\Structural\Decorator;

abstract class PizzaDecorator implements Pizza
{
    protected $pizza;

    public function __construct(Pizza $pizza)
    {
        $this->pizza = $pizza;
    }
}