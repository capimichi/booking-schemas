<?php

namespace Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\SearchMeta;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class AvailabilityInfo
 *
 * @Serializer\ExclusionPolicy("none")
 */
class AvailabilityInfo
{
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("__typename")
     */
    protected $typename;
    
    /**
     * @var bool|null
     * @Serializer\Type("bool")
     * @Serializer\SerializedName("hasLowAvailability")
     */
    protected $hasLowAvailability;
    
    /**
     * @var int|null
     * @Serializer\Type("int")
     * @Serializer\SerializedName("totalAvailableNotAutoextended")
     */
    protected $totalAvailableNotAutoextended;
    
    /**
     * @var int|null
     * @Serializer\Type("int")
     * @Serializer\SerializedName("unavailabilityPercent")
     */
    protected $unavailabilityPercent;
    
    
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
    public function getHasLowAvailability()
    {
        return $this->hasLowAvailability;
    }
    
    /**
     * @param bool|null $hasLowAvailability
     */
    public function setHasLowAvailability($hasLowAvailability)
    {
        $this->hasLowAvailability = $hasLowAvailability;
    }
    
    
    /**
     * @return int|null
     */
    public function getTotalAvailableNotAutoextended()
    {
        return $this->totalAvailableNotAutoextended;
    }
    
    /**
     * @param int|null $totalAvailableNotAutoextended
     */
    public function setTotalAvailableNotAutoextended($totalAvailableNotAutoextended)
    {
        $this->totalAvailableNotAutoextended = $totalAvailableNotAutoextended;
    }
    
    
    /**
     * @return int|null
     */
    public function getUnavailabilityPercent()
    {
        return $this->unavailabilityPercent;
    }
    
    /**
     * @param int|null $unavailabilityPercent
     */
    public function setUnavailabilityPercent($unavailabilityPercent)
    {
        $this->unavailabilityPercent = $unavailabilityPercent;
    }
    
    
}