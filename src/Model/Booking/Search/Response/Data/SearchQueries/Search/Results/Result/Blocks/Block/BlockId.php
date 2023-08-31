<?php

namespace Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\Blocks\Block;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class BlockId
 *
 * @Serializer\ExclusionPolicy("none")
 */
class BlockId
{
    
    /**
     * @var int|null
     * @Serializer\Type("int")
     * @Serializer\SerializedName("mealPlanId")
     */
    protected $mealPlanId;
    
    /**
     * @var int|null
     * @Serializer\Type("int")
     * @Serializer\SerializedName("occupancy")
     */
    protected $occupancy;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("__typename")
     */
    protected $typename;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("packageId")
     */
    protected $packageId;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("policyGroupId")
     */
    protected $policyGroupId;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("roomId")
     */
    protected $roomId;
    
    
    /**
     * @return int|null
     */
    public function getMealPlanId()
    {
        return $this->mealPlanId;
    }
    
    /**
     * @param int|null $mealPlanId
     */
    public function setMealPlanId($mealPlanId)
    {
        $this->mealPlanId = $mealPlanId;
    }
    
    
    /**
     * @return int|null
     */
    public function getOccupancy()
    {
        return $this->occupancy;
    }
    
    /**
     * @param int|null $occupancy
     */
    public function setOccupancy($occupancy)
    {
        $this->occupancy = $occupancy;
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
    public function getPackageId()
    {
        return $this->packageId;
    }
    
    /**
     * @param string|null $packageId
     */
    public function setPackageId($packageId)
    {
        $this->packageId = $packageId;
    }
    
    
    /**
     * @return string|null
     */
    public function getPolicyGroupId()
    {
        return $this->policyGroupId;
    }
    
    /**
     * @param string|null $policyGroupId
     */
    public function setPolicyGroupId($policyGroupId)
    {
        $this->policyGroupId = $policyGroupId;
    }
    
    
    /**
     * @return string|null
     */
    public function getRoomId()
    {
        return $this->roomId;
    }
    
    /**
     * @param string|null $roomId
     */
    public function setRoomId($roomId)
    {
        $this->roomId = $roomId;
    }
    
    
}