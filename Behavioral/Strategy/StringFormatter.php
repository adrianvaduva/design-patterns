<?php

namespace DesignPatterns\Behavioral\Strategy;

class StringFormatter implements Formatter
{
    const DELIMITER = ", ";

    public function format(array $data): string
    {
        return implode(self::DELIMITER, $data);
    }
}