<?php

namespace Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Pagination
 *
 * @Serializer\ExclusionPolicy("none")
 */
class Pagination
{
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("__typename")
     */
    protected $typename;
    
    /**
     * @var int|null
     * @Serializer\Type("int")
     * @Serializer\SerializedName("nbResultsPerPage")
     */
    protected $nbResultsPerPage;
    
    /**
     * @var int|null
     * @Serializer\Type("int")
     * @Serializer\SerializedName("nbResultsTotal")
     */
    protected $nbResultsTotal;
    
    
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
     * @return int|null
     */
    public function getNbResultsPerPage()
    {
        return $this->nbResultsPerPage;
    }
    
    /**
     * @param int|null $nbResultsPerPage
     */
    public function setNbResultsPerPage($nbResultsPerPage)
    {
        $this->nbResultsPerPage = $nbResultsPerPage;
    }
    
    
    /**
     * @return int|null
     */
    public function getNbResultsTotal()
    {
        return $this->nbResultsTotal;
    }
    
    /**
     * @param int|null $nbResultsTotal
     */
    public function setNbResultsTotal($nbResultsTotal)
    {
        $this->nbResultsTotal = $nbResultsTotal;
    }
    
    
}