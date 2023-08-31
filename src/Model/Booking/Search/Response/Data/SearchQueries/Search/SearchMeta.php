<?php

namespace Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class SearchMeta
 *
 * @Serializer\ExclusionPolicy("none")
 */
class SearchMeta
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
     * @Serializer\SerializedName("affiliateName")
     */
    protected $affiliateName;
    
    /**
     * @var int|null
     * @Serializer\Type("int")
     * @Serializer\SerializedName("affiliatePartnerChannelId")
     */
    protected $affiliatePartnerChannelId;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("affiliateVerticalType")
     */
    protected $affiliateVerticalType;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\SearchMeta\AvailabilityInfo|null
     * @Serializer\Type("Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\SearchMeta\AvailabilityInfo")
     * @Serializer\SerializedName("availabilityInfo")
     */
    protected $availabilityInfo;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\SearchMeta\BoundingBoxes\BoundingBox[]|null
     * @Serializer\Type("array<Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\SearchMeta\BoundingBoxes\BoundingBox>")
     * @Serializer\SerializedName("boundingBoxes")
     */
    protected $boundingBoxes;
    
    /**
     * @var array|null
     * @Serializer\Type("array")
     * @Serializer\SerializedName("childrenAges")
     */
    protected $childrenAges;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("customerValueStatus")
     */
    protected $customerValueStatus;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\SearchMeta\Dates|null
     * @Serializer\Type("Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\SearchMeta\Dates")
     * @Serializer\SerializedName("dates")
     */
    protected $dates;
    
    /**
     * @var int|null
     * @Serializer\Type("int")
     * @Serializer\SerializedName("destId")
     */
    protected $destId;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("destType")
     */
    protected $destType;
    
    /**
     * @var int|null
     * @Serializer\Type("int")
     * @Serializer\SerializedName("maxLengthOfStayInDays")
     */
    protected $maxLengthOfStayInDays;
    
    /**
     * @var int|null
     * @Serializer\Type("int")
     * @Serializer\SerializedName("nbAdults")
     */
    protected $nbAdults;
    
    /**
     * @var int|null
     * @Serializer\Type("int")
     * @Serializer\SerializedName("nbChildren")
     */
    protected $nbChildren;
    
    /**
     * @var int|null
     * @Serializer\Type("int")
     * @Serializer\SerializedName("nbRooms")
     */
    protected $nbRooms;
    
    /**
     * @var bool|null
     * @Serializer\Type("bool")
     * @Serializer\SerializedName("userHasSelectedFilters")
     */
    protected $userHasSelectedFilters;
    
    
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
    public function getAffiliateName()
    {
        return $this->affiliateName;
    }
    
    /**
     * @param string|null $affiliateName
     */
    public function setAffiliateName($affiliateName)
    {
        $this->affiliateName = $affiliateName;
    }
    
    
    /**
     * @return int|null
     */
    public function getAffiliatePartnerChannelId()
    {
        return $this->affiliatePartnerChannelId;
    }
    
    /**
     * @param int|null $affiliatePartnerChannelId
     */
    public function setAffiliatePartnerChannelId($affiliatePartnerChannelId)
    {
        $this->affiliatePartnerChannelId = $affiliatePartnerChannelId;
    }
    
    
    /**
     * @return string|null
     */
    public function getAffiliateVerticalType()
    {
        return $this->affiliateVerticalType;
    }
    
    /**
     * @param string|null $affiliateVerticalType
     */
    public function setAffiliateVerticalType($affiliateVerticalType)
    {
        $this->affiliateVerticalType = $affiliateVerticalType;
    }
    
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\SearchMeta\AvailabilityInfo|null
     */
    public function getAvailabilityInfo()
    {
        return $this->availabilityInfo;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\SearchMeta\AvailabilityInfo|null $availabilityInfo
     */
    public function setAvailabilityInfo($availabilityInfo)
    {
        $this->availabilityInfo = $availabilityInfo;
    }
    
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\SearchMeta\BoundingBoxes\BoundingBox[]|null
     */
    public function getBoundingBoxes()
    {
        return $this->boundingBoxes;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\SearchMeta\BoundingBoxes\BoundingBox[]|null $boundingBoxes
     */
    public function setBoundingBoxes($boundingBoxes)
    {
        $this->boundingBoxes = $boundingBoxes;
    }
    
    
    /**
     * @return array|null
     */
    public function getChildrenAges()
    {
        return $this->childrenAges;
    }
    
    /**
     * @param array|null $childrenAges
     */
    public function setChildrenAges($childrenAges)
    {
        $this->childrenAges = $childrenAges;
    }
    
    
    /**
     * @return string|null
     */
    public function getCustomerValueStatus()
    {
        return $this->customerValueStatus;
    }
    
    /**
     * @param string|null $customerValueStatus
     */
    public function setCustomerValueStatus($customerValueStatus)
    {
        $this->customerValueStatus = $customerValueStatus;
    }
    
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\SearchMeta\Dates|null
     */
    public function getDates()
    {
        return $this->dates;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\SearchMeta\Dates|null $dates
     */
    public function setDates($dates)
    {
        $this->dates = $dates;
    }
    
    
    /**
     * @return int|null
     */
    public function getDestId()
    {
        return $this->destId;
    }
    
    /**
     * @param int|null $destId
     */
    public function setDestId($destId)
    {
        $this->destId = $destId;
    }
    
    
    /**
     * @return string|null
     */
    public function getDestType()
    {
        return $this->destType;
    }
    
    /**
     * @param string|null $destType
     */
    public function setDestType($destType)
    {
        $this->destType = $destType;
    }
    
    
    /**
     * @return int|null
     */
    public function getMaxLengthOfStayInDays()
    {
        return $this->maxLengthOfStayInDays;
    }
    
    /**
     * @param int|null $maxLengthOfStayInDays
     */
    public function setMaxLengthOfStayInDays($maxLengthOfStayInDays)
    {
        $this->maxLengthOfStayInDays = $maxLengthOfStayInDays;
    }
    
    
    /**
     * @return int|null
     */
    public function getNbAdults()
    {
        return $this->nbAdults;
    }
    
    /**
     * @param int|null $nbAdults
     */
    public function setNbAdults($nbAdults)
    {
        $this->nbAdults = $nbAdults;
    }
    
    
    /**
     * @return int|null
     */
    public function getNbChildren()
    {
        return $this->nbChildren;
    }
    
    /**
     * @param int|null $nbChildren
     */
    public function setNbChildren($nbChildren)
    {
        $this->nbChildren = $nbChildren;
    }
    
    
    /**
     * @return int|null
     */
    public function getNbRooms()
    {
        return $this->nbRooms;
    }
    
    /**
     * @param int|null $nbRooms
     */
    public function setNbRooms($nbRooms)
    {
        $this->nbRooms = $nbRooms;
    }
    
    
    /**
     * @return bool|null
     */
    public function getUserHasSelectedFilters()
    {
        return $this->userHasSelectedFilters;
    }
    
    /**
     * @param bool|null $userHasSelectedFilters
     */
    public function setUserHasSelectedFilters($userHasSelectedFilters)
    {
        $this->userHasSelectedFilters = $userHasSelectedFilters;
    }
    
    
}