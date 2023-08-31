<?php

namespace Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\Blocks\Block;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class FinalPrice
 *
 * @Serializer\ExclusionPolicy("none")
 */
class FinalPrice
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
     * @Serializer\SerializedName("currency")
     */
    protected $currency;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("amount")
     */
    protected $amount;
    
    
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
    
    
}