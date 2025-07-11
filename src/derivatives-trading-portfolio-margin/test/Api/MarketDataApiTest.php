<?php

/**
 * MarketDataApiTest
 * PHP version 8.1.
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 */

/**
 * Binance Derivatives Trading Portfolio Margin REST API.
 *
 * OpenAPI Specification for the Binance Derivatives Trading Portfolio Margin REST API
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

namespace Binance\Client\DerivativesTradingPortfolioMargin\Test\Api;

use Binance\Client\DerivativesTradingPortfolioMargin\Api\MarketDataApi;
use Binance\Common\Configuration\ClientConfiguration;
use Binance\Common\Configuration\SignatureConfiguration;
use Binance\Common\HttpClient;
use GuzzleHttp\Psr7\Utils;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\ResponseInterface;

/**
 * MarketDataApiTest Class Doc Comment.
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
class MarketDataApiTest extends TestCase
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

        $apiMock = $this->getMockBuilder(MarketDataApi::class)
            ->setConstructorArgs([$clientConfig, $clientMock])
            ->onlyMethods(['getTimestamp'])
            ->getMock()
        ;

        $apiMock->method('getTimestamp')->willReturn('1736393892000');

        return $apiMock;
    }

    /**
     * Test case for testConnectivity.
     *
     * Test Connectivity.
     */
    public function testTestConnectivity()
    {
        $this->getApiMock($request)->testConnectivity();

        parse_str($request->getUri(), $queryMap);

        self::assertEquals('/papi/v1/ping', $request->getUri()->getPath());
        self::assertTrue(!isset($queryMap['signature']));
    }
}
