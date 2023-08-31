<?php

namespace Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Filters;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Filter
 *
 * @Serializer\ExclusionPolicy("none")
 */
class Filter
{
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("__typename")
     */
    protected $typename;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("category")
     */
    protected $category;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("field")
     */
    protected $field;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Filters\Filter\FilterLayout|null
     * @Serializer\Type("Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Filters\Filter\FilterLayout")
     * @Serializer\SerializedName("filterLayout")
     */
    protected $filterLayout;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("filterStyle")
     */
    protected $filterStyle;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("name")
     */
    protected $name;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Filters\Filter\Options\Option[]|null
     * @Serializer\Type("array<Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Filters\Filter\Options\Option>")
     * @Serializer\SerializedName("options")
     */
    protected $options;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Filters\Filter\SliderOptions|null
     * @Serializer\Type("Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Filters\Filter\SliderOptions")
     * @Serializer\SerializedName("sliderOptions")
     */
    protected $sliderOptions;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Filters\Filter\SliderOptionsPerStay|null
     * @Serializer\Type("Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Filters\Filter\SliderOptionsPerStay")
     * @Serializer\SerializedName("sliderOptionsPerStay")
     */
    protected $sliderOptionsPerStay;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Filters\Filter\StepperOptions\StepperOption[]|null
     * @Serializer\Type("array<Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Filters\Filter\StepperOptions\StepperOption>")
     * @Serializer\SerializedName("stepperOptions")
     */
    protected $stepperOptions;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("subtitle")
     */
    protected $subtitle;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Filters\Filter\Title|null
     * @Serializer\Type("Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Filters\Filter\Title")
     * @Serializer\SerializedName("title")
     */
    protected $title;
    
    /**
     * @var array|null
     * @Serializer\Type("array")
     * @Serializer\SerializedName("trackOnClick")
     */
    protected $trackOnClick;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Filters\Filter\TrackOnView\TrackOnView[]|null
     * @Serializer\Type("array<Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Filters\Filter\TrackOnView\TrackOnView>")
     * @Serializer\SerializedName("trackOnView")
     */
    protected $trackOnView;
    
    
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
    public function getCategory()
    {
        return $this->category;
    }
    
    /**
     * @param string|null $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }
    
    
    /**
     * @return string|null
     */
    public function getField()
    {
        return $this->field;
    }
    
    /**
     * @param string|null $field
     */
    public function setField($field)
    {
        $this->field = $field;
    }
    
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Filters\Filter\FilterLayout|null
     */
    public function getFilterLayout()
    {
        return $this->filterLayout;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Filters\Filter\FilterLayout|null $filterLayout
     */
    public function setFilterLayout($filterLayout)
    {
        $this->filterLayout = $filterLayout;
    }
    
    
    /**
     * @return string|null
     */
    public function getFilterStyle()
    {
        return $this->filterStyle;
    }
    
    /**
     * @param string|null $filterStyle
     */
    public function setFilterStyle($filterStyle)
    {
        $this->filterStyle = $filterStyle;
    }
    
    
    /**
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * @param string|null $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }
    
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Filters\Filter\Options\Option[]|null
     */
    public function getOptions()
    {
        return $this->options;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Filters\Filter\Options\Option[]|null $options
     */
    public function setOptions($options)
    {
        $this->options = $options;
    }
    
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Filters\Filter\SliderOptions|null
     */
    public function getSliderOptions()
    {
        return $this->sliderOptions;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Filters\Filter\SliderOptions|null $sliderOptions
     */
    public function setSliderOptions($sliderOptions)
    {
        $this->sliderOptions = $sliderOptions;
    }
    
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Filters\Filter\SliderOptionsPerStay|null
     */
    public function getSliderOptionsPerStay()
    {
        return $this->sliderOptionsPerStay;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Filters\Filter\SliderOptionsPerStay|null $sliderOptionsPerStay
     */
    public function setSliderOptionsPerStay($sliderOptionsPerStay)
    {
        $this->sliderOptionsPerStay = $sliderOptionsPerStay;
    }
    
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Filters\Filter\StepperOptions\StepperOption[]|null
     */
    public function getStepperOptions()
    {
        return $this->stepperOptions;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Filters\Filter\StepperOptions\StepperOption[]|null $stepperOptions
     */
    public function setStepperOptions($stepperOptions)
    {
        $this->stepperOptions = $stepperOptions;
    }
    
    
    /**
     * @return string|null
     */
    public function getSubtitle()
    {
        return $this->subtitle;
    }
    
    /**
     * @param string|null $subtitle
     */
    public function setSubtitle($subtitle)
    {
        $this->subtitle = $subtitle;
    }
    
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Filters\Filter\Title|null
     */
    public function getTitle()
    {
        return $this->title;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Filters\Filter\Title|null $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
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
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Filters\Filter\TrackOnView\TrackOnView[]|null
     */
    public function getTrackOnView()
    {
        return $this->trackOnView;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Filters\Filter\TrackOnView\TrackOnView[]|null $trackOnView
     */
    public function setTrackOnView($trackOnView)
    {
        $this->trackOnView = $trackOnView;
    }
    
    
}