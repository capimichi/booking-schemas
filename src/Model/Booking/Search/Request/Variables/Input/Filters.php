<?php

namespace Capimichi\BookingSchemas\Model\Booking\Search\Request\Variables\Input;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Filters
 *
 * @Serializer\ExclusionPolicy("none")
 */
class Filters
{
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("selectedFilters")
     */
    protected $selectedFilters;
    
    
    /**
     * @return string|null
     */
    public function getSelectedFilters()
    {
        return $this->selectedFilters;
    }
    
    /**
     * @param string|null $selectedFilters
     */
    public function setSelectedFilters($selectedFilters)
    {
        $this->selectedFilters = $selectedFilters;
    }
    
    
}