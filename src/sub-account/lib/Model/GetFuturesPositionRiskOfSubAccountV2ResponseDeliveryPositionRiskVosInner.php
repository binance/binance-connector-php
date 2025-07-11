<?php

/**
 * GetFuturesPositionRiskOfSubAccountV2ResponseDeliveryPositionRiskVosInner.
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
 * Binance Sub Account REST API.
 *
 * OpenAPI Specification for the Binance Sub Account REST API
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

namespace Binance\Client\SubAccount\Model;

use Binance\Common\Dtos\ModelInterface;
use Binance\Common\ObjectSerializer;

/**
 * GetFuturesPositionRiskOfSubAccountV2ResponseDeliveryPositionRiskVosInner Class Doc Comment.
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 *
 * @implements \ArrayAccess<string, mixed>
 */
class GetFuturesPositionRiskOfSubAccountV2ResponseDeliveryPositionRiskVosInner implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'getFuturesPositionRiskOfSubAccountV2Response_deliveryPositionRiskVos_inner';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'entryPrice' => 'string',
        'markPrice' => 'string',
        'leverage' => 'string',
        'isolated' => 'string',
        'isolatedWallet' => 'string',
        'isolatedMargin' => 'string',
        'isAutoAddMargin' => 'string',
        'positionSide' => 'string',
        'positionAmount' => 'string',
        'symbol' => 'string',
        'unrealizedProfit' => 'string',
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
        'entryPrice' => null,
        'markPrice' => null,
        'leverage' => null,
        'isolated' => null,
        'isolatedWallet' => null,
        'isolatedMargin' => null,
        'isAutoAddMargin' => null,
        'positionSide' => null,
        'positionAmount' => null,
        'symbol' => null,
        'unrealizedProfit' => null,
    ];

    /**
     * Array of nullable properties. Used for (de)serialization.
     *
     * @var bool[]
     */
    protected static array $openAPINullables = [
        'entryPrice' => false,
        'markPrice' => false,
        'leverage' => false,
        'isolated' => false,
        'isolatedWallet' => false,
        'isolatedMargin' => false,
        'isAutoAddMargin' => false,
        'positionSide' => false,
        'positionAmount' => false,
        'symbol' => false,
        'unrealizedProfit' => false,
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
        'entryPrice' => 'entryPrice',
        'markPrice' => 'markPrice',
        'leverage' => 'leverage',
        'isolated' => 'isolated',
        'isolatedWallet' => 'isolatedWallet',
        'isolatedMargin' => 'isolatedMargin',
        'isAutoAddMargin' => 'isAutoAddMargin',
        'positionSide' => 'positionSide',
        'positionAmount' => 'positionAmount',
        'symbol' => 'symbol',
        'unrealizedProfit' => 'unrealizedProfit',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'entryPrice' => 'setEntryPrice',
        'markPrice' => 'setMarkPrice',
        'leverage' => 'setLeverage',
        'isolated' => 'setIsolated',
        'isolatedWallet' => 'setIsolatedWallet',
        'isolatedMargin' => 'setIsolatedMargin',
        'isAutoAddMargin' => 'setIsAutoAddMargin',
        'positionSide' => 'setPositionSide',
        'positionAmount' => 'setPositionAmount',
        'symbol' => 'setSymbol',
        'unrealizedProfit' => 'setUnrealizedProfit',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'entryPrice' => 'getEntryPrice',
        'markPrice' => 'getMarkPrice',
        'leverage' => 'getLeverage',
        'isolated' => 'getIsolated',
        'isolatedWallet' => 'getIsolatedWallet',
        'isolatedMargin' => 'getIsolatedMargin',
        'isAutoAddMargin' => 'getIsAutoAddMargin',
        'positionSide' => 'getPositionSide',
        'positionAmount' => 'getPositionAmount',
        'symbol' => 'getSymbol',
        'unrealizedProfit' => 'getUnrealizedProfit',
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
        $this->setIfExists('entryPrice', $data ?? [], null);
        $this->setIfExists('markPrice', $data ?? [], null);
        $this->setIfExists('leverage', $data ?? [], null);
        $this->setIfExists('isolated', $data ?? [], null);
        $this->setIfExists('isolatedWallet', $data ?? [], null);
        $this->setIfExists('isolatedMargin', $data ?? [], null);
        $this->setIfExists('isAutoAddMargin', $data ?? [], null);
        $this->setIfExists('positionSide', $data ?? [], null);
        $this->setIfExists('positionAmount', $data ?? [], null);
        $this->setIfExists('symbol', $data ?? [], null);
        $this->setIfExists('unrealizedProfit', $data ?? [], null);
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
        return [];
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
     * Gets entryPrice.
     *
     * @return null|string
     */
    public function getEntryPrice()
    {
        return $this->container['entryPrice'];
    }

    /**
     * Sets entryPrice.
     *
     * @param null|string $entryPrice entryPrice
     *
     * @return self
     */
    public function setEntryPrice($entryPrice)
    {
        if (is_null($entryPrice)) {
            throw new \InvalidArgumentException('non-nullable entryPrice cannot be null');
        }
        $this->container['entryPrice'] = $entryPrice;

        return $this;
    }

    /**
     * Gets markPrice.
     *
     * @return null|string
     */
    public function getMarkPrice()
    {
        return $this->container['markPrice'];
    }

    /**
     * Sets markPrice.
     *
     * @param null|string $markPrice markPrice
     *
     * @return self
     */
    public function setMarkPrice($markPrice)
    {
        if (is_null($markPrice)) {
            throw new \InvalidArgumentException('non-nullable markPrice cannot be null');
        }
        $this->container['markPrice'] = $markPrice;

        return $this;
    }

    /**
     * Gets leverage.
     *
     * @return null|string
     */
    public function getLeverage()
    {
        return $this->container['leverage'];
    }

    /**
     * Sets leverage.
     *
     * @param null|string $leverage leverage
     *
     * @return self
     */
    public function setLeverage($leverage)
    {
        if (is_null($leverage)) {
            throw new \InvalidArgumentException('non-nullable leverage cannot be null');
        }
        $this->container['leverage'] = $leverage;

        return $this;
    }

    /**
     * Gets isolated.
     *
     * @return null|string
     */
    public function getIsolated()
    {
        return $this->container['isolated'];
    }

    /**
     * Sets isolated.
     *
     * @param null|string $isolated isolated
     *
     * @return self
     */
    public function setIsolated($isolated)
    {
        if (is_null($isolated)) {
            throw new \InvalidArgumentException('non-nullable isolated cannot be null');
        }
        $this->container['isolated'] = $isolated;

        return $this;
    }

    /**
     * Gets isolatedWallet.
     *
     * @return null|string
     */
    public function getIsolatedWallet()
    {
        return $this->container['isolatedWallet'];
    }

    /**
     * Sets isolatedWallet.
     *
     * @param null|string $isolatedWallet isolatedWallet
     *
     * @return self
     */
    public function setIsolatedWallet($isolatedWallet)
    {
        if (is_null($isolatedWallet)) {
            throw new \InvalidArgumentException('non-nullable isolatedWallet cannot be null');
        }
        $this->container['isolatedWallet'] = $isolatedWallet;

        return $this;
    }

    /**
     * Gets isolatedMargin.
     *
     * @return null|string
     */
    public function getIsolatedMargin()
    {
        return $this->container['isolatedMargin'];
    }

    /**
     * Sets isolatedMargin.
     *
     * @param null|string $isolatedMargin isolatedMargin
     *
     * @return self
     */
    public function setIsolatedMargin($isolatedMargin)
    {
        if (is_null($isolatedMargin)) {
            throw new \InvalidArgumentException('non-nullable isolatedMargin cannot be null');
        }
        $this->container['isolatedMargin'] = $isolatedMargin;

        return $this;
    }

    /**
     * Gets isAutoAddMargin.
     *
     * @return null|string
     */
    public function getIsAutoAddMargin()
    {
        return $this->container['isAutoAddMargin'];
    }

    /**
     * Sets isAutoAddMargin.
     *
     * @param null|string $isAutoAddMargin isAutoAddMargin
     *
     * @return self
     */
    public function setIsAutoAddMargin($isAutoAddMargin)
    {
        if (is_null($isAutoAddMargin)) {
            throw new \InvalidArgumentException('non-nullable isAutoAddMargin cannot be null');
        }
        $this->container['isAutoAddMargin'] = $isAutoAddMargin;

        return $this;
    }

    /**
     * Gets positionSide.
     *
     * @return null|string
     */
    public function getPositionSide()
    {
        return $this->container['positionSide'];
    }

    /**
     * Sets positionSide.
     *
     * @param null|string $positionSide positionSide
     *
     * @return self
     */
    public function setPositionSide($positionSide)
    {
        if (is_null($positionSide)) {
            throw new \InvalidArgumentException('non-nullable positionSide cannot be null');
        }
        $this->container['positionSide'] = $positionSide;

        return $this;
    }

    /**
     * Gets positionAmount.
     *
     * @return null|string
     */
    public function getPositionAmount()
    {
        return $this->container['positionAmount'];
    }

    /**
     * Sets positionAmount.
     *
     * @param null|string $positionAmount positionAmount
     *
     * @return self
     */
    public function setPositionAmount($positionAmount)
    {
        if (is_null($positionAmount)) {
            throw new \InvalidArgumentException('non-nullable positionAmount cannot be null');
        }
        $this->container['positionAmount'] = $positionAmount;

        return $this;
    }

    /**
     * Gets symbol.
     *
     * @return null|string
     */
    public function getSymbol()
    {
        return $this->container['symbol'];
    }

    /**
     * Sets symbol.
     *
     * @param null|string $symbol symbol
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
     * Gets unrealizedProfit.
     *
     * @return null|string
     */
    public function getUnrealizedProfit()
    {
        return $this->container['unrealizedProfit'];
    }

    /**
     * Sets unrealizedProfit.
     *
     * @param null|string $unrealizedProfit unrealizedProfit
     *
     * @return self
     */
    public function setUnrealizedProfit($unrealizedProfit)
    {
        if (is_null($unrealizedProfit)) {
            throw new \InvalidArgumentException('non-nullable unrealizedProfit cannot be null');
        }
        $this->container['unrealizedProfit'] = $unrealizedProfit;

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
