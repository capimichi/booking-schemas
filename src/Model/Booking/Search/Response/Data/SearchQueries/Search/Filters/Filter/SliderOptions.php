<?php

namespace Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Filters\Filter;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class SliderOptions
 *
 * @Serializer\ExclusionPolicy("none")
 */
class SliderOptions
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
     * @var int[]|null
     * @Serializer\Type("array<int>")
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
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("minSelectedFormatted")
     */
    protected $minSelectedFormatted;
    
    /**
     * @var mixed|null
     * @Serializer\Exclude
     * TODO: Find out type for
     *  Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Filters\Filter\SliderOptions::selectedRange
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
     * @return int[]|null
     */
    public function getHistogram()
    {
        return $this->histogram;
    }
    
    /**
     * @param int[]|null $histogram
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
     * @return string|null
     */
    public function getMinSelectedFormatted()
    {
        return $this->minSelectedFormatted;
    }
    
    /**
     * @param string|null $minSelectedFormatted
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