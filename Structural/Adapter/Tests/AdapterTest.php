<?php

namespace DesignPatterns\Structural\Adapter\Tests;

use DesignPatterns\Structural\Adapter\FacebookMessenger;
use DesignPatterns\Structural\Adapter\WhatsApp;
use DesignPatterns\Structural\Adapter\WhatsAppAdapter;
use PHPUnit\Framework\TestCase;

class AdapterTest extends TestCase
{
    public function testCanTypeMessageViaFacebookMessenger()
    {
        $facebookMessenger = new FacebookMessenger();
        $facebookMessenger->typeMessage();
        $this->assertSame('Hello via Facebook', $facebookMessenger->getMessage());
    }

    public function testCanTypeMessageViaWhatsApp()
    {
        $whatsApp = new WhatsApp();
        $whatsAppAdapter = new WhatsAppAdapter($whatsApp);
        $whatsAppAdapter->typeMessage();
        $this->assertSame('Hello via WhatsApp', $whatsAppAdapter->getMessage());
    }
}