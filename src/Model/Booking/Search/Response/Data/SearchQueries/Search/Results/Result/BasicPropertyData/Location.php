<?php

namespace Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\BasicPropertyData;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Location
 *
 * @Serializer\ExclusionPolicy("none")
 */
class Location
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
     * @Serializer\SerializedName("address")
     */
    protected $address;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("city")
     */
    protected $city;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("countryCode")
     */
    protected $countryCode;
    
    
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
    public function getAddress()
    {
        return $this->address;
    }
    
    /**
     * @param string|null $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }
    
    
    /**
     * @return string|null
     */
    public function getCity()
    {
        return $this->city;
    }
    
    /**
     * @param string|null $city
     */
    public function setCity($city)
    {
        $this->city = $city;
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