<?php

namespace DesignPatterns\Structural\Adapter;

class WhatsApp
{
    private $message;

    public function writeMessage(): void
    {
        $this->message = 'Hello via WhatsApp';
    }

    public function getMessage(): string
    {
        return $this->message;
    }
}