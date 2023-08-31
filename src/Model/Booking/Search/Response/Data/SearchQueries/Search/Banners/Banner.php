<?php

namespace Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Banners;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Banner
 *
 * @Serializer\ExclusionPolicy("none")
 */
class Banner
{
    
    /**
     * @var bool|null
     * @Serializer\Type("bool")
     * @Serializer\SerializedName("requestAlternativeDates")
     */
    protected $requestAlternativeDates;
    
    /**
     * @var bool|null
     * @Serializer\Type("bool")
     * @Serializer\SerializedName("isDismissible")
     */
    protected $isDismissible;
    
    /**
     * @var mixed|null
     * @Serializer\Exclude
     * TODO: Find out type for
     *  Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Banners\Banner::imageUrl
     */
    protected $imageUrl;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Banners\Banner\Paragraphs\Paragraph[]|null
     * @Serializer\Type("array<Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Banners\Banner\Paragraphs\Paragraph>")
     * @Serializer\SerializedName("paragraphs")
     */
    protected $paragraphs;
    
    /**
     * @var array|null
     * @Serializer\Type("array")
     * @Serializer\SerializedName("trackOnView")
     */
    protected $trackOnView;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Banners\Banner\PrimaryAction|null
     * @Serializer\Type("Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Banners\Banner\PrimaryAction")
     * @Serializer\SerializedName("primaryAction")
     */
    protected $primaryAction;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("__typename")
     */
    protected $typename;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("name")
     */
    protected $name;
    
    /**
     * @var int|null
     * @Serializer\Type("int")
     * @Serializer\SerializedName("nbDeals")
     */
    protected $nbDeals;
    
    /**
     * @var mixed|null
     * @Serializer\Exclude
     * TODO: Find out type for
     *  Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Banners\Banner::pendingReviewInfo
     */
    protected $pendingReviewInfo;
    
    /**
     * @var int|null
     * @Serializer\Type("int")
     * @Serializer\SerializedName("showAfterDismissedDuration")
     */
    protected $showAfterDismissedDuration;
    
    /**
     * @var int|null
     * @Serializer\Type("int")
     * @Serializer\SerializedName("position")
     */
    protected $position;
    
    /**
     * @var array|null
     * @Serializer\Type("array")
     * @Serializer\SerializedName("dateFlexQueryOptions")
     */
    protected $dateFlexQueryOptions;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("iconName")
     */
    protected $iconName;
    
    /**
     * @var mixed|null
     * @Serializer\Exclude
     * TODO: Find out type for
     *  Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Banners\Banner::secondaryAction
     */
    protected $secondaryAction;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("type")
     */
    protected $type;
    
    /**
     * @var array|null
     * @Serializer\Type("array")
     * @Serializer\SerializedName("flexibleFilterOptions")
     */
    protected $flexibleFilterOptions;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Banners\Banner\Metadata\Metadatum[]|null
     * @Serializer\Type("array<Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Banners\Banner\Metadata\Metadatum>")
     * @Serializer\SerializedName("metadata")
     */
    protected $metadata;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Banners\Banner\Title|null
     * @Serializer\Type("Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Banners\Banner\Title")
     * @Serializer\SerializedName("title")
     */
    protected $title;
    
    
    /**
     * @return bool|null
     */
    public function getRequestAlternativeDates()
    {
        return $this->requestAlternativeDates;
    }
    
    /**
     * @param bool|null $requestAlternativeDates
     */
    public function setRequestAlternativeDates($requestAlternativeDates)
    {
        $this->requestAlternativeDates = $requestAlternativeDates;
    }
    
    
    /**
     * @return bool|null
     */
    public function getIsDismissible()
    {
        return $this->isDismissible;
    }
    
    /**
     * @param bool|null $isDismissible
     */
    public function setIsDismissible($isDismissible)
    {
        $this->isDismissible = $isDismissible;
    }
    
    
    /**
     * @return mixed|null
     */
    public function getImageUrl()
    {
        return $this->imageUrl;
    }
    
