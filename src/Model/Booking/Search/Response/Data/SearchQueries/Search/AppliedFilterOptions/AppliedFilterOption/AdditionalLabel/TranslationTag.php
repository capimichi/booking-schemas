<?php

namespace Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\AppliedFilterOptions\AppliedFilterOption\AdditionalLabel;

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
     * @var mixed|null
     * @Serializer\Exclude
     * TODO: Find out type for
     *  Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\AppliedFilterOptions\AppliedFilterOption\AdditionalLabel\TranslationTag::translation
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
     * @return mixed|null
     */
    public function getTranslation()
    {
        return $this->translation;
    }
    
    /**
     * @param mixed|null $translation
     */
    public function setTranslation($translation)
    {
        $this->translation = $translation;
    }
    
    
}