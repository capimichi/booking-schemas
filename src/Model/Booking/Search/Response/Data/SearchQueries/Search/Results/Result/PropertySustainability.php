<?php

namespace Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class PropertySustainability
 *
 * @Serializer\ExclusionPolicy("none")
 */
class PropertySustainability
{
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\PropertySustainability\Tier|null
     * @Serializer\Type("Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\PropertySustainability\Tier")
     * @Serializer\SerializedName("tier")
     */
    protected $tier;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\PropertySustainability\ChainProgrammes\ChainProgramme[]|null
     * @Serializer\Type("array<Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\PropertySustainability\ChainProgrammes\ChainProgramme>")
     * @Serializer\SerializedName("chainProgrammes")
     */
    protected $chainProgrammes;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\PropertySustainability\Certifications\Certification[]|null
     * @Serializer\Type("array<Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\PropertySustainability\Certifications\Certification>")
     * @Serializer\SerializedName("certifications")
     */
    protected $certifications;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("__typename")
     */
    protected $typename;
    
    /**
     * @var bool|null
     * @Serializer\Type("bool")
     * @Serializer\SerializedName("isSustainable")
     */
    protected $isSustainable;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\PropertySustainability\Facilities\Facility[]|null
     * @Serializer\Type("array<Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\PropertySustainability\Facilities\Facility>")
     * @Serializer\SerializedName("facilities")
     */
    protected $facilities;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("levelId")
     */
    protected $levelId;
    
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\PropertySustainability\Tier|null
     */
    public function getTier()
    {
        return $this->tier;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\PropertySustainability\Tier|null $tier
     */
    public function setTier($tier)
    {
        $this->tier = $tier;
    }
    
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\PropertySustainability\ChainProgrammes\ChainProgramme[]|null
     */
    public function getChainProgrammes()
    {
        return $this->chainProgrammes;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\PropertySustainability\ChainProgrammes\ChainProgramme[]|null $chainProgrammes
     */
    public function setChainProgrammes($chainProgrammes)
    {
        $this->chainProgrammes = $chainProgrammes;
    }
    
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\PropertySustainability\Certifications\Certification[]|null
     */
    public function getCertifications()
    {
        return $this->certifications;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\PropertySustainability\Certifications\Certification[]|null $certifications
     */
    public function setCertifications($certifications)
    {
        $this->certifications = $certifications;
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
     * @return bool|null
     */
    public function getIsSustainable()
    {
        return $this->isSustainable;
    }
    
    /**
     * @param bool|null $isSustainable
     */
    public function setIsSustainable($isSustainable)
    {
        $this->isSustainable = $isSustainable;
    }
    
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\PropertySustainability\Facilities\Facility[]|null
     */
    public function getFacilities()
    {
        return $this->facilities;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\PropertySustainability\Facilities\Facility[]|null $facilities
     */
    public function setFacilities($facilities)
    {
        $this->facilities = $facilities;
    }
    
    
    /**
     * @return string|null
     */
    public function getLevelId()
    {
        return $this->levelId;
    }
    
    /**
     * @param string|null $levelId
     */
    public function setLevelId($levelId)
    {
        $this->levelId = $levelId;
    }
    
    
}