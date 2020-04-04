<?php

namespace DesignPatterns\Structural\Adapter;

class FacebookMessenger implements Chat
{
    private $message;

    public function typeMessage(): void
    {
        $this->message = 'Hello via Facebook';
    }

    public function getMessage(): string
    {
        return $this->message;
    }
}
