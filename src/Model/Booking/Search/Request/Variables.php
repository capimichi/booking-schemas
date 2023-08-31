<?php

namespace Capimichi\BookingSchemas\Model\Booking\Search\Request;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Variables
 *
 * @Serializer\ExclusionPolicy("none")
 */
class Variables
{
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Request\Variables\Input|null
     * @Serializer\Type("Capimichi\BookingSchemas\Model\Booking\Search\Request\Variables\Input")
     * @Serializer\SerializedName("input")
     */
    protected $input;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Request\Variables\GeniusVipUI|null
     * @Serializer\Type("Capimichi\BookingSchemas\Model\Booking\Search\Request\Variables\GeniusVipUI")
     * @Serializer\SerializedName("geniusVipUI")
     */
    protected $geniusVipUI;
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Request\Variables\Input|null
     */
    public function getInput()
    {
        return $this->input;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Request\Variables\Input|null $input
     */
    public function setInput($input)
    {
        $this->input = $input;
    }
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Request\Variables\GeniusVipUI|null
     */
    public function getGeniusVipUI()
    {
        return $this->geniusVipUI;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Request\Variables\GeniusVipUI|null $geniusVipUI
     */
    public function setGeniusVipUI($geniusVipUI)
    {
        $this->geniusVipUI = $geniusVipUI;
    }
    
    
}