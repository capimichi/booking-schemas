<?php

namespace Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class TripTypes
 *
 * @Serializer\ExclusionPolicy("none")
 */
class TripTypes
{
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\TripTypes\Beach|null
     * @Serializer\Type("Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\TripTypes\Beach")
     * @Serializer\SerializedName("beach")
     */
    protected $beach;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("__typename")
     */
    protected $typename;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\TripTypes\SkiLandmarkData|null
     * @Serializer\Type("Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\TripTypes\SkiLandmarkData")
     * @Serializer\SerializedName("skiLandmarkData")
     */
    protected $skiLandmarkData;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\TripTypes\Ski|null
     * @Serializer\Type("Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\TripTypes\Ski")
     * @Serializer\SerializedName("ski")
     */
    protected $ski;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\TripTypes\CarouselBeach\CarouselBeach[]|null
     * @Serializer\Type("array<Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\TripTypes\CarouselBeach\CarouselBeach>")
     * @Serializer\SerializedName("carouselBeach")
     */
    protected $carouselBeach;
    
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\TripTypes\Beach|null
     */
    public function getBeach()
    {
        return $this->beach;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\TripTypes\Beach|null $beach
     */
    public function setBeach($beach)
    {
        $this->beach = $beach;
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
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\TripTypes\SkiLandmarkData|null
     */
    public function getSkiLandmarkData()
    {
        return $this->skiLandmarkData;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\TripTypes\SkiLandmarkData|null $skiLandmarkData
     */
    public function setSkiLandmarkData($skiLandmarkData)
    {
        $this->skiLandmarkData = $skiLandmarkData;
    }
    
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\TripTypes\Ski|null
     */
    public function getSki()
    {
        return $this->ski;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\TripTypes\Ski|null $ski
     */
    public function setSki($ski)
    {
        $this->ski = $ski;
    }
    
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\TripTypes\CarouselBeach\CarouselBeach[]|null
     */
    public function getCarouselBeach()
    {
        return $this->carouselBeach;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\TripTypes\CarouselBeach\CarouselBeach[]|null $carouselBeach
     */
    public function setCarouselBeach($carouselBeach)
    {
        $this->carouselBeach = $carouselBeach;
    }
    
    
}