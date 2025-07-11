<?php

/**
 * QueryLiabilityCoinLeverageBracketInCrossMarginProModeResponseInnerBracketsInner.
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
 * QueryLiabilityCoinLeverageBracketInCrossMarginProModeResponseInnerBracketsInner Class Doc Comment.
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 *
 * @implements \ArrayAccess<string, mixed>
 */
class QueryLiabilityCoinLeverageBracketInCrossMarginProModeResponseInnerBracketsInner implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'queryLiabilityCoinLeverageBracketInCrossMarginProModeResponse_inner_brackets_inner';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'leverage' => 'int',
        'maxDebt' => 'float',
        'maintenanceMarginRate' => 'float',
        'initialMarginRate' => 'float',
        'fastNum' => 'float',
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
        'leverage' => 'int64',
        'maxDebt' => 'float',
        'maintenanceMarginRate' => 'float',
        'initialMarginRate' => 'float',
        'fastNum' => 'float',
    ];

    /**
     * Array of nullable properties. Used for (de)serialization.
     *
     * @var bool[]
     */
    protected static array $openAPINullables = [
        'leverage' => false,
        'maxDebt' => false,
        'maintenanceMarginRate' => false,
        'initialMarginRate' => false,
        'fastNum' => false,
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
        'leverage' => 'leverage',
        'maxDebt' => 'maxDebt',
        'maintenanceMarginRate' => 'maintenanceMarginRate',
        'initialMarginRate' => 'initialMarginRate',
        'fastNum' => 'fastNum',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'leverage' => 'setLeverage',
        'maxDebt' => 'setMaxDebt',
        'maintenanceMarginRate' => 'setMaintenanceMarginRate',
        'initialMarginRate' => 'setInitialMarginRate',
        'fastNum' => 'setFastNum',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'leverage' => 'getLeverage',
        'maxDebt' => 'getMaxDebt',
        'maintenanceMarginRate' => 'getMaintenanceMarginRate',
        'initialMarginRate' => 'getInitialMarginRate',
        'fastNum' => 'getFastNum',
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
        $this->setIfExists('leverage', $data ?? [], null);
        $this->setIfExists('maxDebt', $data ?? [], null);
        $this->setIfExists('maintenanceMarginRate', $data ?? [], null);
        $this->setIfExists('initialMarginRate', $data ?? [], null);
        $this->setIfExists('fastNum', $data ?? [], null);
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
     * Gets leverage.
     *
     * @return null|int
     */
    public function getLeverage()
    {
        return $this->container['leverage'];
    }

    /**
     * Sets leverage.
     *
     * @param null|int $leverage leverage
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
     * Gets maxDebt.
     *
     * @return null|float
     */
    public function getMaxDebt()
    {
        return $this->container['maxDebt'];
    }

    /**
     * Sets maxDebt.
     *
     * @param null|float $maxDebt maxDebt
     *
     * @return self
     */
    public function setMaxDebt($maxDebt)
    {
        if (is_null($maxDebt)) {
            throw new \InvalidArgumentException('non-nullable maxDebt cannot be null');
        }
        $this->container['maxDebt'] = $maxDebt;

        return $this;
    }

    /**
     * Gets maintenanceMarginRate.
     *
     * @return null|float
     */
    public function getMaintenanceMarginRate()
    {
        return $this->container['maintenanceMarginRate'];
    }

    /**
     * Sets maintenanceMarginRate.
     *
     * @param null|float $maintenanceMarginRate maintenanceMarginRate
     *
     * @return self
     */
    public function setMaintenanceMarginRate($maintenanceMarginRate)
    {
        if (is_null($maintenanceMarginRate)) {
            throw new \InvalidArgumentException('non-nullable maintenanceMarginRate cannot be null');
        }
        $this->container['maintenanceMarginRate'] = $maintenanceMarginRate;

        return $this;
    }

    /**
     * Gets initialMarginRate.
     *
     * @return null|float
     */
    public function getInitialMarginRate()
    {
        return $this->container['initialMarginRate'];
    }

    /**
     * Sets initialMarginRate.
     *
     * @param null|float $initialMarginRate initialMarginRate
     *
     * @return self
     */
    public function setInitialMarginRate($initialMarginRate)
    {
        if (is_null($initialMarginRate)) {
            throw new \InvalidArgumentException('non-nullable initialMarginRate cannot be null');
        }
        $this->container['initialMarginRate'] = $initialMarginRate;

        return $this;
    }

    /**
     * Gets fastNum.
     *
     * @return null|float
     */
    public function getFastNum()
    {
        return $this->container['fastNum'];
    }

    /**
     * Sets fastNum.
     *
     * @param null|float $fastNum fastNum
     *
     * @return self
     */
    public function setFastNum($fastNum)
    {
        if (is_null($fastNum)) {
            throw new \InvalidArgumentException('non-nullable fastNum cannot be null');
        }
        $this->container['fastNum'] = $fastNum;

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
