<?php

namespace Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\RecommendedFilterOptions\RecommendedFilterOption;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class AdditionalLabel
 *
 * @Serializer\ExclusionPolicy("none")
 */
class AdditionalLabel
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
     * @Serializer\SerializedName("__typename")
     */
    protected $typename;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\RecommendedFilterOptions\RecommendedFilterOption\AdditionalLabel\TranslationTag|null
     * @Serializer\Type("Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\RecommendedFilterOptions\RecommendedFilterOption\AdditionalLabel\TranslationTag")
     * @Serializer\SerializedName("translationTag")
     */
    protected $translationTag;
    
    
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
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\RecommendedFilterOptions\RecommendedFilterOption\AdditionalLabel\TranslationTag|null
     */
    public function getTranslationTag()
    {
        return $this->translationTag;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\RecommendedFilterOptions\RecommendedFilterOption\AdditionalLabel\TranslationTag|null $translationTag
     */
    public function setTranslationTag($translationTag)
    {
        $this->translationTag = $translationTag;
    }
    
    
}