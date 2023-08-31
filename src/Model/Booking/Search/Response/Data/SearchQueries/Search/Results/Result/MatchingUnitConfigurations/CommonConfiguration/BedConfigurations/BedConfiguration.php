<?php

namespace Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\MatchingUnitConfigurations\CommonConfiguration\BedConfigurations;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class BedConfiguration
 *
 * @Serializer\ExclusionPolicy("none")
 */
class BedConfiguration
{
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\MatchingUnitConfigurations\CommonConfiguration\BedConfigurations\BedConfiguration\Beds\Bed[]|null
     * @Serializer\Type("array<Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\MatchingUnitConfigurations\CommonConfiguration\BedConfigurations\BedConfiguration\Beds\Bed>")
     * @Serializer\SerializedName("beds")
     */
    protected $beds;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("__typename")
     */
    protected $typename;
    
    /**
     * @var int|null
     * @Serializer\Type("int")
     * @Serializer\SerializedName("nbAllBeds")
     */
    protected $nbAllBeds;
    
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\MatchingUnitConfigurations\CommonConfiguration\BedConfigurations\BedConfiguration\Beds\Bed[]|null
     */
    public function getBeds()
    {
        return $this->beds;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\MatchingUnitConfigurations\CommonConfiguration\BedConfigurations\BedConfiguration\Beds\Bed[]|null $beds
     */
    public function setBeds($beds)
    {
        $this->beds = $beds;
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
    
    
}