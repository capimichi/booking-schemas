<?php

namespace Capimichi\BookingSchemas\Model\Booking\Search\Request\Variables;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Input
 *
 * @Serializer\ExclusionPolicy("none")
 */
class Input
{
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("acidCarouselContext")
     */
    protected $acidCarouselContext;
    
    /**
     * @var \array|null
     * @Serializer\Type("array")
     * @Serializer\SerializedName("childrenAges")
     */
    protected $childrenAges;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Request\Variables\Input\Dates|null
     * @Serializer\Type("Capimichi\BookingSchemas\Model\Booking\Search\Request\Variables\Input\Dates")
     * @Serializer\SerializedName("dates")
     */
    protected $dates;
    
    /**
     * @var bool|null
     * @Serializer\Type("bool")
     * @Serializer\SerializedName("doAvailabilityCheck")
     */
    protected $doAvailabilityCheck;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("encodedAutocompleteMeta")
     */
    protected $encodedAutocompleteMeta;
    
    /**
     * @var bool|null
     * @Serializer\Type("bool")
     * @Serializer\SerializedName("enableCampaigns")
     */
    protected $enableCampaigns;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Request\Variables\Input\Filters|null
     * @Serializer\Type("Capimichi\BookingSchemas\Model\Booking\Search\Request\Variables\Input\Filters")
     * @Serializer\SerializedName("filters")
     */
    protected $filters;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("forcedBlocks")
     */
    protected $forcedBlocks;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Request\Variables\Input\Location|null
     * @Serializer\Type("Capimichi\BookingSchemas\Model\Booking\Search\Request\Variables\Input\Location")
     * @Serializer\SerializedName("location")
     */
    protected $location;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Request\Variables\Input\MetaContext|null
     * @Serializer\Type("Capimichi\BookingSchemas\Model\Booking\Search\Request\Variables\Input\MetaContext")
     * @Serializer\SerializedName("metaContext")
     */
    protected $metaContext;
    
    /**
     * @var int|null
     * @Serializer\Type("int")
     * @Serializer\SerializedName("nbRooms")
     */
    protected $nbRooms;
    
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
     * @var bool|null
     * @Serializer\Type("bool")
     * @Serializer\SerializedName("showAparthotelAsHotel")
     */
    protected $showAparthotelAsHotel;
    
    /**
     * @var bool|null
     * @Serializer\Type("bool")
     * @Serializer\SerializedName("needsRoomsMatch")
     */
    protected $needsRoomsMatch;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Request\Variables\Input\OptionalFeatures|null
     * @Serializer\Type("Capimichi\BookingSchemas\Model\Booking\Search\Request\Variables\Input\OptionalFeatures")
     * @Serializer\SerializedName("optionalFeatures")
     */
    protected $optionalFeatures;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Request\Variables\Input\Pagination|null
     * @Serializer\Type("Capimichi\BookingSchemas\Model\Booking\Search\Request\Variables\Input\Pagination")
     * @Serializer\SerializedName("pagination")
     */
    protected $pagination;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("rawQueryForSession")
     */
    protected $rawQueryForSession;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Request\Variables\Input\ReferrerBlock|null
     * @Serializer\Type("Capimichi\BookingSchemas\Model\Booking\Search\Request\Variables\Input\ReferrerBlock")
     * @Serializer\SerializedName("referrerBlock")
     */
    protected $referrerBlock;
    
    /**
     * @var bool|null
     * @Serializer\Type("bool")
     * @Serializer\SerializedName("sbCalendarOpen")
     */
    protected $sbCalendarOpen;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Request\Variables\Input\Sorters|null
     * @Serializer\Type("Capimichi\BookingSchemas\Model\Booking\Search\Request\Variables\Input\Sorters")
     * @Serializer\SerializedName("sorters")
     */
    protected $sorters;
    
    /**
     * @var int|null
     * @Serializer\Type("int")
     * @Serializer\SerializedName("travelPurpose")
     */
    protected $travelPurpose;
    
    /**
     * @var \array|null
     * @Serializer\Type("array")
     * @Serializer\SerializedName("seoThemeIds")
     */
    protected $seoThemeIds;
    
    /**
     * @var bool|null
     * @Serializer\Type("bool")
     * @Serializer\SerializedName("useSearchParamsFromSession")
     */
    protected $useSearchParamsFromSession;
    
    /**
     * @return string|null
     */
    public function getAcidCarouselContext()
    {
        return $this->acidCarouselContext;
    }
    
    /**
     * @param string|null $acidCarouselContext
     */
    public function setAcidCarouselContext($acidCarouselContext)
    {
        $this->acidCarouselContext = $acidCarouselContext;
    }
    
    /**
     * @return \array|null
     */
    public function getChildrenAges()
    {
        return $this->childrenAges;
    }
    
