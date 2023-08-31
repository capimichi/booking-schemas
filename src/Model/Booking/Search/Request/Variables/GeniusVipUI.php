<?php

namespace Capimichi\BookingSchemas\Model\Booking\Search\Request\Variables;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class GeniusVipUI
 *
 * @Serializer\ExclusionPolicy("none")
 */
class GeniusVipUI
{
    
    /**
     * @var bool|null
     * @Serializer\Type("bool")
     * @Serializer\SerializedName("enableEnroll")
     */
    protected $enableEnroll;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("page")
     */
    protected $page;
    
    /**
     * @return bool|null
     */
    public function getEnableEnroll()
    {
        return $this->enableEnroll;
    }
    
    /**
     * @param bool|null $enableEnroll
     */
    public function setEnableEnroll($enableEnroll)
    {
        $this->enableEnroll = $enableEnroll;
    }
    
    /**
     * @return string|null
     */
    public function getPage()
    {
        return $this->page;
    }
    
    /**
     * @param string|null $page
     */
    public function setPage($page)
    {
        $this->page = $page;
    }
    
    
}