<?php

namespace Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\Badges;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Badge
 *
 * @Serializer\ExclusionPolicy("none")
 */
class Badge
{
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\Badges\Badge\Caption|null
     * @Serializer\Type("Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\Badges\Badge\Caption")
     * @Serializer\SerializedName("caption")
     */
    protected $caption;
    
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
     *  Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\Badges\Badge::closedFacilities
     */
    protected $closedFacilities;
    
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\Badges\Badge\Caption|null
     */
    public function getCaption()
    {
        return $this->caption;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\Badges\Badge\Caption|null $caption
     */
    public function setCaption($caption)
    {
        $this->caption = $caption;
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
    
    
    /**
     * @return mixed|null
     */
    public function getClosedFacilities()
    {
        return $this->closedFacilities;
    }
    
    /**
     * @param mixed|null $closedFacilities
     */
    public function setClosedFacilities($closedFacilities)
    {
        $this->closedFacilities = $closedFacilities;
    }
    
    
}