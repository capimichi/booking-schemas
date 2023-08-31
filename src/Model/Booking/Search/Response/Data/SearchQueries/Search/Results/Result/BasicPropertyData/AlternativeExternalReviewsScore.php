<?php

namespace Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\BasicPropertyData;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class AlternativeExternalReviewsScore
 *
 * @Serializer\ExclusionPolicy("none")
 */
class AlternativeExternalReviewsScore
{
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\BasicPropertyData\AlternativeExternalReviewsScore\TotalScoreTextTag|null
     * @Serializer\Type("Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\BasicPropertyData\AlternativeExternalReviewsScore\TotalScoreTextTag")
     * @Serializer\SerializedName("totalScoreTextTag")
     */
    protected $totalScoreTextTag;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("__typename")
     */
    protected $typename;
    
    /**
     * @var bool|null
     * @Serializer\Type("bool")
     * @Serializer\SerializedName("showScore")
     */
    protected $showScore;
    
    /**
     * @var int|null
     * @Serializer\Type("int")
     * @Serializer\SerializedName("score")
     */
    protected $score;
    
    /**
     * @var int|null
     * @Serializer\Type("int")
     * @Serializer\SerializedName("reviewCount")
     */
    protected $reviewCount;
    
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\BasicPropertyData\AlternativeExternalReviewsScore\TotalScoreTextTag|null
     */
    public function getTotalScoreTextTag()
    {
        return $this->totalScoreTextTag;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\BasicPropertyData\AlternativeExternalReviewsScore\TotalScoreTextTag|null $totalScoreTextTag
     */
    public function setTotalScoreTextTag($totalScoreTextTag)
    {
        $this->totalScoreTextTag = $totalScoreTextTag;
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
     * @return bool|null
     */
    public function getShowScore()
    {
        return $this->showScore;
    }
    
    /**
     * @param bool|null $showScore
     */
    public function setShowScore($showScore)
    {
        $this->showScore = $showScore;
    }
    
    
    /**
     * @return int|null
     */
    public function getScore()
    {
        return $this->score;
    }
    
    /**
     * @param int|null $score
     */
    public function setScore($score)
    {
        $this->score = $score;
    }
    
    
    /**
     * @return int|null
     */
    public function getReviewCount()
    {
        return $this->reviewCount;
    }
    
    /**
     * @param int|null $reviewCount
     */
    public function setReviewCount($reviewCount)
    {
        $this->reviewCount = $reviewCount;
    }
    
    
}