<?php

/**
 * FutureAlgoApiTest
 * PHP version 8.1.
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 */

/**
 * Binance Algo REST API.
 *
 * OpenAPI Specification for the Binance Algo REST API
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

namespace Binance\Client\Algo\Test\Api;

use Binance\Client\Algo\Api\FutureAlgoApi;
use Binance\Client\Algo\Model\TimeWeightedAveragePriceFutureAlgoRequest;
use Binance\Client\Algo\Model\VolumeParticipationFutureAlgoRequest;
use Binance\Common\Configuration\ClientConfiguration;
use Binance\Common\Configuration\SignatureConfiguration;
use Binance\Common\HttpClient;
use GuzzleHttp\Psr7\Utils;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\ResponseInterface;

/**
 * FutureAlgoApiTest Class Doc Comment.
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
class FutureAlgoApiTest extends TestCase
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

        $apiMock = $this->getMockBuilder(FutureAlgoApi::class)
            ->setConstructorArgs([$clientConfig, $clientMock])
            ->onlyMethods(['getTimestamp'])
            ->getMock()
        ;

        $apiMock->method('getTimestamp')->willReturn('1736393892000');

        return $apiMock;
    }

    /**
     * Test case for cancelAlgoOrderFutureAlgo.
     *
     * Cancel Algo Order(TRADE).
     */
    public function testCancelAlgoOrderFutureAlgo()
    {
        $algoId = 1;
        $recvWindow = 5000;
        $response = $this->getApiMock($request)->cancelAlgoOrderFutureAlgo($algoId, $recvWindow);

        parse_str($request->getUri(), $queryMap);

        self::assertEquals(200, $response->getStatusCode());
        self::assertEquals('/sapi/v1/algo/futures/order', $request->getUri()->getPath());
        self::assertEquals('4dcc675276dcc7a5eddf3f11f98e221dc22b447b227be14ec73a51c61602f2a5', $queryMap['signature']);
    }

    /**
     * Test case for queryCurrentAlgoOpenOrdersFutureAlgo.
     *
     * Query Current Algo Open Orders(USER_DATA).
     */
    public function testQueryCurrentAlgoOpenOrdersFutureAlgo()
    {
        $recvWindow = 5000;
        $response = $this->getApiMock($request)->queryCurrentAlgoOpenOrdersFutureAlgo($recvWindow);

        parse_str($request->getUri(), $queryMap);

        self::assertEquals(200, $response->getStatusCode());
        self::assertEquals('/sapi/v1/algo/futures/openOrders', $request->getUri()->getPath());
        self::assertEquals('2cdd1e484bce80021437bee6b762e6a276b1954c3a0c011a16f6f2f6a47aba75', $queryMap['signature']);
    }

    /**
     * Test case for queryHistoricalAlgoOrdersFutureAlgo.
     *
     * Query Historical Algo Orders(USER_DATA).
     */
    public function testQueryHistoricalAlgoOrdersFutureAlgo()
    {
        $symbol = 'BTCUSDT';
        $side = 'BUY';
        $startTime = 1623319461670;
        $endTime = 1641782889000;
        $page = 1;
        $pageSize = 100;
        $recvWindow = 5000;
        $response = $this->getApiMock($request)->queryHistoricalAlgoOrdersFutureAlgo($symbol, $side, $startTime, $endTime, $page, $pageSize, $recvWindow);

        parse_str($request->getUri(), $queryMap);

        self::assertEquals(200, $response->getStatusCode());
        self::assertEquals('/sapi/v1/algo/futures/historicalOrders', $request->getUri()->getPath());
        self::assertEquals('0e8d5de4dda9f55852d3ecc886e0ca289d66e4696a2fc21f553d9348242a14f1', $queryMap['signature']);
    }

    /**
     * Test case for querySubOrdersFutureAlgo.
     *
     * Query Sub Orders(USER_DATA).
     */
    public function testQuerySubOrdersFutureAlgo()
    {
        $algoId = 1;
        $page = 1;
        $pageSize = 100;
        $recvWindow = 5000;
        $response = $this->getApiMock($request)->querySubOrdersFutureAlgo($algoId, $page, $pageSize, $recvWindow);

        parse_str($request->getUri(), $queryMap);

        self::assertEquals(200, $response->getStatusCode());
        self::assertEquals('/sapi/v1/algo/futures/subOrders', $request->getUri()->getPath());
        self::assertEquals('a862a7c54c6a5c1f71b2563d1d86c61f8763cb9514dc20641231cc60f7ac0445', $queryMap['signature']);
    }

    /**
     * Test case for timeWeightedAveragePriceFutureAlgo.
     *
     * Time-Weighted Average Price(Twap) New Order(TRADE).
     */
    public function testTimeWeightedAveragePriceFutureAlgo()
    {
        $timeWeightedAveragePriceFutureAlgoRequest = new TimeWeightedAveragePriceFutureAlgoRequest();
        $timeWeightedAveragePriceFutureAlgoRequest->setSymbol('BTCUSDT');
        $timeWeightedAveragePriceFutureAlgoRequest->setSide('BUY');
        $timeWeightedAveragePriceFutureAlgoRequest->setQuantity(1.0);
        $timeWeightedAveragePriceFutureAlgoRequest->setDuration(5000);

        $response = $this->getApiMock($request)->timeWeightedAveragePriceFutureAlgo($timeWeightedAveragePriceFutureAlgoRequest);

        parse_str($request->getUri(), $queryMap);

        self::assertEquals(200, $response->getStatusCode());
        self::assertEquals('/sapi/v1/algo/futures/newOrderTwap', $request->getUri()->getPath());
        self::assertEquals('40ecac51357f1acdb2a293c20f309b1e72e512ed340bef9548cc95e808a4c0a7', $queryMap['signature']);
    }

    /**
     * Test case for volumeParticipationFutureAlgo.
     *
     * Volume Participation(VP) New Order (TRADE).
     */
    public function testVolumeParticipationFutureAlgo()
    {
        $volumeParticipationFutureAlgoRequest = new VolumeParticipationFutureAlgoRequest();
        $volumeParticipationFutureAlgoRequest->setSymbol('BTCUSDT');
        $volumeParticipationFutureAlgoRequest->setSide('BUY');
        $volumeParticipationFutureAlgoRequest->setQuantity(1.0);
        $volumeParticipationFutureAlgoRequest->setUrgency('LOW');

        $response = $this->getApiMock($request)->volumeParticipationFutureAlgo($volumeParticipationFutureAlgoRequest);

        parse_str($request->getUri(), $queryMap);

        self::assertEquals(200, $response->getStatusCode());
        self::assertEquals('/sapi/v1/algo/futures/newOrderVp', $request->getUri()->getPath());
        self::assertEquals('9e2d0455a2944d1f036cd1f966b9b5c9db75725ee79e38c7f94e49cf6b30e586', $queryMap['signature']);
    }
}
