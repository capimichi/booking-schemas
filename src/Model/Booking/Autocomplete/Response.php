<?php

namespace Capimichi\BookingSchemas\Model\Booking\Autocomplete;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Response
 *
 * @Serializer\ExclusionPolicy("none")
 */
class Response
{
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Autocomplete\Response\Results\Result[]|null
     * @Serializer\Type("array<Capimichi\BookingSchemas\Model\Booking\Autocomplete\Response\Results\Result>")
     * @Serializer\SerializedName("results")
     */
    protected $results;
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Autocomplete\Response\Results\Result[]|null
     */
    public function getResults()
    {
        return $this->results;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Autocomplete\Response\Results\Result[]|null $results
     */
    public function setResults($results)
    {
        $this->results = $results;
    }
    
    
}