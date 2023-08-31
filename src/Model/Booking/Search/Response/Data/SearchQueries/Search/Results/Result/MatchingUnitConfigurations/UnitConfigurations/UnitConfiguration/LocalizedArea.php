<?php

namespace Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\MatchingUnitConfigurations\UnitConfigurations\UnitConfiguration;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class LocalizedArea
 *
 * @Serializer\ExclusionPolicy("none")
 */
class LocalizedArea
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
     * @Serializer\SerializedName("unit")
     */
    protected $unit;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("localizedArea")
     */
    protected $localizedArea;
    
    
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
    public function getUnit()
    {
        return $this->unit;
    }
    
    /**
     * @param string|null $unit
     */
    public function setUnit($unit)
    {
        $this->unit = $unit;
    }
    
    
    /**
     * @return string|null
     */
    public function getLocalizedArea()
    {
        return $this->localizedArea;
    }
    
    /**
     * @param string|null $localizedArea
     */
    public function setLocalizedArea($localizedArea)
    {
        $this->localizedArea = $localizedArea;
    }
    
    
}