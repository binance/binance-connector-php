<?php

/**
 * QueryCrossMarginFeeDataResponseInner.
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
 * QueryCrossMarginFeeDataResponseInner Class Doc Comment.
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 *
 * @implements \ArrayAccess<string, mixed>
 */
class QueryCrossMarginFeeDataResponseInner implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'queryCrossMarginFeeDataResponse_inner';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'vipLevel' => 'int',
        'coin' => 'string',
        'transferIn' => 'bool',
        'borrowable' => 'bool',
        'dailyInterest' => 'string',
        'yearlyInterest' => 'string',
        'borrowLimit' => 'string',
        'marginablePairs' => 'string[]',
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
        'vipLevel' => 'int64',
        'coin' => null,
        'transferIn' => null,
        'borrowable' => null,
        'dailyInterest' => null,
        'yearlyInterest' => null,
        'borrowLimit' => null,
        'marginablePairs' => null,
    ];

    /**
     * Array of nullable properties. Used for (de)serialization.
     *
     * @var bool[]
     */
    protected static array $openAPINullables = [
        'vipLevel' => false,
        'coin' => false,
        'transferIn' => false,
        'borrowable' => false,
        'dailyInterest' => false,
        'yearlyInterest' => false,
        'borrowLimit' => false,
        'marginablePairs' => false,
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
        'vipLevel' => 'vipLevel',
        'coin' => 'coin',
        'transferIn' => 'transferIn',
        'borrowable' => 'borrowable',
        'dailyInterest' => 'dailyInterest',
        'yearlyInterest' => 'yearlyInterest',
        'borrowLimit' => 'borrowLimit',
        'marginablePairs' => 'marginablePairs',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'vipLevel' => 'setVipLevel',
        'coin' => 'setCoin',
        'transferIn' => 'setTransferIn',
        'borrowable' => 'setBorrowable',
        'dailyInterest' => 'setDailyInterest',
        'yearlyInterest' => 'setYearlyInterest',
        'borrowLimit' => 'setBorrowLimit',
        'marginablePairs' => 'setMarginablePairs',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'vipLevel' => 'getVipLevel',
        'coin' => 'getCoin',
        'transferIn' => 'getTransferIn',
        'borrowable' => 'getBorrowable',
        'dailyInterest' => 'getDailyInterest',
        'yearlyInterest' => 'getYearlyInterest',
        'borrowLimit' => 'getBorrowLimit',
        'marginablePairs' => 'getMarginablePairs',
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
        $this->setIfExists('vipLevel', $data ?? [], null);
        $this->setIfExists('coin', $data ?? [], null);
        $this->setIfExists('transferIn', $data ?? [], null);
        $this->setIfExists('borrowable', $data ?? [], null);
        $this->setIfExists('dailyInterest', $data ?? [], null);
        $this->setIfExists('yearlyInterest', $data ?? [], null);
        $this->setIfExists('borrowLimit', $data ?? [], null);
        $this->setIfExists('marginablePairs', $data ?? [], null);
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
     * Gets vipLevel.
     *
     * @return null|int
     */
    public function getVipLevel()
    {
        return $this->container['vipLevel'];
    }

    /**
     * Sets vipLevel.
     *
     * @param null|int $vipLevel vipLevel
     *
     * @return self
     */
    public function setVipLevel($vipLevel)
    {
        if (is_null($vipLevel)) {
            throw new \InvalidArgumentException('non-nullable vipLevel cannot be null');
        }
        $this->container['vipLevel'] = $vipLevel;

        return $this;
    }

    /**
     * Gets coin.
     *
     * @return null|string
     */
    public function getCoin()
    {
        return $this->container['coin'];
    }

    /**
     * Sets coin.
     *
     * @param null|string $coin coin
     *
     * @return self
     */
    public function setCoin($coin)
    {
        if (is_null($coin)) {
            throw new \InvalidArgumentException('non-nullable coin cannot be null');
        }
        $this->container['coin'] = $coin;

        return $this;
    }

    /**
     * Gets transferIn.
     *
     * @return null|bool
     */
    public function getTransferIn()
    {
        return $this->container['transferIn'];
    }

    /**
     * Sets transferIn.
     *
     * @param null|bool $transferIn transferIn
     *
     * @return self
     */
    public function setTransferIn($transferIn)
    {
        if (is_null($transferIn)) {
            throw new \InvalidArgumentException('non-nullable transferIn cannot be null');
        }
        $this->container['transferIn'] = $transferIn;

        return $this;
    }

    /**
     * Gets borrowable.
     *
     * @return null|bool
     */
    public function getBorrowable()
    {
        return $this->container['borrowable'];
    }

    /**
     * Sets borrowable.
     *
     * @param null|bool $borrowable borrowable
     *
     * @return self
     */
    public function setBorrowable($borrowable)
    {
        if (is_null($borrowable)) {
            throw new \InvalidArgumentException('non-nullable borrowable cannot be null');
        }
        $this->container['borrowable'] = $borrowable;

        return $this;
    }

    /**
     * Gets dailyInterest.
     *
     * @return null|string
     */
    public function getDailyInterest()
    {
        return $this->container['dailyInterest'];
    }

    /**
     * Sets dailyInterest.
     *
     * @param null|string $dailyInterest dailyInterest
     *
     * @return self
     */
    public function setDailyInterest($dailyInterest)
    {
        if (is_null($dailyInterest)) {
            throw new \InvalidArgumentException('non-nullable dailyInterest cannot be null');
        }
        $this->container['dailyInterest'] = $dailyInterest;

        return $this;
    }

    /**
     * Gets yearlyInterest.
     *
     * @return null|string
     */
    public function getYearlyInterest()
    {
        return $this->container['yearlyInterest'];
    }

    /**
     * Sets yearlyInterest.
     *
     * @param null|string $yearlyInterest yearlyInterest
     *
     * @return self
     */
    public function setYearlyInterest($yearlyInterest)
    {
        if (is_null($yearlyInterest)) {
            throw new \InvalidArgumentException('non-nullable yearlyInterest cannot be null');
        }
        $this->container['yearlyInterest'] = $yearlyInterest;

        return $this;
    }

    /**
     * Gets borrowLimit.
     *
     * @return null|string
     */
    public function getBorrowLimit()
    {
        return $this->container['borrowLimit'];
    }

    /**
     * Sets borrowLimit.
     *
     * @param null|string $borrowLimit borrowLimit
     *
     * @return self
     */
    public function setBorrowLimit($borrowLimit)
    {
        if (is_null($borrowLimit)) {
            throw new \InvalidArgumentException('non-nullable borrowLimit cannot be null');
        }
        $this->container['borrowLimit'] = $borrowLimit;

        return $this;
    }

    /**
     * Gets marginablePairs.
     *
     * @return null|string[]
     */
    public function getMarginablePairs()
    {
        return $this->container['marginablePairs'];
    }

    /**
     * Sets marginablePairs.
     *
     * @param null|string[] $marginablePairs marginablePairs
     *
     * @return self
     */
    public function setMarginablePairs($marginablePairs)
    {
        if (is_null($marginablePairs)) {
            throw new \InvalidArgumentException('non-nullable marginablePairs cannot be null');
        }
        $this->container['marginablePairs'] = $marginablePairs;

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
