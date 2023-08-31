<?php

namespace Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\AppliedFilterOptions\AppliedFilterOption;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class StarRating
 *
 * @Serializer\ExclusionPolicy("none")
 */
class StarRating
{
    
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
     * @var bool|null
     * @Serializer\Type("bool")
     * @Serializer\SerializedName("showAdditionalInfoIcon")
     */
    protected $showAdditionalInfoIcon;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\AppliedFilterOptions\AppliedFilterOption\StarRating\Caption|null
     * @Serializer\Type("Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\AppliedFilterOptions\AppliedFilterOption\StarRating\Caption")
     * @Serializer\SerializedName("caption")
     */
    protected $caption;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("__typename")
     */
    protected $typename;
    
    
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
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\AppliedFilterOptions\AppliedFilterOption\StarRating\Caption|null
     */
    public function getCaption()
    {
        return $this->caption;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\AppliedFilterOptions\AppliedFilterOption\StarRating\Caption|null $caption
     */
    public function setCaption($caption)
    {
        $this->caption = $caption;
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