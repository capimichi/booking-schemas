<?php

namespace Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\PriceDisplayInfoIrene;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class ExcludedCharges
 *
 * @Serializer\ExclusionPolicy("none")
 */
class ExcludedCharges
{
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\PriceDisplayInfoIrene\ExcludedCharges\ExcludeChargesAggregated|null
     * @Serializer\Type("Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\PriceDisplayInfoIrene\ExcludedCharges\ExcludeChargesAggregated")
     * @Serializer\SerializedName("excludeChargesAggregated")
     */
    protected $excludeChargesAggregated;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("__typename")
     */
    protected $typename;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\PriceDisplayInfoIrene\ExcludedCharges\ExcludeChargesList\ExcludeChargesList[]|null
     * @Serializer\Type("array<Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\PriceDisplayInfoIrene\ExcludedCharges\ExcludeChargesList\ExcludeChargesList>")
     * @Serializer\SerializedName("excludeChargesList")
     */
    protected $excludeChargesList;
    
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\PriceDisplayInfoIrene\ExcludedCharges\ExcludeChargesAggregated|null
     */
    public function getExcludeChargesAggregated()
    {
        return $this->excludeChargesAggregated;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\PriceDisplayInfoIrene\ExcludedCharges\ExcludeChargesAggregated|null $excludeChargesAggregated
     */
    public function setExcludeChargesAggregated($excludeChargesAggregated)
    {
        $this->excludeChargesAggregated = $excludeChargesAggregated;
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
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\PriceDisplayInfoIrene\ExcludedCharges\ExcludeChargesList\ExcludeChargesList[]|null
     */
    public function getExcludeChargesList()
    {
        return $this->excludeChargesList;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\PriceDisplayInfoIrene\ExcludedCharges\ExcludeChargesList\ExcludeChargesList[]|null $excludeChargesList
     */
    public function setExcludeChargesList($excludeChargesList)
    {
        $this->excludeChargesList = $excludeChargesList;
    }
    
    
}