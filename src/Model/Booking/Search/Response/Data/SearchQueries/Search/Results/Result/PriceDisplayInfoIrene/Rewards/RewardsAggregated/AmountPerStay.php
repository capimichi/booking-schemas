<?php

namespace Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\PriceDisplayInfoIrene\Rewards\RewardsAggregated;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class AmountPerStay
 *
 * @Serializer\ExclusionPolicy("none")
 */
class AmountPerStay
{
    
    /**
     * @var int|null
     * @Serializer\Type("int")
     * @Serializer\SerializedName("amountUnformatted")
     */
    protected $amountUnformatted;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("amount")
     */
    protected $amount;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("__typename")
     */
    protected $typename;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("amountRounded")
     */
    protected $amountRounded;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("currency")
     */
    protected $currency;
    
    
    /**
     * @return int|null
     */
    public function getAmountUnformatted()
    {
        return $this->amountUnformatted;
    }
    
    /**
     * @param int|null $amountUnformatted
     */
    public function setAmountUnformatted($amountUnformatted)
    {
        $this->amountUnformatted = $amountUnformatted;
    }
    
    
    /**
     * @return string|null
     */
    public function getAmount()
    {
        return $this->amount;
    }
    
    /**
     * @param string|null $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
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
    public function getAmountRounded()
    {
        return $this->amountRounded;
    }
    
    /**
     * @param string|null $amountRounded
     */
    public function setAmountRounded($amountRounded)
    {
        $this->amountRounded = $amountRounded;
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
    
    
}