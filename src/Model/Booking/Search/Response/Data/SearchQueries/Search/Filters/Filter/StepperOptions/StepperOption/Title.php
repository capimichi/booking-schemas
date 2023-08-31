<?php

namespace Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Filters\Filter\StepperOptions\StepperOption;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Title
 *
 * @Serializer\ExclusionPolicy("none")
 */
class Title
{
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Filters\Filter\StepperOptions\StepperOption\Title\TranslationTag|null
     * @Serializer\Type("Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Filters\Filter\StepperOptions\StepperOption\Title\TranslationTag")
     * @Serializer\SerializedName("translationTag")
     */
    protected $translationTag;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("__typename")
     */
    protected $typename;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("text")
     */
    protected $text;
    
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Filters\Filter\StepperOptions\StepperOption\Title\TranslationTag|null
     */
    public function getTranslationTag()
    {
        return $this->translationTag;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Filters\Filter\StepperOptions\StepperOption\Title\TranslationTag|null $translationTag
     */
    public function setTranslationTag($translationTag)
    {
        $this->translationTag = $translationTag;
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
    
    
}