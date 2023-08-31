<?php

namespace Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class DestinationLocation
 *
 * @Serializer\ExclusionPolicy("none")
 */
class DestinationLocation
{
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\DestinationLocation\Name|null
     * @Serializer\Type("Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\DestinationLocation\Name")
     * @Serializer\SerializedName("name")
     */
    protected $name;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("__typename")
     */
    protected $typename;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\DestinationLocation\InName|null
     * @Serializer\Type("Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\DestinationLocation\InName")
     * @Serializer\SerializedName("inName")
     */
    protected $inName;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("countryCode")
     */
    protected $countryCode;
    
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\DestinationLocation\Name|null
     */
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\DestinationLocation\Name|null $name
     */
    public function setName($name)
    {
        $this->name = $name;
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
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\DestinationLocation\InName|null
     */
    public function getInName()
    {
        return $this->inName;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\DestinationLocation\InName|null $inName
     */
    public function setInName($inName)
    {
        $this->inName = $inName;
    }
    
    
    /**
     * @return string|null
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }
    
    /**
     * @param string|null $countryCode
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;
    }
    
    
}