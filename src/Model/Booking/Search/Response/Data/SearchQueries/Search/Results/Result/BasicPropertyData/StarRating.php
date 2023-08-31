<?php

namespace Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\BasicPropertyData;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class StarRating
 *
 * @Serializer\ExclusionPolicy("none")
 */
class StarRating
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
     * @Serializer\SerializedName("showAdditionalInfoIcon")
     */
    protected $showAdditionalInfoIcon;
    
    /**
     * @var int|null
     * @Serializer\Type("int")
     * @Serializer\SerializedName("value")
     */
    protected $value;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\BasicPropertyData\StarRating\TocLink|null
     * @Serializer\Type("Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\BasicPropertyData\StarRating\TocLink")
     * @Serializer\SerializedName("tocLink")
     */
    protected $tocLink;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\BasicPropertyData\StarRating\Caption|null
     * @Serializer\Type("Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\BasicPropertyData\StarRating\Caption")
     * @Serializer\SerializedName("caption")
     */
    protected $caption;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("symbol")
     */
    protected $symbol;
    
    
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
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\BasicPropertyData\StarRating\TocLink|null
     */
    public function getTocLink()
    {
        return $this->tocLink;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\BasicPropertyData\StarRating\TocLink|null $tocLink
     */
    public function setTocLink($tocLink)
    {
        $this->tocLink = $tocLink;
    }
    
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\BasicPropertyData\StarRating\Caption|null
     */
    public function getCaption()
    {
        return $this->caption;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\BasicPropertyData\StarRating\Caption|null $caption
     */
    public function setCaption($caption)
    {
        $this->caption = $caption;
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