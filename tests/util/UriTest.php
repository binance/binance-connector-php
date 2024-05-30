<?php

namespace Binance\Util;

use PHPUnit\Framework\TestCase;

final class UriTest extends TestCase
{
    public function testEncodeUrl(): void
    {
        $this->assertEquals(Url::buildQuery([]), '');
        $this->assertEquals(Url::buildQuery(['foo' => 'bar']), 'foo=bar');
        $this->assertEquals(Url::buildQuery(['foo' => true]), 'foo=true');
        $this->assertEquals(Url::buildQuery(['foo' => True]), 'foo=true');
        $this->assertEquals(Url::buildQuery(['foo' => TRUE]), 'foo=true');
        $this->assertEquals(Url::buildQuery(['foo' => false]), 'foo=false');
        $this->assertEquals(Url::buildQuery(['foo' => False]), 'foo=false');
        $this->assertEquals(Url::buildQuery(['foo' => FALSE]), 'foo=false');
        $this->assertEquals(Url::buildQuery(['foo' => 'bar', 'key' => 'value']), 'foo=bar&key=value');
        $this->assertEquals(Url::buildQuery(['foo' => ['bar', 'baz']]), 'foo=bar&foo=baz');
        $this->assertEquals(Url::buildQuery(['foo' => ['bar', 'baz'], 'key' => 'value']), 'foo=bar&foo=baz&key=value');
        $this->assertEquals(Url::buildQuery(['foo' => 'alice@email.com']), 'foo=alice%40email.com');
    }
}
