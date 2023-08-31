<?php

namespace Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class RecommendedDate
 *
 * @Serializer\ExclusionPolicy("none")
 */
class RecommendedDate
{
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("checkin")
     */
    protected $checkin;
    
    /**
     * @var int|null
     * @Serializer\Type("int")
     * @Serializer\SerializedName("lengthOfStay")
     */
    protected $lengthOfStay;
    
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
     * @return int|null
     */
    public function getLengthOfStay()
    {
        return $this->lengthOfStay;
    }
    
    /**
     * @param int|null $lengthOfStay
     */
    public function setLengthOfStay($lengthOfStay)
    {
        $this->lengthOfStay = $lengthOfStay;
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