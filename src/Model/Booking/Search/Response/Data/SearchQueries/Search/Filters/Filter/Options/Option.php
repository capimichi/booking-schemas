<?php

namespace Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Filters\Filter\Options;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Option
 *
 * @Serializer\ExclusionPolicy("none")
 */
class Option
{
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Filters\Filter\Options\Option\TrackOnDeSelect\TrackOnDeSelect[]|null
     * @Serializer\Type("array<Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Filters\Filter\Options\Option\TrackOnDeSelect\TrackOnDeSelect>")
     * @Serializer\SerializedName("trackOnDeSelect")
     */
    protected $trackOnDeSelect;
    
    /**
     * @var int|null
     * @Serializer\Type("int")
     * @Serializer\SerializedName("count")
     */
    protected $count;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Filters\Filter\Options\Option\AdditionalLabel|null
     * @Serializer\Type("Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Filters\Filter\Options\Option\AdditionalLabel")
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
     * @var array|null
     * @Serializer\Type("array")
     * @Serializer\SerializedName("trackOnClick")
     */
    protected $trackOnClick;
    
    /**
     * @var array|null
     * @Serializer\Type("array")
     * @Serializer\SerializedName("trackOnViewPopular")
     */
    protected $trackOnViewPopular;
    
    /**
     * @var bool|null
     * @Serializer\Type("bool")
     * @Serializer\SerializedName("selected")
     */
    protected $selected;
    
    /**
     * @var array|null
     * @Serializer\Type("array")
     * @Serializer\SerializedName("trackOnClickPopular")
     */
    protected $trackOnClickPopular;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Filters\Filter\Options\Option\TrackOnView\TrackOnView[]|null
     * @Serializer\Type("array<Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Filters\Filter\Options\Option\TrackOnView\TrackOnView>")
     * @Serializer\SerializedName("trackOnView")
     */
    protected $trackOnView;
    
    /**
     * @var array|null
     * @Serializer\Type("array")
     * @Serializer\SerializedName("trackOnSelectPopular")
     */
    protected $trackOnSelectPopular;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Filters\Filter\Options\Option\TrackOnSelect\TrackOnSelect[]|null
     * @Serializer\Type("array<Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Filters\Filter\Options\Option\TrackOnSelect\TrackOnSelect>")
     * @Serializer\SerializedName("trackOnSelect")
     */
    protected $trackOnSelect;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Filters\Filter\Options\Option\StarRating|null
     * @Serializer\Type("Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Filters\Filter\Options\Option\StarRating")
     * @Serializer\SerializedName("starRating")
     */
    protected $starRating;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Filters\Filter\Options\Option\Value|null
     * @Serializer\Type("Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Filters\Filter\Options\Option\Value")
     * @Serializer\SerializedName("value")
     */
    protected $value;
    
    /**
     * @var array|null
     * @Serializer\Type("array")
     * @Serializer\SerializedName("trackOnDeSelectPopular")
     */
    protected $trackOnDeSelectPopular;
    
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Filters\Filter\Options\Option\TrackOnDeSelect\TrackOnDeSelect[]|null
     */
    public function getTrackOnDeSelect()
    {
        return $this->trackOnDeSelect;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Filters\Filter\Options\Option\TrackOnDeSelect\TrackOnDeSelect[]|null $trackOnDeSelect
     */
    public function setTrackOnDeSelect($trackOnDeSelect)
    {
        $this->trackOnDeSelect = $trackOnDeSelect;
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
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Filters\Filter\Options\Option\AdditionalLabel|null
     */
    public function getAdditionalLabel()
    {
        return $this->additionalLabel;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Filters\Filter\Options\Option\AdditionalLabel|null $additionalLabel
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
     * @return array|null
     */
    public function getTrackOnClick()
    {
        return $this->trackOnClick;
    }
    
    /**
     * @param array|null $trackOnClick
     */
    public function setTrackOnClick($trackOnClick)
    {
        $this->trackOnClick = $trackOnClick;
    }
    
    
    /**
     * @return array|null
     */
    public function getTrackOnViewPopular()
    {
        return $this->trackOnViewPopular;
    }
    
    /**
     * @param array|null $trackOnViewPopular
     */
    public function setTrackOnViewPopular($trackOnViewPopular)
    {
        $this->trackOnViewPopular = $trackOnViewPopular;
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
     * @return array|null
     */
    public function getTrackOnClickPopular()
    {
        return $this->trackOnClickPopular;
    }
    
    /**
     * @param array|null $trackOnClickPopular
     */
    public function setTrackOnClickPopular($trackOnClickPopular)
    {
        $this->trackOnClickPopular = $trackOnClickPopular;
    }
    
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Filters\Filter\Options\Option\TrackOnView\TrackOnView[]|null
     */
    public function getTrackOnView()
    {
        return $this->trackOnView;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Filters\Filter\Options\Option\TrackOnView\TrackOnView[]|null $trackOnView
     */
    public function setTrackOnView($trackOnView)
    {
        $this->trackOnView = $trackOnView;
    }
    
    
    /**
     * @return array|null
     */
    public function getTrackOnSelectPopular()
    {
        return $this->trackOnSelectPopular;
    }
    
    /**
     * @param array|null $trackOnSelectPopular
     */
    public function setTrackOnSelectPopular($trackOnSelectPopular)
    {
        $this->trackOnSelectPopular = $trackOnSelectPopular;
    }
    
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Filters\Filter\Options\Option\TrackOnSelect\TrackOnSelect[]|null
     */
    public function getTrackOnSelect()
    {
        return $this->trackOnSelect;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Filters\Filter\Options\Option\TrackOnSelect\TrackOnSelect[]|null $trackOnSelect
     */
    public function setTrackOnSelect($trackOnSelect)
    {
        $this->trackOnSelect = $trackOnSelect;
    }
    
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Filters\Filter\Options\Option\StarRating|null
     */
    public function getStarRating()
    {
        return $this->starRating;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Filters\Filter\Options\Option\StarRating|null $starRating
     */
    public function setStarRating($starRating)
    {
        $this->starRating = $starRating;
    }
    
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Filters\Filter\Options\Option\Value|null
     */
    public function getValue()
    {
        return $this->value;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Filters\Filter\Options\Option\Value|null $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }
    
    
    /**
     * @return array|null
     */
    public function getTrackOnDeSelectPopular()
    {
        return $this->trackOnDeSelectPopular;
    }
    
    /**
     * @param array|null $trackOnDeSelectPopular
     */
    public function setTrackOnDeSelectPopular($trackOnDeSelectPopular)
    {
        $this->trackOnDeSelectPopular = $trackOnDeSelectPopular;
    }
    
    
}