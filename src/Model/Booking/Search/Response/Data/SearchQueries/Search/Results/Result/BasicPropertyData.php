<?php

namespace Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class BasicPropertyData
 *
 * @Serializer\ExclusionPolicy("none")
 */
class BasicPropertyData
{
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("__typename")
     */
    protected $typename;
    
    /**
     * @var int|null
     * @Serializer\Type("int")
     * @Serializer\SerializedName("accommodationTypeId")
     */
    protected $accommodationTypeId;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\BasicPropertyData\AlternativeExternalReviewsScore|null
     * @Serializer\Type("Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\BasicPropertyData\AlternativeExternalReviewsScore")
     * @Serializer\SerializedName("alternativeExternalReviewsScore")
     */
    protected $alternativeExternalReviewsScore;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\BasicPropertyData\ExternalReviewScore|null
     * @Serializer\Type("Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\BasicPropertyData\ExternalReviewScore")
     * @Serializer\SerializedName("externalReviewScore")
     */
    protected $externalReviewScore;
    
    /**
     * @var int|null
     * @Serializer\Type("int")
     * @Serializer\SerializedName("id")
     */
    protected $id;
    
    /**
     * @var bool|null
     * @Serializer\Type("bool")
     * @Serializer\SerializedName("isClosed")
     */
    protected $isClosed;
    
    /**
     * @var bool|null
     * @Serializer\Type("bool")
     * @Serializer\SerializedName("isTestProperty")
     */
    protected $isTestProperty;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\BasicPropertyData\Location|null
     * @Serializer\Type("Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\BasicPropertyData\Location")
     * @Serializer\SerializedName("location")
     */
    protected $location;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("pageName")
     */
    protected $pageName;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\BasicPropertyData\PaymentConfig|null
     * @Serializer\Type("Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\BasicPropertyData\PaymentConfig")
     * @Serializer\SerializedName("paymentConfig")
     */
    protected $paymentConfig;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\BasicPropertyData\Photos|null
     * @Serializer\Type("Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\BasicPropertyData\Photos")
     * @Serializer\SerializedName("photos")
     */
    protected $photos;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\BasicPropertyData\ReviewScore|null
     * @Serializer\Type("Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\BasicPropertyData\ReviewScore")
     * @Serializer\SerializedName("reviewScore")
     */
    protected $reviewScore;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\BasicPropertyData\StarRating|null
     * @Serializer\Type("Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\BasicPropertyData\StarRating")
     * @Serializer\SerializedName("starRating")
     */
    protected $starRating;
    
    /**
     * @var int|null
     * @Serializer\Type("int")
     * @Serializer\SerializedName("ufi")
     */
    protected $ufi;
    
    
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
     * @return int|null
     */
    public function getAccommodationTypeId()
    {
        return $this->accommodationTypeId;
    }
    
    /**
     * @param int|null $accommodationTypeId
     */
    public function setAccommodationTypeId($accommodationTypeId)
    {
        $this->accommodationTypeId = $accommodationTypeId;
    }
    
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\BasicPropertyData\AlternativeExternalReviewsScore|null
     */
    public function getAlternativeExternalReviewsScore()
    {
        return $this->alternativeExternalReviewsScore;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\BasicPropertyData\AlternativeExternalReviewsScore|null $alternativeExternalReviewsScore
     */
    public function setAlternativeExternalReviewsScore($alternativeExternalReviewsScore)
    {
        $this->alternativeExternalReviewsScore = $alternativeExternalReviewsScore;
    }
    
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\BasicPropertyData\ExternalReviewScore|null
     */
    public function getExternalReviewScore()
    {
        return $this->externalReviewScore;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\BasicPropertyData\ExternalReviewScore|null $externalReviewScore
     */
    public function setExternalReviewScore($externalReviewScore)
    {
        $this->externalReviewScore = $externalReviewScore;
    }
    
    
    /**
     * @return int|null
     */
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * @param int|null $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }
    
    
    /**
     * @return bool|null
     */
    public function getIsClosed()
    {
        return $this->isClosed;
    }
    
    /**
     * @param bool|null $isClosed
     */
    public function setIsClosed($isClosed)
    {
        $this->isClosed = $isClosed;
    }
    
    
    /**
     * @return bool|null
     */
    public function getIsTestProperty()
    {
        return $this->isTestProperty;
    }
    
    /**
     * @param bool|null $isTestProperty
     */
    public function setIsTestProperty($isTestProperty)
    {
        $this->isTestProperty = $isTestProperty;
    }
    
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\BasicPropertyData\Location|null
     */
    public function getLocation()
    {
        return $this->location;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\BasicPropertyData\Location|null $location
     */
    public function setLocation($location)
    {
        $this->location = $location;
    }
    
    
    /**
     * @return string|null
     */
    public function getPageName()
    {
        return $this->pageName;
    }
    
    /**
     * @param string|null $pageName
     */
    public function setPageName($pageName)
    {
        $this->pageName = $pageName;
    }
    
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\BasicPropertyData\PaymentConfig|null
     */
    public function getPaymentConfig()
    {
        return $this->paymentConfig;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\BasicPropertyData\PaymentConfig|null $paymentConfig
     */
    public function setPaymentConfig($paymentConfig)
    {
        $this->paymentConfig = $paymentConfig;
    }
    
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\BasicPropertyData\Photos|null
     */
    public function getPhotos()
    {
        return $this->photos;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\BasicPropertyData\Photos|null $photos
     */
    public function setPhotos($photos)
    {
        $this->photos = $photos;
    }
    
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\BasicPropertyData\ReviewScore|null
     */
    public function getReviewScore()
    {
        return $this->reviewScore;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\BasicPropertyData\ReviewScore|null $reviewScore
     */
    public function setReviewScore($reviewScore)
    {
        $this->reviewScore = $reviewScore;
    }
    
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\BasicPropertyData\StarRating|null
     */
    public function getStarRating()
    {
        return $this->starRating;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\BasicPropertyData\StarRating|null $starRating
     */
    public function setStarRating($starRating)
    {
        $this->starRating = $starRating;
    }
    
    
    /**
     * @return int|null
     */
    public function getUfi()
    {
        return $this->ufi;
    }
    
    /**
     * @param int|null $ufi
     */
    public function setUfi($ufi)
    {
        $this->ufi = $ufi;
    }
    
    
}