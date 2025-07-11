<?php

/**
 * MarginAccountNewOtoRequest.
 *
 * PHP version 8.1
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 */

/**
 * Binance Margin Trading REST API.
 *
 * OpenAPI Specification for the Binance Margin Trading REST API
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.12.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Binance\Client\MarginTrading\Model;

use Binance\Common\Dtos\ModelInterface;
use Binance\Common\ObjectSerializer;

/**
 * MarginAccountNewOtoRequest Class Doc Comment.
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 *
 * @implements \ArrayAccess<string, mixed>
 */
class MarginAccountNewOtoRequest implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'marginAccountNewOtoRequest';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'symbol' => 'string',
        'isIsolated' => 'string',
        'listClientOrderId' => 'string',
        'newOrderRespType' => '\Binance\Client\MarginTrading\Model\NewOrderRespType',
        'sideEffectType' => 'string',
        'selfTradePreventionMode' => 'string',
        'autoRepayAtCancel' => 'bool',
        'workingType' => 'string',
        'workingSide' => 'string',
        'workingClientOrderId' => 'string',
        'workingPrice' => 'float',
        'workingQuantity' => 'float',
        'workingIcebergQty' => 'float',
        'workingTimeInForce' => 'string',
        'pendingType' => 'string',
        'pendingSide' => 'string',
        'pendingClientOrderId' => 'string',
        'pendingPrice' => 'float',
        'pendingStopPrice' => 'float',
        'pendingTrailingDelta' => 'float',
        'pendingQuantity' => 'float',
        'pendingIcebergQty' => 'float',
        'pendingTimeInForce' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     *
     * @phpstan-var array<string, string|null>
     *
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'symbol' => null,
        'isIsolated' => null,
        'listClientOrderId' => null,
        'newOrderRespType' => null,
        'sideEffectType' => null,
        'selfTradePreventionMode' => null,
        'autoRepayAtCancel' => null,
        'workingType' => null,
        'workingSide' => null,
        'workingClientOrderId' => null,
        'workingPrice' => 'float',
        'workingQuantity' => 'float',
        'workingIcebergQty' => 'float',
        'workingTimeInForce' => null,
        'pendingType' => null,
        'pendingSide' => null,
        'pendingClientOrderId' => null,
        'pendingPrice' => 'float',
        'pendingStopPrice' => 'float',
        'pendingTrailingDelta' => 'float',
        'pendingQuantity' => 'float',
        'pendingIcebergQty' => 'float',
        'pendingTimeInForce' => null,
    ];

    /**
     * Array of nullable properties. Used for (de)serialization.
     *
     * @var bool[]
     */
    protected static array $openAPINullables = [
        'symbol' => false,
        'isIsolated' => false,
        'listClientOrderId' => false,
        'newOrderRespType' => false,
        'sideEffectType' => false,
        'selfTradePreventionMode' => false,
        'autoRepayAtCancel' => false,
        'workingType' => false,
        'workingSide' => false,
        'workingClientOrderId' => false,
        'workingPrice' => false,
        'workingQuantity' => false,
        'workingIcebergQty' => false,
        'workingTimeInForce' => false,
        'pendingType' => false,
        'pendingSide' => false,
        'pendingClientOrderId' => false,
        'pendingPrice' => false,
        'pendingStopPrice' => false,
        'pendingTrailingDelta' => false,
        'pendingQuantity' => false,
        'pendingIcebergQty' => false,
        'pendingTimeInForce' => false,
    ];

    /**
     * If a nullable field gets set to null, insert it here.
     *
     * @var bool[]
     */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'symbol' => 'symbol',
        'isIsolated' => 'isIsolated',
        'listClientOrderId' => 'listClientOrderId',
        'newOrderRespType' => 'newOrderRespType',
        'sideEffectType' => 'sideEffectType',
        'selfTradePreventionMode' => 'selfTradePreventionMode',
        'autoRepayAtCancel' => 'autoRepayAtCancel',
        'workingType' => 'workingType',
        'workingSide' => 'workingSide',
        'workingClientOrderId' => 'workingClientOrderId',
        'workingPrice' => 'workingPrice',
        'workingQuantity' => 'workingQuantity',
        'workingIcebergQty' => 'workingIcebergQty',
        'workingTimeInForce' => 'workingTimeInForce',
        'pendingType' => 'pendingType',
        'pendingSide' => 'pendingSide',
        'pendingClientOrderId' => 'pendingClientOrderId',
        'pendingPrice' => 'pendingPrice',
        'pendingStopPrice' => 'pendingStopPrice',
        'pendingTrailingDelta' => 'pendingTrailingDelta',
        'pendingQuantity' => 'pendingQuantity',
        'pendingIcebergQty' => 'pendingIcebergQty',
        'pendingTimeInForce' => 'pendingTimeInForce',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'symbol' => 'setSymbol',
        'isIsolated' => 'setIsIsolated',
        'listClientOrderId' => 'setListClientOrderId',
        'newOrderRespType' => 'setNewOrderRespType',
        'sideEffectType' => 'setSideEffectType',
        'selfTradePreventionMode' => 'setSelfTradePreventionMode',
        'autoRepayAtCancel' => 'setAutoRepayAtCancel',
        'workingType' => 'setWorkingType',
        'workingSide' => 'setWorkingSide',
        'workingClientOrderId' => 'setWorkingClientOrderId',
        'workingPrice' => 'setWorkingPrice',
        'workingQuantity' => 'setWorkingQuantity',
        'workingIcebergQty' => 'setWorkingIcebergQty',
        'workingTimeInForce' => 'setWorkingTimeInForce',
        'pendingType' => 'setPendingType',
        'pendingSide' => 'setPendingSide',
        'pendingClientOrderId' => 'setPendingClientOrderId',
        'pendingPrice' => 'setPendingPrice',
        'pendingStopPrice' => 'setPendingStopPrice',
        'pendingTrailingDelta' => 'setPendingTrailingDelta',
        'pendingQuantity' => 'setPendingQuantity',
        'pendingIcebergQty' => 'setPendingIcebergQty',
        'pendingTimeInForce' => 'setPendingTimeInForce',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'symbol' => 'getSymbol',
        'isIsolated' => 'getIsIsolated',
        'listClientOrderId' => 'getListClientOrderId',
        'newOrderRespType' => 'getNewOrderRespType',
        'sideEffectType' => 'getSideEffectType',
        'selfTradePreventionMode' => 'getSelfTradePreventionMode',
        'autoRepayAtCancel' => 'getAutoRepayAtCancel',
        'workingType' => 'getWorkingType',
        'workingSide' => 'getWorkingSide',
        'workingClientOrderId' => 'getWorkingClientOrderId',
        'workingPrice' => 'getWorkingPrice',
        'workingQuantity' => 'getWorkingQuantity',
        'workingIcebergQty' => 'getWorkingIcebergQty',
        'workingTimeInForce' => 'getWorkingTimeInForce',
        'pendingType' => 'getPendingType',
        'pendingSide' => 'getPendingSide',
        'pendingClientOrderId' => 'getPendingClientOrderId',
        'pendingPrice' => 'getPendingPrice',
        'pendingStopPrice' => 'getPendingStopPrice',
        'pendingTrailingDelta' => 'getPendingTrailingDelta',
        'pendingQuantity' => 'getPendingQuantity',
        'pendingIcebergQty' => 'getPendingIcebergQty',
        'pendingTimeInForce' => 'getPendingTimeInForce',
    ];

    /**
     * Associative array for storing property values.
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor.
     *
     * @param null|mixed[] $data Associated array of property values
     *                           initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('symbol', $data ?? [], null);
        $this->setIfExists('isIsolated', $data ?? [], null);
        $this->setIfExists('listClientOrderId', $data ?? [], null);
        $this->setIfExists('newOrderRespType', $data ?? [], null);
        $this->setIfExists('sideEffectType', $data ?? [], null);
        $this->setIfExists('selfTradePreventionMode', $data ?? [], null);
        $this->setIfExists('autoRepayAtCancel', $data ?? [], null);
        $this->setIfExists('workingType', $data ?? [], null);
        $this->setIfExists('workingSide', $data ?? [], null);
        $this->setIfExists('workingClientOrderId', $data ?? [], null);
        $this->setIfExists('workingPrice', $data ?? [], null);
        $this->setIfExists('workingQuantity', $data ?? [], null);
        $this->setIfExists('workingIcebergQty', $data ?? [], null);
        $this->setIfExists('workingTimeInForce', $data ?? [], null);
        $this->setIfExists('pendingType', $data ?? [], null);
        $this->setIfExists('pendingSide', $data ?? [], null);
        $this->setIfExists('pendingClientOrderId', $data ?? [], null);
        $this->setIfExists('pendingPrice', $data ?? [], null);
        $this->setIfExists('pendingStopPrice', $data ?? [], null);
        $this->setIfExists('pendingTrailingDelta', $data ?? [], null);
        $this->setIfExists('pendingQuantity', $data ?? [], null);
        $this->setIfExists('pendingIcebergQty', $data ?? [], null);
        $this->setIfExists('pendingTimeInForce', $data ?? [], null);
    }

    /**
     * Gets the string presentation of the object.
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * If oneOf schema, get the possible response types.
     */
    public static function getComposedSchemas(): array
    {
        return [
        ];
    }

    /**
     * Return true if the model is an array.
     */
    public static function isArray(): bool
    {
        return false;
    }

    /**
     * Checks if a property is nullable.
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null === $this->container['symbol']) {
            $invalidProperties[] = "'symbol' can't be null";
        }
        if (null === $this->container['workingType']) {
            $invalidProperties[] = "'workingType' can't be null";
        }
        if (null === $this->container['workingSide']) {
            $invalidProperties[] = "'workingSide' can't be null";
        }
        if (null === $this->container['workingPrice']) {
            $invalidProperties[] = "'workingPrice' can't be null";
        }
        if (null === $this->container['workingQuantity']) {
            $invalidProperties[] = "'workingQuantity' can't be null";
        }
        if (null === $this->container['workingIcebergQty']) {
            $invalidProperties[] = "'workingIcebergQty' can't be null";
        }
        if (null === $this->container['pendingType']) {
            $invalidProperties[] = "'pendingType' can't be null";
        }
        if (null === $this->container['pendingSide']) {
            $invalidProperties[] = "'pendingSide' can't be null";
        }
        if (null === $this->container['pendingQuantity']) {
            $invalidProperties[] = "'pendingQuantity' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed.
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return 0 === count($this->listInvalidProperties());
    }

    /**
     * Gets symbol.
     *
     * @return string
     */
    public function getSymbol()
    {
        return $this->container['symbol'];
    }

    /**
     * Sets symbol.
     *
     * @param string $symbol symbol
     *
     * @return self
     */
    public function setSymbol($symbol)
    {
        if (is_null($symbol)) {
            throw new \InvalidArgumentException('non-nullable symbol cannot be null');
        }
        $this->container['symbol'] = $symbol;

        return $this;
    }

    /**
     * Gets isIsolated.
     *
     * @return null|string
     */
    public function getIsIsolated()
    {
        return $this->container['isIsolated'];
    }

    /**
     * Sets isIsolated.
     *
     * @param null|string $isIsolated isIsolated
     *
     * @return self
     */
    public function setIsIsolated($isIsolated)
    {
        if (is_null($isIsolated)) {
            throw new \InvalidArgumentException('non-nullable isIsolated cannot be null');
        }
        $this->container['isIsolated'] = $isIsolated;

        return $this;
    }

    /**
     * Gets listClientOrderId.
     *
     * @return null|string
     */
    public function getListClientOrderId()
    {
        return $this->container['listClientOrderId'];
    }

    /**
     * Sets listClientOrderId.
     *
     * @param null|string $listClientOrderId listClientOrderId
     *
     * @return self
     */
    public function setListClientOrderId($listClientOrderId)
    {
        if (is_null($listClientOrderId)) {
            throw new \InvalidArgumentException('non-nullable listClientOrderId cannot be null');
        }
        $this->container['listClientOrderId'] = $listClientOrderId;

        return $this;
    }

    /**
     * Gets newOrderRespType.
     *
     * @return null|NewOrderRespType
     */
    public function getNewOrderRespType()
    {
        return $this->container['newOrderRespType'];
    }

    /**
     * Sets newOrderRespType.
     *
     * @param null|NewOrderRespType $newOrderRespType newOrderRespType
     *
     * @return self
     */
    public function setNewOrderRespType($newOrderRespType)
    {
        if (is_null($newOrderRespType)) {
            throw new \InvalidArgumentException('non-nullable newOrderRespType cannot be null');
        }
        $this->container['newOrderRespType'] = $newOrderRespType;

        return $this;
    }

    /**
     * Gets sideEffectType.
     *
     * @return null|string
     */
    public function getSideEffectType()
    {
        return $this->container['sideEffectType'];
    }

    /**
     * Sets sideEffectType.
     *
     * @param null|string $sideEffectType sideEffectType
     *
     * @return self
     */
    public function setSideEffectType($sideEffectType)
    {
        if (is_null($sideEffectType)) {
            throw new \InvalidArgumentException('non-nullable sideEffectType cannot be null');
        }
        $this->container['sideEffectType'] = $sideEffectType;

        return $this;
    }

    /**
     * Gets selfTradePreventionMode.
     *
     * @return null|string
     */
    public function getSelfTradePreventionMode()
    {
        return $this->container['selfTradePreventionMode'];
    }

    /**
     * Sets selfTradePreventionMode.
     *
     * @param null|string $selfTradePreventionMode selfTradePreventionMode
     *
     * @return self
     */
    public function setSelfTradePreventionMode($selfTradePreventionMode)
    {
        if (is_null($selfTradePreventionMode)) {
            throw new \InvalidArgumentException('non-nullable selfTradePreventionMode cannot be null');
        }
        $this->container['selfTradePreventionMode'] = $selfTradePreventionMode;

        return $this;
    }

    /**
     * Gets autoRepayAtCancel.
     *
     * @return null|bool
     */
    public function getAutoRepayAtCancel()
    {
        return $this->container['autoRepayAtCancel'];
    }

    /**
     * Sets autoRepayAtCancel.
     *
     * @param null|bool $autoRepayAtCancel autoRepayAtCancel
     *
     * @return self
     */
    public function setAutoRepayAtCancel($autoRepayAtCancel)
    {
        if (is_null($autoRepayAtCancel)) {
            throw new \InvalidArgumentException('non-nullable autoRepayAtCancel cannot be null');
        }
        $this->container['autoRepayAtCancel'] = $autoRepayAtCancel;

        return $this;
    }

    /**
     * Gets workingType.
     *
     * @return string
     */
    public function getWorkingType()
    {
        return $this->container['workingType'];
    }

    /**
     * Sets workingType.
     *
     * @param string $workingType workingType
     *
     * @return self
     */
    public function setWorkingType($workingType)
    {
        if (is_null($workingType)) {
            throw new \InvalidArgumentException('non-nullable workingType cannot be null');
        }
        $this->container['workingType'] = $workingType;

        return $this;
    }

    /**
     * Gets workingSide.
     *
     * @return string
     */
    public function getWorkingSide()
    {
        return $this->container['workingSide'];
    }

    /**
     * Sets workingSide.
     *
     * @param string $workingSide workingSide
     *
     * @return self
     */
    public function setWorkingSide($workingSide)
    {
        if (is_null($workingSide)) {
            throw new \InvalidArgumentException('non-nullable workingSide cannot be null');
        }
        $this->container['workingSide'] = $workingSide;

        return $this;
    }

    /**
     * Gets workingClientOrderId.
     *
     * @return null|string
     */
    public function getWorkingClientOrderId()
    {
        return $this->container['workingClientOrderId'];
    }

    /**
     * Sets workingClientOrderId.
     *
     * @param null|string $workingClientOrderId workingClientOrderId
     *
     * @return self
     */
    public function setWorkingClientOrderId($workingClientOrderId)
    {
        if (is_null($workingClientOrderId)) {
            throw new \InvalidArgumentException('non-nullable workingClientOrderId cannot be null');
        }
        $this->container['workingClientOrderId'] = $workingClientOrderId;

        return $this;
    }

    /**
     * Gets workingPrice.
     *
     * @return float
     */
    public function getWorkingPrice()
    {
        return $this->container['workingPrice'];
    }

    /**
     * Sets workingPrice.
     *
     * @param float $workingPrice workingPrice
     *
     * @return self
     */
    public function setWorkingPrice($workingPrice)
    {
        if (is_null($workingPrice)) {
            throw new \InvalidArgumentException('non-nullable workingPrice cannot be null');
        }
        $this->container['workingPrice'] = $workingPrice;

        return $this;
    }

    /**
     * Gets workingQuantity.
     *
     * @return float
     */
    public function getWorkingQuantity()
    {
        return $this->container['workingQuantity'];
    }

    /**
     * Sets workingQuantity.
     *
     * @param float $workingQuantity workingQuantity
     *
     * @return self
     */
    public function setWorkingQuantity($workingQuantity)
    {
        if (is_null($workingQuantity)) {
            throw new \InvalidArgumentException('non-nullable workingQuantity cannot be null');
        }
        $this->container['workingQuantity'] = $workingQuantity;

        return $this;
    }

    /**
     * Gets workingIcebergQty.
     *
     * @return float
     */
    public function getWorkingIcebergQty()
    {
        return $this->container['workingIcebergQty'];
    }

    /**
     * Sets workingIcebergQty.
     *
     * @param float $workingIcebergQty workingIcebergQty
     *
     * @return self
     */
    public function setWorkingIcebergQty($workingIcebergQty)
    {
        if (is_null($workingIcebergQty)) {
            throw new \InvalidArgumentException('non-nullable workingIcebergQty cannot be null');
        }
        $this->container['workingIcebergQty'] = $workingIcebergQty;

        return $this;
    }

    /**
     * Gets workingTimeInForce.
     *
     * @return null|string
     */
    public function getWorkingTimeInForce()
    {
        return $this->container['workingTimeInForce'];
    }

    /**
     * Sets workingTimeInForce.
     *
     * @param null|string $workingTimeInForce workingTimeInForce
     *
     * @return self
     */
    public function setWorkingTimeInForce($workingTimeInForce)
    {
        if (is_null($workingTimeInForce)) {
            throw new \InvalidArgumentException('non-nullable workingTimeInForce cannot be null');
        }
        $this->container['workingTimeInForce'] = $workingTimeInForce;

        return $this;
    }

    /**
     * Gets pendingType.
     *
     * @return string
     */
    public function getPendingType()
    {
        return $this->container['pendingType'];
    }

    /**
     * Sets pendingType.
     *
     * @param string $pendingType pendingType
     *
     * @return self
     */
    public function setPendingType($pendingType)
    {
        if (is_null($pendingType)) {
            throw new \InvalidArgumentException('non-nullable pendingType cannot be null');
        }
        $this->container['pendingType'] = $pendingType;

        return $this;
    }

    /**
     * Gets pendingSide.
     *
     * @return string
     */
    public function getPendingSide()
    {
        return $this->container['pendingSide'];
    }

    /**
     * Sets pendingSide.
     *
     * @param string $pendingSide pendingSide
     *
     * @return self
     */
    public function setPendingSide($pendingSide)
    {
        if (is_null($pendingSide)) {
            throw new \InvalidArgumentException('non-nullable pendingSide cannot be null');
        }
        $this->container['pendingSide'] = $pendingSide;

        return $this;
    }

    /**
     * Gets pendingClientOrderId.
     *
     * @return null|string
     */
    public function getPendingClientOrderId()
    {
        return $this->container['pendingClientOrderId'];
    }

    /**
     * Sets pendingClientOrderId.
     *
     * @param null|string $pendingClientOrderId pendingClientOrderId
     *
     * @return self
     */
    public function setPendingClientOrderId($pendingClientOrderId)
    {
        if (is_null($pendingClientOrderId)) {
            throw new \InvalidArgumentException('non-nullable pendingClientOrderId cannot be null');
        }
        $this->container['pendingClientOrderId'] = $pendingClientOrderId;

        return $this;
    }

    /**
     * Gets pendingPrice.
     *
     * @return null|float
     */
    public function getPendingPrice()
    {
        return $this->container['pendingPrice'];
    }

    /**
     * Sets pendingPrice.
     *
     * @param null|float $pendingPrice pendingPrice
     *
     * @return self
     */
    public function setPendingPrice($pendingPrice)
    {
        if (is_null($pendingPrice)) {
            throw new \InvalidArgumentException('non-nullable pendingPrice cannot be null');
        }
        $this->container['pendingPrice'] = $pendingPrice;

        return $this;
    }

    /**
     * Gets pendingStopPrice.
     *
     * @return null|float
     */
    public function getPendingStopPrice()
    {
        return $this->container['pendingStopPrice'];
    }

    /**
     * Sets pendingStopPrice.
     *
     * @param null|float $pendingStopPrice pendingStopPrice
     *
     * @return self
     */
    public function setPendingStopPrice($pendingStopPrice)
    {
        if (is_null($pendingStopPrice)) {
            throw new \InvalidArgumentException('non-nullable pendingStopPrice cannot be null');
        }
        $this->container['pendingStopPrice'] = $pendingStopPrice;

        return $this;
    }

    /**
     * Gets pendingTrailingDelta.
     *
     * @return null|float
     */
    public function getPendingTrailingDelta()
    {
        return $this->container['pendingTrailingDelta'];
    }

    /**
     * Sets pendingTrailingDelta.
     *
     * @param null|float $pendingTrailingDelta pendingTrailingDelta
     *
     * @return self
     */
    public function setPendingTrailingDelta($pendingTrailingDelta)
    {
        if (is_null($pendingTrailingDelta)) {
            throw new \InvalidArgumentException('non-nullable pendingTrailingDelta cannot be null');
        }
        $this->container['pendingTrailingDelta'] = $pendingTrailingDelta;

        return $this;
    }

    /**
     * Gets pendingQuantity.
     *
     * @return float
     */
    public function getPendingQuantity()
    {
        return $this->container['pendingQuantity'];
    }

    /**
     * Sets pendingQuantity.
     *
     * @param float $pendingQuantity pendingQuantity
     *
     * @return self
     */
    public function setPendingQuantity($pendingQuantity)
    {
        if (is_null($pendingQuantity)) {
            throw new \InvalidArgumentException('non-nullable pendingQuantity cannot be null');
        }
        $this->container['pendingQuantity'] = $pendingQuantity;

        return $this;
    }

    /**
     * Gets pendingIcebergQty.
     *
     * @return null|float
     */
    public function getPendingIcebergQty()
    {
        return $this->container['pendingIcebergQty'];
    }

    /**
     * Sets pendingIcebergQty.
     *
     * @param null|float $pendingIcebergQty pendingIcebergQty
     *
     * @return self
     */
    public function setPendingIcebergQty($pendingIcebergQty)
    {
        if (is_null($pendingIcebergQty)) {
            throw new \InvalidArgumentException('non-nullable pendingIcebergQty cannot be null');
        }
        $this->container['pendingIcebergQty'] = $pendingIcebergQty;

        return $this;
    }

    /**
     * Gets pendingTimeInForce.
     *
     * @return null|string
     */
    public function getPendingTimeInForce()
    {
        return $this->container['pendingTimeInForce'];
    }

    /**
     * Sets pendingTimeInForce.
     *
     * @param null|string $pendingTimeInForce pendingTimeInForce
     *
     * @return self
     */
    public function setPendingTimeInForce($pendingTimeInForce)
    {
        if (is_null($pendingTimeInForce)) {
            throw new \InvalidArgumentException('non-nullable pendingTimeInForce cannot be null');
        }
        $this->container['pendingTimeInForce'] = $pendingTimeInForce;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param int $offset Offset
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param int $offset Offset
     *
     * @return null|mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param null|int $offset Offset
     * @param mixed    $value  Value to be set
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param int $offset Offset
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     *
     * @see https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed returns data which can be serialized by json_encode(), which is a value
     *               of any type other than a resource
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets a header-safe presentation of the object.
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }

    /**
     * Array of nullable properties.
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null.
     *
     * @return bool[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null.
     *
     * @param bool[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
     * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
     * $this->openAPINullablesSetToNull array.
     *
     * @param mixed $defaultValue
     */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }
}
