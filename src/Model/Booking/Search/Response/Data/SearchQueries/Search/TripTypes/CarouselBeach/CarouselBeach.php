<?php

namespace Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\TripTypes\CarouselBeach;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class CarouselBeach
 *
 * @Serializer\ExclusionPolicy("none")
 */
class CarouselBeach
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
     * @Serializer\SerializedName("reviewScoreFormatted")
     */
    protected $reviewScoreFormatted;
    
    /**
     * @var string[]|null
     * @Serializer\Type("array<string>")
     * @Serializer\SerializedName("translatedBeachActivities")
     */
    protected $translatedBeachActivities;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("translatedSandType")
     */
    protected $translatedSandType;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("reviewScore")
     */
    protected $reviewScore;
    
    /**
     * @var string[]|null
     * @Serializer\Type("array<string>")
     * @Serializer\SerializedName("photoUrl")
     */
    protected $photoUrl;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("name")
     */
    protected $name;
    
    /**
     * @var int|null
     * @Serializer\Type("int")
     * @Serializer\SerializedName("beachId")
     */
    protected $beachId;
    
    
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
    public function getReviewScoreFormatted()
    {
        return $this->reviewScoreFormatted;
    }
    
    /**
     * @param string|null $reviewScoreFormatted
     */
    public function setReviewScoreFormatted($reviewScoreFormatted)
    {
        $this->reviewScoreFormatted = $reviewScoreFormatted;
    }
    
    
    /**
     * @return string[]|null
     */
    public function getTranslatedBeachActivities()
    {
        return $this->translatedBeachActivities;
    }
    
    /**
     * @param string[]|null $translatedBeachActivities
     */
    public function setTranslatedBeachActivities($translatedBeachActivities)
    {
        $this->translatedBeachActivities = $translatedBeachActivities;
    }
    
    
    /**
     * @return string|null
     */
    public function getTranslatedSandType()
    {
        return $this->translatedSandType;
    }
    
    /**
     * @param string|null $translatedSandType
     */
    public function setTranslatedSandType($translatedSandType)
    {
        $this->translatedSandType = $translatedSandType;
    }
    
    
    /**
     * @return string|null
     */
    public function getReviewScore()
    {
        return $this->reviewScore;
    }
    
    /**
     * @param string|null $reviewScore
     */
    public function setReviewScore($reviewScore)
    {
        $this->reviewScore = $reviewScore;
    }
    
    
    /**
     * @return string[]|null
     */
    public function getPhotoUrl()
    {
        return $this->photoUrl;
    }
    
    /**
     * @param string[]|null $photoUrl
     */
    public function setPhotoUrl($photoUrl)
    {
        $this->photoUrl = $photoUrl;
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
    public function getBeachId()
    {
        return $this->beachId;
    }
    
    /**
     * @param int|null $beachId
     */
    public function setBeachId($beachId)
    {
        $this->beachId = $beachId;
    }
    
    
}