<?php

namespace Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\PriceDisplayInfoIrene;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class DisplayPrice
 *
 * @Serializer\ExclusionPolicy("none")
 */
class DisplayPrice
{
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\PriceDisplayInfoIrene\DisplayPrice\AmountPerStay|null
     * @Serializer\Type("Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\PriceDisplayInfoIrene\DisplayPrice\AmountPerStay")
     * @Serializer\SerializedName("amountPerStay")
     */
    protected $amountPerStay;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\PriceDisplayInfoIrene\DisplayPrice\Copy|null
     * @Serializer\Type("Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\PriceDisplayInfoIrene\DisplayPrice\Copy")
     * @Serializer\SerializedName("copy")
     */
    protected $copy;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("__typename")
     */
    protected $typename;
    
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\PriceDisplayInfoIrene\DisplayPrice\AmountPerStay|null
     */
    public function getAmountPerStay()
    {
        return $this->amountPerStay;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\PriceDisplayInfoIrene\DisplayPrice\AmountPerStay|null $amountPerStay
     */
    public function setAmountPerStay($amountPerStay)
    {
        $this->amountPerStay = $amountPerStay;
    }
    
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\PriceDisplayInfoIrene\DisplayPrice\Copy|null
     */
    public function getCopy()
    {
        return $this->copy;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\PriceDisplayInfoIrene\DisplayPrice\Copy|null $copy
     */
    public function setCopy($copy)
    {
        $this->copy = $copy;
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
    
    
}