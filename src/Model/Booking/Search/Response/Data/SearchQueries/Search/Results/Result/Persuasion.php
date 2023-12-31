<?php

namespace Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Persuasion
 *
 * @Serializer\ExclusionPolicy("none")
 */
class Persuasion
{
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("__typename")
     */
    protected $typename;
    
    /**
     * @var bool|null
     * @Serializer\Type("bool")
     * @Serializer\SerializedName("autoextended")
     */
    protected $autoextended;
    
    /**
     * @var mixed|null
     * @Serializer\Exclude
     * TODO: Find out type for
     *  Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\Persuasion::bookedXTimesMessage
     */
    protected $bookedXTimesMessage;
    
    /**
     * @var bool|null
     * @Serializer\Type("bool")
     * @Serializer\SerializedName("geniusRateAvailable")
     */
    protected $geniusRateAvailable;
    
    /**
     * @var bool|null
     * @Serializer\Type("bool")
     * @Serializer\SerializedName("highlighted")
     */
    protected $highlighted;
    
    /**
     * @var mixed|null
     * @Serializer\Exclude
     * TODO: Find out type for
     *  Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\Persuasion::nativeAdId
     */
    protected $nativeAdId;
    
    /**
     * @var mixed|null
     * @Serializer\Exclude
     * TODO: Find out type for
     *  Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\Persuasion::nativeAdsCpc
     */
    protected $nativeAdsCpc;
    
    /**
     * @var mixed|null
     * @Serializer\Exclude
     * TODO: Find out type for
     *  Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\Persuasion::nativeAdsTracking
     */
    protected $nativeAdsTracking;
    
    /**
     * @var bool|null
     * @Serializer\Type("bool")
     * @Serializer\SerializedName("preferred")
     */
    protected $preferred;
    
    /**
     * @var bool|null
     * @Serializer\Type("bool")
     * @Serializer\SerializedName("preferredPlus")
     */
    protected $preferredPlus;
    
    /**
     * @var bool|null
     * @Serializer\Type("bool")
     * @Serializer\SerializedName("showNativeAdLabel")
     */
    protected $showNativeAdLabel;
    
    /**
     * @var mixed|null
     * @Serializer\Exclude
     * TODO: Find out type for
     *  Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\Persuasion::sponsoredAdsData
     */
    protected $sponsoredAdsData;
    
    
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
    public function getAutoextended()
    {
        return $this->autoextended;
    }
    
    /**
     * @param bool|null $autoextended
     */
    public function setAutoextended($autoextended)
    {
        $this->autoextended = $autoextended;
    }
    
    
    /**
     * @return mixed|null
     */
    public function getBookedXTimesMessage()
    {
        return $this->bookedXTimesMessage;
    }
    
    /**
     * @param mixed|null $bookedXTimesMessage
     */
    public function setBookedXTimesMessage($bookedXTimesMessage)
    {
        $this->bookedXTimesMessage = $bookedXTimesMessage;
    }
    
    
    /**
     * @return bool|null
     */
    public function getGeniusRateAvailable()
    {
        return $this->geniusRateAvailable;
    }
    
    /**
     * @param bool|null $geniusRateAvailable
     */
    public function setGeniusRateAvailable($geniusRateAvailable)
    {
        $this->geniusRateAvailable = $geniusRateAvailable;
    }
    
    
    /**
     * @return bool|null
     */
    public function getHighlighted()
    {
        return $this->highlighted;
    }
    
    /**
     * @param bool|null $highlighted
     */
    public function setHighlighted($highlighted)
    {
        $this->highlighted = $highlighted;
    }
    
    
    /**
     * @return mixed|null
     */
    public function getNativeAdId()
    {
        return $this->nativeAdId;
    }
    
    /**
     * @param mixed|null $nativeAdId
     */
    public function setNativeAdId($nativeAdId)
    {
        $this->nativeAdId = $nativeAdId;
    }
    
    
    /**
     * @return mixed|null
     */
    public function getNativeAdsCpc()
    {
        return $this->nativeAdsCpc;
    }
    
    /**
     * @param mixed|null $nativeAdsCpc
     */
    public function setNativeAdsCpc($nativeAdsCpc)
    {
        $this->nativeAdsCpc = $nativeAdsCpc;
    }
    
    
    /**
     * @return mixed|null
     */
    public function getNativeAdsTracking()
    {
        return $this->nativeAdsTracking;
    }
    
    /**
     * @param mixed|null $nativeAdsTracking
     */
    public function setNativeAdsTracking($nativeAdsTracking)
    {
        $this->nativeAdsTracking = $nativeAdsTracking;
    }
    
    
    /**
     * @return bool|null
     */
    public function getPreferred()
    {
        return $this->preferred;
    }
    
    /**
     * @param bool|null $preferred
     */
    public function setPreferred($preferred)
    {
        $this->preferred = $preferred;
    }
    
    
    /**
     * @return bool|null
     */
    public function getPreferredPlus()
    {
        return $this->preferredPlus;
    }
    
    /**
     * @param bool|null $preferredPlus
     */
    public function setPreferredPlus($preferredPlus)
    {
        $this->preferredPlus = $preferredPlus;
    }
    
    
    /**
     * @return bool|null
     */
    public function getShowNativeAdLabel()
    {
        return $this->showNativeAdLabel;
    }
    
    /**
     * @param bool|null $showNativeAdLabel
     */
    public function setShowNativeAdLabel($showNativeAdLabel)
    {
        $this->showNativeAdLabel = $showNativeAdLabel;
    }
    
    
    /**
     * @return mixed|null
     */
    public function getSponsoredAdsData()
    {
        return $this->sponsoredAdsData;
    }
    
    /**
     * @param mixed|null $sponsoredAdsData
     */
    public function setSponsoredAdsData($sponsoredAdsData)
    {
        $this->sponsoredAdsData = $sponsoredAdsData;
    }
    
    
}