<?php

namespace Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\TripTypes;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Beach
 *
 * @Serializer\ExclusionPolicy("none")
 */
class Beach
{
    
    /**
     * @var bool|null
     * @Serializer\Type("bool")
     * @Serializer\SerializedName("isEnabledBeachUfi")
     */
    protected $isEnabledBeachUfi;
    
    /**
     * @var bool|null
     * @Serializer\Type("bool")
     * @Serializer\SerializedName("isBeachDestinationWithoutBeach")
     */
    protected $isBeachDestinationWithoutBeach;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("__typename")
     */
    protected $typename;
    
    /**
     * @var bool|null
     * @Serializer\Type("bool")
     * @Serializer\SerializedName("isBeachUfi")
     */
    protected $isBeachUfi;
    
    /**
     * @var bool|null
     * @Serializer\Type("bool")
     * @Serializer\SerializedName("isCoastalBeachRegion")
     */
    protected $isCoastalBeachRegion;
    
    
    /**
     * @return bool|null
     */
    public function getIsEnabledBeachUfi()
    {
        return $this->isEnabledBeachUfi;
    }
    
    /**
     * @param bool|null $isEnabledBeachUfi
     */
    public function setIsEnabledBeachUfi($isEnabledBeachUfi)
    {
        $this->isEnabledBeachUfi = $isEnabledBeachUfi;
    }
    
    
    /**
     * @return bool|null
     */
    public function getIsBeachDestinationWithoutBeach()
    {
        return $this->isBeachDestinationWithoutBeach;
    }
    
    /**
     * @param bool|null $isBeachDestinationWithoutBeach
     */
    public function setIsBeachDestinationWithoutBeach($isBeachDestinationWithoutBeach)
    {
        $this->isBeachDestinationWithoutBeach = $isBeachDestinationWithoutBeach;
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
     * @return bool|null
     */
    public function getIsBeachUfi()
    {
        return $this->isBeachUfi;
    }
    
    /**
     * @param bool|null $isBeachUfi
     */
    public function setIsBeachUfi($isBeachUfi)
    {
        $this->isBeachUfi = $isBeachUfi;
    }
    
    
    /**
     * @return bool|null
     */
    public function getIsCoastalBeachRegion()
    {
        return $this->isCoastalBeachRegion;
    }
    
    /**
     * @param bool|null $isCoastalBeachRegion
     */
    public function setIsCoastalBeachRegion($isCoastalBeachRegion)
    {
        $this->isCoastalBeachRegion = $isCoastalBeachRegion;
    }
    
    
}