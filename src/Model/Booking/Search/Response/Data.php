<?php

namespace Capimichi\BookingSchemas\Model\Booking\Search\Response;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Data
 *
 * @Serializer\ExclusionPolicy("none")
 */
class Data
{
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\GeniusVipEnrolledProgram|null
     * @Serializer\Type("Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\GeniusVipEnrolledProgram")
     * @Serializer\SerializedName("geniusVipEnrolledProgram")
     */
    protected $geniusVipEnrolledProgram;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries|null
     * @Serializer\Type("Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries")
     * @Serializer\SerializedName("searchQueries")
     */
    protected $searchQueries;
    
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\GeniusVipEnrolledProgram|null
     */
    public function getGeniusVipEnrolledProgram()
    {
        return $this->geniusVipEnrolledProgram;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\GeniusVipEnrolledProgram|null $geniusVipEnrolledProgram
     */
    public function setGeniusVipEnrolledProgram($geniusVipEnrolledProgram)
    {
        $this->geniusVipEnrolledProgram = $geniusVipEnrolledProgram;
    }
    
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries|null
     */
    public function getSearchQueries()
    {
        return $this->searchQueries;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries|null $searchQueries
     */
    public function setSearchQueries($searchQueries)
    {
        $this->searchQueries = $searchQueries;
    }
    
    
}