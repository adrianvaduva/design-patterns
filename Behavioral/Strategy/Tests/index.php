<?php
require_once '../../../bootstrap.php';

use DesignPatterns\Behavioral\Strategy\Context;
use DesignPatterns\Behavioral\Strategy\JsonFormatter;
use DesignPatterns\Behavioral\Strategy\StringFormatter;

$data = [1, 2, 3, 4, 5];
echo "Test format data with json formatter" . PHP_EOL;;
$context = new Context(new JsonFormatter());
echo $context->formatData($data);

echo PHP_EOL . "Test format data with string formatter" . PHP_EOL;;
$context = new Context(new StringFormatter());
echo $context->formatData($data);
echo PHP_EOL;