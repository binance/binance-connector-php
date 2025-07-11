<?php

/**
 * SolStakingApiTest
 * PHP version 8.1.
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 */

/**
 * Binance Staking REST API.
 *
 * OpenAPI Specification for the Binance Staking REST API
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

namespace Binance\Client\Staking\Test\Api;

use Binance\Client\Staking\Api\SolStakingApi;
use Binance\Client\Staking\Model\ClaimBoostRewardsRequest;
use Binance\Client\Staking\Model\RedeemSolRequest;
use Binance\Client\Staking\Model\SubscribeSolStakingRequest;
use Binance\Common\Configuration\ClientConfiguration;
use Binance\Common\Configuration\SignatureConfiguration;
use Binance\Common\HttpClient;
use GuzzleHttp\Psr7\Utils;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\ResponseInterface;

/**
 * SolStakingApiTest Class Doc Comment.
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
class SolStakingApiTest extends TestCase
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

        $apiMock = $this->getMockBuilder(SolStakingApi::class)
            ->setConstructorArgs([$clientConfig, $clientMock])
            ->onlyMethods(['getTimestamp'])
            ->getMock()
        ;

        $apiMock->method('getTimestamp')->willReturn('1736393892000');

        return $apiMock;
    }

    /**
     * Test case for claimBoostRewards.
     *
     * Claim Boost Rewards(TRADE).
     */
    public function testClaimBoostRewards()
    {
        $claimBoostRewardsRequest = new ClaimBoostRewardsRequest();

        $response = $this->getApiMock($request)->claimBoostRewards($claimBoostRewardsRequest);

        parse_str($request->getUri(), $queryMap);

        self::assertEquals(200, $response->getStatusCode());
        self::assertEquals('/sapi/v1/sol-staking/sol/claim', $request->getUri()->getPath());
        self::assertEquals('dc0def720e795be0f84b02a8fa211ecc3a27dd06ffdbd287a679f1321807f820', $queryMap['signature']);
    }

    /**
     * Test case for getBnsolRateHistory.
     *
     * Get BNSOL Rate History(USER_DATA).
     */
    public function testGetBnsolRateHistory()
    {
        $startTime = 1623319461670;
        $endTime = 1641782889000;
        $current = 1;
        $size = 10;
        $recvWindow = 5000;
        $response = $this->getApiMock($request)->getBnsolRateHistory($startTime, $endTime, $current, $size, $recvWindow);

        parse_str($request->getUri(), $queryMap);

        self::assertEquals(200, $response->getStatusCode());
        self::assertEquals('/sapi/v1/sol-staking/sol/history/rateHistory', $request->getUri()->getPath());
        self::assertEquals('2ecc0415a3bdb2963e8030cdf6cf00de6f49d21b71ff939dda42e5756eb8ba66', $queryMap['signature']);
    }

    /**
     * Test case for getBnsolRewardsHistory.
     *
     * Get BNSOL rewards history(USER_DATA).
     */
    public function testGetBnsolRewardsHistory()
    {
        $startTime = 1623319461670;
        $endTime = 1641782889000;
        $current = 1;
        $size = 10;
        $recvWindow = 5000;
        $response = $this->getApiMock($request)->getBnsolRewardsHistory($startTime, $endTime, $current, $size, $recvWindow);

        parse_str($request->getUri(), $queryMap);

        self::assertEquals(200, $response->getStatusCode());
        self::assertEquals('/sapi/v1/sol-staking/sol/history/bnsolRewardsHistory', $request->getUri()->getPath());
        self::assertEquals('2ecc0415a3bdb2963e8030cdf6cf00de6f49d21b71ff939dda42e5756eb8ba66', $queryMap['signature']);
    }

    /**
     * Test case for getBoostRewardsHistory.
     *
     * Get Boost Rewards History(USER_DATA).
     */
    public function testGetBoostRewardsHistory()
    {
        $type = 'CLAIM';
        $startTime = 1623319461670;
        $endTime = 1641782889000;
        $current = 1;
        $size = 10;
        $recvWindow = 5000;
        $response = $this->getApiMock($request)->getBoostRewardsHistory($type, $startTime, $endTime, $current, $size, $recvWindow);

        parse_str($request->getUri(), $queryMap);

        self::assertEquals(200, $response->getStatusCode());
        self::assertEquals('/sapi/v1/sol-staking/sol/history/boostRewardsHistory', $request->getUri()->getPath());
        self::assertEquals('3b49d920bd981c654e636398f5d2a73462a09fa7360871b5ecb722b787a1a351', $queryMap['signature']);
    }

    /**
     * Test case for getSolRedemptionHistory.
     *
     * Get SOL redemption history(USER_DATA).
     */
    public function testGetSolRedemptionHistory()
    {
        $startTime = 1623319461670;
        $endTime = 1641782889000;
        $current = 1;
        $size = 10;
        $recvWindow = 5000;
        $response = $this->getApiMock($request)->getSolRedemptionHistory($startTime, $endTime, $current, $size, $recvWindow);

        parse_str($request->getUri(), $queryMap);

        self::assertEquals(200, $response->getStatusCode());
        self::assertEquals('/sapi/v1/sol-staking/sol/history/redemptionHistory', $request->getUri()->getPath());
        self::assertEquals('2ecc0415a3bdb2963e8030cdf6cf00de6f49d21b71ff939dda42e5756eb8ba66', $queryMap['signature']);
    }

    /**
     * Test case for getSolStakingHistory.
     *
     * Get SOL staking history(USER_DATA).
     */
    public function testGetSolStakingHistory()
    {
        $startTime = 1623319461670;
        $endTime = 1641782889000;
        $current = 1;
        $size = 10;
        $recvWindow = 5000;
        $response = $this->getApiMock($request)->getSolStakingHistory($startTime, $endTime, $current, $size, $recvWindow);

        parse_str($request->getUri(), $queryMap);

        self::assertEquals(200, $response->getStatusCode());
        self::assertEquals('/sapi/v1/sol-staking/sol/history/stakingHistory', $request->getUri()->getPath());
        self::assertEquals('2ecc0415a3bdb2963e8030cdf6cf00de6f49d21b71ff939dda42e5756eb8ba66', $queryMap['signature']);
    }

    /**
     * Test case for getSolStakingQuotaDetails.
     *
     * Get SOL staking quota details(USER_DATA).
     */
    public function testGetSolStakingQuotaDetails()
    {
        $recvWindow = 5000;
        $response = $this->getApiMock($request)->getSolStakingQuotaDetails($recvWindow);

        parse_str($request->getUri(), $queryMap);

        self::assertEquals(200, $response->getStatusCode());
        self::assertEquals('/sapi/v1/sol-staking/sol/quota', $request->getUri()->getPath());
        self::assertEquals('2cdd1e484bce80021437bee6b762e6a276b1954c3a0c011a16f6f2f6a47aba75', $queryMap['signature']);
    }

    /**
     * Test case for getUnclaimedRewards.
     *
     * Get Unclaimed Rewards(USER_DATA).
     */
    public function testGetUnclaimedRewards()
    {
        $recvWindow = 5000;
        $response = $this->getApiMock($request)->getUnclaimedRewards($recvWindow);

        parse_str($request->getUri(), $queryMap);

        self::assertEquals(200, $response->getStatusCode());
        self::assertEquals('/sapi/v1/sol-staking/sol/history/unclaimedRewards', $request->getUri()->getPath());
        self::assertEquals('2cdd1e484bce80021437bee6b762e6a276b1954c3a0c011a16f6f2f6a47aba75', $queryMap['signature']);
    }

    /**
     * Test case for redeemSol.
     *
     * Redeem SOL(TRADE).
     */
    public function testRedeemSol()
    {
        $redeemSolRequest = new RedeemSolRequest();
        $redeemSolRequest->setAmount(1.0);

        $response = $this->getApiMock($request)->redeemSol($redeemSolRequest);

        parse_str($request->getUri(), $queryMap);

        self::assertEquals(200, $response->getStatusCode());
        self::assertEquals('/sapi/v1/sol-staking/sol/redeem', $request->getUri()->getPath());
        self::assertEquals('50d24733794b928836575c346769be26ee1fb5ffbf73f36933cd22c50116f74e', $queryMap['signature']);
    }

    /**
     * Test case for solStakingAccount.
     *
     * SOL Staking account(USER_DATA).
     */
    public function testSolStakingAccount()
    {
        $recvWindow = 5000;
        $response = $this->getApiMock($request)->solStakingAccount($recvWindow);

        parse_str($request->getUri(), $queryMap);

        self::assertEquals(200, $response->getStatusCode());
        self::assertEquals('/sapi/v1/sol-staking/account', $request->getUri()->getPath());
        self::assertEquals('2cdd1e484bce80021437bee6b762e6a276b1954c3a0c011a16f6f2f6a47aba75', $queryMap['signature']);
    }

    /**
     * Test case for subscribeSolStaking.
     *
     * Subscribe SOL Staking(TRADE).
     */
    public function testSubscribeSolStaking()
    {
        $subscribeSolStakingRequest = new SubscribeSolStakingRequest();
        $subscribeSolStakingRequest->setAmount(1.0);

        $response = $this->getApiMock($request)->subscribeSolStaking($subscribeSolStakingRequest);

        parse_str($request->getUri(), $queryMap);

        self::assertEquals(200, $response->getStatusCode());
        self::assertEquals('/sapi/v1/sol-staking/sol/stake', $request->getUri()->getPath());
        self::assertEquals('50d24733794b928836575c346769be26ee1fb5ffbf73f36933cd22c50116f74e', $queryMap['signature']);
    }
}
