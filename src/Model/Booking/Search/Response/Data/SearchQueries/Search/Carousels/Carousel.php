<?php

namespace Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Carousels;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Carousel
 *
 * @Serializer\ExclusionPolicy("none")
 */
class Carousel
{
    
    /**
     * @var mixed|null
     * @Serializer\Exclude
     * TODO: Find out type for
     *  Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Carousels\Carousel::themeId
     */
    protected $themeId;
    
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
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("contentType")
     */
    protected $contentType;
    
    /**
     * @var mixed|null
     * @Serializer\Exclude
     * TODO: Find out type for
     *  Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Carousels\Carousel::aggregatedCountsByFilterId
     */
    protected $aggregatedCountsByFilterId;
    
    /**
     * @var mixed|null
     * @Serializer\Exclude
     * TODO: Find out type for
     *  Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Carousels\Carousel::title
     */
    protected $title;
    
    /**
     * @var mixed|null
     * @Serializer\Exclude
     * TODO: Find out type for
     *  Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Carousels\Carousel::slides
     */
    protected $slides;
    
    /**
     * @var int|null
     * @Serializer\Type("int")
     * @Serializer\SerializedName("hotelId")
     */
    protected $hotelId;
    
    /**
     * @var int|null
     * @Serializer\Type("int")
     * @Serializer\SerializedName("carouselId")
     */
    protected $carouselId;
    
    /**
     * @var int|null
     * @Serializer\Type("int")
     * @Serializer\SerializedName("position")
     */
    protected $position;
    
    /**
     * @var int|null
     * @Serializer\Type("int")
     * @Serializer\SerializedName("priority")
     */
    protected $priority;
    
    /**
     * @var mixed|null
     * @Serializer\Exclude
     * TODO: Find out type for
     *  Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Carousels\Carousel::soldoutProperties
     */
    protected $soldoutProperties;
    
    
    /**
     * @return mixed|null
     */
    public function getThemeId()
    {
        return $this->themeId;
    }
    
    /**
     * @param mixed|null $themeId
     */
    public function setThemeId($themeId)
    {
        $this->themeId = $themeId;
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
     * @return string|null
     */
    public function getContentType()
    {
        return $this->contentType;
    }
    
    /**
     * @param string|null $contentType
     */
    public function setContentType($contentType)
    {
        $this->contentType = $contentType;
    }
    
    
    /**
     * @return mixed|null
     */
    public function getAggregatedCountsByFilterId()
    {
        return $this->aggregatedCountsByFilterId;
    }
    
    /**
     * @param mixed|null $aggregatedCountsByFilterId
     */
    public function setAggregatedCountsByFilterId($aggregatedCountsByFilterId)
    {
        $this->aggregatedCountsByFilterId = $aggregatedCountsByFilterId;
    }
    
    
    /**
     * @return mixed|null
     */
    public function getTitle()
    {
        return $this->title;
    }
    
    /**
     * @param mixed|null $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }
    
    
    /**
     * @return mixed|null
     */
    public function getSlides()
    {
        return $this->slides;
    }
    
    /**
     * @param mixed|null $slides
     */
    public function setSlides($slides)
    {
        $this->slides = $slides;
    }
    
    
    /**
     * @return int|null
     */
    public function getHotelId()
    {
        return $this->hotelId;
    }
    
    /**
     * @param int|null $hotelId
     */
    public function setHotelId($hotelId)
    {
        $this->hotelId = $hotelId;
    }
    
    
    /**
     * @return int|null
     */
    public function getCarouselId()
    {
        return $this->carouselId;
    }
    
    /**
     * @param int|null $carouselId
     */
    public function setCarouselId($carouselId)
    {
        $this->carouselId = $carouselId;
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
     * @return int|null
     */
    public function getPriority()
    {
        return $this->priority;
    }
    
    /**
     * @param int|null $priority
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;
    }
    
    
    /**
     * @return mixed|null
     */
    public function getSoldoutProperties()
    {
        return $this->soldoutProperties;
    }
    
    /**
     * @param mixed|null $soldoutProperties
     */
    public function setSoldoutProperties($soldoutProperties)
    {
        $this->soldoutProperties = $soldoutProperties;
    }
    
    
}