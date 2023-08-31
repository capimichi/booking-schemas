<?php

namespace Capimichi\BookingSchemas\Model\Booking\Search\Request\Variables\Input;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Location
 *
 * @Serializer\ExclusionPolicy("none")
 */
class Location
{
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("searchString")
     */
    protected $searchString;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("destType")
     */
    protected $destType;
    
    /**
     * @var int|null
     * @Serializer\Type("int")
     * @Serializer\SerializedName("destId")
     */
    protected $destId;
    
    /**
     * @return string|null
     */
    public function getSearchString()
    {
        return $this->searchString;
    }
    
    /**
     * @param string|null $searchString
     */
    public function setSearchString($searchString)
    {
        $this->searchString = $searchString;
    }
    
    /**
     * @return string|null
     */
    public function getDestType()
    {
        return $this->destType;
    }
    
    /**
     * @param string|null $destType
     */
    public function setDestType($destType)
    {
        $this->destType = $destType;
    }
    
    /**
     * @return int|null
     */
    public function getDestId()
    {
        return $this->destId;
    }
    
    /**
     * @param int|null $destId
     */
    public function setDestId($destId)
    {
        $this->destId = $destId;
    }
    
    
}