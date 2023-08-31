<?php

namespace Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Result
 *
 * @Serializer\ExclusionPolicy("none")
 */
class Result
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
     * @Serializer\SerializedName("acceptsWalletCredit")
     */
    protected $acceptsWalletCredit;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\Badges\Badge[]|null
     * @Serializer\Type("array<Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\Badges\Badge>")
     * @Serializer\SerializedName("badges")
     */
    protected $badges;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\BasicPropertyData|null
     * @Serializer\Type("Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\BasicPropertyData")
     * @Serializer\SerializedName("basicPropertyData")
     */
    protected $basicPropertyData;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\Blocks\Block[]|null
     * @Serializer\Type("array<Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\Blocks\Block>")
     * @Serializer\SerializedName("blocks")
     */
    protected $blocks;
    
    /**
     * @var array|null
     * @Serializer\Type("array")
     * @Serializer\SerializedName("bookerExperienceContentUIComponentProps")
     */
    protected $bookerExperienceContentUIComponentProps;
    
    /**
     * @var bool|null
     * @Serializer\Type("bool")
     * @Serializer\SerializedName("bundleRatesAvailable")
     */
    protected $bundleRatesAvailable;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\CustomBadges|null
     * @Serializer\Type("Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\CustomBadges")
     * @Serializer\SerializedName("customBadges")
     */
    protected $customBadges;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\Description|null
     * @Serializer\Type("Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\Description")
     * @Serializer\SerializedName("description")
     */
    protected $description;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\DisplayName|null
     * @Serializer\Type("Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\DisplayName")
     * @Serializer\SerializedName("displayName")
     */
    protected $displayName;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("geniusInfo")
     */
    protected $geniusInfo;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("inferredLocationScore")
     */
    protected $inferredLocationScore;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("isInCompanyBudget")
     */
    protected $isInCompanyBudget;
    
    /**
     * @var bool|null
     * @Serializer\Type("bool")
     * @Serializer\SerializedName("isNewlyOpened")
     */
    protected $isNewlyOpened;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("licenseDetails")
     */
    protected $licenseDetails;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\Location|null
     * @Serializer\Type("Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\Location")
     * @Serializer\SerializedName("location")
     */
    protected $location;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\MatchingUnitConfigurations|null
     * @Serializer\Type("Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\MatchingUnitConfigurations")
     * @Serializer\SerializedName("matchingUnitConfigurations")
     */
    protected $matchingUnitConfigurations;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\MealPlanIncluded|null
     * @Serializer\Type("Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\MealPlanIncluded")
     * @Serializer\SerializedName("mealPlanIncluded")
     */
    protected $mealPlanIncluded;
    
    /**
     * @var int|null
     * @Serializer\Type("int")
     * @Serializer\SerializedName("nbWishlists")
     */
    protected $nbWishlists;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\Persuasion|null
     * @Serializer\Type("Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\Persuasion")
     * @Serializer\SerializedName("persuasion")
     */
    protected $persuasion;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\Policies|null
     * @Serializer\Type("Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\Policies")
     * @Serializer\SerializedName("policies")
     */
    protected $policies;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\PriceDisplayInfoIrene|null
     * @Serializer\Type("Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\PriceDisplayInfoIrene")
     * @Serializer\SerializedName("priceDisplayInfoIrene")
     */
    protected $priceDisplayInfoIrene;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\PropertySustainability|null
     * @Serializer\Type("Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\PropertySustainability")
     * @Serializer\SerializedName("propertySustainability")
     */
    protected $propertySustainability;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\RecommendedDate|null
     * @Serializer\Type("Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\RecommendedDate")
     * @Serializer\SerializedName("recommendedDate")
     */
    protected $recommendedDate;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("recommendedDatesLabel")
     */
    protected $recommendedDatesLabel;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("relocationMode")
     */
    protected $relocationMode;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\Ribbon|null
     * @Serializer\Type("Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\Ribbon")
     * @Serializer\SerializedName("ribbon")
     */
    protected $ribbon;
    
    /**
     * @var array|null
     * @Serializer\Type("array")
     * @Serializer\SerializedName("seoThemes")
     */
    protected $seoThemes;
    
    /**
     * @var bool|null
     * @Serializer\Type("bool")
     * @Serializer\SerializedName("showAdLabel")
     */
    protected $showAdLabel;
    
    /**
     * @var bool|null
     * @Serializer\Type("bool")
     * @Serializer\SerializedName("showGeniusLoginMessage")
     */
    protected $showGeniusLoginMessage;
    
    /**
     * @var bool|null
     * @Serializer\Type("bool")
     * @Serializer\SerializedName("showPrivateHostMessage")
     */
    protected $showPrivateHostMessage;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\SoldOutInfo|null
     * @Serializer\Type("Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\SoldOutInfo")
     * @Serializer\SerializedName("soldOutInfo")
     */
    protected $soldOutInfo;
    
    /**
     * @var array|null
     * @Serializer\Type("array")
     * @Serializer\SerializedName("topPhotos")
     */
    protected $topPhotos;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\TrackOnView\TrackOnView[]|null
     * @Serializer\Type("array<Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\TrackOnView\TrackOnView>")
     * @Serializer\SerializedName("trackOnView")
     */
    protected $trackOnView;
    
    /**
     * @var bool|null
     * @Serializer\Type("bool")
     * @Serializer\SerializedName("visibilityBoosterEnabled")
     */
    protected $visibilityBoosterEnabled;
    
    
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
    public function getAcceptsWalletCredit()
    {
        return $this->acceptsWalletCredit;
    }
    
    /**
     * @param bool|null $acceptsWalletCredit
     */
    public function setAcceptsWalletCredit($acceptsWalletCredit)
    {
        $this->acceptsWalletCredit = $acceptsWalletCredit;
    }
    
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\Badges\Badge[]|null
     */
    public function getBadges()
    {
        return $this->badges;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\Badges\Badge[]|null $badges
     */
    public function setBadges($badges)
    {
        $this->badges = $badges;
    }
    
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\BasicPropertyData|null
     */
    public function getBasicPropertyData()
    {
        return $this->basicPropertyData;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\BasicPropertyData|null $basicPropertyData
     */
    public function setBasicPropertyData($basicPropertyData)
    {
        $this->basicPropertyData = $basicPropertyData;
    }
    
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\Blocks\Block[]|null
     */
    public function getBlocks()
    {
        return $this->blocks;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\Blocks\Block[]|null $blocks
     */
    public function setBlocks($blocks)
    {
        $this->blocks = $blocks;
    }
    
    
    /**
     * @return array|null
     */
    public function getBookerExperienceContentUIComponentProps()
    {
        return $this->bookerExperienceContentUIComponentProps;
    }
    
    /**
     * @param array|null $bookerExperienceContentUIComponentProps
     */
    public function setBookerExperienceContentUIComponentProps($bookerExperienceContentUIComponentProps)
    {
        $this->bookerExperienceContentUIComponentProps = $bookerExperienceContentUIComponentProps;
    }
    
    
    /**
     * @return bool|null
     */
    public function getBundleRatesAvailable()
    {
        return $this->bundleRatesAvailable;
    }
    
    /**
     * @param bool|null $bundleRatesAvailable
     */
    public function setBundleRatesAvailable($bundleRatesAvailable)
    {
        $this->bundleRatesAvailable = $bundleRatesAvailable;
    }
    
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\CustomBadges|null
     */
    public function getCustomBadges()
    {
        return $this->customBadges;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\CustomBadges|null $customBadges
     */
    public function setCustomBadges($customBadges)
    {
        $this->customBadges = $customBadges;
    }
    
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\Description|null
     */
    public function getDescription()
    {
        return $this->description;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\Description|null $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }
    
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\DisplayName|null
     */
    public function getDisplayName()
    {
        return $this->displayName;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\DisplayName|null $displayName
     */
    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;
    }
    
    
    /**
     * @return string|null
     */
    public function getGeniusInfo()
    {
        return $this->geniusInfo;
    }
    
    /**
     * @param string|null $geniusInfo
     */
    public function setGeniusInfo($geniusInfo)
    {
        $this->geniusInfo = $geniusInfo;
    }
    
    
    /**
     * @return string|null
     */
    public function getInferredLocationScore()
    {
        return $this->inferredLocationScore;
    }
    
    /**
     * @param string|null $inferredLocationScore
     */
    public function setInferredLocationScore($inferredLocationScore)
    {
        $this->inferredLocationScore = $inferredLocationScore;
    }
    
    
    /**
     * @return string|null
     */
    public function getIsInCompanyBudget()
    {
        return $this->isInCompanyBudget;
    }
    
    /**
     * @param string|null $isInCompanyBudget
     */
    public function setIsInCompanyBudget($isInCompanyBudget)
    {
        $this->isInCompanyBudget = $isInCompanyBudget;
    }
    
    
    /**
     * @return bool|null
     */
    public function getIsNewlyOpened()
    {
        return $this->isNewlyOpened;
    }
    
    /**
     * @param bool|null $isNewlyOpened
     */
    public function setIsNewlyOpened($isNewlyOpened)
    {
        $this->isNewlyOpened = $isNewlyOpened;
    }
    
    
    /**
     * @return string|null
     */
    public function getLicenseDetails()
    {
        return $this->licenseDetails;
    }
    
    /**
     * @param string|null $licenseDetails
     */
    public function setLicenseDetails($licenseDetails)
    {
        $this->licenseDetails = $licenseDetails;
    }
    
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\Location|null
     */
    public function getLocation()
    {
        return $this->location;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\Location|null $location
     */
    public function setLocation($location)
    {
        $this->location = $location;
    }
    
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\MatchingUnitConfigurations|null
     */
    public function getMatchingUnitConfigurations()
    {
        return $this->matchingUnitConfigurations;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\MatchingUnitConfigurations|null $matchingUnitConfigurations
     */
    public function setMatchingUnitConfigurations($matchingUnitConfigurations)
    {
        $this->matchingUnitConfigurations = $matchingUnitConfigurations;
    }
    
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\MealPlanIncluded|null
     */
    public function getMealPlanIncluded()
    {
        return $this->mealPlanIncluded;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\MealPlanIncluded|null $mealPlanIncluded
     */
    public function setMealPlanIncluded($mealPlanIncluded)
    {
        $this->mealPlanIncluded = $mealPlanIncluded;
    }
    
    
    /**
     * @return int|null
     */
    public function getNbWishlists()
    {
        return $this->nbWishlists;
    }
    
    /**
     * @param int|null $nbWishlists
     */
    public function setNbWishlists($nbWishlists)
    {
        $this->nbWishlists = $nbWishlists;
    }
    
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\Persuasion|null
     */
    public function getPersuasion()
    {
        return $this->persuasion;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\Persuasion|null $persuasion
     */
    public function setPersuasion($persuasion)
    {
        $this->persuasion = $persuasion;
    }
    
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\Policies|null
     */
    public function getPolicies()
    {
        return $this->policies;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\Policies|null $policies
     */
    public function setPolicies($policies)
    {
        $this->policies = $policies;
    }
    
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\PriceDisplayInfoIrene|null
     */
    public function getPriceDisplayInfoIrene()
    {
        return $this->priceDisplayInfoIrene;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\PriceDisplayInfoIrene|null $priceDisplayInfoIrene
     */
    public function setPriceDisplayInfoIrene($priceDisplayInfoIrene)
    {
        $this->priceDisplayInfoIrene = $priceDisplayInfoIrene;
    }
    
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\PropertySustainability|null
     */
    public function getPropertySustainability()
    {
        return $this->propertySustainability;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\PropertySustainability|null $propertySustainability
     */
    public function setPropertySustainability($propertySustainability)
    {
        $this->propertySustainability = $propertySustainability;
    }
    
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\RecommendedDate|null
     */
    public function getRecommendedDate()
    {
        return $this->recommendedDate;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\RecommendedDate|null $recommendedDate
     */
    public function setRecommendedDate($recommendedDate)
    {
        $this->recommendedDate = $recommendedDate;
    }
    
    
    /**
     * @return string|null
     */
    public function getRecommendedDatesLabel()
    {
        return $this->recommendedDatesLabel;
    }
    
    /**
     * @param string|null $recommendedDatesLabel
     */
    public function setRecommendedDatesLabel($recommendedDatesLabel)
    {
        $this->recommendedDatesLabel = $recommendedDatesLabel;
    }
    
    
    /**
     * @return string|null
     */
    public function getRelocationMode()
    {
        return $this->relocationMode;
    }
    
    /**
     * @param string|null $relocationMode
     */
    public function setRelocationMode($relocationMode)
    {
        $this->relocationMode = $relocationMode;
    }
    
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\Ribbon|null
     */
    public function getRibbon()
    {
        return $this->ribbon;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\Ribbon|null $ribbon
     */
    public function setRibbon($ribbon)
    {
        $this->ribbon = $ribbon;
    }
    
    
    /**
     * @return array|null
     */
    public function getSeoThemes()
    {
        return $this->seoThemes;
    }
    
    /**
     * @param array|null $seoThemes
     */
    public function setSeoThemes($seoThemes)
    {
        $this->seoThemes = $seoThemes;
    }
    
    
    /**
     * @return bool|null
     */
    public function getShowAdLabel()
    {
        return $this->showAdLabel;
    }
    
    /**
     * @param bool|null $showAdLabel
     */
    public function setShowAdLabel($showAdLabel)
    {
        $this->showAdLabel = $showAdLabel;
    }
    
    
    /**
     * @return bool|null
     */
    public function getShowGeniusLoginMessage()
    {
        return $this->showGeniusLoginMessage;
    }
    
    /**
     * @param bool|null $showGeniusLoginMessage
     */
    public function setShowGeniusLoginMessage($showGeniusLoginMessage)
    {
        $this->showGeniusLoginMessage = $showGeniusLoginMessage;
    }
    
    
    /**
     * @return bool|null
     */
    public function getShowPrivateHostMessage()
    {
        return $this->showPrivateHostMessage;
    }
    
    /**
     * @param bool|null $showPrivateHostMessage
     */
    public function setShowPrivateHostMessage($showPrivateHostMessage)
    {
        $this->showPrivateHostMessage = $showPrivateHostMessage;
    }
    
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\SoldOutInfo|null
     */
    public function getSoldOutInfo()
    {
        return $this->soldOutInfo;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\SoldOutInfo|null $soldOutInfo
     */
    public function setSoldOutInfo($soldOutInfo)
    {
        $this->soldOutInfo = $soldOutInfo;
    }
    
    
    /**
     * @return array|null
     */
    public function getTopPhotos()
    {
        return $this->topPhotos;
    }
    
    /**
     * @param array|null $topPhotos
     */
    public function setTopPhotos($topPhotos)
    {
        $this->topPhotos = $topPhotos;
    }
    
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\TrackOnView\TrackOnView[]|null
     */
    public function getTrackOnView()
    {
        return $this->trackOnView;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\TrackOnView\TrackOnView[]|null $trackOnView
     */
    public function setTrackOnView($trackOnView)
    {
        $this->trackOnView = $trackOnView;
    }
    
    
    /**
     * @return bool|null
     */
    public function getVisibilityBoosterEnabled()
    {
        return $this->visibilityBoosterEnabled;
    }
    
    /**
     * @param bool|null $visibilityBoosterEnabled
     */
    public function setVisibilityBoosterEnabled($visibilityBoosterEnabled)
    {
        $this->visibilityBoosterEnabled = $visibilityBoosterEnabled;
    }
    
    
}