<?php

namespace Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Breadcrumbs;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Breadcrumb
 *
 * @Serializer\ExclusionPolicy("none")
 */
class Breadcrumb
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
     * @Serializer\SerializedName("destType")
     */
    protected $destType;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("name")
     */
    protected $name;
    
    /**
     * @var string[]|null
     * @Serializer\Type("array<string>")
     * @Serializer\SerializedName("urlParts")
     */
    protected $urlParts;
    
    
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
    public function getDestType()
    {
        return $this->destType;
    }
    
    /**
     * @param string|null $destType
     */
    public function setDestType($destType)
    {
        $this->destType = $destType;
    }
    
    
    /**
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * @param string|null $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }
    
    
    /**
     * @return string[]|null
     */
    public function getUrlParts()
    {
        return $this->urlParts;
    }
    
    /**
     * @param string[]|null $urlParts
     */
    public function setUrlParts($urlParts)
    {
        $this->urlParts = $urlParts;
    }
    
    
}