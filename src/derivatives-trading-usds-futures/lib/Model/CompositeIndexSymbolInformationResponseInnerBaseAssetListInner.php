<?php

/**
 * CompositeIndexSymbolInformationResponseInnerBaseAssetListInner.
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
 * Binance Derivatives Trading USDS Futures REST API.
 *
 * OpenAPI Specification for the Binance Derivatives Trading USDS Futures REST API
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

namespace Binance\Client\DerivativesTradingUsdsFutures\Model;

use Binance\Common\Dtos\ModelInterface;
use Binance\Common\ObjectSerializer;

/**
 * CompositeIndexSymbolInformationResponseInnerBaseAssetListInner Class Doc Comment.
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 *
 * @implements \ArrayAccess<string, mixed>
 */
class CompositeIndexSymbolInformationResponseInnerBaseAssetListInner implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'compositeIndexSymbolInformationResponse_inner_baseAssetList_inner';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'baseAsset' => 'string',
        'quoteAsset' => 'string',
        'weightInQuantity' => 'string',
        'weightInPercentage' => 'string',
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
        'baseAsset' => null,
        'quoteAsset' => null,
        'weightInQuantity' => null,
        'weightInPercentage' => null,
    ];

    /**
     * Array of nullable properties. Used for (de)serialization.
     *
     * @var bool[]
     */
    protected static array $openAPINullables = [
        'baseAsset' => false,
        'quoteAsset' => false,
        'weightInQuantity' => false,
        'weightInPercentage' => false,
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
        'baseAsset' => 'baseAsset',
        'quoteAsset' => 'quoteAsset',
        'weightInQuantity' => 'weightInQuantity',
        'weightInPercentage' => 'weightInPercentage',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'baseAsset' => 'setBaseAsset',
        'quoteAsset' => 'setQuoteAsset',
        'weightInQuantity' => 'setWeightInQuantity',
        'weightInPercentage' => 'setWeightInPercentage',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'baseAsset' => 'getBaseAsset',
        'quoteAsset' => 'getQuoteAsset',
        'weightInQuantity' => 'getWeightInQuantity',
        'weightInPercentage' => 'getWeightInPercentage',
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
        $this->setIfExists('baseAsset', $data ?? [], null);
        $this->setIfExists('quoteAsset', $data ?? [], null);
        $this->setIfExists('weightInQuantity', $data ?? [], null);
        $this->setIfExists('weightInPercentage', $data ?? [], null);
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
     * Gets baseAsset.
     *
     * @return null|string
     */
    public function getBaseAsset()
    {
        return $this->container['baseAsset'];
    }

    /**
     * Sets baseAsset.
     *
     * @param null|string $baseAsset baseAsset
     *
     * @return self
     */
    public function setBaseAsset($baseAsset)
    {
        if (is_null($baseAsset)) {
            throw new \InvalidArgumentException('non-nullable baseAsset cannot be null');
        }
        $this->container['baseAsset'] = $baseAsset;

        return $this;
    }

    /**
     * Gets quoteAsset.
     *
     * @return null|string
     */
    public function getQuoteAsset()
    {
        return $this->container['quoteAsset'];
    }

    /**
     * Sets quoteAsset.
     *
     * @param null|string $quoteAsset quoteAsset
     *
     * @return self
     */
    public function setQuoteAsset($quoteAsset)
    {
        if (is_null($quoteAsset)) {
            throw new \InvalidArgumentException('non-nullable quoteAsset cannot be null');
        }
        $this->container['quoteAsset'] = $quoteAsset;

        return $this;
    }

    /**
     * Gets weightInQuantity.
     *
     * @return null|string
     */
    public function getWeightInQuantity()
    {
        return $this->container['weightInQuantity'];
    }

    /**
     * Sets weightInQuantity.
     *
     * @param null|string $weightInQuantity weightInQuantity
     *
     * @return self
     */
    public function setWeightInQuantity($weightInQuantity)
    {
        if (is_null($weightInQuantity)) {
            throw new \InvalidArgumentException('non-nullable weightInQuantity cannot be null');
        }
        $this->container['weightInQuantity'] = $weightInQuantity;

        return $this;
    }

    /**
     * Gets weightInPercentage.
     *
     * @return null|string
     */
    public function getWeightInPercentage()
    {
        return $this->container['weightInPercentage'];
    }

    /**
     * Sets weightInPercentage.
     *
     * @param null|string $weightInPercentage weightInPercentage
     *
     * @return self
     */
    public function setWeightInPercentage($weightInPercentage)
    {
        if (is_null($weightInPercentage)) {
            throw new \InvalidArgumentException('non-nullable weightInPercentage cannot be null');
        }
        $this->container['weightInPercentage'] = $weightInPercentage;

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
