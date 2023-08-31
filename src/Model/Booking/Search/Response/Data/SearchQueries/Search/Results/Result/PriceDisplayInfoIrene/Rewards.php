<?php

namespace Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\PriceDisplayInfoIrene;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Rewards
 *
 * @Serializer\ExclusionPolicy("none")
 */
class Rewards
{
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("__typename")
     */
    protected $typename;
    
    /**
     * @var array|null
     * @Serializer\Type("array")
     * @Serializer\SerializedName("rewardsList")
     */
    protected $rewardsList;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\PriceDisplayInfoIrene\Rewards\RewardsAggregated|null
     * @Serializer\Type("Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\PriceDisplayInfoIrene\Rewards\RewardsAggregated")
     * @Serializer\SerializedName("rewardsAggregated")
     */
    protected $rewardsAggregated;
    
    
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
     * @return array|null
     */
    public function getRewardsList()
    {
        return $this->rewardsList;
    }
    
    /**
     * @param array|null $rewardsList
     */
    public function setRewardsList($rewardsList)
    {
        $this->rewardsList = $rewardsList;
    }
    
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\PriceDisplayInfoIrene\Rewards\RewardsAggregated|null
     */
    public function getRewardsAggregated()
    {
        return $this->rewardsAggregated;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\PriceDisplayInfoIrene\Rewards\RewardsAggregated|null $rewardsAggregated
     */
    public function setRewardsAggregated($rewardsAggregated)
    {
        $this->rewardsAggregated = $rewardsAggregated;
    }
    
    
}