    /**
     * @param \array|null $childrenAges
     */
    public function setChildrenAges($childrenAges)
    {
        $this->childrenAges = $childrenAges;
    }
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Request\Variables\Input\Dates|null
     */
    public function getDates()
    {
        return $this->dates;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Request\Variables\Input\Dates|null $dates
     */
    public function setDates($dates)
    {
        $this->dates = $dates;
    }
    
    /**
     * @return bool|null
     */
    public function getDoAvailabilityCheck()
    {
        return $this->doAvailabilityCheck;
    }
    
    /**
     * @param bool|null $doAvailabilityCheck
     */
    public function setDoAvailabilityCheck($doAvailabilityCheck)
    {
        $this->doAvailabilityCheck = $doAvailabilityCheck;
    }
    
    /**
     * @return string|null
     */
    public function getEncodedAutocompleteMeta()
    {
        return $this->encodedAutocompleteMeta;
    }
    
    /**
     * @param string|null $encodedAutocompleteMeta
     */
    public function setEncodedAutocompleteMeta($encodedAutocompleteMeta)
    {
        $this->encodedAutocompleteMeta = $encodedAutocompleteMeta;
    }
    
    /**
     * @return bool|null
     */
    public function getEnableCampaigns()
    {
        return $this->enableCampaigns;
    }
    
    /**
     * @param bool|null $enableCampaigns
     */
    public function setEnableCampaigns($enableCampaigns)
    {
        $this->enableCampaigns = $enableCampaigns;
    }
    
    /**
     * @return Input\Filters|null
     */
    public function getFilters(): ?Input\Filters
    {
        return $this->filters;
    }
    
    /**
     * @param Input\Filters|null $filters
     */
    public function setFilters(?Input\Filters $filters): void
    {
        $this->filters = $filters;
    }
    
    /**
     * @return string|null
     */
    public function getForcedBlocks()
    {
        return $this->forcedBlocks;
    }
    
    /**
     * @param string|null $forcedBlocks
     */
    public function setForcedBlocks($forcedBlocks)
    {
        $this->forcedBlocks = $forcedBlocks;
    }
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Request\Variables\Input\Location|null
     */
    public function getLocation()
    {
        return $this->location;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Request\Variables\Input\Location|null $location
     */
    public function setLocation($location)
    {
        $this->location = $location;
    }
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Request\Variables\Input\MetaContext|null
     */
    public function getMetaContext()
    {
        return $this->metaContext;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Request\Variables\Input\MetaContext|null $metaContext
     */
    public function setMetaContext($metaContext)
    {
        $this->metaContext = $metaContext;
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
     * @return bool|null
     */
    public function getShowAparthotelAsHotel()
    {
        return $this->showAparthotelAsHotel;
    }
    
    /**
     * @param bool|null $showAparthotelAsHotel
     */
    public function setShowAparthotelAsHotel($showAparthotelAsHotel)
    {
        $this->showAparthotelAsHotel = $showAparthotelAsHotel;
    }
    
    /**
     * @return bool|null
     */
    public function getNeedsRoomsMatch()
    {
        return $this->needsRoomsMatch;
    }
    
    /**
     * @param bool|null $needsRoomsMatch
     */
    public function setNeedsRoomsMatch($needsRoomsMatch)
    {
        $this->needsRoomsMatch = $needsRoomsMatch;
    }
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Request\Variables\Input\OptionalFeatures|null
     */
    public function getOptionalFeatures()
    {
        return $this->optionalFeatures;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Request\Variables\Input\OptionalFeatures|null $optionalFeatures
     */
    public function setOptionalFeatures($optionalFeatures)
    {
        $this->optionalFeatures = $optionalFeatures;
    }
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Request\Variables\Input\Pagination|null
     */
    public function getPagination()
    {
        return $this->pagination;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Request\Variables\Input\Pagination|null $pagination
     */
    public function setPagination($pagination)
    {
        $this->pagination = $pagination;
    }
    
    /**
     * @return string|null
     */
    public function getRawQueryForSession()
    {
        return $this->rawQueryForSession;
    }
    
    /**
     * @param string|null $rawQueryForSession
     */
    public function setRawQueryForSession($rawQueryForSession)
    {
        $this->rawQueryForSession = $rawQueryForSession;
    }
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Request\Variables\Input\ReferrerBlock|null
     */
    public function getReferrerBlock()
    {
        return $this->referrerBlock;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Request\Variables\Input\ReferrerBlock|null $referrerBlock
     */
    public function setReferrerBlock($referrerBlock)
    {
        $this->referrerBlock = $referrerBlock;
    }
    
    /**
     * @return bool|null
     */
    public function getSbCalendarOpen()
    {
        return $this->sbCalendarOpen;
    }
    
    /**
     * @param bool|null $sbCalendarOpen
     */
    public function setSbCalendarOpen($sbCalendarOpen)
    {
        $this->sbCalendarOpen = $sbCalendarOpen;
    }
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Request\Variables\Input\Sorters|null
     */
    public function getSorters()
    {
        return $this->sorters;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Request\Variables\Input\Sorters|null $sorters
     */
    public function setSorters($sorters)
    {
        $this->sorters = $sorters;
    }
    
    /**
     * @return int|null
     */
    public function getTravelPurpose()
    {
        return $this->travelPurpose;
    }
    
    /**
     * @param int|null $travelPurpose
     */
    public function setTravelPurpose($travelPurpose)
    {
        $this->travelPurpose = $travelPurpose;
    }
    
    /**
     * @return \array|null
     */
    public function getSeoThemeIds()
    {
        return $this->seoThemeIds;
    }
    
    /**
     * @param \array|null $seoThemeIds
     */
    public function setSeoThemeIds($seoThemeIds)
    {
        $this->seoThemeIds = $seoThemeIds;
    }
    
    /**
     * @return bool|null
     */
    public function getUseSearchParamsFromSession()
    {
        return $this->useSearchParamsFromSession;
    }
    
    /**
     * @param bool|null $useSearchParamsFromSession
     */
    public function setUseSearchParamsFromSession($useSearchParamsFromSession)
    {
        $this->useSearchParamsFromSession = $useSearchParamsFromSession;
    }
    
    
}