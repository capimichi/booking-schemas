<?php

namespace Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class PriceDisplayInfoIrene
 *
 * @Serializer\ExclusionPolicy("none")
 */
class PriceDisplayInfoIrene
{
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\PriceDisplayInfoIrene\DisplayPrice|null
     * @Serializer\Type("Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\PriceDisplayInfoIrene\DisplayPrice")
     * @Serializer\SerializedName("displayPrice")
     */
    protected $displayPrice;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\PriceDisplayInfoIrene\Discounts\Discount[]|null
     * @Serializer\Type("array<Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\PriceDisplayInfoIrene\Discounts\Discount>")
     * @Serializer\SerializedName("discounts")
     */
    protected $discounts;
    
    /**
     * @var bool|null
     * @Serializer\Type("bool")
     * @Serializer\SerializedName("useRoundedAmount")
     */
    protected $useRoundedAmount;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("__typename")
     */
    protected $typename;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\PriceDisplayInfoIrene\Rewards|null
     * @Serializer\Type("Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\PriceDisplayInfoIrene\Rewards")
     * @Serializer\SerializedName("rewards")
     */
    protected $rewards;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\PriceDisplayInfoIrene\TaxExceptions\TaxException[]|null
     * @Serializer\Type("array<Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\PriceDisplayInfoIrene\TaxExceptions\TaxException>")
     * @Serializer\SerializedName("taxExceptions")
     */
    protected $taxExceptions;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\PriceDisplayInfoIrene\ChargesInfo|null
     * @Serializer\Type("Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\PriceDisplayInfoIrene\ChargesInfo")
     * @Serializer\SerializedName("chargesInfo")
     */
    protected $chargesInfo;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\PriceDisplayInfoIrene\PriceBeforeDiscount|null
     * @Serializer\Type("Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\PriceDisplayInfoIrene\PriceBeforeDiscount")
     * @Serializer\SerializedName("priceBeforeDiscount")
     */
    protected $priceBeforeDiscount;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\PriceDisplayInfoIrene\Badges\Badge[]|null
     * @Serializer\Type("array<Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\PriceDisplayInfoIrene\Badges\Badge>")
     * @Serializer\SerializedName("badges")
     */
    protected $badges;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\PriceDisplayInfoIrene\ExcludedCharges|null
     * @Serializer\Type("Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\PriceDisplayInfoIrene\ExcludedCharges")
     * @Serializer\SerializedName("excludedCharges")
     */
    protected $excludedCharges;
    
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\PriceDisplayInfoIrene\DisplayPrice|null
     */
    public function getDisplayPrice()
    {
        return $this->displayPrice;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\PriceDisplayInfoIrene\DisplayPrice|null $displayPrice
     */
    public function setDisplayPrice($displayPrice)
    {
        $this->displayPrice = $displayPrice;
    }
    
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\PriceDisplayInfoIrene\Discounts\Discount[]|null
     */
    public function getDiscounts()
    {
        return $this->discounts;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\PriceDisplayInfoIrene\Discounts\Discount[]|null $discounts
     */
    public function setDiscounts($discounts)
    {
        $this->discounts = $discounts;
    }
    
    
    /**
     * @return bool|null
     */
    public function getUseRoundedAmount()
    {
        return $this->useRoundedAmount;
    }
    
    /**
     * @param bool|null $useRoundedAmount
     */
    public function setUseRoundedAmount($useRoundedAmount)
    {
        $this->useRoundedAmount = $useRoundedAmount;
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
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\PriceDisplayInfoIrene\Rewards|null
     */
    public function getRewards()
    {
        return $this->rewards;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\PriceDisplayInfoIrene\Rewards|null $rewards
     */
    public function setRewards($rewards)
    {
        $this->rewards = $rewards;
    }
    
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\PriceDisplayInfoIrene\TaxExceptions\TaxException[]|null
     */
    public function getTaxExceptions()
    {
        return $this->taxExceptions;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\PriceDisplayInfoIrene\TaxExceptions\TaxException[]|null $taxExceptions
     */
    public function setTaxExceptions($taxExceptions)
    {
        $this->taxExceptions = $taxExceptions;
    }
    
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\PriceDisplayInfoIrene\ChargesInfo|null
     */
    public function getChargesInfo()
    {
        return $this->chargesInfo;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\PriceDisplayInfoIrene\ChargesInfo|null $chargesInfo
     */
    public function setChargesInfo($chargesInfo)
    {
        $this->chargesInfo = $chargesInfo;
    }
    
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\PriceDisplayInfoIrene\PriceBeforeDiscount|null
     */
    public function getPriceBeforeDiscount()
    {
        return $this->priceBeforeDiscount;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\PriceDisplayInfoIrene\PriceBeforeDiscount|null $priceBeforeDiscount
     */
    public function setPriceBeforeDiscount($priceBeforeDiscount)
    {
        $this->priceBeforeDiscount = $priceBeforeDiscount;
    }
    
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\PriceDisplayInfoIrene\Badges\Badge[]|null
     */
    public function getBadges()
    {
        return $this->badges;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\PriceDisplayInfoIrene\Badges\Badge[]|null $badges
     */
    public function setBadges($badges)
    {
        $this->badges = $badges;
    }
    
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\PriceDisplayInfoIrene\ExcludedCharges|null
     */
    public function getExcludedCharges()
    {
        return $this->excludedCharges;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\PriceDisplayInfoIrene\ExcludedCharges|null $excludedCharges
     */
    public function setExcludedCharges($excludedCharges)
    {
        $this->excludedCharges = $excludedCharges;
    }
    
    
}