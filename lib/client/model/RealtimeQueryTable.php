<?php
/**
 * RealtimeQueryTable
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
 * RealtimeQueryTable Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Rakam
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class RealtimeQueryTable implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'RealtimeQueryTable';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'table_name' => 'string',
        'filter' => 'string',
        'measure' => '\client.model\Measure',
        'dimensions' => 'string[]',
        'aggregate' => 'bool',
        'date_start' => '\DateTime',
        'date_end' => '\DateTime'
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
        'table_name' => 'table_name',
        'filter' => 'filter',
        'measure' => 'measure',
        'dimensions' => 'dimensions',
        'aggregate' => 'aggregate',
        'date_start' => 'date_start',
        'date_end' => 'date_end'
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
        'table_name' => 'setTableName',
        'filter' => 'setFilter',
        'measure' => 'setMeasure',
        'dimensions' => 'setDimensions',
        'aggregate' => 'setAggregate',
        'date_start' => 'setDateStart',
        'date_end' => 'setDateEnd'
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
        'table_name' => 'getTableName',
        'filter' => 'getFilter',
        'measure' => 'getMeasure',
        'dimensions' => 'getDimensions',
        'aggregate' => 'getAggregate',
        'date_start' => 'getDateStart',
        'date_end' => 'getDateEnd'
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
        $this->container['table_name'] = isset($data['table_name']) ? $data['table_name'] : null;
        $this->container['filter'] = isset($data['filter']) ? $data['filter'] : null;
        $this->container['measure'] = isset($data['measure']) ? $data['measure'] : null;
        $this->container['dimensions'] = isset($data['dimensions']) ? $data['dimensions'] : null;
        $this->container['aggregate'] = isset($data['aggregate']) ? $data['aggregate'] : null;
        $this->container['date_start'] = isset($data['date_start']) ? $data['date_start'] : null;
        $this->container['date_end'] = isset($data['date_end']) ? $data['date_end'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
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
        return true;
    }


    /**
     * Gets table_name
     * @return string
     */
    public function getTableName()
    {
        return $this->container['table_name'];
    }

    /**
     * Sets table_name
     * @param string $table_name
     * @return $this
     */
    public function setTableName($table_name)
    {
        $this->container['table_name'] = $table_name;

        return $this;
    }

    /**
     * Gets filter
     * @return string
     */
    public function getFilter()
    {
        return $this->container['filter'];
    }

    /**
     * Sets filter
     * @param string $filter
     * @return $this
     */
    public function setFilter($filter)
    {
        $this->container['filter'] = $filter;

        return $this;
    }

    /**
     * Gets measure
     * @return \client.model\Measure
     */
    public function getMeasure()
    {
        return $this->container['measure'];
    }

    /**
     * Sets measure
     * @param \client.model\Measure $measure
     * @return $this
     */
    public function setMeasure($measure)
    {
        $this->container['measure'] = $measure;

        return $this;
    }

    /**
     * Gets dimensions
     * @return string[]
     */
    public function getDimensions()
    {
        return $this->container['dimensions'];
    }

    /**
     * Sets dimensions
     * @param string[] $dimensions
     * @return $this
     */
    public function setDimensions($dimensions)
    {
        $this->container['dimensions'] = $dimensions;

        return $this;
    }

    /**
     * Gets aggregate
     * @return bool
     */
    public function getAggregate()
    {
        return $this->container['aggregate'];
    }

    /**
     * Sets aggregate
     * @param bool $aggregate
     * @return $this
     */
    public function setAggregate($aggregate)
    {
        $this->container['aggregate'] = $aggregate;

        return $this;
    }

    /**
     * Gets date_start
     * @return \DateTime
     */
    public function getDateStart()
    {
        return $this->container['date_start'];
    }

    /**
     * Sets date_start
     * @param \DateTime $date_start
     * @return $this
     */
    public function setDateStart($date_start)
    {
        $this->container['date_start'] = $date_start;

        return $this;
    }

    /**
     * Gets date_end
     * @return \DateTime
     */
    public function getDateEnd()
    {
        return $this->container['date_end'];
    }

    /**
     * Sets date_end
     * @param \DateTime $date_end
     * @return $this
     */
    public function setDateEnd($date_end)
    {
        $this->container['date_end'] = $date_end;

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


