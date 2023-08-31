<?php

namespace Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\SearchMeta;

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
     * @Serializer\SerializedName("__typename")
     */
    protected $typename;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("checkout")
     */
    protected $checkout;
    
    /**
     * @var int|null
     * @Serializer\Type("int")
     * @Serializer\SerializedName("lengthOfStayInDays")
     */
    protected $lengthOfStayInDays;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("checkin")
     */
    protected $checkin;
    
    
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
    
    
    /**
     * @return int|null
     */
    public function getLengthOfStayInDays()
    {
        return $this->lengthOfStayInDays;
    }
    
    /**
     * @param int|null $lengthOfStayInDays
     */
    public function setLengthOfStayInDays($lengthOfStayInDays)
    {
        $this->lengthOfStayInDays = $lengthOfStayInDays;
    }
    
    
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
    
    
}