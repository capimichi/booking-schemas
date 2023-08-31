<?php

namespace Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\Blocks\Block;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class OnlyXLeftMessage
 *
 * @Serializer\ExclusionPolicy("none")
 */
class OnlyXLeftMessage
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
     * @Serializer\SerializedName("tag")
     */
    protected $tag;
    
    /**
     * @var array|null
     * @Serializer\Type("array")
     * @Serializer\SerializedName("variables")
     */
    protected $variables;
    
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
    public function getTag()
    {
        return $this->tag;
    }
    
    /**
     * @param string|null $tag
     */
    public function setTag($tag)
    {
        $this->tag = $tag;
    }
    
    
    /**
     * @return array|null
     */
    public function getVariables()
    {
        return $this->variables;
    }
    
    /**
     * @param array|null $variables
     */
    public function setVariables($variables)
    {
        $this->variables = $variables;
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