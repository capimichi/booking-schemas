<?php

namespace Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\PriceDisplayInfoIrene\Discounts;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Discount
 *
 * @Serializer\ExclusionPolicy("none")
 */
class Discount
{
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\PriceDisplayInfoIrene\Discounts\Discount\Name|null
     * @Serializer\Type("Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\PriceDisplayInfoIrene\Discounts\Discount\Name")
     * @Serializer\SerializedName("name")
     */
    protected $name;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\PriceDisplayInfoIrene\Discounts\Discount\Description|null
     * @Serializer\Type("Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\PriceDisplayInfoIrene\Discounts\Discount\Description")
     * @Serializer\SerializedName("description")
     */
    protected $description;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("__typename")
     */
    protected $typename;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\PriceDisplayInfoIrene\Discounts\Discount\Amount|null
     * @Serializer\Type("Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\PriceDisplayInfoIrene\Discounts\Discount\Amount")
     * @Serializer\SerializedName("amount")
     */
    protected $amount;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("productId")
     */
    protected $productId;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("itemType")
     */
    protected $itemType;
    
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\PriceDisplayInfoIrene\Discounts\Discount\Name|null
     */
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\PriceDisplayInfoIrene\Discounts\Discount\Name|null $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }
    
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\PriceDisplayInfoIrene\Discounts\Discount\Description|null
     */
    public function getDescription()
    {
        return $this->description;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\PriceDisplayInfoIrene\Discounts\Discount\Description|null $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
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
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\PriceDisplayInfoIrene\Discounts\Discount\Amount|null
     */
    public function getAmount()
    {
        return $this->amount;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\PriceDisplayInfoIrene\Discounts\Discount\Amount|null $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }
    
    
    /**
     * @return string|null
     */
    public function getProductId()
    {
        return $this->productId;
    }
    
    /**
     * @param string|null $productId
     */
    public function setProductId($productId)
    {
        $this->productId = $productId;
    }
    
    
    /**
     * @return string|null
     */
    public function getItemType()
    {
        return $this->itemType;
    }
    
    /**
     * @param string|null $itemType
     */
    public function setItemType($itemType)
    {
        $this->itemType = $itemType;
    }
    
    
}