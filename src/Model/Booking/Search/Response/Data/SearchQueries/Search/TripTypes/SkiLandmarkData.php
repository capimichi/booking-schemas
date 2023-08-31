<?php

namespace Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\TripTypes;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class SkiLandmarkData
 *
 * @Serializer\ExclusionPolicy("none")
 */
class SkiLandmarkData
{
    
    /**
     * @var int|null
     * @Serializer\Type("int")
     * @Serializer\SerializedName("resortId")
     */
    protected $resortId;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("slopeTotalLengthFormatted")
     */
    protected $slopeTotalLengthFormatted;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("__typename")
     */
    protected $typename;
    
    /**
     * @var int|null
     * @Serializer\Type("int")
     * @Serializer\SerializedName("totalLiftsCount")
     */
    protected $totalLiftsCount;
    
    
    /**
     * @return int|null
     */
    public function getResortId()
    {
        return $this->resortId;
    }
    
    /**
     * @param int|null $resortId
     */
    public function setResortId($resortId)
    {
        $this->resortId = $resortId;
    }
    
    
    /**
     * @return string|null
     */
    public function getSlopeTotalLengthFormatted()
    {
        return $this->slopeTotalLengthFormatted;
    }
    
    /**
     * @param string|null $slopeTotalLengthFormatted
     */
    public function setSlopeTotalLengthFormatted($slopeTotalLengthFormatted)
    {
        $this->slopeTotalLengthFormatted = $slopeTotalLengthFormatted;
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
     * @return int|null
     */
    public function getTotalLiftsCount()
    {
        return $this->totalLiftsCount;
    }
    
    /**
     * @param int|null $totalLiftsCount
     */
    public function setTotalLiftsCount($totalLiftsCount)
    {
        $this->totalLiftsCount = $totalLiftsCount;
    }
    
    
}