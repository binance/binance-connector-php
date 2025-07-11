<?php

/**
 * MarketMakerEndpointsApiTest
 * PHP version 8.1.
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 */

/**
 * Binance Derivatives Trading Options REST API.
 *
 * OpenAPI Specification for the Binance Derivatives Trading Options REST API
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.12.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Please update the test case below to test the endpoint.
 */

namespace Binance\Client\DerivativesTradingOptions\Test\Api;

use Binance\Client\DerivativesTradingOptions\Api\MarketMakerEndpointsApi;
use Binance\Client\DerivativesTradingOptions\Model\AutoCancelAllOpenOrdersRequest;
use Binance\Client\DerivativesTradingOptions\Model\ResetMarketMakerProtectionConfigRequest;
use Binance\Client\DerivativesTradingOptions\Model\SetAutoCancelAllOpenOrdersRequest;
use Binance\Client\DerivativesTradingOptions\Model\SetMarketMakerProtectionConfigRequest;
use Binance\Common\Configuration\ClientConfiguration;
use Binance\Common\Configuration\SignatureConfiguration;
use Binance\Common\HttpClient;
use GuzzleHttp\Psr7\Utils;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\ResponseInterface;

/**
 * MarketMakerEndpointsApiTest Class Doc Comment.
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 *
 * @internal
 *
 * @coversNothing
 */
class MarketMakerEndpointsApiTest extends TestCase
{
    public function getApiMock(&$request)
    {
        $clientMock = $this->createMock(HttpClient::class);
        $signatureConfig = new SignatureConfiguration();
        $signatureConfig->setApiKey('apiKey');
        $signatureConfig->setSecretKey('secretKey');
        $clientConfig = new ClientConfiguration();
        $clientConfig->setUrl('http://localhost:8080');
        $clientConfig->setSignatureConfiguration($signatureConfig);
        $responseMock = $this->createMock(ResponseInterface::class);

        $responseMock->expects($this->any())
            ->method('getStatusCode')
            ->willReturn(200)
        ;

        $responseMock->expects($this->any())
            ->method('getBody')
            ->willReturn(Utils::streamFor('{}'))
        ;

        $clientMock->expects($this->once())
            ->method('send')
            ->will($this->returnCallback(function ($actualRequest) use (&$request, $responseMock) {
                $request = $actualRequest;

                return $responseMock;
            }))
        ;

        $apiMock = $this->getMockBuilder(MarketMakerEndpointsApi::class)
            ->setConstructorArgs([$clientConfig, $clientMock])
            ->onlyMethods(['getTimestamp'])
            ->getMock()
        ;

        $apiMock->method('getTimestamp')->willReturn('1736393892000');

        return $apiMock;
    }

    /**
     * Test case for autoCancelAllOpenOrders.
     *
     * Auto-Cancel All Open Orders (Kill-Switch) Heartbeat (TRADE).
     */
    public function testAutoCancelAllOpenOrders()
    {
        $autoCancelAllOpenOrdersRequest = new AutoCancelAllOpenOrdersRequest();
        $autoCancelAllOpenOrdersRequest->setUnderlyings('');

        $response = $this->getApiMock($request)->autoCancelAllOpenOrders($autoCancelAllOpenOrdersRequest);

        parse_str($request->getUri(), $queryMap);

        self::assertEquals(200, $response->getStatusCode());
        self::assertEquals('/eapi/v1/countdownCancelAllHeartBeat', $request->getUri()->getPath());
        self::assertEquals('4129f46a4fb2099fbedc404c36604657f59c629c64d7903ed9f4cd144fe3428d', $queryMap['signature']);
    }

    /**
     * Test case for getAutoCancelAllOpenOrders.
     *
     * Get Auto-Cancel All Open Orders (Kill-Switch) Config (TRADE).
     */
    public function testGetAutoCancelAllOpenOrders()
    {
        $underlying = '';
        $recvWindow = 5000;
        $response = $this->getApiMock($request)->getAutoCancelAllOpenOrders($underlying, $recvWindow);

        parse_str($request->getUri(), $queryMap);

        self::assertEquals(200, $response->getStatusCode());
        self::assertEquals('/eapi/v1/countdownCancelAll', $request->getUri()->getPath());
        self::assertEquals('2cdd1e484bce80021437bee6b762e6a276b1954c3a0c011a16f6f2f6a47aba75', $queryMap['signature']);
    }

