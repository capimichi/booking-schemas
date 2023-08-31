<?php

namespace Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Policies
 *
 * @Serializer\ExclusionPolicy("none")
 */
class Policies
{
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("__typename")
     */
    protected $typename;
    
    /**
     * @var mixed|null
     * @Serializer\Exclude
     * TODO: Find out type for
     *  Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\Policies::enableJapaneseUsersSpecialCase
     */
    protected $enableJapaneseUsersSpecialCase;
    
    /**
     * @var bool|null
     * @Serializer\Type("bool")
     * @Serializer\SerializedName("showFreeCancellation")
     */
    protected $showFreeCancellation;
    
    /**
     * @var bool|null
     * @Serializer\Type("bool")
     * @Serializer\SerializedName("showNoPrepayment")
     */
    protected $showNoPrepayment;
    
    
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
     * @return mixed|null
     */
    public function getEnableJapaneseUsersSpecialCase()
    {
        return $this->enableJapaneseUsersSpecialCase;
    }
    
    /**
     * @param mixed|null $enableJapaneseUsersSpecialCase
     */
    public function setEnableJapaneseUsersSpecialCase($enableJapaneseUsersSpecialCase)
    {
        $this->enableJapaneseUsersSpecialCase = $enableJapaneseUsersSpecialCase;
    }
    
    
    /**
     * @return bool|null
     */
    public function getShowFreeCancellation()
    {
        return $this->showFreeCancellation;
    }
    
    /**
     * @param bool|null $showFreeCancellation
     */
    public function setShowFreeCancellation($showFreeCancellation)
    {
        $this->showFreeCancellation = $showFreeCancellation;
    }
    
    
    /**
     * @return bool|null
     */
    public function getShowNoPrepayment()
    {
        return $this->showNoPrepayment;
    }
    
    /**
     * @param bool|null $showNoPrepayment
     */
    public function setShowNoPrepayment($showNoPrepayment)
    {
        $this->showNoPrepayment = $showNoPrepayment;
    }
    
    
}