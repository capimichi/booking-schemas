<?php

namespace Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\MatchingUnitConfigurations\UnitConfigurations\UnitConfiguration\ApartmentRooms\ApartmentRoom;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class RoomName
 *
 * @Serializer\ExclusionPolicy("none")
 */
class RoomName
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
     * @Serializer\SerializedName("translation")
     */
    protected $translation;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("tag")
     */
    protected $tag;
    
    
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
    public function getTranslation()
    {
        return $this->translation;
    }
    
    /**
     * @param string|null $translation
     */
    public function setTranslation($translation)
    {
        $this->translation = $translation;
    }
    
    
    /**
     * @return string|null
     */
    public function getTag()
    {
        return $this->tag;
    }
    
    /**
     * @param string|null $tag
     */
    public function setTag($tag)
    {
        $this->tag = $tag;
    }
    
    
}