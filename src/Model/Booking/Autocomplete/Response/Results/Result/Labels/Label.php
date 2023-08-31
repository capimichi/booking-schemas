<?php

namespace Capimichi\BookingSchemas\Model\Booking\Autocomplete\Response\Results\Result\Labels;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Label
 *
 * @Serializer\ExclusionPolicy("none")
 */
class Label
{
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("text")
     */
    protected $text;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("precomposed")
     */
    protected $precomposed;
    
    /**
     * @var int|null
     * @Serializer\Type("int")
     * @Serializer\SerializedName("hl")
     */
    protected $hl;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("dest_type")
     */
    protected $destType;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("dest_id")
     */
    protected $destId;
    
    /**
     * @return string|null
     */
    public function getText()
    {
        return $this->text;
    }
    
    /**
     * @param string|null $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }
    
    /**
     * @return string|null
     */
    public function getPrecomposed()
    {
        return $this->precomposed;
    }
    
    /**
     * @param string|null $precomposed
     */
    public function setPrecomposed($precomposed)
    {
        $this->precomposed = $precomposed;
    }
    
    /**
     * @return int|null
     */
    public function getHl()
    {
        return $this->hl;
    }
    
    /**
     * @param int|null $hl
     */
    public function setHl($hl)
    {
        $this->hl = $hl;
    }
    
    /**
     * @return string|null
     */
    public function getDestType()
    {
        return $this->destType;
    }
    
    /**
     * @param string|null $destType
     */
    public function setDestType($destType)
    {
        $this->destType = $destType;
    }
    
    /**
     * @return string|null
     */
    public function getDestId()
    {
        return $this->destId;
    }
    
    /**
     * @param string|null $destId
     */
    public function setDestId($destId)
    {
        $this->destId = $destId;
    }
    
    
}