<?php

namespace Capimichi\BookingSchemas\Model\Booking\Search;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Request
 *
 * @Serializer\ExclusionPolicy("none")
 */
class Request
{
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("operationName")
     */
    protected $operationName;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Request\Variables|null
     * @Serializer\Type("Capimichi\BookingSchemas\Model\Booking\Search\Request\Variables")
     * @Serializer\SerializedName("variables")
     */
    protected $variables;
    
    /**
     * @var \array|null
     * @Serializer\Type("array")
     * @Serializer\SerializedName("extensions")
     */
    protected $extensions;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("query")
     */
    protected $query;
    
    /**
     * @return string|null
     */
    public function getOperationName()
    {
        return $this->operationName;
    }
    
    /**
     * @param string|null $operationName
     */
    public function setOperationName($operationName)
    {
        $this->operationName = $operationName;
    }
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Request\Variables|null
     */
    public function getVariables()
    {
        return $this->variables;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Request\Variables|null $variables
     */
    public function setVariables($variables)
    {
        $this->variables = $variables;
    }
    
    /**
     * @return \array|null
     */
    public function getExtensions()
    {
        return $this->extensions;
    }
    
    /**
     * @param \array|null $extensions
     */
    public function setExtensions($extensions)
    {
        $this->extensions = $extensions;
    }
    
    /**
     * @return string|null
     */
    public function getQuery()
    {
        return $this->query;
    }
    
    /**
     * @param string|null $query
     */
    public function setQuery($query)
    {
        $this->query = $query;
    }
    
    
}