<?php

namespace Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\PreviousSearches;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class PreviousSearch
 *
 * @Serializer\ExclusionPolicy("none")
 */
class PreviousSearch
{
    
    /**
     * @var array|null
     * @Serializer\Type("array")
     * @Serializer\SerializedName("childrenAges")
     */
    protected $childrenAges;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("__typename")
     */
    protected $typename;
    
    
    /**
     * @return array|null
     */
    public function getChildrenAges()
    {
        return $this->childrenAges;
    }
    
    /**
     * @param array|null $childrenAges
     */
    public function setChildrenAges($childrenAges)
    {
        $this->childrenAges = $childrenAges;
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