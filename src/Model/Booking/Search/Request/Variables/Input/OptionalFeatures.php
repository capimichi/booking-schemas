<?php

namespace Capimichi\BookingSchemas\Model\Booking\Search\Request\Variables\Input;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class OptionalFeatures
 *
 * @Serializer\ExclusionPolicy("none")
 */
class OptionalFeatures
{
    
    /**
     * @var bool|null
     * @Serializer\Type("bool")
     * @Serializer\SerializedName("forceArpExperiments")
     */
    protected $forceArpExperiments;
    
    /**
     * @var bool|null
     * @Serializer\Type("bool")
     * @Serializer\SerializedName("testProperties")
     */
    protected $testProperties;
    
    /**
     * @return bool|null
     */
    public function getForceArpExperiments()
    {
        return $this->forceArpExperiments;
    }
    
    /**
     * @param bool|null $forceArpExperiments
     */
    public function setForceArpExperiments($forceArpExperiments)
    {
        $this->forceArpExperiments = $forceArpExperiments;
    }
    
    /**
     * @return bool|null
     */
    public function getTestProperties()
    {
        return $this->testProperties;
    }
    
    /**
     * @param bool|null $testProperties
     */
    public function setTestProperties($testProperties)
    {
        $this->testProperties = $testProperties;
    }
    
    
}