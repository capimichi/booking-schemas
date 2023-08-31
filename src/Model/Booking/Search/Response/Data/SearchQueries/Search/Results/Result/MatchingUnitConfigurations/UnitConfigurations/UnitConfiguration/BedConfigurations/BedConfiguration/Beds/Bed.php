<?php

namespace Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\MatchingUnitConfigurations\UnitConfigurations\UnitConfiguration\BedConfigurations\BedConfiguration\Beds;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Bed
 *
 * @Serializer\ExclusionPolicy("none")
 */
class Bed
{
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("__typename")
     */
    protected $typename;
    
    /**
     * @var int|null
     * @Serializer\Type("int")
     * @Serializer\SerializedName("type")
     */
    protected $type;
    
    /**
     * @var int|null
     * @Serializer\Type("int")
     * @Serializer\SerializedName("count")
     */
    protected $count;
    
    
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
    public function getType()
    {
        return $this->type;
    }
    
    /**
     * @param int|null $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }
    
    
    /**
     * @return int|null
     */
    public function getCount()
    {
        return $this->count;
    }
    
    /**
     * @param int|null $count
     */
    public function setCount($count)
    {
        $this->count = $count;
    }
    
    
}