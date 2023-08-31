<?php

namespace Capimichi\BookingSchemas\Model\Booking\Search\Request\Variables\Input;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class MetaContext
 *
 * @Serializer\ExclusionPolicy("none")
 */
class MetaContext
{
    
    /**
     * @var int|null
     * @Serializer\Type("int")
     * @Serializer\SerializedName("metaCampaignId")
     */
    protected $metaCampaignId;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("externalTotalPrice")
     */
    protected $externalTotalPrice;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("feedPrice")
     */
    protected $feedPrice;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("rateRuleId")
     */
    protected $rateRuleId;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("dragongateTraceId")
     */
    protected $dragongateTraceId;
    
    /**
     * @return int|null
     */
    public function getMetaCampaignId()
    {
        return $this->metaCampaignId;
    }
    
    /**
     * @param int|null $metaCampaignId
     */
    public function setMetaCampaignId($metaCampaignId)
    {
        $this->metaCampaignId = $metaCampaignId;
    }
    
    /**
     * @return string|null
     */
    public function getExternalTotalPrice()
    {
        return $this->externalTotalPrice;
    }
    
    /**
     * @param string|null $externalTotalPrice
     */
    public function setExternalTotalPrice($externalTotalPrice)
    {
        $this->externalTotalPrice = $externalTotalPrice;
    }
    
    /**
     * @return string|null
     */
    public function getFeedPrice()
    {
        return $this->feedPrice;
    }
    
    /**
     * @param string|null $feedPrice
     */
    public function setFeedPrice($feedPrice)
    {
        $this->feedPrice = $feedPrice;
    }
    
    /**
     * @return string|null
     */
    public function getRateRuleId()
    {
        return $this->rateRuleId;
    }
    
    /**
     * @param string|null $rateRuleId
     */
    public function setRateRuleId($rateRuleId)
    {
        $this->rateRuleId = $rateRuleId;
    }
    
    /**
     * @return string|null
     */
    public function getDragongateTraceId()
    {
        return $this->dragongateTraceId;
    }
    
    /**
     * @param string|null $dragongateTraceId
     */
    public function setDragongateTraceId($dragongateTraceId)
    {
        $this->dragongateTraceId = $dragongateTraceId;
    }
    
    
}