<?php

namespace Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\RecommendedFilterOptions\RecommendedFilterOption\Value;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class TranslationTag
 *
 * @Serializer\ExclusionPolicy("none")
 */
class TranslationTag
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
     * @Serializer\SerializedName("translation")
     */
    protected $translation;
    
    
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
    
    
}