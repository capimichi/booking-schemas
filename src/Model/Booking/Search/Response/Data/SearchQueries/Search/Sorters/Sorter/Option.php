<?php

namespace Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Sorters\Sorter;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Option
 *
 * @Serializer\ExclusionPolicy("none")
 */
class Option
{
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("__typename")
     */
    protected $typename;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Sorters\Sorter\Option\CaptionTranslationTag|null
     * @Serializer\Type("Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Sorters\Sorter\Option\CaptionTranslationTag")
     * @Serializer\SerializedName("captionTranslationTag")
     */
    protected $captionTranslationTag;
    
    /**
     * @var bool|null
     * @Serializer\Type("bool")
     * @Serializer\SerializedName("isSelected")
     */
    protected $isSelected;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Sorters\Sorter\Option\TooltipTranslationTag|null
     * @Serializer\Type("Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Sorters\Sorter\Option\TooltipTranslationTag")
     * @Serializer\SerializedName("tooltipTranslationTag")
     */
    protected $tooltipTranslationTag;
    
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
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Sorters\Sorter\Option\CaptionTranslationTag|null
     */
    public function getCaptionTranslationTag()
    {
        return $this->captionTranslationTag;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Sorters\Sorter\Option\CaptionTranslationTag|null $captionTranslationTag
     */
    public function setCaptionTranslationTag($captionTranslationTag)
    {
        $this->captionTranslationTag = $captionTranslationTag;
    }
    
    
    /**
     * @return bool|null
     */
    public function getIsSelected()
    {
        return $this->isSelected;
    }
    
    /**
     * @param bool|null $isSelected
     */
    public function setIsSelected($isSelected)
    {
        $this->isSelected = $isSelected;
    }
    
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Sorters\Sorter\Option\TooltipTranslationTag|null
     */
    public function getTooltipTranslationTag()
    {
        return $this->tooltipTranslationTag;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Sorters\Sorter\Option\TooltipTranslationTag|null $tooltipTranslationTag
     */
    public function setTooltipTranslationTag($tooltipTranslationTag)
    {
        $this->tooltipTranslationTag = $tooltipTranslationTag;
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