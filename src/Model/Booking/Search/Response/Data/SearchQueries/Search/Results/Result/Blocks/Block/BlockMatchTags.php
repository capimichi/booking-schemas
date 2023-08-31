<?php

namespace Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\Blocks\Block;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class BlockMatchTags
 *
 * @Serializer\ExclusionPolicy("none")
 */
class BlockMatchTags
{
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("__typename")
     */
    protected $typename;
    
    /**
     * @var bool|null
     * @Serializer\Type("bool")
     * @Serializer\SerializedName("childStaysForFree")
     */
    protected $childStaysForFree;
    
    
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
     * @return bool|null
     */
    public function getChildStaysForFree()
    {
        return $this->childStaysForFree;
    }
    
    /**
     * @param bool|null $childStaysForFree
     */
    public function setChildStaysForFree($childStaysForFree)
    {
        $this->childStaysForFree = $childStaysForFree;
    }
    
    
}