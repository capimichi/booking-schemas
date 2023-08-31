<?php

namespace Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\PriceDisplayInfoIrene\ExcludedCharges\ExcludeChargesList;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class ExcludeChargesList
 *
 * @Serializer\ExclusionPolicy("none")
 */
class ExcludeChargesList
{
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\PriceDisplayInfoIrene\ExcludedCharges\ExcludeChargesList\ExcludeChargesList\AmountPerStay|null
     * @Serializer\Type("Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\PriceDisplayInfoIrene\ExcludedCharges\ExcludeChargesList\ExcludeChargesList\AmountPerStay")
     * @Serializer\SerializedName("amountPerStay")
     */
    protected $amountPerStay;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("chargeInclusion")
     */
    protected $chargeInclusion;
    
    /**
     * @var int|null
     * @Serializer\Type("int")
     * @Serializer\SerializedName("chargeType")
     */
    protected $chargeType;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("__typename")
     */
    protected $typename;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("chargeMode")
     */
    protected $chargeMode;
    
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\PriceDisplayInfoIrene\ExcludedCharges\ExcludeChargesList\ExcludeChargesList\AmountPerStay|null
     */
    public function getAmountPerStay()
    {
        return $this->amountPerStay;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\PriceDisplayInfoIrene\ExcludedCharges\ExcludeChargesList\ExcludeChargesList\AmountPerStay|null $amountPerStay
     */
    public function setAmountPerStay($amountPerStay)
    {
        $this->amountPerStay = $amountPerStay;
    }
    
    
    /**
     * @return string|null
     */
    public function getChargeInclusion()
    {
        return $this->chargeInclusion;
    }
    
    /**
     * @param string|null $chargeInclusion
     */
    public function setChargeInclusion($chargeInclusion)
    {
        $this->chargeInclusion = $chargeInclusion;
    }
    
    
    /**
     * @return int|null
     */
    public function getChargeType()
    {
        return $this->chargeType;
    }
    
    /**
     * @param int|null $chargeType
     */
    public function setChargeType($chargeType)
    {
        $this->chargeType = $chargeType;
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
    public function getChargeMode()
    {
        return $this->chargeMode;
    }
    
    /**
     * @param string|null $chargeMode
     */
    public function setChargeMode($chargeMode)
    {
        $this->chargeMode = $chargeMode;
    }
    
    
}