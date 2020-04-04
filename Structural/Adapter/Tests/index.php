<?php
require_once '../../../bootstrap.php';

use DesignPatterns\Structural\Adapter\Chat;
use DesignPatterns\Structural\Adapter\FacebookMessenger;
use DesignPatterns\Structural\Adapter\WhatsApp;
use DesignPatterns\Structural\Adapter\WhatsAppAdapter;

function clientCode(Chat $chat)
{
    $chat->typeMessage();
    echo $chat->getMessage();
}

echo "Test FacebookMessenger" . PHP_EOL;
$facebookMessenger = new FacebookMessenger();
clientCode($facebookMessenger);

echo PHP_EOL . "Test WhatsApp" . PHP_EOL;
$whatsApp = new WhatsApp();
$whatsAppAdapter = new WhatsAppAdapter($whatsApp);
clientCode($whatsAppAdapter);


echo PHP_EOL;



