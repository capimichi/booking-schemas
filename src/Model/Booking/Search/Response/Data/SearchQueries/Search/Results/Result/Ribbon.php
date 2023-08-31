<?php

namespace Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Ribbon
 *
 * @Serializer\ExclusionPolicy("none")
 */
class Ribbon
{
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("text")
     */
    protected $text;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("ribbonType")
     */
    protected $ribbonType;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("__typename")
     */
    protected $typename;
    
    
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
    
    
    /**
     * @return string|null
     */
    public function getRibbonType()
    {
        return $this->ribbonType;
    }
    
    /**
     * @param string|null $ribbonType
     */
    public function setRibbonType($ribbonType)
    {
        $this->ribbonType = $ribbonType;
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