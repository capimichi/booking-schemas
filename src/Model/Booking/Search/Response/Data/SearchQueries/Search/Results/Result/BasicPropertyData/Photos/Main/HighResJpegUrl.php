<?php

namespace Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\BasicPropertyData\Photos\Main;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class HighResJpegUrl
 *
 * @Serializer\ExclusionPolicy("none")
 */
class HighResJpegUrl
{
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("relativeUrl")
     */
    protected $relativeUrl;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("__typename")
     */
    protected $typename;
    
    
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
    
    
}