<?php

namespace Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\PropertySustainability;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Tier
 *
 * @Serializer\ExclusionPolicy("none")
 */
class Tier
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
     * @Serializer\SerializedName("type")
     */
    protected $type;
    
    
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
    public function getType()
    {
        return $this->type;
    }
    
    /**
     * @param string|null $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }
    
    
}