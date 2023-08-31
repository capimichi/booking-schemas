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
     * @var mixed|null
     * @Serializer\Exclude
     * TODO: Find out type for
     *  Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\ZeroResultsSection::primaryAction
     */
    protected $primaryAction;
    
    /**
     * @var mixed|null
     * @Serializer\Exclude
     * TODO: Find out type for
     *  Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\ZeroResultsSection::title
     */
    protected $title;
    
    /**
     * @var mixed|null
     * @Serializer\Exclude
     * TODO: Find out type for
     *  Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\ZeroResultsSection::type
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
     * @return mixed|null
     */
    public function getPrimaryAction()
    {
        return $this->primaryAction;
    }
    
    /**
     * @param mixed|null $primaryAction
     */
    public function setPrimaryAction($primaryAction)
    {
        $this->primaryAction = $primaryAction;
    }
    
    
    /**
     * @return mixed|null
     */
    public function getTitle()
    {
        return $this->title;
    }
    
    /**
     * @param mixed|null $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }
    
    
    /**
     * @return mixed|null
     */
    public function getType()
    {
        return $this->type;
    }
    
    /**
     * @param mixed|null $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }
    
    
}