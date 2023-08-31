<?php

namespace Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\AppliedFilterOptions;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class AppliedFilterOption
 *
 * @Serializer\ExclusionPolicy("none")
 */
class AppliedFilterOption
{
    
    /**
     * @var int|null
     * @Serializer\Type("int")
     * @Serializer\SerializedName("count")
     */
    protected $count;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\AppliedFilterOptions\AppliedFilterOption\AdditionalLabel|null
     * @Serializer\Type("Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\AppliedFilterOptions\AppliedFilterOption\AdditionalLabel")
     * @Serializer\SerializedName("additionalLabel")
     */
    protected $additionalLabel;
    
    /**
     * @var int|null
     * @Serializer\Type("int")
     * @Serializer\SerializedName("optionId")
     */
    protected $optionId;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("__typename")
     */
    protected $typename;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("urlId")
     */
    protected $urlId;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\AppliedFilterOptions\AppliedFilterOption\Value|null
     * @Serializer\Type("Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\AppliedFilterOptions\AppliedFilterOption\Value")
     * @Serializer\SerializedName("value")
     */
    protected $value;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\AppliedFilterOptions\AppliedFilterOption\StarRating|null
     * @Serializer\Type("Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\AppliedFilterOptions\AppliedFilterOption\StarRating")
     * @Serializer\SerializedName("starRating")
     */
    protected $starRating;
    
    /**
     * @var bool|null
     * @Serializer\Type("bool")
     * @Serializer\SerializedName("selected")
     */
    protected $selected;
    
    
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
    
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\AppliedFilterOptions\AppliedFilterOption\AdditionalLabel|null
     */
    public function getAdditionalLabel()
    {
        return $this->additionalLabel;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\AppliedFilterOptions\AppliedFilterOption\AdditionalLabel|null $additionalLabel
     */
    public function setAdditionalLabel($additionalLabel)
    {
        $this->additionalLabel = $additionalLabel;
    }
    
    
    /**
     * @return int|null
     */
    public function getOptionId()
    {
        return $this->optionId;
    }
    
    /**
     * @param int|null $optionId
     */
    public function setOptionId($optionId)
    {
        $this->optionId = $optionId;
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
     * @return string|null
     */
    public function getUrlId()
    {
        return $this->urlId;
    }
    
    /**
     * @param string|null $urlId
     */
    public function setUrlId($urlId)
    {
        $this->urlId = $urlId;
    }
    
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\AppliedFilterOptions\AppliedFilterOption\Value|null
     */
    public function getValue()
    {
        return $this->value;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\AppliedFilterOptions\AppliedFilterOption\Value|null $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }
    
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\AppliedFilterOptions\AppliedFilterOption\StarRating|null
     */
    public function getStarRating()
    {
        return $this->starRating;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\AppliedFilterOptions\AppliedFilterOption\StarRating|null $starRating
     */
    public function setStarRating($starRating)
    {
        $this->starRating = $starRating;
    }
    
    
    /**
     * @return bool|null
     */
    public function getSelected()
    {
        return $this->selected;
    }
    
    /**
     * @param bool|null $selected
     */
    public function setSelected($selected)
    {
        $this->selected = $selected;
    }
    
    
}