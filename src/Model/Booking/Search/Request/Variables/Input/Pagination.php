<?php

namespace Capimichi\BookingSchemas\Model\Booking\Search\Request\Variables\Input;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Pagination
 *
 * @Serializer\ExclusionPolicy("none")
 */
class Pagination
{
    
    /**
     * @var int|null
     * @Serializer\Type("int")
     * @Serializer\SerializedName("rowsPerPage")
     */
    protected $rowsPerPage;
    
    /**
     * @var int|null
     * @Serializer\Type("int")
     * @Serializer\SerializedName("offset")
     */
    protected $offset;
    
    /**
     * @return int|null
     */
    public function getRowsPerPage()
    {
        return $this->rowsPerPage;
    }
    
    /**
     * @param int|null $rowsPerPage
     */
    public function setRowsPerPage($rowsPerPage)
    {
        $this->rowsPerPage = $rowsPerPage;
    }
    
    /**
     * @return int|null
     */
    public function getOffset()
    {
        return $this->offset;
    }
    
    /**
     * @param int|null $offset
     */
    public function setOffset($offset)
    {
        $this->offset = $offset;
    }
    
    
}