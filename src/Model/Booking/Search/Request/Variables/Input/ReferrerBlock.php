<?php

namespace Capimichi\BookingSchemas\Model\Booking\Search\Request\Variables\Input;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class ReferrerBlock
 *
 * @Serializer\ExclusionPolicy("none")
 */
class ReferrerBlock
{
    
    /**
     * @var int|null
     * @Serializer\Type("int")
     * @Serializer\SerializedName("clickPosition")
     */
    protected $clickPosition;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("clickType")
     */
    protected $clickType;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("blockName")
     */
    protected $blockName;
    
    /**
     * @return int|null
     */
    public function getClickPosition()
    {
        return $this->clickPosition;
    }
    
    /**
     * @param int|null $clickPosition
     */
    public function setClickPosition($clickPosition)
    {
        $this->clickPosition = $clickPosition;
    }
    
    /**
     * @return string|null
     */
    public function getClickType()
    {
        return $this->clickType;
    }
    
    /**
     * @param string|null $clickType
     */
    public function setClickType($clickType)
    {
        $this->clickType = $clickType;
    }
    
    /**
     * @return string|null
     */
    public function getBlockName()
    {
        return $this->blockName;
    }
    
    /**
     * @param string|null $blockName
     */
    public function setBlockName($blockName)
    {
        $this->blockName = $blockName;
    }
    
    
}