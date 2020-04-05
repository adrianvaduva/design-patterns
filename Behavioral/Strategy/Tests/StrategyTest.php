<?php

namespace DesignPatterns\Behavioral\Strategy\Tests;

use DesignPatterns\Behavioral\Strategy\Context;
use DesignPatterns\Behavioral\Strategy\JsonFormatter;
use DesignPatterns\Behavioral\Strategy\StringFormatter;
use PHPUnit\Framework\TestCase;

class StrategyTest extends TestCase
{
    const NUMBERS = [1, 2, 3, 4, 5];
    const STARS = ['Tyrion Lannister', 'Daenerys Targaryen', 'Jon Snow'];

    public function provideForJsonFormatter()
    {
        return [
            [self::NUMBERS, '[1,2,3,4,5]'],
            [self::STARS, '["Tyrion Lannister","Daenerys Targaryen","Jon Snow"]']
        ];
    }

    public function provideForStringFormatter()
    {
        return [
            [self::NUMBERS, '1, 2, 3, 4, 5'],
            [self::STARS, 'Tyrion Lannister, Daenerys Targaryen, Jon Snow']
        ];
    }

    /**
     * @dataProvider provideForJsonFormatter
     *
     * @param array $collection
     * @param string $expected
     */
    public function testJsonFormatter(array $collection, string $expected)
    {
        $context = new Context(new JsonFormatter());

        $this->assertSame($expected, $context->formatData($collection));
    }

    /**
     * @dataProvider provideForStringFormatter
     *
     * @param array $collection
     * @param string $expected
     */
    public function testStringFormatter(array $collection, string $expected)
    {
        $context = new Context(new StringFormatter());

        $this->assertSame($expected, $context->formatData($collection));
    }
}
