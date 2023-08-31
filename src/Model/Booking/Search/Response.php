<?php

namespace Capimichi\BookingSchemas\Model\Booking\Search;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Response
 *
 * @Serializer\ExclusionPolicy("none")
 */
class Response
{
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data|null
     * @Serializer\Type("Capimichi\BookingSchemas\Model\Booking\Search\Response\Data")
     * @Serializer\SerializedName("data")
     */
    protected $data;
    
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data|null
     */
    public function getData()
    {
        return $this->data;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data|null $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }
    
    
}