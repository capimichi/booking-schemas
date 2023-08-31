<?php

namespace Capimichi\BookingSchemas\Model\Booking\Autocomplete;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Request
 *
 * @Serializer\ExclusionPolicy("none")
 */
class Request
{
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("query")
     */
    protected $query;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("language")
     */
    protected $language;
    
    /**
     * @var int|null
     * @Serializer\Type("int")
     * @Serializer\SerializedName("size")
     */
    protected $size;
    
    /**
     * @return string|null
     */
    public function getQuery()
    {
        return $this->query;
    }
    
    /**
     * @param string|null $query
     */
    public function setQuery($query)
    {
        $this->query = $query;
    }
    
    /**
     * @return string|null
     */
    public function getLanguage()
    {
        return $this->language;
    }
    
    /**
     * @param string|null $language
     */
    public function setLanguage($language)
    {
        $this->language = $language;
    }
    
    /**
     * @return int|null
     */
    public function getSize()
    {
        return $this->size;
    }
    
    /**
     * @param int|null $size
     */
    public function setSize($size)
    {
        $this->size = $size;
    }
    
    
}