    /**
     * @param mixed|null $imageUrl
     */
    public function setImageUrl($imageUrl)
    {
        $this->imageUrl = $imageUrl;
    }
    
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Banners\Banner\Paragraphs\Paragraph[]|null
     */
    public function getParagraphs()
    {
        return $this->paragraphs;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Banners\Banner\Paragraphs\Paragraph[]|null $paragraphs
     */
    public function setParagraphs($paragraphs)
    {
        $this->paragraphs = $paragraphs;
    }
    
    
    /**
     * @return array|null
     */
    public function getTrackOnView()
    {
        return $this->trackOnView;
    }
    
    /**
     * @param array|null $trackOnView
     */
    public function setTrackOnView($trackOnView)
    {
        $this->trackOnView = $trackOnView;
    }
    
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Banners\Banner\PrimaryAction|null
     */
    public function getPrimaryAction()
    {
        return $this->primaryAction;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Banners\Banner\PrimaryAction|null $primaryAction
     */
    public function setPrimaryAction($primaryAction)
    {
        $this->primaryAction = $primaryAction;
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
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * @param string|null $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }
    
    
    /**
     * @return int|null
     */
    public function getNbDeals()
    {
        return $this->nbDeals;
    }
    
    /**
     * @param int|null $nbDeals
     */
    public function setNbDeals($nbDeals)
    {
        $this->nbDeals = $nbDeals;
    }
    
    
    /**
     * @return mixed|null
     */
    public function getPendingReviewInfo()
    {
        return $this->pendingReviewInfo;
    }
    
    /**
     * @param mixed|null $pendingReviewInfo
     */
    public function setPendingReviewInfo($pendingReviewInfo)
    {
        $this->pendingReviewInfo = $pendingReviewInfo;
    }
    
    
    /**
     * @return int|null
     */
    public function getShowAfterDismissedDuration()
    {
        return $this->showAfterDismissedDuration;
    }
    
    /**
     * @param int|null $showAfterDismissedDuration
     */
    public function setShowAfterDismissedDuration($showAfterDismissedDuration)
    {
        $this->showAfterDismissedDuration = $showAfterDismissedDuration;
    }
    
    
    /**
     * @return int|null
     */
    public function getPosition()
    {
        return $this->position;
    }
    
    /**
     * @param int|null $position
     */
    public function setPosition($position)
    {
        $this->position = $position;
    }
    
    
    /**
     * @return array|null
     */
    public function getDateFlexQueryOptions()
    {
        return $this->dateFlexQueryOptions;
    }
    
    /**
     * @param array|null $dateFlexQueryOptions
     */
    public function setDateFlexQueryOptions($dateFlexQueryOptions)
    {
        $this->dateFlexQueryOptions = $dateFlexQueryOptions;
    }
    
    
    /**
     * @return string|null
     */
    public function getIconName()
    {
        return $this->iconName;
    }
    
    /**
     * @param string|null $iconName
     */
    public function setIconName($iconName)
    {
        $this->iconName = $iconName;
    }
    
    
    /**
     * @return mixed|null
     */
    public function getSecondaryAction()
    {
        return $this->secondaryAction;
    }
    
    /**
     * @param mixed|null $secondaryAction
     */
    public function setSecondaryAction($secondaryAction)
    {
        $this->secondaryAction = $secondaryAction;
    }
    
    
    /**
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }
    
    /**
     * @param string|null $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }
    
    
    /**
     * @return array|null
     */
    public function getFlexibleFilterOptions()
    {
        return $this->flexibleFilterOptions;
    }
    
    /**
     * @param array|null $flexibleFilterOptions
     */
    public function setFlexibleFilterOptions($flexibleFilterOptions)
    {
        $this->flexibleFilterOptions = $flexibleFilterOptions;
    }
    
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Banners\Banner\Metadata\Metadatum[]|null
     */
    public function getMetadata()
    {
        return $this->metadata;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Banners\Banner\Metadata\Metadatum[]|null $metadata
     */
    public function setMetadata($metadata)
    {
        $this->metadata = $metadata;
    }
    
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Banners\Banner\Title|null
     */
    public function getTitle()
    {
        return $this->title;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Banners\Banner\Title|null $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }
    
    
}