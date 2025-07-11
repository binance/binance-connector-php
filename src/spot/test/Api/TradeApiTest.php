<?php

/**
 * TradeApiTest
 * PHP version 8.1.
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 */

/**
 * Binance Spot REST API.
 *
 * OpenAPI Specifications for the Binance Spot REST API  API documents:   - [Github rest-api documentation file](https://github.com/binance/binance-spot-api-docs/blob/master/rest-api.md)   - [General API information for rest-api on website](https://developers.binance.com/docs/binance-spot-api-docs/rest-api/general-api-information)
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

namespace Binance\Client\Spot\Test\Api;

use Binance\Client\Spot\Api\TradeApi;
use Binance\Client\Spot\Model\AboveType;
use Binance\Client\Spot\Model\BelowType;
use Binance\Client\Spot\Model\CancelReplaceMode;
use Binance\Client\Spot\Model\CancelRestrictions;
use Binance\Client\Spot\Model\NewOrderRequest;
use Binance\Client\Spot\Model\OrderAmendKeepPriorityRequest;
use Binance\Client\Spot\Model\OrderCancelReplaceRequest;
use Binance\Client\Spot\Model\OrderListOcoRequest;
use Binance\Client\Spot\Model\OrderListOtocoRequest;
use Binance\Client\Spot\Model\OrderListOtoRequest;
use Binance\Client\Spot\Model\OrderOcoRequest;
use Binance\Client\Spot\Model\OrderTestRequest;
use Binance\Client\Spot\Model\OrderType;
use Binance\Client\Spot\Model\PendingAboveType;
use Binance\Client\Spot\Model\PendingSide;
use Binance\Client\Spot\Model\PendingType;
use Binance\Client\Spot\Model\Side;
use Binance\Client\Spot\Model\SorOrderRequest;
use Binance\Client\Spot\Model\SorOrderTestRequest;
use Binance\Client\Spot\Model\WorkingSide;
use Binance\Client\Spot\Model\WorkingType;
use Binance\Common\Configuration\ClientConfiguration;
use Binance\Common\Configuration\SignatureConfiguration;
use Binance\Common\HttpClient;
use GuzzleHttp\Psr7\Utils;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\ResponseInterface;

/**
 * TradeApiTest Class Doc Comment.
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
class TradeApiTest extends TestCase
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

        $apiMock = $this->getMockBuilder(TradeApi::class)
            ->setConstructorArgs([$clientConfig, $clientMock])
            ->onlyMethods(['getTimestamp'])
            ->getMock()
        ;

        $apiMock->method('getTimestamp')->willReturn('1736393892000');

        return $apiMock;
    }

    /**
     * Test case for deleteOpenOrders.
     *
     * Cancel All Open Orders on a Symbol.
     */
    public function testDeleteOpenOrders()
    {
        $symbol = 'BNBUSDT';
        $recvWindow = 5000;
        $response = $this->getApiMock($request)->deleteOpenOrders($symbol, $recvWindow);

        parse_str($request->getUri(), $queryMap);

        self::assertEquals(200, $response->getStatusCode());
        self::assertEquals('/api/v3/openOrders', $request->getUri()->getPath());
        self::assertEquals('1c2ec70499498e5c5d2f4e98a7e24c74f2801642a8c3743d289dbfc1ca00c7a8', $queryMap['signature']);
    }

    /**
     * Test case for deleteOrder.
     *
     * Cancel order.
     */
    public function testDeleteOrder()
    {
        $symbol = 'BNBUSDT';
        $orderId = 1;
        $origClientOrderId = '';
        $newClientOrderId = '';
        $cancelRestrictions = CancelRestrictions::ONLY_NEW;
        $recvWindow = 5000;
        $response = $this->getApiMock($request)->deleteOrder($symbol, $orderId, $origClientOrderId, $newClientOrderId, $cancelRestrictions, $recvWindow);

        parse_str($request->getUri(), $queryMap);

        self::assertEquals(200, $response->getStatusCode());
        self::assertEquals('/api/v3/order', $request->getUri()->getPath());
        self::assertEquals('12e4af94c736cc65297422c028db3cb465b13d0323cf9d340feef8de24d4b188', $queryMap['signature']);
    }

    /**
     * Test case for deleteOrderList.
     *
     * Cancel Order list.
     */
    public function testDeleteOrderList()
    {
        $symbol = 'BNBUSDT';
        $orderListId = 1;
        $listClientOrderId = '';
        $newClientOrderId = '';
        $recvWindow = 5000;
        $response = $this->getApiMock($request)->deleteOrderList($symbol, $orderListId, $listClientOrderId, $newClientOrderId, $recvWindow);

        parse_str($request->getUri(), $queryMap);

        self::assertEquals(200, $response->getStatusCode());
        self::assertEquals('/api/v3/orderList', $request->getUri()->getPath());
        self::assertEquals('f086ea0b06332bb77ec11dc46106a57edba4fdd0261e1cf2bf9f0e295e3847b8', $queryMap['signature']);
    }

    /**
     * Test case for newOrder.
     *
     * New order.
     */
    public function testNewOrder()
    {
        $newOrderRequest = new NewOrderRequest();
        $newOrderRequest->setSymbol('BNBUSDT');
        $newOrderRequest->setSide(Side::BUY);
        $newOrderRequest->setType(OrderType::MARKET);

        $response = $this->getApiMock($request)->newOrder($newOrderRequest);

        parse_str($request->getUri(), $queryMap);

        self::assertEquals(200, $response->getStatusCode());
        self::assertEquals('/api/v3/order', $request->getUri()->getPath());
        self::assertEquals('6486465768232440fc305256c99d50fa366fe8e7f0e7be813f78507f50e0cb4c', $queryMap['signature']);
    }

    /**
     * Test case for orderAmendKeepPriority.
     *
     * Order Amend Keep Priority.
     */
    public function testOrderAmendKeepPriority()
    {
        $orderAmendKeepPriorityRequest = new OrderAmendKeepPriorityRequest();
        $orderAmendKeepPriorityRequest->setSymbol('BNBUSDT');
        $orderAmendKeepPriorityRequest->setNewQty(1.0);

        $response = $this->getApiMock($request)->orderAmendKeepPriority($orderAmendKeepPriorityRequest);

        parse_str($request->getUri(), $queryMap);

        self::assertEquals(200, $response->getStatusCode());
        self::assertEquals('/api/v3/order/amend/keepPriority', $request->getUri()->getPath());
        self::assertEquals('bce2a28518ffdef10f2bab36ddef1de42f72a3ebc64bcbf9438888f6591b7ad8', $queryMap['signature']);
    }

    /**
     * Test case for orderCancelReplace.
     *
     * Cancel an Existing Order and Send a New Order.
     */
    public function testOrderCancelReplace()
    {
        $orderCancelReplaceRequest = new OrderCancelReplaceRequest();
        $orderCancelReplaceRequest->setSymbol('BNBUSDT');
        $orderCancelReplaceRequest->setSide(Side::BUY);
        $orderCancelReplaceRequest->setType(OrderType::MARKET);
        $orderCancelReplaceRequest->setCancelReplaceMode(CancelReplaceMode::STOP_ON_FAILURE);

        $response = $this->getApiMock($request)->orderCancelReplace($orderCancelReplaceRequest);

        parse_str($request->getUri(), $queryMap);

        self::assertEquals(200, $response->getStatusCode());
        self::assertEquals('/api/v3/order/cancelReplace', $request->getUri()->getPath());
        self::assertEquals('b6808573e4dde9e77f712e393259a5802e1ab8bcab3342ac2f50b81cf5c99f38', $queryMap['signature']);
    }

    /**
     * Test case for orderListOco.
     *
     * New Order list - OCO.
     */
    public function testOrderListOco()
    {
        $orderListOcoRequest = new OrderListOcoRequest();
        $orderListOcoRequest->setSymbol('BNBUSDT');
        $orderListOcoRequest->setSide(Side::BUY);
        $orderListOcoRequest->setQuantity(1.0);
        $orderListOcoRequest->setAboveType(AboveType::STOP_LOSS_LIMIT);
        $orderListOcoRequest->setBelowType(BelowType::STOP_LOSS);

        $response = $this->getApiMock($request)->orderListOco($orderListOcoRequest);

        parse_str($request->getUri(), $queryMap);

        self::assertEquals(200, $response->getStatusCode());
        self::assertEquals('/api/v3/orderList/oco', $request->getUri()->getPath());
        self::assertEquals('964bab37a4513f75fee56bdf3acd3f3c340e51765c31b19cbffd21aa88c648fb', $queryMap['signature']);
    }

    /**
     * Test case for orderListOto.
     *
     * New Order list - OTO.
     */
    public function testOrderListOto()
    {
        $orderListOtoRequest = new OrderListOtoRequest();
        $orderListOtoRequest->setSymbol('BNBUSDT');
        $orderListOtoRequest->setWorkingType(WorkingType::LIMIT);
        $orderListOtoRequest->setWorkingSide(WorkingSide::BUY);
        $orderListOtoRequest->setWorkingPrice(1.0);
        $orderListOtoRequest->setWorkingQuantity(1.0);
        $orderListOtoRequest->setPendingType(PendingType::LIMIT);
        $orderListOtoRequest->setPendingSide(PendingSide::BUY);
        $orderListOtoRequest->setPendingQuantity(1.0);

        $response = $this->getApiMock($request)->orderListOto($orderListOtoRequest);

        parse_str($request->getUri(), $queryMap);

        self::assertEquals(200, $response->getStatusCode());
        self::assertEquals('/api/v3/orderList/oto', $request->getUri()->getPath());
        self::assertEquals('c4e5718c315eab0f4c0f6ca013eb1f552a3180803226000f03d8039b3796c8c9', $queryMap['signature']);
    }

    /**
     * Test case for orderListOtoco.
     *
     * New Order list - OTOCO.
     */
    public function testOrderListOtoco()
    {
        $orderListOtocoRequest = new OrderListOtocoRequest();
        $orderListOtocoRequest->setSymbol('BNBUSDT');
        $orderListOtocoRequest->setWorkingType(WorkingType::LIMIT);
        $orderListOtocoRequest->setWorkingSide(WorkingSide::BUY);
        $orderListOtocoRequest->setWorkingPrice(1.0);
        $orderListOtocoRequest->setWorkingQuantity(1.0);
        $orderListOtocoRequest->setPendingSide(PendingSide::BUY);
        $orderListOtocoRequest->setPendingQuantity(1.0);
        $orderListOtocoRequest->setPendingAboveType(PendingAboveType::STOP_LOSS_LIMIT);

        $response = $this->getApiMock($request)->orderListOtoco($orderListOtocoRequest);

        parse_str($request->getUri(), $queryMap);

        self::assertEquals(200, $response->getStatusCode());
        self::assertEquals('/api/v3/orderList/otoco', $request->getUri()->getPath());
        self::assertEquals('bc01989c6a85022fa58c76bb64af922c94c45836b7364fb6db45aec62d9c98b2', $queryMap['signature']);
    }

    /**
     * Test case for orderOco.
     *
     * New OCO - Deprecated.
     */
    public function testOrderOco()
    {
        $orderOcoRequest = new OrderOcoRequest();
        $orderOcoRequest->setSymbol('BNBUSDT');
        $orderOcoRequest->setSide(Side::BUY);
        $orderOcoRequest->setQuantity(1.0);
        $orderOcoRequest->setPrice(1.0);
        $orderOcoRequest->setStopPrice(1.0);

        $response = $this->getApiMock($request)->orderOco($orderOcoRequest);

        parse_str($request->getUri(), $queryMap);

        self::assertEquals(200, $response->getStatusCode());
        self::assertEquals('/api/v3/order/oco', $request->getUri()->getPath());
        self::assertEquals('d58c5b2cafb9b07b72b396807cf381cf7519fa968c4ce9edd42238aebfefb1c6', $queryMap['signature']);
    }

    /**
     * Test case for orderTest.
     *
     * Test new order.
     */
    public function testOrderTest()
    {
        $orderTestRequest = new OrderTestRequest();

        $response = $this->getApiMock($request)->orderTest($orderTestRequest);

        parse_str($request->getUri(), $queryMap);

        self::assertEquals(200, $response->getStatusCode());
        self::assertEquals('/api/v3/order/test', $request->getUri()->getPath());
        self::assertEquals('dc0def720e795be0f84b02a8fa211ecc3a27dd06ffdbd287a679f1321807f820', $queryMap['signature']);
    }

    /**
     * Test case for sorOrder.
     *
     * New order using SOR.
     */
    public function testSorOrder()
    {
        $sorOrderRequest = new SorOrderRequest();
        $sorOrderRequest->setSymbol('BNBUSDT');
        $sorOrderRequest->setSide(Side::BUY);
        $sorOrderRequest->setType(OrderType::MARKET);
        $sorOrderRequest->setQuantity(1.0);

        $response = $this->getApiMock($request)->sorOrder($sorOrderRequest);

        parse_str($request->getUri(), $queryMap);

        self::assertEquals(200, $response->getStatusCode());
        self::assertEquals('/api/v3/sor/order', $request->getUri()->getPath());
        self::assertEquals('e9289702563a0dc27ffd922ffbbc23ee67c71cb522fe89e3427948849d49b7d0', $queryMap['signature']);
    }

    /**
     * Test case for sorOrderTest.
     *
     * Test new order using SOR.
     */
    public function testSorOrderTest()
    {
        $sorOrderTestRequest = new SorOrderTestRequest();

        $response = $this->getApiMock($request)->sorOrderTest($sorOrderTestRequest);

        parse_str($request->getUri(), $queryMap);

        self::assertEquals(200, $response->getStatusCode());
        self::assertEquals('/api/v3/sor/order/test', $request->getUri()->getPath());
        self::assertEquals('dc0def720e795be0f84b02a8fa211ecc3a27dd06ffdbd287a679f1321807f820', $queryMap['signature']);
    }
}
