<?php

namespace Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\TrackOnView;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class TrackOnView
 *
 * @Serializer\ExclusionPolicy("none")
 */
class TrackOnView
{
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("experimentTag")
     */
    protected $experimentTag;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("__typename")
     */
    protected $typename;
    
    
    /**
     * @return string|null
     */
    public function getExperimentTag()
    {
        return $this->experimentTag;
    }
    
    /**
     * @param string|null $experimentTag
     */
    public function setExperimentTag($experimentTag)
    {
        $this->experimentTag = $experimentTag;
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