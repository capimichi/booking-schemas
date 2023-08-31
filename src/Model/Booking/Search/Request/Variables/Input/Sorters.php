<?php

namespace Capimichi\BookingSchemas\Model\Booking\Search\Request\Variables\Input;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Sorters
 *
 * @Serializer\ExclusionPolicy("none")
 */
class Sorters
{
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("selectedSorter")
     */
    protected $selectedSorter;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("referenceGeoId")
     */
    protected $referenceGeoId;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("tripTypeIntentId")
     */
    protected $tripTypeIntentId;
    
    /**
     * @return string|null
     */
    public function getSelectedSorter()
    {
        return $this->selectedSorter;
    }
    
    /**
     * @param string|null $selectedSorter
     */
    public function setSelectedSorter($selectedSorter)
    {
        $this->selectedSorter = $selectedSorter;
    }
    
    /**
     * @return string|null
     */
    public function getReferenceGeoId()
    {
        return $this->referenceGeoId;
    }
    
    /**
     * @param string|null $referenceGeoId
     */
    public function setReferenceGeoId($referenceGeoId)
    {
        $this->referenceGeoId = $referenceGeoId;
    }
    
    /**
     * @return string|null
     */
    public function getTripTypeIntentId()
    {
        return $this->tripTypeIntentId;
    }
    
    /**
     * @param string|null $tripTypeIntentId
     */
    public function setTripTypeIntentId($tripTypeIntentId)
    {
        $this->tripTypeIntentId = $tripTypeIntentId;
    }
    
    
}