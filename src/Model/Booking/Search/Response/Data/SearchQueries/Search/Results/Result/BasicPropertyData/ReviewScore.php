<?php

namespace Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\BasicPropertyData;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class ReviewScore
 *
 * @Serializer\ExclusionPolicy("none")
 */
class ReviewScore
{
    
    /**
     * @var int|null
     * @Serializer\Type("int")
     * @Serializer\SerializedName("secondaryScore")
     */
    protected $secondaryScore;
    
    /**
     * @var bool|null
     * @Serializer\Type("bool")
     * @Serializer\SerializedName("showScore")
     */
    protected $showScore;
    
    /**
     * @var bool|null
     * @Serializer\Type("bool")
     * @Serializer\SerializedName("showSecondaryScore")
     */
    protected $showSecondaryScore;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\BasicPropertyData\ReviewScore\SecondaryTextTag|null
     * @Serializer\Type("Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\BasicPropertyData\ReviewScore\SecondaryTextTag")
     * @Serializer\SerializedName("secondaryTextTag")
     */
    protected $secondaryTextTag;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\BasicPropertyData\ReviewScore\TotalScoreTextTag|null
     * @Serializer\Type("Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\BasicPropertyData\ReviewScore\TotalScoreTextTag")
     * @Serializer\SerializedName("totalScoreTextTag")
     */
    protected $totalScoreTextTag;
    
    /**
     * @var int|null
     * @Serializer\Type("int")
     * @Serializer\SerializedName("reviewCount")
     */
    protected $reviewCount;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("__typename")
     */
    protected $typename;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("score")
     */
    protected $score;
    
    
    /**
     * @return int|null
     */
    public function getSecondaryScore()
    {
        return $this->secondaryScore;
    }
    
    /**
     * @param int|null $secondaryScore
     */
    public function setSecondaryScore($secondaryScore)
    {
        $this->secondaryScore = $secondaryScore;
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
     * @return bool|null
     */
    public function getShowSecondaryScore()
    {
        return $this->showSecondaryScore;
    }
    
    /**
     * @param bool|null $showSecondaryScore
     */
    public function setShowSecondaryScore($showSecondaryScore)
    {
        $this->showSecondaryScore = $showSecondaryScore;
    }
    
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\BasicPropertyData\ReviewScore\SecondaryTextTag|null
     */
    public function getSecondaryTextTag()
    {
        return $this->secondaryTextTag;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\BasicPropertyData\ReviewScore\SecondaryTextTag|null $secondaryTextTag
     */
    public function setSecondaryTextTag($secondaryTextTag)
    {
        $this->secondaryTextTag = $secondaryTextTag;
    }
    
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\BasicPropertyData\ReviewScore\TotalScoreTextTag|null
     */
    public function getTotalScoreTextTag()
    {
        return $this->totalScoreTextTag;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\BasicPropertyData\ReviewScore\TotalScoreTextTag|null $totalScoreTextTag
     */
    public function setTotalScoreTextTag($totalScoreTextTag)
    {
        $this->totalScoreTextTag = $totalScoreTextTag;
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
    public function getScore()
    {
        return $this->score;
    }
    
    /**
     * @param string|null $score
     */
    public function setScore($score)
    {
        $this->score = $score;
    }
    
    
}