<?php

namespace Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Filters\Filter;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class SliderOptionsPerStay
 *
 * @Serializer\ExclusionPolicy("none")
 */
class SliderOptionsPerStay
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
     * @Serializer\SerializedName("currency")
     */
    protected $currency;
    
    /**
     * @var array|null
     * @Serializer\Type("array")
     * @Serializer\SerializedName("histogram")
     */
    protected $histogram;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("max")
     */
    protected $max;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("maxSelected")
     */
    protected $maxSelected;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("min")
     */
    protected $min;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("minPriceStep")
     */
    protected $minPriceStep;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("minSelected")
     */
    protected $minSelected;
    
    /**
     * @var mixed|null
     * @Serializer\Exclude
     * TODO: Find out type for
     *  Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Filters\Filter\SliderOptionsPerStay::minSelectedFormatted
     */
    protected $minSelectedFormatted;
    
    /**
     * @var mixed|null
     * @Serializer\Exclude
     * TODO: Find out type for
     *  Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Filters\Filter\SliderOptionsPerStay::selectedRange
     */
    protected $selectedRange;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("title")
     */
    protected $title;
    
    
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
    public function getCurrency()
    {
        return $this->currency;
    }
    
    /**
     * @param string|null $currency
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }
    
    
    /**
     * @return array|null
     */
    public function getHistogram()
    {
        return $this->histogram;
    }
    
    /**
     * @param array|null $histogram
     */
    public function setHistogram($histogram)
    {
        $this->histogram = $histogram;
    }
    
    
    /**
     * @return string|null
     */
    public function getMax()
    {
        return $this->max;
    }
    
    /**
     * @param string|null $max
     */
    public function setMax($max)
    {
        $this->max = $max;
    }
    
    
    /**
     * @return string|null
     */
    public function getMaxSelected()
    {
        return $this->maxSelected;
    }
    
    /**
     * @param string|null $maxSelected
     */
    public function setMaxSelected($maxSelected)
    {
        $this->maxSelected = $maxSelected;
    }
    
    
    /**
     * @return string|null
     */
    public function getMin()
    {
        return $this->min;
    }
    
    /**
     * @param string|null $min
     */
    public function setMin($min)
    {
        $this->min = $min;
    }
    
    
    /**
     * @return string|null
     */
    public function getMinPriceStep()
    {
        return $this->minPriceStep;
    }
    
    /**
     * @param string|null $minPriceStep
     */
    public function setMinPriceStep($minPriceStep)
    {
        $this->minPriceStep = $minPriceStep;
    }
    
    
    /**
     * @return string|null
     */
    public function getMinSelected()
    {
        return $this->minSelected;
    }
    
    /**
     * @param string|null $minSelected
     */
    public function setMinSelected($minSelected)
    {
        $this->minSelected = $minSelected;
    }
    
    
    /**
     * @return mixed|null
     */
    public function getMinSelectedFormatted()
    {
        return $this->minSelectedFormatted;
    }
    
    /**
     * @param mixed|null $minSelectedFormatted
     */
    public function setMinSelectedFormatted($minSelectedFormatted)
    {
        $this->minSelectedFormatted = $minSelectedFormatted;
    }
    
    
    /**
     * @return mixed|null
     */
    public function getSelectedRange()
    {
        return $this->selectedRange;
    }
    
    /**
     * @param mixed|null $selectedRange
     */
    public function setSelectedRange($selectedRange)
    {
        $this->selectedRange = $selectedRange;
    }
    
    
    /**
     * @return string|null
     */
    public function getTitle()
    {
        return $this->title;
    }
    
    /**
     * @param string|null $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }
    
    
}