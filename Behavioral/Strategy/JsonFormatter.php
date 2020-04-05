<?php

namespace DesignPatterns\Behavioral\Strategy;

class JsonFormatter implements Formatter
{
    public function format(array $data): string
    {
        return json_encode($data);
    }
}