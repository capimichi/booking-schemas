<?php

namespace Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\TripTypes;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Ski
 *
 * @Serializer\ExclusionPolicy("none")
 */
class Ski
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
     * @Serializer\SerializedName("isSkiScaleUfi")
     */
    protected $isSkiScaleUfi;
    
    /**
     * @var bool|null
     * @Serializer\Type("bool")
     * @Serializer\SerializedName("isSkiExperience")
     */
    protected $isSkiExperience;
    
    
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
    public function getIsSkiScaleUfi()
    {
        return $this->isSkiScaleUfi;
    }
    
    /**
     * @param bool|null $isSkiScaleUfi
     */
    public function setIsSkiScaleUfi($isSkiScaleUfi)
    {
        $this->isSkiScaleUfi = $isSkiScaleUfi;
    }
    
    
    /**
     * @return bool|null
     */
    public function getIsSkiExperience()
    {
        return $this->isSkiExperience;
    }
    
    /**
     * @param bool|null $isSkiExperience
     */
    public function setIsSkiExperience($isSkiExperience)
    {
        $this->isSkiExperience = $isSkiExperience;
    }
    
    
}