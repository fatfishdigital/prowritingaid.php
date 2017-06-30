<?php
/**
 * DocTag
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * AnalysisBackend
 *
 * No descripton provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: v1
 * 
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

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * DocTag Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class DocTag implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'DocTag';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'start_pos' => 'int',
        'end_pos' => 'int',
        'report' => 'string',
        'urls' => 'string[]',
        'category' => 'string',
        'category_display_name' => 'string',
        'subcategory' => 'string',
        'hint' => 'string',
        'suggestions' => 'string[]',
        'is_sub_tag' => 'bool',
        'help_id' => 'string',
        'id' => 'string'
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
        'start_pos' => 'startPos',
        'end_pos' => 'endPos',
        'report' => 'report',
        'urls' => 'urls',
        'category' => 'category',
        'category_display_name' => 'categoryDisplayName',
        'subcategory' => 'subcategory',
        'hint' => 'hint',
        'suggestions' => 'suggestions',
        'is_sub_tag' => 'isSubTag',
        'help_id' => 'helpId',
        'id' => 'id'
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
        'start_pos' => 'setStartPos',
        'end_pos' => 'setEndPos',
        'report' => 'setReport',
        'urls' => 'setUrls',
        'category' => 'setCategory',
        'category_display_name' => 'setCategoryDisplayName',
        'subcategory' => 'setSubcategory',
        'hint' => 'setHint',
        'suggestions' => 'setSuggestions',
        'is_sub_tag' => 'setIsSubTag',
        'help_id' => 'setHelpId',
        'id' => 'setId'
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
        'start_pos' => 'getStartPos',
        'end_pos' => 'getEndPos',
        'report' => 'getReport',
        'urls' => 'getUrls',
        'category' => 'getCategory',
        'category_display_name' => 'getCategoryDisplayName',
        'subcategory' => 'getSubcategory',
        'hint' => 'getHint',
        'suggestions' => 'getSuggestions',
        'is_sub_tag' => 'getIsSubTag',
        'help_id' => 'getHelpId',
        'id' => 'getId'
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
        $this->container['start_pos'] = isset($data['start_pos']) ? $data['start_pos'] : null;
        $this->container['end_pos'] = isset($data['end_pos']) ? $data['end_pos'] : null;
        $this->container['report'] = isset($data['report']) ? $data['report'] : null;
        $this->container['urls'] = isset($data['urls']) ? $data['urls'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['category_display_name'] = isset($data['category_display_name']) ? $data['category_display_name'] : null;
        $this->container['subcategory'] = isset($data['subcategory']) ? $data['subcategory'] : null;
        $this->container['hint'] = isset($data['hint']) ? $data['hint'] : null;
        $this->container['suggestions'] = isset($data['suggestions']) ? $data['suggestions'] : null;
        $this->container['is_sub_tag'] = isset($data['is_sub_tag']) ? $data['is_sub_tag'] : null;
        $this->container['help_id'] = isset($data['help_id']) ? $data['help_id'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['start_pos'] === null) {
            $invalid_properties[] = "'start_pos' can't be null";
        }
        if ($this->container['end_pos'] === null) {
            $invalid_properties[] = "'end_pos' can't be null";
        }
        if ($this->container['is_sub_tag'] === null) {
            $invalid_properties[] = "'is_sub_tag' can't be null";
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
        if ($this->container['start_pos'] === null) {
            return false;
        }
        if ($this->container['end_pos'] === null) {
            return false;
        }
        if ($this->container['is_sub_tag'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets start_pos
     * @return int
     */
    public function getStartPos()
    {
        return $this->container['start_pos'];
    }

    /**
     * Sets start_pos
     * @param int $start_pos
     * @return $this
     */
    public function setStartPos($start_pos)
    {
        $this->container['start_pos'] = $start_pos;

        return $this;
    }

    /**
     * Gets end_pos
     * @return int
     */
    public function getEndPos()
    {
        return $this->container['end_pos'];
    }

    /**
     * Sets end_pos
     * @param int $end_pos
     * @return $this
     */
    public function setEndPos($end_pos)
    {
        $this->container['end_pos'] = $end_pos;

        return $this;
    }

    /**
     * Gets report
     * @return string
     */
    public function getReport()
    {
        return $this->container['report'];
    }

    /**
     * Sets report
     * @param string $report
     * @return $this
     */
    public function setReport($report)
    {
        $this->container['report'] = $report;

        return $this;
    }

    /**
     * Gets urls
     * @return string[]
     */
    public function getUrls()
    {
        return $this->container['urls'];
    }

    /**
     * Sets urls
     * @param string[] $urls
     * @return $this
     */
    public function setUrls($urls)
    {
        $this->container['urls'] = $urls;

        return $this;
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
     * Gets category_display_name
     * @return string
     */
    public function getCategoryDisplayName()
    {
        return $this->container['category_display_name'];
    }

    /**
     * Sets category_display_name
     * @param string $category_display_name
     * @return $this
     */
    public function setCategoryDisplayName($category_display_name)
    {
        $this->container['category_display_name'] = $category_display_name;

        return $this;
    }

    /**
     * Gets subcategory
     * @return string
     */
    public function getSubcategory()
    {
        return $this->container['subcategory'];
    }

    /**
     * Sets subcategory
     * @param string $subcategory
     * @return $this
     */
    public function setSubcategory($subcategory)
    {
        $this->container['subcategory'] = $subcategory;

        return $this;
    }

    /**
     * Gets hint
     * @return string
     */
    public function getHint()
    {
        return $this->container['hint'];
    }

    /**
     * Sets hint
     * @param string $hint
     * @return $this
     */
    public function setHint($hint)
    {
        $this->container['hint'] = $hint;

        return $this;
    }

    /**
     * Gets suggestions
     * @return string[]
     */
    public function getSuggestions()
    {
        return $this->container['suggestions'];
    }

    /**
     * Sets suggestions
     * @param string[] $suggestions
     * @return $this
     */
    public function setSuggestions($suggestions)
    {
        $this->container['suggestions'] = $suggestions;

        return $this;
    }

    /**
     * Gets is_sub_tag
     * @return bool
     */
    public function getIsSubTag()
    {
        return $this->container['is_sub_tag'];
    }

    /**
     * Sets is_sub_tag
     * @param bool $is_sub_tag
     * @return $this
     */
    public function setIsSubTag($is_sub_tag)
    {
        $this->container['is_sub_tag'] = $is_sub_tag;

        return $this;
    }

    /**
     * Gets help_id
     * @return string
     */
    public function getHelpId()
    {
        return $this->container['help_id'];
    }

    /**
     * Sets help_id
     * @param string $help_id
     * @return $this
     */
    public function setHelpId($help_id)
    {
        $this->container['help_id'] = $help_id;

        return $this;
    }

    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param string $id
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}

