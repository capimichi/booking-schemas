<?php

namespace Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\Blocks\Block;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class ThirdPartyInventoryContext
 *
 * @Serializer\ExclusionPolicy("none")
 */
class ThirdPartyInventoryContext
{
    
    /**
     * @var bool|null
     * @Serializer\Type("bool")
     * @Serializer\SerializedName("isTpiBlock")
     */
    protected $isTpiBlock;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("__typename")
     */
    protected $typename;
    
    
    /**
     * @return bool|null
     */
    public function getIsTpiBlock()
    {
        return $this->isTpiBlock;
    }
    
    /**
     * @param bool|null $isTpiBlock
     */
    public function setIsTpiBlock($isTpiBlock)
    {
        $this->isTpiBlock = $isTpiBlock;
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