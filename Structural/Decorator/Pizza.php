<?php

namespace DesignPatterns\Structural\Decorator;

interface Pizza
{
    public function getDescription(): string;

    public function calculatePrice(): int;
}