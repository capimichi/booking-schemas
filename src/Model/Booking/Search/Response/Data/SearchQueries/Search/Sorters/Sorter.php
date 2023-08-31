<?php

namespace Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Sorters;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Sorter
 *
 * @Serializer\ExclusionPolicy("none")
 */
class Sorter
{
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Sorters\Sorter\Option|null
     * @Serializer\Type("Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Sorters\Sorter\Option")
     * @Serializer\SerializedName("option")
     */
    protected $option;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("__typename")
     */
    protected $typename;
    
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Sorters\Sorter\Option|null
     */
    public function getOption()
    {
        return $this->option;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Sorters\Sorter\Option|null $option
     */
    public function setOption($option)
    {
        $this->option = $option;
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