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
     * @var mixed|null
     * @Serializer\Exclude
     * TODO: Find out type for
     *  Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\SearchMeta\BoundingBoxes\BoundingBox::neLat
     */
    protected $neLat;
    
    /**
     * @var mixed|null
     * @Serializer\Exclude
     * TODO: Find out type for
     *  Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\SearchMeta\BoundingBoxes\BoundingBox::neLon
     */
    protected $neLon;
    
    /**
     * @var mixed|null
     * @Serializer\Exclude
     * TODO: Find out type for
     *  Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\SearchMeta\BoundingBoxes\BoundingBox::swLat
     */
    protected $swLat;
    
    /**
     * @var mixed|null
     * @Serializer\Exclude
     * TODO: Find out type for
     *  Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\SearchMeta\BoundingBoxes\BoundingBox::swLon
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
     * @return mixed|null
     */
    public function getNeLat()
    {
        return $this->neLat;
    }
    
    /**
     * @param mixed|null $neLat
     */
    public function setNeLat($neLat)
    {
        $this->neLat = $neLat;
    }
    
    
    /**
     * @return mixed|null
     */
    public function getNeLon()
    {
        return $this->neLon;
    }
    
    /**
     * @param mixed|null $neLon
     */
    public function setNeLon($neLon)
    {
        $this->neLon = $neLon;
    }
    
    
    /**
     * @return mixed|null
     */
    public function getSwLat()
    {
        return $this->swLat;
    }
    
    /**
     * @param mixed|null $swLat
     */
    public function setSwLat($swLat)
    {
        $this->swLat = $swLat;
    }
    
    
    /**
     * @return mixed|null
     */
    public function getSwLon()
    {
        return $this->swLon;
    }
    
    /**
     * @param mixed|null $swLon
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