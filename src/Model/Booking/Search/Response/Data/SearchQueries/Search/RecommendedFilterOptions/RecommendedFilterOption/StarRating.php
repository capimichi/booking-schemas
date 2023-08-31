<?php

namespace Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\RecommendedFilterOptions\RecommendedFilterOption;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class StarRating
 *
 * @Serializer\ExclusionPolicy("none")
 */
class StarRating
{
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\RecommendedFilterOptions\RecommendedFilterOption\StarRating\Caption|null
     * @Serializer\Type("Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\RecommendedFilterOptions\RecommendedFilterOption\StarRating\Caption")
     * @Serializer\SerializedName("caption")
     */
    protected $caption;
    
    /**
     * @var bool|null
     * @Serializer\Type("bool")
     * @Serializer\SerializedName("showAdditionalInfoIcon")
     */
    protected $showAdditionalInfoIcon;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("__typename")
     */
    protected $typename;
    
    /**
     * @var int|null
     * @Serializer\Type("int")
     * @Serializer\SerializedName("value")
     */
    protected $value;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("symbol")
     */
    protected $symbol;
    
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\RecommendedFilterOptions\RecommendedFilterOption\StarRating\Caption|null
     */
    public function getCaption()
    {
        return $this->caption;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\RecommendedFilterOptions\RecommendedFilterOption\StarRating\Caption|null $caption
     */
    public function setCaption($caption)
    {
        $this->caption = $caption;
    }
    
    
    /**
     * @return bool|null
     */
    public function getShowAdditionalInfoIcon()
    {
        return $this->showAdditionalInfoIcon;
    }
    
    /**
     * @param bool|null $showAdditionalInfoIcon
     */
    public function setShowAdditionalInfoIcon($showAdditionalInfoIcon)
    {
        $this->showAdditionalInfoIcon = $showAdditionalInfoIcon;
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
    
    
    /**
     * @return int|null
     */
    public function getValue()
    {
        return $this->value;
    }
    
    /**
     * @param int|null $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }
    
    
    /**
     * @return string|null
     */
    public function getSymbol()
    {
        return $this->symbol;
    }
    
    /**
     * @param string|null $symbol
     */
    public function setSymbol($symbol)
    {
        $this->symbol = $symbol;
    }
    
    
}