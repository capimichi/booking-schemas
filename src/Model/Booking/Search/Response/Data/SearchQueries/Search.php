<?php

namespace Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Search
 *
 * @Serializer\ExclusionPolicy("none")
 */
class Search
{
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("__typename")
     */
    protected $typename;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\AppliedFilterOptions\AppliedFilterOption[]|null
     * @Serializer\Type("array<Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\AppliedFilterOptions\AppliedFilterOption>")
     * @Serializer\SerializedName("appliedFilterOptions")
     */
    protected $appliedFilterOptions;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Breadcrumbs\Breadcrumb[]|null
     * @Serializer\Type("array<Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Breadcrumbs\Breadcrumb>")
     * @Serializer\SerializedName("breadcrumbs")
     */
    protected $breadcrumbs;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\DateFlexibilityOptions|null
     * @Serializer\Type("Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\DateFlexibilityOptions")
     * @Serializer\SerializedName("dateFlexibilityOptions")
     */
    protected $dateFlexibilityOptions;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\DestinationLocation|null
     * @Serializer\Type("Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\DestinationLocation")
     * @Serializer\SerializedName("destinationLocation")
     */
    protected $destinationLocation;
    
    /**
     * @var bool|null
     * @Serializer\Type("bool")
     * @Serializer\SerializedName("entireHomesSearchEnabled")
     */
    protected $entireHomesSearchEnabled;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Filters\Filter[]|null
     * @Serializer\Type("array<Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Filters\Filter>")
     * @Serializer\SerializedName("filters")
     */
    protected $filters;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("frontierThemes")
     */
    protected $frontierThemes;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("oneOfThreeDeal")
     */
    protected $oneOfThreeDeal;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Pagination|null
     * @Serializer\Type("Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Pagination")
     * @Serializer\SerializedName("pagination")
     */
    protected $pagination;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\PreviousSearches\PreviousSearch[]|null
     * @Serializer\Type("array<Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\PreviousSearches\PreviousSearch>")
     * @Serializer\SerializedName("previousSearches")
     */
    protected $previousSearches;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\RecommendedFilterOptions\RecommendedFilterOption[]|null
     * @Serializer\Type("array<Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\RecommendedFilterOptions\RecommendedFilterOption>")
     * @Serializer\SerializedName("recommendedFilterOptions")
     */
    protected $recommendedFilterOptions;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result[]|null
     * @Serializer\Type("array<Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result>")
     * @Serializer\SerializedName("results")
     */
    protected $results;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("rocketmilesSearchUuid")
     */
    protected $rocketmilesSearchUuid;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\SearchMeta|null
     * @Serializer\Type("Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\SearchMeta")
     * @Serializer\SerializedName("searchMeta")
     */
    protected $searchMeta;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Sorters\Sorter[]|null
     * @Serializer\Type("array<Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Sorters\Sorter>")
     * @Serializer\SerializedName("sorters")
     */
    protected $sorters;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\TripTypes|null
     * @Serializer\Type("Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\TripTypes")
     * @Serializer\SerializedName("tripTypes")
     */
    protected $tripTypes;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\ZeroResultsSection|null
     * @Serializer\Type("Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\ZeroResultsSection")
     * @Serializer\SerializedName("zeroResultsSection")
     */
    protected $zeroResultsSection;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Banners\Banner[]|null
     * @Serializer\Type("array<Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Banners\Banner>")
     * @Serializer\SerializedName("banners")
     */
    protected $banners;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Carousels\Carousel[]|null
     * @Serializer\Type("array<Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Carousels\Carousel>")
     * @Serializer\SerializedName("carousels")
     */
    protected $carousels;
    
    
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
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\AppliedFilterOptions\AppliedFilterOption[]|null
     */
    public function getAppliedFilterOptions()
    {
        return $this->appliedFilterOptions;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\AppliedFilterOptions\AppliedFilterOption[]|null $appliedFilterOptions
     */
    public function setAppliedFilterOptions($appliedFilterOptions)
    {
        $this->appliedFilterOptions = $appliedFilterOptions;
    }
    
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Breadcrumbs\Breadcrumb[]|null
     */
    public function getBreadcrumbs()
    {
        return $this->breadcrumbs;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Breadcrumbs\Breadcrumb[]|null $breadcrumbs
     */
    public function setBreadcrumbs($breadcrumbs)
    {
        $this->breadcrumbs = $breadcrumbs;
    }
    
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\DateFlexibilityOptions|null
     */
    public function getDateFlexibilityOptions()
    {
        return $this->dateFlexibilityOptions;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\DateFlexibilityOptions|null $dateFlexibilityOptions
     */
    public function setDateFlexibilityOptions($dateFlexibilityOptions)
    {
        $this->dateFlexibilityOptions = $dateFlexibilityOptions;
    }
    
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\DestinationLocation|null
     */
    public function getDestinationLocation()
    {
        return $this->destinationLocation;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\DestinationLocation|null $destinationLocation
     */
    public function setDestinationLocation($destinationLocation)
    {
        $this->destinationLocation = $destinationLocation;
    }
    
    
    /**
     * @return bool|null
     */
    public function getEntireHomesSearchEnabled()
    {
        return $this->entireHomesSearchEnabled;
    }
    
    /**
     * @param bool|null $entireHomesSearchEnabled
     */
    public function setEntireHomesSearchEnabled($entireHomesSearchEnabled)
    {
        $this->entireHomesSearchEnabled = $entireHomesSearchEnabled;
    }
    
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Filters\Filter[]|null
     */
    public function getFilters()
    {
        return $this->filters;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Filters\Filter[]|null $filters
     */
    public function setFilters($filters)
    {
        $this->filters = $filters;
    }
    
    
    /**
     * @return string|null
     */
    public function getFrontierThemes()
    {
        return $this->frontierThemes;
    }
    
    /**
     * @param string|null $frontierThemes
     */
    public function setFrontierThemes($frontierThemes)
    {
        $this->frontierThemes = $frontierThemes;
    }
    
    
    /**
     * @return string|null
     */
    public function getOneOfThreeDeal()
    {
        return $this->oneOfThreeDeal;
    }
    
    /**
     * @param string|null $oneOfThreeDeal
     */
    public function setOneOfThreeDeal($oneOfThreeDeal)
    {
        $this->oneOfThreeDeal = $oneOfThreeDeal;
    }
    
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Pagination|null
     */
    public function getPagination()
    {
        return $this->pagination;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Pagination|null $pagination
     */
    public function setPagination($pagination)
    {
        $this->pagination = $pagination;
    }
    
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\PreviousSearches\PreviousSearch[]|null
     */
    public function getPreviousSearches()
    {
        return $this->previousSearches;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\PreviousSearches\PreviousSearch[]|null $previousSearches
     */
    public function setPreviousSearches($previousSearches)
    {
        $this->previousSearches = $previousSearches;
    }
    
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\RecommendedFilterOptions\RecommendedFilterOption[]|null
     */
    public function getRecommendedFilterOptions()
    {
        return $this->recommendedFilterOptions;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\RecommendedFilterOptions\RecommendedFilterOption[]|null $recommendedFilterOptions
     */
    public function setRecommendedFilterOptions($recommendedFilterOptions)
    {
        $this->recommendedFilterOptions = $recommendedFilterOptions;
    }
    
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result[]|null
     */
    public function getResults()
    {
        return $this->results;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result[]|null $results
     */
    public function setResults($results)
    {
        $this->results = $results;
    }
    
    
    /**
     * @return string|null
     */
    public function getRocketmilesSearchUuid()
    {
        return $this->rocketmilesSearchUuid;
    }
    
    /**
     * @param string|null $rocketmilesSearchUuid
     */
    public function setRocketmilesSearchUuid($rocketmilesSearchUuid)
    {
        $this->rocketmilesSearchUuid = $rocketmilesSearchUuid;
    }
    
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\SearchMeta|null
     */
    public function getSearchMeta()
    {
        return $this->searchMeta;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\SearchMeta|null $searchMeta
     */
    public function setSearchMeta($searchMeta)
    {
        $this->searchMeta = $searchMeta;
    }
    
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Sorters\Sorter[]|null
     */
    public function getSorters()
    {
        return $this->sorters;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Sorters\Sorter[]|null $sorters
     */
    public function setSorters($sorters)
    {
        $this->sorters = $sorters;
    }
    
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\TripTypes|null
     */
    public function getTripTypes()
    {
        return $this->tripTypes;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\TripTypes|null $tripTypes
     */
    public function setTripTypes($tripTypes)
    {
        $this->tripTypes = $tripTypes;
    }
    
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\ZeroResultsSection|null
     */
    public function getZeroResultsSection()
    {
        return $this->zeroResultsSection;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\ZeroResultsSection|null $zeroResultsSection
     */
    public function setZeroResultsSection($zeroResultsSection)
    {
        $this->zeroResultsSection = $zeroResultsSection;
    }
    
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Banners\Banner[]|null
     */
    public function getBanners()
    {
        return $this->banners;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Banners\Banner[]|null $banners
     */
    public function setBanners($banners)
    {
        $this->banners = $banners;
    }
    
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Carousels\Carousel[]|null
     */
    public function getCarousels()
    {
        return $this->carousels;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Carousels\Carousel[]|null $carousels
     */
    public function setCarousels($carousels)
    {
        $this->carousels = $carousels;
    }
    
    
}