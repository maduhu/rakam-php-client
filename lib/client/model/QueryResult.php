<?php
/**
 * QueryResult
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
 * QueryResult Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Rakam
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class QueryResult implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'QueryResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'metadata' => '\client.model\SchemaField[]',
        'result' => 'object[][]',
        'error' => '\client.model\QueryError',
        'properties' => 'map[string,object]',
        'failed' => 'bool'
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
        'metadata' => 'metadata',
        'result' => 'result',
        'error' => 'error',
        'properties' => 'properties',
        'failed' => 'failed'
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
        'metadata' => 'setMetadata',
        'result' => 'setResult',
        'error' => 'setError',
        'properties' => 'setProperties',
        'failed' => 'setFailed'
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
        'metadata' => 'getMetadata',
        'result' => 'getResult',
        'error' => 'getError',
        'properties' => 'getProperties',
        'failed' => 'getFailed'
    );

    public static function getters()
    {
        return self::$getters;
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
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
        $this->container['result'] = isset($data['result']) ? $data['result'] : null;
        $this->container['error'] = isset($data['error']) ? $data['error'] : null;
        $this->container['properties'] = isset($data['properties']) ? $data['properties'] : null;
        $this->container['failed'] = isset($data['failed']) ? $data['failed'] : false;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['metadata'] === null) {
            $invalid_properties[] = "'metadata' can't be null";
        }
        if ($this->container['error'] === null) {
            $invalid_properties[] = "'error' can't be null";
        }
        if ($this->container['properties'] === null) {
            $invalid_properties[] = "'properties' can't be null";
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
        if ($this->container['metadata'] === null) {
            return false;
        }
        if ($this->container['error'] === null) {
            return false;
        }
        if ($this->container['properties'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets metadata
     * @return \client.model\SchemaField[]
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     * @param \client.model\SchemaField[] $metadata
     * @return $this
     */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;

        return $this;
    }

    /**
     * Gets result
     * @return object[][]
     */
    public function getResult()
    {
        return $this->container['result'];
    }

    /**
     * Sets result
     * @param object[][] $result Each row is an array that contains the values for the columns that are defined in metadata property.
     * @return $this
     */
    public function setResult($result)
    {
        $this->container['result'] = $result;

        return $this;
    }

    /**
     * Gets error
     * @return \client.model\QueryError
     */
    public function getError()
    {
        return $this->container['error'];
    }

    /**
     * Sets error
     * @param \client.model\QueryError $error
     * @return $this
     */
    public function setError($error)
    {
        $this->container['error'] = $error;

        return $this;
    }

    /**
     * Gets properties
     * @return map[string,object]
     */
    public function getProperties()
    {
        return $this->container['properties'];
    }

    /**
     * Sets properties
     * @param map[string,object] $properties
     * @return $this
     */
    public function setProperties($properties)
    {
        $this->container['properties'] = $properties;

        return $this;
    }

    /**
     * Gets failed
     * @return bool
     */
    public function getFailed()
    {
        return $this->container['failed'];
    }

    /**
     * Sets failed
     * @param bool $failed
     * @return $this
     */
    public function setFailed($failed)
    {
        $this->container['failed'] = $failed;

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


