<?php

namespace Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\Blocks;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Block
 *
 * @Serializer\ExclusionPolicy("none")
 */
class Block
{
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\Blocks\Block\BlockId|null
     * @Serializer\Type("Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\Blocks\Block\BlockId")
     * @Serializer\SerializedName("blockId")
     */
    protected $blockId;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\Blocks\Block\ThirdPartyInventoryContext|null
     * @Serializer\Type("Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\Blocks\Block\ThirdPartyInventoryContext")
     * @Serializer\SerializedName("thirdPartyInventoryContext")
     */
    protected $thirdPartyInventoryContext;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\Blocks\Block\FinalPrice|null
     * @Serializer\Type("Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\Blocks\Block\FinalPrice")
     * @Serializer\SerializedName("finalPrice")
     */
    protected $finalPrice;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("__typename")
     */
    protected $typename;
    
    /**
     * @var bool|null
     * @Serializer\Type("bool")
     * @Serializer\SerializedName("hasCrib")
     */
    protected $hasCrib;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\Blocks\Block\OnlyXLeftMessage|null
     * @Serializer\Type("Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\Blocks\Block\OnlyXLeftMessage")
     * @Serializer\SerializedName("onlyXLeftMessage")
     */
    protected $onlyXLeftMessage;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\Blocks\Block\OriginalPrice|null
     * @Serializer\Type("Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\Blocks\Block\OriginalPrice")
     * @Serializer\SerializedName("originalPrice")
     */
    protected $originalPrice;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\Blocks\Block\BlockMatchTags|null
     * @Serializer\Type("Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\Blocks\Block\BlockMatchTags")
     * @Serializer\SerializedName("blockMatchTags")
     */
    protected $blockMatchTags;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("freeCancellationUntil")
     */
    protected $freeCancellationUntil;
    
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\Blocks\Block\BlockId|null
     */
    public function getBlockId()
    {
        return $this->blockId;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\Blocks\Block\BlockId|null $blockId
     */
    public function setBlockId($blockId)
    {
        $this->blockId = $blockId;
    }
    
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\Blocks\Block\ThirdPartyInventoryContext|null
     */
    public function getThirdPartyInventoryContext()
    {
        return $this->thirdPartyInventoryContext;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\Blocks\Block\ThirdPartyInventoryContext|null $thirdPartyInventoryContext
     */
    public function setThirdPartyInventoryContext($thirdPartyInventoryContext)
    {
        $this->thirdPartyInventoryContext = $thirdPartyInventoryContext;
    }
    
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\Blocks\Block\FinalPrice|null
     */
    public function getFinalPrice()
    {
        return $this->finalPrice;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\Blocks\Block\FinalPrice|null $finalPrice
     */
    public function setFinalPrice($finalPrice)
    {
        $this->finalPrice = $finalPrice;
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
     * @return bool|null
     */
    public function getHasCrib()
    {
        return $this->hasCrib;
    }
    
    /**
     * @param bool|null $hasCrib
     */
    public function setHasCrib($hasCrib)
    {
        $this->hasCrib = $hasCrib;
    }
    
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\Blocks\Block\OnlyXLeftMessage|null
     */
    public function getOnlyXLeftMessage()
    {
        return $this->onlyXLeftMessage;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\Blocks\Block\OnlyXLeftMessage|null $onlyXLeftMessage
     */
    public function setOnlyXLeftMessage($onlyXLeftMessage)
    {
        $this->onlyXLeftMessage = $onlyXLeftMessage;
    }
    
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\Blocks\Block\OriginalPrice|null
     */
    public function getOriginalPrice()
    {
        return $this->originalPrice;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\Blocks\Block\OriginalPrice|null $originalPrice
     */
    public function setOriginalPrice($originalPrice)
    {
        $this->originalPrice = $originalPrice;
    }
    
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\Blocks\Block\BlockMatchTags|null
     */
    public function getBlockMatchTags()
    {
        return $this->blockMatchTags;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\Blocks\Block\BlockMatchTags|null $blockMatchTags
     */
    public function setBlockMatchTags($blockMatchTags)
    {
        $this->blockMatchTags = $blockMatchTags;
    }
    
    
    /**
     * @return string|null
     */
    public function getFreeCancellationUntil()
    {
        return $this->freeCancellationUntil;
    }
    
    /**
     * @param string|null $freeCancellationUntil
     */
    public function setFreeCancellationUntil($freeCancellationUntil)
    {
        $this->freeCancellationUntil = $freeCancellationUntil;
    }
    
    
}