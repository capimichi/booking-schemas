<?php

namespace Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Filters\Filter;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class FilterLayout
 *
 * @Serializer\ExclusionPolicy("none")
 */
class FilterLayout
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
     * @Serializer\SerializedName("collapsedCount")
     */
    protected $collapsedCount;
    
    /**
     * @var bool|null
     * @Serializer\Type("bool")
     * @Serializer\SerializedName("isCollapsable")
     */
    protected $isCollapsable;
    
    
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
    public function getCollapsedCount()
    {
        return $this->collapsedCount;
    }
    
    /**
     * @param int|null $collapsedCount
     */
    public function setCollapsedCount($collapsedCount)
    {
        $this->collapsedCount = $collapsedCount;
    }
    
    
    /**
     * @return bool|null
     */
    public function getIsCollapsable()
    {
        return $this->isCollapsable;
    }
    
    /**
     * @param bool|null $isCollapsable
     */
    public function setIsCollapsable($isCollapsable)
    {
        $this->isCollapsable = $isCollapsable;
    }
    
    
}