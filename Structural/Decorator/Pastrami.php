<?php

namespace DesignPatterns\Structural\Decorator;

class Pastrami implements Pizza
{
    public function getDescription(): string
    {
        return "Pizza Pastrami";
    }

    public function calculatePrice(): int
    {
        return 12;
    }
}