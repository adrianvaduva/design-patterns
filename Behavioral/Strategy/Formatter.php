<?php

namespace DesignPatterns\Behavioral\Strategy;

interface Formatter
{
    public function format(array $data): string;
}