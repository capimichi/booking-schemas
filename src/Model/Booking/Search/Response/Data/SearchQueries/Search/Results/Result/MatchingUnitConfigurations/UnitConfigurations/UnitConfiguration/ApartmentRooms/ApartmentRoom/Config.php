<?php

namespace Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\MatchingUnitConfigurations\UnitConfigurations\UnitConfiguration\ApartmentRooms\ApartmentRoom;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Config
 *
 * @Serializer\ExclusionPolicy("none")
 */
class Config
{
    
    /**
     * @var int|null
     * @Serializer\Type("int")
     * @Serializer\SerializedName("bedTypeId")
     */
    protected $bedTypeId;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("roomType")
     */
    protected $roomType;
    
    /**
     * @var int|null
     * @Serializer\Type("int")
     * @Serializer\SerializedName("bedCount")
     */
    protected $bedCount;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("__typename")
     */
    protected $typename;
    
    /**
     * @var int|null
     * @Serializer\Type("int")
     * @Serializer\SerializedName("roomId")
     */
    protected $roomId;
    
    
    /**
     * @return int|null
     */
    public function getBedTypeId()
    {
        return $this->bedTypeId;
    }
    
    /**
     * @param int|null $bedTypeId
     */
    public function setBedTypeId($bedTypeId)
    {
        $this->bedTypeId = $bedTypeId;
    }
    
    
    /**
     * @return string|null
     */
    public function getRoomType()
    {
        return $this->roomType;
    }
    
    /**
     * @param string|null $roomType
     */
    public function setRoomType($roomType)
    {
        $this->roomType = $roomType;
    }
    
    
    /**
     * @return int|null
     */
    public function getBedCount()
    {
        return $this->bedCount;
    }
    
    /**
     * @param int|null $bedCount
     */
    public function setBedCount($bedCount)
    {
        $this->bedCount = $bedCount;
    }
    
    
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
     * @return int|null
     */
    public function getRoomId()
    {
        return $this->roomId;
    }
    
    /**
     * @param int|null $roomId
     */
    public function setRoomId($roomId)
    {
        $this->roomId = $roomId;
    }
    
    
}