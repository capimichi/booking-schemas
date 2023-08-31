<?php

namespace Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\PriceDisplayInfoIrene\ExcludedCharges;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class ExcludeChargesAggregated
 *
 * @Serializer\ExclusionPolicy("none")
 */
class ExcludeChargesAggregated
{
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("__typename")
     */
    protected $typename;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\PriceDisplayInfoIrene\ExcludedCharges\ExcludeChargesAggregated\Copy|null
     * @Serializer\Type("Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\PriceDisplayInfoIrene\ExcludedCharges\ExcludeChargesAggregated\Copy")
     * @Serializer\SerializedName("copy")
     */
    protected $copy;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\PriceDisplayInfoIrene\ExcludedCharges\ExcludeChargesAggregated\AmountPerStay|null
     * @Serializer\Type("Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\PriceDisplayInfoIrene\ExcludedCharges\ExcludeChargesAggregated\AmountPerStay")
     * @Serializer\SerializedName("amountPerStay")
     */
    protected $amountPerStay;
    
    
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
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\PriceDisplayInfoIrene\ExcludedCharges\ExcludeChargesAggregated\Copy|null
     */
    public function getCopy()
    {
        return $this->copy;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\PriceDisplayInfoIrene\ExcludedCharges\ExcludeChargesAggregated\Copy|null $copy
     */
    public function setCopy($copy)
    {
        $this->copy = $copy;
    }
    
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\PriceDisplayInfoIrene\ExcludedCharges\ExcludeChargesAggregated\AmountPerStay|null
     */
    public function getAmountPerStay()
    {
        return $this->amountPerStay;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\PriceDisplayInfoIrene\ExcludedCharges\ExcludeChargesAggregated\AmountPerStay|null $amountPerStay
     */
    public function setAmountPerStay($amountPerStay)
    {
        $this->amountPerStay = $amountPerStay;
    }
    
    
}