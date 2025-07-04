<?php

namespace Binance\Util;

use PHPUnit\Framework\TestCase;

final class StringsTest extends TestCase
{
    public function testIsEmpty()
    {
        $this->assertTrue(Strings::isEmpty(''));
        $this->assertTrue(Strings::isEmpty(' '));
    }
}
