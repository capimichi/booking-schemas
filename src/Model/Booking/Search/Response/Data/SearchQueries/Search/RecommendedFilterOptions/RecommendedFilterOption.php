<?php

namespace Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\RecommendedFilterOptions;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class RecommendedFilterOption
 *
 * @Serializer\ExclusionPolicy("none")
 */
class RecommendedFilterOption
{
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\RecommendedFilterOptions\RecommendedFilterOption\AdditionalLabel|null
     * @Serializer\Type("Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\RecommendedFilterOptions\RecommendedFilterOption\AdditionalLabel")
     * @Serializer\SerializedName("additionalLabel")
     */
    protected $additionalLabel;
    
    /**
     * @var int|null
     * @Serializer\Type("int")
     * @Serializer\SerializedName("count")
     */
    protected $count;
    
    /**
     * @var int|null
     * @Serializer\Type("int")
     * @Serializer\SerializedName("optionId")
     */
    protected $optionId;
    
    /**
     * @var bool|null
     * @Serializer\Type("bool")
     * @Serializer\SerializedName("selected")
     */
    protected $selected;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("urlId")
     */
    protected $urlId;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("__typename")
     */
    protected $typename;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\RecommendedFilterOptions\RecommendedFilterOption\Value|null
     * @Serializer\Type("Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\RecommendedFilterOptions\RecommendedFilterOption\Value")
     * @Serializer\SerializedName("value")
     */
    protected $value;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\RecommendedFilterOptions\RecommendedFilterOption\StarRating|null
     * @Serializer\Type("Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\RecommendedFilterOptions\RecommendedFilterOption\StarRating")
     * @Serializer\SerializedName("starRating")
     */
    protected $starRating;
    
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\RecommendedFilterOptions\RecommendedFilterOption\AdditionalLabel|null
     */
    public function getAdditionalLabel()
    {
        return $this->additionalLabel;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\RecommendedFilterOptions\RecommendedFilterOption\AdditionalLabel|null $additionalLabel
     */
    public function setAdditionalLabel($additionalLabel)
    {
        $this->additionalLabel = $additionalLabel;
    }
    
    
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
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\RecommendedFilterOptions\RecommendedFilterOption\Value|null
     */
    public function getValue()
    {
        return $this->value;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\RecommendedFilterOptions\RecommendedFilterOption\Value|null $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }
    
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\RecommendedFilterOptions\RecommendedFilterOption\StarRating|null
     */
    public function getStarRating()
    {
        return $this->starRating;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\RecommendedFilterOptions\RecommendedFilterOption\StarRating|null $starRating
     */
    public function setStarRating($starRating)
    {
        $this->starRating = $starRating;
    }
    
    
}