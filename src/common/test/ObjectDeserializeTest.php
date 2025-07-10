<?php

namespace Binance\Client\Common\Test;

use Binance\Common\ObjectSerializer;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 *
 * @coversNothing
 */
class ObjectDeserializeTest extends TestCase
{
    public function testDeserializeGenericModel()
    {
        $data = $this->getFixture('generic');
        $result = ObjectSerializer::deserialize($data, '\Binance\Client\Spot\Model\GetAccountResponse');
        self::assertInstanceOf('\Binance\Client\Spot\Model\GetAccountResponse', $result);
        self::assertEquals('SPOT', $result->getAccountType());
    }

    public function testDeserializeArray()
    {
        $data = $this->getFixture('array');
        $result = ObjectSerializer::deserialize($data, '\Binance\Client\Spot\Model\GetTradesResponse');
        self::assertInstanceOf('\Binance\Client\Spot\Model\GetTradesResponse', $result);
        self::assertEquals(5, count($result->getItems()));
        self::assertInstanceOf('\Binance\Client\Spot\Model\HistoricalTradesResponseInner', $result->getItems()[0]);
    }

    public function testDeserializeOneOfModel()
    {
        $data = $this->getFixture('oneof_model');
        $result = ObjectSerializer::deserialize($data, '\Binance\Client\Spot\Model\Ticker24hrResponse');
        self::assertInstanceOf('\Binance\Client\Spot\Model\Ticker24hrResponse1', $result->getInstance());
    }

    public function testDeserializeOneOfArray()
    {
        $data = $this->getFixture('oneof_array');
        $result = ObjectSerializer::deserialize($data, '\Binance\Client\Spot\Model\Ticker24hrResponse');
        self::assertInstanceOf('\Binance\Client\Spot\Model\Ticker24hrResponse2', $result->getInstance());
    }

    public function testDeserializeFallbackString()
    {
        $data = $this->getFixture('fallback_string');
        $result = ObjectSerializer::deserialize($data, '\Binance\Client\Spot\Model\KlinesResponse');
        self::assertInstanceOf('\Binance\Client\Spot\Model\KlinesResponse', $result);
        self::assertEquals(4, count($result->getItems()));
    }

    protected function getFixture($type)
    {
        return json_decode(file_get_contents(__DIR__.'/fixtures/'.$type.'.json'));
    }
}
