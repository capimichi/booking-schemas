<?php

namespace Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class MatchingUnitConfigurations
 *
 * @Serializer\ExclusionPolicy("none")
 */
class MatchingUnitConfigurations
{
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\MatchingUnitConfigurations\CommonConfiguration|null
     * @Serializer\Type("Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\MatchingUnitConfigurations\CommonConfiguration")
     * @Serializer\SerializedName("commonConfiguration")
     */
    protected $commonConfiguration;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\MatchingUnitConfigurations\UnitConfigurations\UnitConfiguration[]|null
     * @Serializer\Type("array<Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\MatchingUnitConfigurations\UnitConfigurations\UnitConfiguration>")
     * @Serializer\SerializedName("unitConfigurations")
     */
    protected $unitConfigurations;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("__typename")
     */
    protected $typename;
    
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\MatchingUnitConfigurations\CommonConfiguration|null
     */
    public function getCommonConfiguration()
    {
        return $this->commonConfiguration;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\MatchingUnitConfigurations\CommonConfiguration|null $commonConfiguration
     */
    public function setCommonConfiguration($commonConfiguration)
    {
        $this->commonConfiguration = $commonConfiguration;
    }
    
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\MatchingUnitConfigurations\UnitConfigurations\UnitConfiguration[]|null
     */
    public function getUnitConfigurations()
    {
        return $this->unitConfigurations;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\MatchingUnitConfigurations\UnitConfigurations\UnitConfiguration[]|null $unitConfigurations
     */
    public function setUnitConfigurations($unitConfigurations)
    {
        $this->unitConfigurations = $unitConfigurations;
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