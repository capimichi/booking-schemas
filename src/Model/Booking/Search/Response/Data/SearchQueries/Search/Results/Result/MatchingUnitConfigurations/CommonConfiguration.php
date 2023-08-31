<?php

namespace Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\MatchingUnitConfigurations;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class CommonConfiguration
 *
 * @Serializer\ExclusionPolicy("none")
 */
class CommonConfiguration
{
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\MatchingUnitConfigurations\CommonConfiguration\UnitTypeNames\UnitTypeName[]|null
     * @Serializer\Type("array<Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\MatchingUnitConfigurations\CommonConfiguration\UnitTypeNames\UnitTypeName>")
     * @Serializer\SerializedName("unitTypeNames")
     */
    protected $unitTypeNames;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\MatchingUnitConfigurations\CommonConfiguration\BedConfigurations\BedConfiguration[]|null
     * @Serializer\Type("array<Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\MatchingUnitConfigurations\CommonConfiguration\BedConfigurations\BedConfiguration>")
     * @Serializer\SerializedName("bedConfigurations")
     */
    protected $bedConfigurations;
    
    /**
     * @var int|null
     * @Serializer\Type("int")
     * @Serializer\SerializedName("nbLivingrooms")
     */
    protected $nbLivingrooms;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\MatchingUnitConfigurations\CommonConfiguration\LocalizedArea|null
     * @Serializer\Type("Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\MatchingUnitConfigurations\CommonConfiguration\LocalizedArea")
     * @Serializer\SerializedName("localizedArea")
     */
    protected $localizedArea;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("name")
     */
    protected $name;
    
    /**
     * @var int|null
     * @Serializer\Type("int")
     * @Serializer\SerializedName("nbUnits")
     */
    protected $nbUnits;
    
    /**
     * @var int|null
     * @Serializer\Type("int")
     * @Serializer\SerializedName("nbAllBeds")
     */
    protected $nbAllBeds;
    
    /**
     * @var int|null
     * @Serializer\Type("int")
     * @Serializer\SerializedName("nbBathrooms")
     */
    protected $nbBathrooms;
    
    /**
     * @var int|null
     * @Serializer\Type("int")
     * @Serializer\SerializedName("nbPools")
     */
    protected $nbPools;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("__typename")
     */
    protected $typename;
    
    /**
     * @var int|null
     * @Serializer\Type("int")
     * @Serializer\SerializedName("nbBedrooms")
     */
    protected $nbBedrooms;
    
    /**
     * @var int|null
     * @Serializer\Type("int")
     * @Serializer\SerializedName("nbKitchens")
     */
    protected $nbKitchens;
    
    /**
     * @var int|null
     * @Serializer\Type("int")
     * @Serializer\SerializedName("unitId")
     */
    protected $unitId;
    
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\MatchingUnitConfigurations\CommonConfiguration\UnitTypeNames\UnitTypeName[]|null
     */
    public function getUnitTypeNames()
    {
        return $this->unitTypeNames;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\MatchingUnitConfigurations\CommonConfiguration\UnitTypeNames\UnitTypeName[]|null $unitTypeNames
     */
    public function setUnitTypeNames($unitTypeNames)
    {
        $this->unitTypeNames = $unitTypeNames;
    }
    
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\MatchingUnitConfigurations\CommonConfiguration\BedConfigurations\BedConfiguration[]|null
     */
    public function getBedConfigurations()
    {
        return $this->bedConfigurations;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\MatchingUnitConfigurations\CommonConfiguration\BedConfigurations\BedConfiguration[]|null $bedConfigurations
     */
    public function setBedConfigurations($bedConfigurations)
    {
        $this->bedConfigurations = $bedConfigurations;
    }
    
    
    /**
     * @return int|null
     */
    public function getNbLivingrooms()
    {
        return $this->nbLivingrooms;
    }
    
    /**
     * @param int|null $nbLivingrooms
     */
    public function setNbLivingrooms($nbLivingrooms)
    {
        $this->nbLivingrooms = $nbLivingrooms;
    }
    
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\MatchingUnitConfigurations\CommonConfiguration\LocalizedArea|null
     */
    public function getLocalizedArea()
    {
        return $this->localizedArea;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\MatchingUnitConfigurations\CommonConfiguration\LocalizedArea|null $localizedArea
     */
    public function setLocalizedArea($localizedArea)
    {
        $this->localizedArea = $localizedArea;
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
     * @return int|null
     */
    public function getNbUnits()
    {
        return $this->nbUnits;
    }
    
    /**
     * @param int|null $nbUnits
     */
    public function setNbUnits($nbUnits)
    {
        $this->nbUnits = $nbUnits;
    }
    
    
    /**
     * @return int|null
     */
    public function getNbAllBeds()
    {
        return $this->nbAllBeds;
    }
    
    /**
     * @param int|null $nbAllBeds
     */
    public function setNbAllBeds($nbAllBeds)
    {
        $this->nbAllBeds = $nbAllBeds;
    }
    
    
    /**
     * @return int|null
     */
    public function getNbBathrooms()
    {
        return $this->nbBathrooms;
    }
    
    /**
     * @param int|null $nbBathrooms
     */
    public function setNbBathrooms($nbBathrooms)
    {
        $this->nbBathrooms = $nbBathrooms;
    }
    
    
    /**
     * @return int|null
     */
    public function getNbPools()
    {
        return $this->nbPools;
    }
    
    /**
     * @param int|null $nbPools
     */
    public function setNbPools($nbPools)
    {
        $this->nbPools = $nbPools;
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
     * @return int|null
     */
    public function getNbBedrooms()
    {
        return $this->nbBedrooms;
    }
    
    /**
     * @param int|null $nbBedrooms
     */
    public function setNbBedrooms($nbBedrooms)
    {
        $this->nbBedrooms = $nbBedrooms;
    }
    
    
    /**
     * @return int|null
     */
    public function getNbKitchens()
    {
        return $this->nbKitchens;
    }
    
    /**
     * @param int|null $nbKitchens
     */
    public function setNbKitchens($nbKitchens)
    {
        $this->nbKitchens = $nbKitchens;
    }
    
    
    /**
     * @return int|null
     */
    public function getUnitId()
    {
        return $this->unitId;
    }
    
    /**
     * @param int|null $unitId
     */
    public function setUnitId($unitId)
    {
        $this->unitId = $unitId;
    }
    
    
}