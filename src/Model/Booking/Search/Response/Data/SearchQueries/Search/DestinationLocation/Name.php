<?php

namespace Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\DestinationLocation;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Name
 *
 * @Serializer\ExclusionPolicy("none")
 */
class Name
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
     * @Serializer\SerializedName("text")
     */
    protected $text;
    
    
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
    public function getText()
    {
        return $this->text;
    }
    
    /**
     * @param string|null $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }
    
    
}