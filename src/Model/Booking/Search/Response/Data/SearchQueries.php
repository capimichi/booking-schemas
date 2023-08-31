<?php

namespace Capimichi\BookingSchemas\Model\Booking\Search\Response\Data;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class SearchQueries
 *
 * @Serializer\ExclusionPolicy("none")
 */
class SearchQueries
{
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("__typename")
     */
    protected $typename;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search|null
     * @Serializer\Type("Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search")
     * @Serializer\SerializedName("search")
     */
    protected $search;
    
    
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
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search|null
     */
    public function getSearch()
    {
        return $this->search;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search|null $search
     */
    public function setSearch($search)
    {
        $this->search = $search;
    }
    
    
}