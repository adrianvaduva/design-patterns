<?php

namespace DesignPatterns\Structural\Adapter;

class WhatsAppAdapter implements Chat
{
    private $whatsApp;

    public function __construct(WhatsApp $whatsApp)
    {
        $this->whatsApp = $whatsApp;
    }

    public function typeMessage(): void
    {
        $this->whatsApp->writeMessage();
    }

    public function getMessage(): string
    {
        return $this->whatsApp->getMessage();
    }
}