<?php

namespace Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\MatchingUnitConfigurations\UnitConfigurations\UnitConfiguration\ApartmentRooms;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class ApartmentRoom
 *
 * @Serializer\ExclusionPolicy("none")
 */
class ApartmentRoom
{
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\MatchingUnitConfigurations\UnitConfigurations\UnitConfiguration\ApartmentRooms\ApartmentRoom\Config|null
     * @Serializer\Type("Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\MatchingUnitConfigurations\UnitConfigurations\UnitConfiguration\ApartmentRooms\ApartmentRoom\Config")
     * @Serializer\SerializedName("config")
     */
    protected $config;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\MatchingUnitConfigurations\UnitConfigurations\UnitConfiguration\ApartmentRooms\ApartmentRoom\RoomName|null
     * @Serializer\Type("Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\MatchingUnitConfigurations\UnitConfigurations\UnitConfiguration\ApartmentRooms\ApartmentRoom\RoomName")
     * @Serializer\SerializedName("roomName")
     */
    protected $roomName;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("__typename")
     */
    protected $typename;
    
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\MatchingUnitConfigurations\UnitConfigurations\UnitConfiguration\ApartmentRooms\ApartmentRoom\Config|null
     */
    public function getConfig()
    {
        return $this->config;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\MatchingUnitConfigurations\UnitConfigurations\UnitConfiguration\ApartmentRooms\ApartmentRoom\Config|null $config
     */
    public function setConfig($config)
    {
        $this->config = $config;
    }
    
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\MatchingUnitConfigurations\UnitConfigurations\UnitConfiguration\ApartmentRooms\ApartmentRoom\RoomName|null
     */
    public function getRoomName()
    {
        return $this->roomName;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\MatchingUnitConfigurations\UnitConfigurations\UnitConfiguration\ApartmentRooms\ApartmentRoom\RoomName|null $roomName
     */
    public function setRoomName($roomName)
    {
        $this->roomName = $roomName;
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
    
    
}