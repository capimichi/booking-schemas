<?php

namespace Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Filters\Filter\Options\Option\TrackOnDeSelect;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class TrackOnDeSelect
 *
 * @Serializer\ExclusionPolicy("none")
 */
class TrackOnDeSelect
{
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("__typename")
     */
    protected $typename;
    
    /**
     * @var int|null
     * @Serializer\Type("int")
     * @Serializer\SerializedName("type")
     */
    protected $type;
    
    /**
     * @var int|null
     * @Serializer\Type("int")
     * @Serializer\SerializedName("value")
     */
    protected $value;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("experimentHash")
     */
    protected $experimentHash;
    
    
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
    public function getType()
    {
        return $this->type;
    }
    
    /**
     * @param int|null $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }
    
    
    /**
     * @return int|null
     */
    public function getValue()
    {
        return $this->value;
    }
    
    /**
     * @param int|null $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }
    
    
    /**
     * @return string|null
     */
    public function getExperimentHash()
    {
        return $this->experimentHash;
    }
    
    /**
     * @param string|null $experimentHash
     */
    public function setExperimentHash($experimentHash)
    {
        $this->experimentHash = $experimentHash;
    }
    
    
}