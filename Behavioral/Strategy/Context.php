<?php

namespace DesignPatterns\Behavioral\Strategy;

class Context
{
    private $formatter;

    public function __construct(Formatter $formatter)
    {
        $this->formatter = $formatter;
    }

    public function formatData(array $data): string
    {
        return $this->formatter->format($data);
    }
}