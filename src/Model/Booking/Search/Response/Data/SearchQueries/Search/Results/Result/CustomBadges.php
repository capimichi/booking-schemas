<?php

namespace Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class CustomBadges
 *
 * @Serializer\ExclusionPolicy("none")
 */
class CustomBadges
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
     * @Serializer\SerializedName("showBhTravelCreditBadge")
     */
    protected $showBhTravelCreditBadge;
    
    /**
     * @var bool|null
     * @Serializer\Type("bool")
     * @Serializer\SerializedName("showIsWorkFriendly")
     */
    protected $showIsWorkFriendly;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("showOnlineCheckinBadge")
     */
    protected $showOnlineCheckinBadge;
    
    /**
     * @var bool|null
     * @Serializer\Type("bool")
     * @Serializer\SerializedName("showParkAndFly")
     */
    protected $showParkAndFly;
    
    /**
     * @var bool|null
     * @Serializer\Type("bool")
     * @Serializer\SerializedName("showSkiToDoor")
     */
    protected $showSkiToDoor;
    
    
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
    public function getShowBhTravelCreditBadge()
    {
        return $this->showBhTravelCreditBadge;
    }
    
    /**
     * @param bool|null $showBhTravelCreditBadge
     */
    public function setShowBhTravelCreditBadge($showBhTravelCreditBadge)
    {
        $this->showBhTravelCreditBadge = $showBhTravelCreditBadge;
    }
    
    
    /**
     * @return bool|null
     */
    public function getShowIsWorkFriendly()
    {
        return $this->showIsWorkFriendly;
    }
    
    /**
     * @param bool|null $showIsWorkFriendly
     */
    public function setShowIsWorkFriendly($showIsWorkFriendly)
    {
        $this->showIsWorkFriendly = $showIsWorkFriendly;
    }
    
    
    /**
     * @return string|null
     */
    public function getShowOnlineCheckinBadge()
    {
        return $this->showOnlineCheckinBadge;
    }
    
    /**
     * @param string|null $showOnlineCheckinBadge
     */
    public function setShowOnlineCheckinBadge($showOnlineCheckinBadge)
    {
        $this->showOnlineCheckinBadge = $showOnlineCheckinBadge;
    }
    
    
    /**
     * @return bool|null
     */
    public function getShowParkAndFly()
    {
        return $this->showParkAndFly;
    }
    
    /**
     * @param bool|null $showParkAndFly
     */
    public function setShowParkAndFly($showParkAndFly)
    {
        $this->showParkAndFly = $showParkAndFly;
    }
    
    
    /**
     * @return bool|null
     */
    public function getShowSkiToDoor()
    {
        return $this->showSkiToDoor;
    }
    
    /**
     * @param bool|null $showSkiToDoor
     */
    public function setShowSkiToDoor($showSkiToDoor)
    {
        $this->showSkiToDoor = $showSkiToDoor;
    }
    
    
}