    /**
     * Test case for getMarketMakerProtectionConfig.
     *
     * Get Market Maker Protection Config (TRADE).
     */
    public function testGetMarketMakerProtectionConfig()
    {
        $underlying = '';
        $recvWindow = 5000;
        $response = $this->getApiMock($request)->getMarketMakerProtectionConfig($underlying, $recvWindow);

        parse_str($request->getUri(), $queryMap);

        self::assertEquals(200, $response->getStatusCode());
        self::assertEquals('/eapi/v1/mmp', $request->getUri()->getPath());
        self::assertEquals('2cdd1e484bce80021437bee6b762e6a276b1954c3a0c011a16f6f2f6a47aba75', $queryMap['signature']);
    }

    /**
     * Test case for optionMarginAccountInformation.
     *
     * Option Margin Account Information (USER_DATA).
     */
    public function testOptionMarginAccountInformation()
    {
        $recvWindow = 5000;
        $response = $this->getApiMock($request)->optionMarginAccountInformation($recvWindow);

        parse_str($request->getUri(), $queryMap);

        self::assertEquals(200, $response->getStatusCode());
        self::assertEquals('/eapi/v1/marginAccount', $request->getUri()->getPath());
        self::assertEquals('2cdd1e484bce80021437bee6b762e6a276b1954c3a0c011a16f6f2f6a47aba75', $queryMap['signature']);
    }

    /**
     * Test case for resetMarketMakerProtectionConfig.
     *
     * Reset Market Maker Protection Config (TRADE).
     */
    public function testResetMarketMakerProtectionConfig()
    {
        $resetMarketMakerProtectionConfigRequest = new ResetMarketMakerProtectionConfigRequest();

        $response = $this->getApiMock($request)->resetMarketMakerProtectionConfig($resetMarketMakerProtectionConfigRequest);

        parse_str($request->getUri(), $queryMap);

        self::assertEquals(200, $response->getStatusCode());
        self::assertEquals('/eapi/v1/mmpReset', $request->getUri()->getPath());
        self::assertEquals('dc0def720e795be0f84b02a8fa211ecc3a27dd06ffdbd287a679f1321807f820', $queryMap['signature']);
    }

    /**
     * Test case for setAutoCancelAllOpenOrders.
     *
     * Set Auto-Cancel All Open Orders (Kill-Switch) Config (TRADE).
     */
    public function testSetAutoCancelAllOpenOrders()
    {
        $setAutoCancelAllOpenOrdersRequest = new SetAutoCancelAllOpenOrdersRequest();
        $setAutoCancelAllOpenOrdersRequest->setUnderlying('');
        $setAutoCancelAllOpenOrdersRequest->setCountdownTime(100);

        $response = $this->getApiMock($request)->setAutoCancelAllOpenOrders($setAutoCancelAllOpenOrdersRequest);

        parse_str($request->getUri(), $queryMap);

        self::assertEquals(200, $response->getStatusCode());
        self::assertEquals('/eapi/v1/countdownCancelAll', $request->getUri()->getPath());
        self::assertEquals('2a6a8357653f444de03f2fa97dd19a78b1b6459ce33a8cba863c08cc2228110d', $queryMap['signature']);
    }

    /**
     * Test case for setMarketMakerProtectionConfig.
     *
     * Set Market Maker Protection Config (TRADE).
     */
    public function testSetMarketMakerProtectionConfig()
    {
        $setMarketMakerProtectionConfigRequest = new SetMarketMakerProtectionConfigRequest();

        $response = $this->getApiMock($request)->setMarketMakerProtectionConfig($setMarketMakerProtectionConfigRequest);

        parse_str($request->getUri(), $queryMap);

        self::assertEquals(200, $response->getStatusCode());
        self::assertEquals('/eapi/v1/mmpSet', $request->getUri()->getPath());
        self::assertEquals('dc0def720e795be0f84b02a8fa211ecc3a27dd06ffdbd287a679f1321807f820', $queryMap['signature']);
    }
}
