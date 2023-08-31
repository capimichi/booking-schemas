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
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("__typename")
     */
    protected $typename;
    
    /**
     * @var int|null
     * @Serializer\Type("int")
     * @Serializer\SerializedName("reviewCount")
     */
    protected $reviewCount;
    
    /**
     * @var mixed|null
     * @Serializer\Exclude
     * TODO: Find out type for
     *  Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\BasicPropertyData\ReviewScore::score
     */
    protected $score;
    
    /**
     * @var mixed|null
     * @Serializer\Exclude
     * TODO: Find out type for
     *  Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\BasicPropertyData\ReviewScore::secondaryScore
     */
    protected $secondaryScore;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\BasicPropertyData\ReviewScore\SecondaryTextTag|null
     * @Serializer\Type("Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\BasicPropertyData\ReviewScore\SecondaryTextTag")
     * @Serializer\SerializedName("secondaryTextTag")
     */
    protected $secondaryTextTag;
    
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
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\BasicPropertyData\ReviewScore\TotalScoreTextTag|null
     * @Serializer\Type("Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\BasicPropertyData\ReviewScore\TotalScoreTextTag")
     * @Serializer\SerializedName("totalScoreTextTag")
     */
    protected $totalScoreTextTag;
    
    
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
     * @return mixed|null
     */
    public function getScore()
    {
        return $this->score;
    }
    
    /**
     * @param mixed|null $score
     */
    public function setScore($score)
    {
        $this->score = $score;
    }
    
    
    /**
     * @return mixed|null
     */
    public function getSecondaryScore()
    {
        return $this->secondaryScore;
    }
    
    /**
     * @param mixed|null $secondaryScore
     */
    public function setSecondaryScore($secondaryScore)
    {
        $this->secondaryScore = $secondaryScore;
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
    
    
}