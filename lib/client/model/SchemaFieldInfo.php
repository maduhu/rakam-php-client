<?php
/**
 * SchemaFieldInfo
 *
 * PHP version 5
 *
 * @category Class
 * @package  Rakam
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Rakam API Documentation
 *
 * An analytics platform API that lets you create your own analytics services.
 *
 * OpenAPI spec version: 0.5
 * Contact: contact@rakam.io
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace client.model;

use \ArrayAccess;

/**
 * SchemaFieldInfo Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Rakam
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SchemaFieldInfo implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'SchemaFieldInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'category' => 'string',
        'type' => 'string'
    );

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'category' => 'category',
        'type' => 'type'
    );

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'category' => 'setCategory',
        'type' => 'setType'
    );

    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'category' => 'getCategory',
        'type' => 'getType'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const TYPE_STRING = 'STRING';
    const TYPE_INTEGER = 'INTEGER';
    const TYPE_DECIMAL = 'DECIMAL';
    const TYPE_DOUBLE = 'DOUBLE';
    const TYPE_LONG = 'LONG';
    const TYPE_BOOLEAN = 'BOOLEAN';
    const TYPE_DATE = 'DATE';
    const TYPE_TIME = 'TIME';
    const TYPE_TIMESTAMP = 'TIMESTAMP';
    const TYPE_BINARY = 'BINARY';
    const TYPE_ARRAY_STRING = 'ARRAY_STRING';
    const TYPE_ARRAY_INTEGER = 'ARRAY_INTEGER';
    const TYPE_ARRAY_DECIMAL = 'ARRAY_DECIMAL';
    const TYPE_ARRAY_DOUBLE = 'ARRAY_DOUBLE';
    const TYPE_ARRAY_LONG = 'ARRAY_LONG';
    const TYPE_ARRAY_BOOLEAN = 'ARRAY_BOOLEAN';
    const TYPE_ARRAY_DATE = 'ARRAY_DATE';
    const TYPE_ARRAY_TIME = 'ARRAY_TIME';
    const TYPE_ARRAY_TIMESTAMP = 'ARRAY_TIMESTAMP';
    const TYPE_ARRAY_BINARY = 'ARRAY_BINARY';
    const TYPE_MAP_STRING = 'MAP_STRING';
    const TYPE_MAP_INTEGER = 'MAP_INTEGER';
    const TYPE_MAP_DECIMAL = 'MAP_DECIMAL';
    const TYPE_MAP_DOUBLE = 'MAP_DOUBLE';
    const TYPE_MAP_LONG = 'MAP_LONG';
    const TYPE_MAP_BOOLEAN = 'MAP_BOOLEAN';
    const TYPE_MAP_DATE = 'MAP_DATE';
    const TYPE_MAP_TIME = 'MAP_TIME';
    const TYPE_MAP_TIMESTAMP = 'MAP_TIMESTAMP';
    const TYPE_MAP_BINARY = 'MAP_BINARY';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_STRING,
            self::TYPE_INTEGER,
            self::TYPE_DECIMAL,
            self::TYPE_DOUBLE,
            self::TYPE_LONG,
            self::TYPE_BOOLEAN,
            self::TYPE_DATE,
            self::TYPE_TIME,
            self::TYPE_TIMESTAMP,
            self::TYPE_BINARY,
            self::TYPE_ARRAY_STRING,
            self::TYPE_ARRAY_INTEGER,
            self::TYPE_ARRAY_DECIMAL,
            self::TYPE_ARRAY_DOUBLE,
            self::TYPE_ARRAY_LONG,
            self::TYPE_ARRAY_BOOLEAN,
            self::TYPE_ARRAY_DATE,
            self::TYPE_ARRAY_TIME,
            self::TYPE_ARRAY_TIMESTAMP,
            self::TYPE_ARRAY_BINARY,
            self::TYPE_MAP_STRING,
            self::TYPE_MAP_INTEGER,
            self::TYPE_MAP_DECIMAL,
            self::TYPE_MAP_DOUBLE,
            self::TYPE_MAP_LONG,
            self::TYPE_MAP_BOOLEAN,
            self::TYPE_MAP_DATE,
            self::TYPE_MAP_TIME,
            self::TYPE_MAP_TIMESTAMP,
            self::TYPE_MAP_BINARY,
        ];
    }
    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        $allowed_values = array("STRING", "INTEGER", "DECIMAL", "DOUBLE", "LONG", "BOOLEAN", "DATE", "TIME", "TIMESTAMP", "BINARY", "ARRAY_STRING", "ARRAY_INTEGER", "ARRAY_DECIMAL", "ARRAY_DOUBLE", "ARRAY_LONG", "ARRAY_BOOLEAN", "ARRAY_DATE", "ARRAY_TIME", "ARRAY_TIMESTAMP", "ARRAY_BINARY", "MAP_STRING", "MAP_INTEGER", "MAP_DECIMAL", "MAP_DOUBLE", "MAP_LONG", "MAP_BOOLEAN", "MAP_DATE", "MAP_TIME", "MAP_TIMESTAMP", "MAP_BINARY");
        if (!in_array($this->container['type'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'type', must be one of #{allowed_values}.";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        $allowed_values = array("STRING", "INTEGER", "DECIMAL", "DOUBLE", "LONG", "BOOLEAN", "DATE", "TIME", "TIMESTAMP", "BINARY", "ARRAY_STRING", "ARRAY_INTEGER", "ARRAY_DECIMAL", "ARRAY_DOUBLE", "ARRAY_LONG", "ARRAY_BOOLEAN", "ARRAY_DATE", "ARRAY_TIME", "ARRAY_TIMESTAMP", "ARRAY_BINARY", "MAP_STRING", "MAP_INTEGER", "MAP_DECIMAL", "MAP_DOUBLE", "MAP_LONG", "MAP_BOOLEAN", "MAP_DATE", "MAP_TIME", "MAP_TIMESTAMP", "MAP_BINARY");
        if (!in_array($this->container['type'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets category
     * @return string
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     * @param string $category
     * @return $this
     */
    public function setCategory($category)
    {
        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param string $type
     * @return $this
     */
    public function setType($type)
    {
        $allowed_values = array('STRING', 'INTEGER', 'DECIMAL', 'DOUBLE', 'LONG', 'BOOLEAN', 'DATE', 'TIME', 'TIMESTAMP', 'BINARY', 'ARRAY_STRING', 'ARRAY_INTEGER', 'ARRAY_DECIMAL', 'ARRAY_DOUBLE', 'ARRAY_LONG', 'ARRAY_BOOLEAN', 'ARRAY_DATE', 'ARRAY_TIME', 'ARRAY_TIMESTAMP', 'ARRAY_BINARY', 'MAP_STRING', 'MAP_INTEGER', 'MAP_DECIMAL', 'MAP_DOUBLE', 'MAP_LONG', 'MAP_BOOLEAN', 'MAP_DATE', 'MAP_TIME', 'MAP_TIMESTAMP', 'MAP_BINARY');
        if (!in_array($type, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'type', must be one of 'STRING', 'INTEGER', 'DECIMAL', 'DOUBLE', 'LONG', 'BOOLEAN', 'DATE', 'TIME', 'TIMESTAMP', 'BINARY', 'ARRAY_STRING', 'ARRAY_INTEGER', 'ARRAY_DECIMAL', 'ARRAY_DOUBLE', 'ARRAY_LONG', 'ARRAY_BOOLEAN', 'ARRAY_DATE', 'ARRAY_TIME', 'ARRAY_TIMESTAMP', 'ARRAY_BINARY', 'MAP_STRING', 'MAP_INTEGER', 'MAP_DECIMAL', 'MAP_DOUBLE', 'MAP_LONG', 'MAP_BOOLEAN', 'MAP_DATE', 'MAP_TIME', 'MAP_TIMESTAMP', 'MAP_BINARY'");
        }
        $this->container['type'] = $type;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Rakam\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Rakam\ObjectSerializer::sanitizeForSerialization($this));
    }
}


