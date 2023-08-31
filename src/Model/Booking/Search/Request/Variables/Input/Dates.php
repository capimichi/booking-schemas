<?php

namespace Capimichi\BookingSchemas\Model\Booking\Search\Request\Variables\Input;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Dates
 *
 * @Serializer\ExclusionPolicy("none")
 */
class Dates
{
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("checkin")
     */
    protected $checkin;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("checkout")
     */
    protected $checkout;
    
    /**
     * @return string|null
     */
    public function getCheckin()
    {
        return $this->checkin;
    }
    
    /**
     * @param string|null $checkin
     */
    public function setCheckin($checkin)
    {
        $this->checkin = $checkin;
    }
    
    /**
     * @return string|null
     */
    public function getCheckout()
    {
        return $this->checkout;
    }
    
    /**
     * @param string|null $checkout
     */
    public function setCheckout($checkout)
    {
        $this->checkout = $checkout;
    }
    
    
}