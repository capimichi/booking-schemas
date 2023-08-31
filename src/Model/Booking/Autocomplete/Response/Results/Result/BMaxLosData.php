<?php

namespace Capimichi\BookingSchemas\Model\Booking\Autocomplete\Response\Results\Result;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class BMaxLosData
 *
 * @Serializer\ExclusionPolicy("none")
 */
class BMaxLosData
{
    
    /**
     * @var int|null
     * @Serializer\Type("int")
     * @Serializer\SerializedName("defaultLos")
     */
    protected $defaultLos;
    
    /**
     * @var int|null
     * @Serializer\Type("int")
     * @Serializer\SerializedName("extendedLos")
     */
    protected $extendedLos;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("experiment")
     */
    protected $experiment;
    
    /**
     * @var bool|null
     * @Serializer\Type("bool")
     * @Serializer\SerializedName("fullOn")
     */
    protected $fullOn;
    
    /**
     * @return int|null
     */
    public function getDefaultLos()
    {
        return $this->defaultLos;
    }
    
    /**
     * @param int|null $defaultLos
     */
    public function setDefaultLos($defaultLos)
    {
        $this->defaultLos = $defaultLos;
    }
    
    /**
     * @return int|null
     */
    public function getExtendedLos()
    {
        return $this->extendedLos;
    }
    
    /**
     * @param int|null $extendedLos
     */
    public function setExtendedLos($extendedLos)
    {
        $this->extendedLos = $extendedLos;
    }
    
    /**
     * @return string|null
     */
    public function getExperiment()
    {
        return $this->experiment;
    }
    
    /**
     * @param string|null $experiment
     */
    public function setExperiment($experiment)
    {
        $this->experiment = $experiment;
    }
    
    /**
     * @return bool|null
     */
    public function getFullOn()
    {
        return $this->fullOn;
    }
    
    /**
     * @param bool|null $fullOn
     */
    public function setFullOn($fullOn)
    {
        $this->fullOn = $fullOn;
    }
    
    
}