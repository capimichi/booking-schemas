<?php

namespace Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\PriceDisplayInfoIrene\Discounts\Discount;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Amount
 *
 * @Serializer\ExclusionPolicy("none")
 */
class Amount
{
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("amountRounded")
     */
    protected $amountRounded;
    
    /**
     * @var mixed|null
     * @Serializer\Exclude
     * TODO: Find out type for
     *  Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\PriceDisplayInfoIrene\Discounts\Discount\Amount::amountUnformatted
     */
    protected $amountUnformatted;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("__typename")
     */
    protected $typename;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("amount")
     */
    protected $amount;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("currency")
     */
    protected $currency;
    
    
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
     * @return mixed|null
     */
    public function getAmountUnformatted()
    {
        return $this->amountUnformatted;
    }
    
    /**
     * @param mixed|null $amountUnformatted
     */
    public function setAmountUnformatted($amountUnformatted)
    {
        $this->amountUnformatted = $amountUnformatted;
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