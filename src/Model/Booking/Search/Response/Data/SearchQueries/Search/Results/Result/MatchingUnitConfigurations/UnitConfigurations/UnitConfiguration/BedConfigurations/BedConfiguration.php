<?php

namespace Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\MatchingUnitConfigurations\UnitConfigurations\UnitConfiguration\BedConfigurations;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class BedConfiguration
 *
 * @Serializer\ExclusionPolicy("none")
 */
class BedConfiguration
{
    
    /**
     * @var int|null
     * @Serializer\Type("int")
     * @Serializer\SerializedName("nbAllBeds")
     */
    protected $nbAllBeds;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("__typename")
     */
    protected $typename;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\MatchingUnitConfigurations\UnitConfigurations\UnitConfiguration\BedConfigurations\BedConfiguration\Beds\Bed[]|null
     * @Serializer\Type("array<Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\MatchingUnitConfigurations\UnitConfigurations\UnitConfiguration\BedConfigurations\BedConfiguration\Beds\Bed>")
     * @Serializer\SerializedName("beds")
     */
    protected $beds;
    
    
    /**
     * @return int|null
     */
    public function getNbAllBeds()
    {
        return $this->nbAllBeds;
    }
    
    /**
     * @param int|null $nbAllBeds
     */
    public function setNbAllBeds($nbAllBeds)
    {
        $this->nbAllBeds = $nbAllBeds;
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
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\MatchingUnitConfigurations\UnitConfigurations\UnitConfiguration\BedConfigurations\BedConfiguration\Beds\Bed[]|null
     */
    public function getBeds()
    {
        return $this->beds;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\MatchingUnitConfigurations\UnitConfigurations\UnitConfiguration\BedConfigurations\BedConfiguration\Beds\Bed[]|null $beds
     */
    public function setBeds($beds)
    {
        $this->beds = $beds;
    }
    
    
}