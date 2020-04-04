<?php

namespace DesignPatterns\Structural\Adapter;

interface Chat
{
    public function typeMessage(): void;

    public function getMessage(): string;
}