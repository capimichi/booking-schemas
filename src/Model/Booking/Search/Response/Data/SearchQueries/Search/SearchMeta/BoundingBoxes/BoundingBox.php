<?php

namespace Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\SearchMeta\BoundingBoxes;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class BoundingBox
 *
 * @Serializer\ExclusionPolicy("none")
 */
class BoundingBox
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
     * @Serializer\SerializedName("neLat")
     */
    protected $neLat;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("neLon")
     */
    protected $neLon;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("swLat")
     */
    protected $swLat;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("swLon")
     */
    protected $swLon;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("type")
     */
    protected $type;
    
    
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
    public function getNeLat()
    {
        return $this->neLat;
    }
    
    /**
     * @param string|null $neLat
     */
    public function setNeLat($neLat)
    {
        $this->neLat = $neLat;
    }
    
    
    /**
     * @return string|null
     */
    public function getNeLon()
    {
        return $this->neLon;
    }
    
    /**
     * @param string|null $neLon
     */
    public function setNeLon($neLon)
    {
        $this->neLon = $neLon;
    }
    
    
    /**
     * @return string|null
     */
    public function getSwLat()
    {
        return $this->swLat;
    }
    
    /**
     * @param string|null $swLat
     */
    public function setSwLat($swLat)
    {
        $this->swLat = $swLat;
    }
    
    
    /**
     * @return string|null
     */
    public function getSwLon()
    {
        return $this->swLon;
    }
    
    /**
     * @param string|null $swLon
     */
    public function setSwLon($swLon)
    {
        $this->swLon = $swLon;
    }
    
    
    /**
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }
    
    /**
     * @param string|null $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }
    
    
}