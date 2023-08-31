<?php

namespace Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Location
 *
 * @Serializer\ExclusionPolicy("none")
 */
class Location
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
     * @Serializer\SerializedName("beachDistance")
     */
    protected $beachDistance;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("beachWalkingTime")
     */
    protected $beachWalkingTime;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("displayLocation")
     */
    protected $displayLocation;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("geoDistanceMeters")
     */
    protected $geoDistanceMeters;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("mainDistance")
     */
    protected $mainDistance;
    
    /**
     * @var string[]|null
     * @Serializer\Type("array<string>")
     * @Serializer\SerializedName("nearbyBeachNames")
     */
    protected $nearbyBeachNames;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("publicTransportDistanceDescription")
     */
    protected $publicTransportDistanceDescription;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("skiLiftDistance")
     */
    protected $skiLiftDistance;
    
    
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
    public function getBeachDistance()
    {
        return $this->beachDistance;
    }
    
    /**
     * @param string|null $beachDistance
     */
    public function setBeachDistance($beachDistance)
    {
        $this->beachDistance = $beachDistance;
    }
    
    
    /**
     * @return string|null
     */
    public function getBeachWalkingTime()
    {
        return $this->beachWalkingTime;
    }
    
    /**
     * @param string|null $beachWalkingTime
     */
    public function setBeachWalkingTime($beachWalkingTime)
    {
        $this->beachWalkingTime = $beachWalkingTime;
    }
    
    
    /**
     * @return string|null
     */
    public function getDisplayLocation()
    {
        return $this->displayLocation;
    }
    
    /**
     * @param string|null $displayLocation
     */
    public function setDisplayLocation($displayLocation)
    {
        $this->displayLocation = $displayLocation;
    }
    
    
    /**
     * @return string|null
     */
    public function getGeoDistanceMeters()
    {
        return $this->geoDistanceMeters;
    }
    
    /**
     * @param string|null $geoDistanceMeters
     */
    public function setGeoDistanceMeters($geoDistanceMeters)
    {
        $this->geoDistanceMeters = $geoDistanceMeters;
    }
    
    
    /**
     * @return string|null
     */
    public function getMainDistance()
    {
        return $this->mainDistance;
    }
    
    /**
     * @param string|null $mainDistance
     */
    public function setMainDistance($mainDistance)
    {
        $this->mainDistance = $mainDistance;
    }
    
    
    /**
     * @return string[]|null
     */
    public function getNearbyBeachNames()
    {
        return $this->nearbyBeachNames;
    }
    
    /**
     * @param string[]|null $nearbyBeachNames
     */
    public function setNearbyBeachNames($nearbyBeachNames)
    {
        $this->nearbyBeachNames = $nearbyBeachNames;
    }
    
    
    /**
     * @return string|null
     */
    public function getPublicTransportDistanceDescription()
    {
        return $this->publicTransportDistanceDescription;
    }
    
    /**
     * @param string|null $publicTransportDistanceDescription
     */
    public function setPublicTransportDistanceDescription($publicTransportDistanceDescription)
    {
        $this->publicTransportDistanceDescription = $publicTransportDistanceDescription;
    }
    
    
    /**
     * @return string|null
     */
    public function getSkiLiftDistance()
    {
        return $this->skiLiftDistance;
    }
    
    /**
     * @param string|null $skiLiftDistance
     */
    public function setSkiLiftDistance($skiLiftDistance)
    {
        $this->skiLiftDistance = $skiLiftDistance;
    }
    
    
}