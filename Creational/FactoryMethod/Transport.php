<?php

namespace DesignPatterns\Creational\FactoryMethod;

interface Transport
{
    public function ready(): void;

    public function dispatch(): void;

    public function deliver(): void;
}