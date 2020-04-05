<?php

namespace DesignPatterns\Structural\Decorator;

class Margherita implements Pizza
{
    public function getDescription(): string
    {
        return "Pizza Margherita";
    }

    public function calculatePrice(): int
    {
        return 10;
    }
}