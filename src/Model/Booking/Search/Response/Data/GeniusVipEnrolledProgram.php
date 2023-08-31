<?php

namespace Capimichi\BookingSchemas\Model\Booking\Search\Response\Data;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class GeniusVipEnrolledProgram
 *
 * @Serializer\ExclusionPolicy("none")
 */
class GeniusVipEnrolledProgram
{
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("__typename")
     */
    protected $typename;
    
    
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