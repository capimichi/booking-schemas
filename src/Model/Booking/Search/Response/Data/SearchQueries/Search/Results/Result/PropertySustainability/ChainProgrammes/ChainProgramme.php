<?php

namespace Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\PropertySustainability\ChainProgrammes;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class ChainProgramme
 *
 * @Serializer\ExclusionPolicy("none")
 */
class ChainProgramme
{
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("programmeName")
     */
    protected $programmeName;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("__typename")
     */
    protected $typename;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("chainName")
     */
    protected $chainName;
    
    
    /**
     * @return string|null
     */
    public function getProgrammeName()
    {
        return $this->programmeName;
    }
    
    /**
     * @param string|null $programmeName
     */
    public function setProgrammeName($programmeName)
    {
        $this->programmeName = $programmeName;
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
     * @return string|null
     */
    public function getChainName()
    {
        return $this->chainName;
    }
    
    /**
     * @param string|null $chainName
     */
    public function setChainName($chainName)
    {
        $this->chainName = $chainName;
    }
    
    
}