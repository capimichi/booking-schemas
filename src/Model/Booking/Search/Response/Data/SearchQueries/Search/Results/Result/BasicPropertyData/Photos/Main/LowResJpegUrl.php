<?php

namespace Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\BasicPropertyData\Photos\Main;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class LowResJpegUrl
 *
 * @Serializer\ExclusionPolicy("none")
 */
class LowResJpegUrl
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
     * @Serializer\SerializedName("relativeUrl")
     */
    protected $relativeUrl;
    
    
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
    public function getRelativeUrl()
    {
        return $this->relativeUrl;
    }
    
    /**
     * @param string|null $relativeUrl
     */
    public function setRelativeUrl($relativeUrl)
    {
        $this->relativeUrl = $relativeUrl;
    }
    
    
}