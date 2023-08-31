<?php

namespace Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Filters\Filter\StepperOptions;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class StepperOption
 *
 * @Serializer\ExclusionPolicy("none")
 */
class StepperOption
{
    
    /**
     * @var array|null
     * @Serializer\Type("array")
     * @Serializer\SerializedName("trackOnSelect")
     */
    protected $trackOnSelect;
    
    /**
     * @var array|null
     * @Serializer\Type("array")
     * @Serializer\SerializedName("trackOnClickDecrease")
     */
    protected $trackOnClickDecrease;
    
    /**
     * @var array|null
     * @Serializer\Type("array")
     * @Serializer\SerializedName("trackOnClickIncrease")
     */
    protected $trackOnClickIncrease;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Filters\Filter\StepperOptions\StepperOption\Labels\Label[]|null
     * @Serializer\Type("array<Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Filters\Filter\StepperOptions\StepperOption\Labels\Label>")
     * @Serializer\SerializedName("labels")
     */
    protected $labels;
    
    /**
     * @var int|null
     * @Serializer\Type("int")
     * @Serializer\SerializedName("max")
     */
    protected $max;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Filters\Filter\StepperOptions\StepperOption\Title|null
     * @Serializer\Type("Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Filters\Filter\StepperOptions\StepperOption\Title")
     * @Serializer\SerializedName("title")
     */
    protected $title;
    
    /**
     * @var array|null
     * @Serializer\Type("array")
     * @Serializer\SerializedName("trackOnDeSelect")
     */
    protected $trackOnDeSelect;
    
    /**
     * @var int|null
     * @Serializer\Type("int")
     * @Serializer\SerializedName("min")
     */
    protected $min;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("__typename")
     */
    protected $typename;
    
    /**
     * @var array|null
     * @Serializer\Type("array")
     * @Serializer\SerializedName("trackOnIncrease")
     */
    protected $trackOnIncrease;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("field")
     */
    protected $field;
    
    /**
     * @var int|null
     * @Serializer\Type("int")
     * @Serializer\SerializedName("default")
     */
    protected $default;
    
    /**
     * @var int|null
     * @Serializer\Type("int")
     * @Serializer\SerializedName("selected")
     */
    protected $selected;
    
    /**
     * @var array|null
     * @Serializer\Type("array")
     * @Serializer\SerializedName("trackOnView")
     */
    protected $trackOnView;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Filters\Filter\StepperOptions\StepperOption\TrackOnClick\TrackOnClick[]|null
     * @Serializer\Type("array<Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Filters\Filter\StepperOptions\StepperOption\TrackOnClick\TrackOnClick>")
     * @Serializer\SerializedName("trackOnClick")
     */
    protected $trackOnClick;
    
    /**
     * @var array|null
     * @Serializer\Type("array")
     * @Serializer\SerializedName("trackOnDecrease")
     */
    protected $trackOnDecrease;
    
    
    /**
     * @return array|null
     */
    public function getTrackOnSelect()
    {
        return $this->trackOnSelect;
    }
    
    /**
     * @param array|null $trackOnSelect
     */
    public function setTrackOnSelect($trackOnSelect)
    {
        $this->trackOnSelect = $trackOnSelect;
    }
    
    
    /**
     * @return array|null
     */
    public function getTrackOnClickDecrease()
    {
        return $this->trackOnClickDecrease;
    }
    
    /**
     * @param array|null $trackOnClickDecrease
     */
    public function setTrackOnClickDecrease($trackOnClickDecrease)
    {
        $this->trackOnClickDecrease = $trackOnClickDecrease;
    }
    
    
    /**
     * @return array|null
     */
    public function getTrackOnClickIncrease()
    {
        return $this->trackOnClickIncrease;
    }
    
    /**
     * @param array|null $trackOnClickIncrease
     */
    public function setTrackOnClickIncrease($trackOnClickIncrease)
    {
        $this->trackOnClickIncrease = $trackOnClickIncrease;
    }
    
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Filters\Filter\StepperOptions\StepperOption\Labels\Label[]|null
     */
    public function getLabels()
    {
        return $this->labels;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Filters\Filter\StepperOptions\StepperOption\Labels\Label[]|null $labels
     */
    public function setLabels($labels)
    {
        $this->labels = $labels;
    }
    
    
    /**
     * @return int|null
     */
    public function getMax()
    {
        return $this->max;
    }
    
    /**
     * @param int|null $max
     */
    public function setMax($max)
    {
        $this->max = $max;
    }
    
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Filters\Filter\StepperOptions\StepperOption\Title|null
     */
    public function getTitle()
    {
        return $this->title;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Filters\Filter\StepperOptions\StepperOption\Title|null $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }
    
    
    /**
     * @return array|null
     */
    public function getTrackOnDeSelect()
    {
        return $this->trackOnDeSelect;
    }
    
    /**
     * @param array|null $trackOnDeSelect
     */
    public function setTrackOnDeSelect($trackOnDeSelect)
    {
        $this->trackOnDeSelect = $trackOnDeSelect;
    }
    
    
    /**
     * @return int|null
     */
    public function getMin()
    {
        return $this->min;
    }
    
    /**
     * @param int|null $min
     */
    public function setMin($min)
    {
        $this->min = $min;
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
     * @return array|null
     */
    public function getTrackOnIncrease()
    {
        return $this->trackOnIncrease;
    }
    
    /**
     * @param array|null $trackOnIncrease
     */
    public function setTrackOnIncrease($trackOnIncrease)
    {
        $this->trackOnIncrease = $trackOnIncrease;
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
     * @return int|null
     */
    public function getDefault()
    {
        return $this->default;
    }
    
    /**
     * @param int|null $default
     */
    public function setDefault($default)
    {
        $this->default = $default;
    }
    
    
    /**
     * @return int|null
     */
    public function getSelected()
    {
        return $this->selected;
    }
    
    /**
     * @param int|null $selected
     */
    public function setSelected($selected)
    {
        $this->selected = $selected;
    }
    
    
    /**
     * @return array|null
     */
    public function getTrackOnView()
    {
        return $this->trackOnView;
    }
    
    /**
     * @param array|null $trackOnView
     */
    public function setTrackOnView($trackOnView)
    {
        $this->trackOnView = $trackOnView;
    }
    
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Filters\Filter\StepperOptions\StepperOption\TrackOnClick\TrackOnClick[]|null
     */
    public function getTrackOnClick()
    {
        return $this->trackOnClick;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Filters\Filter\StepperOptions\StepperOption\TrackOnClick\TrackOnClick[]|null $trackOnClick
     */
    public function setTrackOnClick($trackOnClick)
    {
        $this->trackOnClick = $trackOnClick;
    }
    
    
    /**
     * @return array|null
     */
    public function getTrackOnDecrease()
    {
        return $this->trackOnDecrease;
    }
    
    /**
     * @param array|null $trackOnDecrease
     */
    public function setTrackOnDecrease($trackOnDecrease)
    {
        $this->trackOnDecrease = $trackOnDecrease;
    }
    
    
}