<?php

namespace Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class ZeroResultsSection
 *
 * @Serializer\ExclusionPolicy("none")
 */
class ZeroResultsSection
{
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("__typename")
     */
    protected $typename;
    
    /**
     * @var array|null
     * @Serializer\Type("array")
     * @Serializer\SerializedName("paragraphs")
     */
    protected $paragraphs;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("primaryAction")
     */
    protected $primaryAction;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("title")
     */
    protected $title;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("type")
     */
    protected $type;
    
    
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
     * @return array|null
     */
    public function getParagraphs()
    {
        return $this->paragraphs;
    }
    
    /**
     * @param array|null $paragraphs
     */
    public function setParagraphs($paragraphs)
    {
        $this->paragraphs = $paragraphs;
    }
    
    
    /**
     * @return string|null
     */
    public function getPrimaryAction()
    {
        return $this->primaryAction;
    }
    
    /**
     * @param string|null $primaryAction
     */
    public function setPrimaryAction($primaryAction)
    {
        $this->primaryAction = $primaryAction;
    }
    
    
    /**
     * @return string|null
     */
    public function getTitle()
    {
        return $this->title;
    }
    
    /**
     * @param string|null $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }
    
    
    /**
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }
    
    /**
     * @param string|null $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }
    
    
}