<?php

namespace Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\PriceDisplayInfoIrene;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class ChargesInfo
 *
 * @Serializer\ExclusionPolicy("none")
 */
class ChargesInfo
{
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("translation")
     */
    protected $translation;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("__typename")
     */
    protected $typename;
    
    
    /**
     * @return string|null
     */
    public function getTranslation()
    {
        return $this->translation;
    }
    
    /**
     * @param string|null $translation
     */
    public function setTranslation($translation)
    {
        $this->translation = $translation;
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
    
    
}