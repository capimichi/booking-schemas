<?php

namespace Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Banners\Banner\Metadata;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Metadatum
 *
 * @Serializer\ExclusionPolicy("none")
 */
class Metadatum
{
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("__typename")
     */
    protected $typename;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("key")
     */
    protected $key;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("value")
     */
    protected $value;
    
    
    /**
     * @return string|null
     */
    public function getTypename()
    {
        return $this->typename;
    }
    
    /**
     * @param string|null $typename
     */
    public function setTypename($typename)
    {
        $this->typename = $typename;
    }
    
    
    /**
     * @return string|null
     */
    public function getKey()
    {
        return $this->key;
    }
    
    /**
     * @param string|null $key
     */
    public function setKey($key)
    {
        $this->key = $key;
    }
    
    
    /**
     * @return string|null
     */
    public function getValue()
    {
        return $this->value;
    }
    
    /**
     * @param string|null $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }
    
    
}