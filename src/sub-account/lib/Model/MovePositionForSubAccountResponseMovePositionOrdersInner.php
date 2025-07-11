<?php

/**
 * MovePositionForSubAccountResponseMovePositionOrdersInner.
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
 * MovePositionForSubAccountResponseMovePositionOrdersInner Class Doc Comment.
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 *
 * @implements \ArrayAccess<string, mixed>
 */
class MovePositionForSubAccountResponseMovePositionOrdersInner implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'movePositionForSubAccountResponse_movePositionOrders_inner';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'fromUserEmail' => 'string',
        'toUserEmail' => 'string',
        'productType' => 'string',
        'symbol' => 'string',
        'priceType' => 'string',
        'price' => 'string',
        'quantity' => 'string',
        'positionSide' => 'string',
        'side' => 'string',
        'success' => 'bool',
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
        'fromUserEmail' => null,
        'toUserEmail' => null,
        'productType' => null,
        'symbol' => null,
        'priceType' => null,
        'price' => null,
        'quantity' => null,
        'positionSide' => null,
        'side' => null,
        'success' => null,
    ];

    /**
     * Array of nullable properties. Used for (de)serialization.
     *
     * @var bool[]
     */
    protected static array $openAPINullables = [
        'fromUserEmail' => false,
        'toUserEmail' => false,
        'productType' => false,
        'symbol' => false,
        'priceType' => false,
        'price' => false,
        'quantity' => false,
        'positionSide' => false,
        'side' => false,
        'success' => false,
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
        'fromUserEmail' => 'fromUserEmail',
        'toUserEmail' => 'toUserEmail',
        'productType' => 'productType',
        'symbol' => 'symbol',
        'priceType' => 'priceType',
        'price' => 'price',
        'quantity' => 'quantity',
        'positionSide' => 'positionSide',
        'side' => 'side',
        'success' => 'success',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'fromUserEmail' => 'setFromUserEmail',
        'toUserEmail' => 'setToUserEmail',
        'productType' => 'setProductType',
        'symbol' => 'setSymbol',
        'priceType' => 'setPriceType',
        'price' => 'setPrice',
        'quantity' => 'setQuantity',
        'positionSide' => 'setPositionSide',
        'side' => 'setSide',
        'success' => 'setSuccess',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'fromUserEmail' => 'getFromUserEmail',
        'toUserEmail' => 'getToUserEmail',
        'productType' => 'getProductType',
        'symbol' => 'getSymbol',
        'priceType' => 'getPriceType',
        'price' => 'getPrice',
        'quantity' => 'getQuantity',
        'positionSide' => 'getPositionSide',
        'side' => 'getSide',
        'success' => 'getSuccess',
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
        $this->setIfExists('fromUserEmail', $data ?? [], null);
        $this->setIfExists('toUserEmail', $data ?? [], null);
        $this->setIfExists('productType', $data ?? [], null);
        $this->setIfExists('symbol', $data ?? [], null);
        $this->setIfExists('priceType', $data ?? [], null);
        $this->setIfExists('price', $data ?? [], null);
        $this->setIfExists('quantity', $data ?? [], null);
        $this->setIfExists('positionSide', $data ?? [], null);
        $this->setIfExists('side', $data ?? [], null);
        $this->setIfExists('success', $data ?? [], null);
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
     * Gets fromUserEmail.
     *
     * @return null|string
     */
    public function getFromUserEmail()
    {
        return $this->container['fromUserEmail'];
    }

    /**
     * Sets fromUserEmail.
     *
     * @param null|string $fromUserEmail fromUserEmail
     *
     * @return self
     */
    public function setFromUserEmail($fromUserEmail)
    {
        if (is_null($fromUserEmail)) {
            throw new \InvalidArgumentException('non-nullable fromUserEmail cannot be null');
        }
        $this->container['fromUserEmail'] = $fromUserEmail;

        return $this;
    }

    /**
     * Gets toUserEmail.
     *
     * @return null|string
     */
    public function getToUserEmail()
    {
        return $this->container['toUserEmail'];
    }

    /**
     * Sets toUserEmail.
     *
     * @param null|string $toUserEmail toUserEmail
     *
     * @return self
     */
    public function setToUserEmail($toUserEmail)
    {
        if (is_null($toUserEmail)) {
            throw new \InvalidArgumentException('non-nullable toUserEmail cannot be null');
        }
        $this->container['toUserEmail'] = $toUserEmail;

        return $this;
    }

    /**
     * Gets productType.
     *
     * @return null|string
     */
    public function getProductType()
    {
        return $this->container['productType'];
    }

    /**
     * Sets productType.
     *
     * @param null|string $productType productType
     *
     * @return self
     */
    public function setProductType($productType)
    {
        if (is_null($productType)) {
            throw new \InvalidArgumentException('non-nullable productType cannot be null');
        }
        $this->container['productType'] = $productType;

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
     * Gets priceType.
     *
     * @return null|string
     */
    public function getPriceType()
    {
        return $this->container['priceType'];
    }

    /**
     * Sets priceType.
     *
     * @param null|string $priceType priceType
     *
     * @return self
     */
    public function setPriceType($priceType)
    {
        if (is_null($priceType)) {
            throw new \InvalidArgumentException('non-nullable priceType cannot be null');
        }
        $this->container['priceType'] = $priceType;

        return $this;
    }

    /**
     * Gets price.
     *
     * @return null|string
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price.
     *
     * @param null|string $price price
     *
     * @return self
     */
    public function setPrice($price)
    {
        if (is_null($price)) {
            throw new \InvalidArgumentException('non-nullable price cannot be null');
        }
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets quantity.
     *
     * @return null|string
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity.
     *
     * @param null|string $quantity quantity
     *
     * @return self
     */
    public function setQuantity($quantity)
    {
        if (is_null($quantity)) {
            throw new \InvalidArgumentException('non-nullable quantity cannot be null');
        }
        $this->container['quantity'] = $quantity;

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
     * Gets side.
     *
     * @return null|string
     */
    public function getSide()
    {
        return $this->container['side'];
    }

    /**
     * Sets side.
     *
     * @param null|string $side side
     *
     * @return self
     */
    public function setSide($side)
    {
        if (is_null($side)) {
            throw new \InvalidArgumentException('non-nullable side cannot be null');
        }
        $this->container['side'] = $side;

        return $this;
    }

    /**
     * Gets success.
     *
     * @return null|bool
     */
    public function getSuccess()
    {
        return $this->container['success'];
    }

    /**
     * Sets success.
     *
     * @param null|bool $success success
     *
     * @return self
     */
    public function setSuccess($success)
    {
        if (is_null($success)) {
            throw new \InvalidArgumentException('non-nullable success cannot be null');
        }
        $this->container['success'] = $success;

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
