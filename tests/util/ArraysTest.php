<?php

namespace Binance\Util;

use PHPUnit\Framework\TestCase;

final class ArraysTest extends TestCase
{
    public function testStringify()
    {
        $this->assertEquals(Arrays::stringify(['BTCUSDT']), '["BTCUSDT"]');
        $this->assertEquals(Arrays::stringify(['BTCUSDT', 'BNBUSDT']), '["BTCUSDT","BNBUSDT"]');
        $this->assertEquals(Arrays::stringify(['BTCUSDT', 'BNBUSDT', 'ETHUSDT']), '["BTCUSDT","BNBUSDT","ETHUSDT"]');
    }
}
