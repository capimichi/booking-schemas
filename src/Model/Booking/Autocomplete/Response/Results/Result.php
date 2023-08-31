<?php

namespace Capimichi\BookingSchemas\Model\Booking\Autocomplete\Response\Results;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Result
 *
 * @Serializer\ExclusionPolicy("none")
 */
class Result
{
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Autocomplete\Response\Results\Result\BMaxLosData|null
     * @Serializer\Type("Capimichi\BookingSchemas\Model\Booking\Autocomplete\Response\Results\Result\BMaxLosData")
     * @Serializer\SerializedName("b_max_los_data")
     */
    protected $bMaxLosData;
    
    /**
     * @var bool|null
     * @Serializer\Type("bool")
     * @Serializer\SerializedName("b_show_entire_homes_checkbox")
     */
    protected $bShowEntireHomesCheckbox;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("cc1")
     */
    protected $cc1;
    
    /**
     * @var bool|null
     * @Serializer\Type("bool")
     * @Serializer\SerializedName("cjk")
     */
    protected $cjk;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("dest_id")
     */
    protected $destId;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("dest_type")
     */
    protected $destType;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("label")
     */
    protected $label;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("label1")
     */
    protected $label1;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("label2")
     */
    protected $label2;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Autocomplete\Response\Results\Result\Labels\Label[]|null
     * @Serializer\Type("array<Capimichi\BookingSchemas\Model\Booking\Autocomplete\Response\Results\Result\Labels\Label>")
     * @Serializer\SerializedName("labels")
     */
    protected $labels;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("latitude")
     */
    protected $latitude;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("lc")
     */
    protected $lc;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("longitude")
     */
    protected $longitude;
    
    /**
     * @var int|null
     * @Serializer\Type("int")
     * @Serializer\SerializedName("nr_homes")
     */
    protected $nrHomes;
    
    /**
     * @var int|null
     * @Serializer\Type("int")
     * @Serializer\SerializedName("nr_hotels")
     */
    protected $nrHotels;
    
    /**
     * @var int|null
     * @Serializer\Type("int")
     * @Serializer\SerializedName("nr_hotels_25")
     */
    protected $nrHotels25;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("photo_uri")
     */
    protected $photoUri;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("roundtrip")
     */
    protected $roundtrip;
    
    /**
     * @var bool|null
     * @Serializer\Type("bool")
     * @Serializer\SerializedName("rtl")
     */
    protected $rtl;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("value")
     */
    protected $value;
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Autocomplete\Response\Results\Result\BMaxLosData|null
     */
    public function getBMaxLosData()
    {
        return $this->bMaxLosData;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Autocomplete\Response\Results\Result\BMaxLosData|null $bMaxLosData
     */
    public function setBMaxLosData($bMaxLosData)
    {
        $this->bMaxLosData = $bMaxLosData;
    }
    
    /**
     * @return bool|null
     */
    public function getBShowEntireHomesCheckbox()
    {
        return $this->bShowEntireHomesCheckbox;
    }
    
    /**
     * @param bool|null $bShowEntireHomesCheckbox
     */
    public function setBShowEntireHomesCheckbox($bShowEntireHomesCheckbox)
    {
        $this->bShowEntireHomesCheckbox = $bShowEntireHomesCheckbox;
    }
    
    /**
     * @return string|null
     */
    public function getCc1()
    {
        return $this->cc1;
    }
    
    /**
     * @param string|null $cc1
     */
    public function setCc1($cc1)
    {
        $this->cc1 = $cc1;
    }
    
    /**
     * @return bool|null
     */
    public function getCjk()
    {
        return $this->cjk;
    }
    
    /**
     * @param bool|null $cjk
     */
    public function setCjk($cjk)
    {
        $this->cjk = $cjk;
    }
    
    /**
     * @return string|null
     */
    public function getDestId()
    {
        return $this->destId;
    }
    
    /**
     * @param string|null $destId
     */
    public function setDestId($destId)
    {
        $this->destId = $destId;
    }
    
    /**
     * @return string|null
     */
    public function getDestType()
    {
        return $this->destType;
    }
    
    /**
     * @param string|null $destType
     */
    public function setDestType($destType)
    {
        $this->destType = $destType;
    }
    
    /**
     * @return string|null
     */
    public function getLabel()
    {
        return $this->label;
    }
    
    /**
     * @param string|null $label
     */
    public function setLabel($label)
    {
        $this->label = $label;
    }
    
    /**
     * @return string|null
     */
    public function getLabel1()
    {
        return $this->label1;
    }
    
    /**
     * @param string|null $label1
     */
    public function setLabel1($label1)
    {
        $this->label1 = $label1;
    }
    
    /**
     * @return string|null
     */
    public function getLabel2()
    {
        return $this->label2;
    }
    
    /**
     * @param string|null $label2
     */
    public function setLabel2($label2)
    {
        $this->label2 = $label2;
    }
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Autocomplete\Response\Results\Result\Labels\Label[]|null
     */
    public function getLabels()
    {
        return $this->labels;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Autocomplete\Response\Results\Result\Labels\Label[]|null $labels
     */
    public function setLabels($labels)
    {
        $this->labels = $labels;
    }
    
    /**
     * @return string|null
     */
    public function getLatitude()
    {
        return $this->latitude;
    }
    
    /**
     * @param string|null $latitude
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    }
    
    /**
     * @return string|null
     */
    public function getLc()
    {
        return $this->lc;
    }
    
    /**
     * @param string|null $lc
     */
    public function setLc($lc)
    {
        $this->lc = $lc;
    }
    
    /**
     * @return string|null
     */
    public function getLongitude()
    {
        return $this->longitude;
    }
    
    /**
     * @param string|null $longitude
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
    }
    
    /**
     * @return int|null
     */
    public function getNrHomes()
    {
        return $this->nrHomes;
    }
    
    /**
     * @param int|null $nrHomes
     */
    public function setNrHomes($nrHomes)
    {
        $this->nrHomes = $nrHomes;
    }
    
    /**
     * @return int|null
     */
    public function getNrHotels()
    {
        return $this->nrHotels;
    }
    
    /**
     * @param int|null $nrHotels
     */
    public function setNrHotels($nrHotels)
    {
        $this->nrHotels = $nrHotels;
    }
    
    /**
     * @return int|null
     */
    public function getNrHotels25()
    {
        return $this->nrHotels25;
    }
    
    /**
     * @param int|null $nrHotels25
     */
    public function setNrHotels25($nrHotels25)
    {
        $this->nrHotels25 = $nrHotels25;
    }
    
    /**
     * @return string|null
     */
    public function getPhotoUri()
    {
        return $this->photoUri;
    }
    
    /**
     * @param string|null $photoUri
     */
    public function setPhotoUri($photoUri)
    {
        $this->photoUri = $photoUri;
    }
    
    /**
     * @return string|null
     */
    public function getRoundtrip()
    {
        return $this->roundtrip;
    }
    
    /**
     * @param string|null $roundtrip
     */
    public function setRoundtrip($roundtrip)
    {
        $this->roundtrip = $roundtrip;
    }
    
    /**
     * @return bool|null
     */
    public function getRtl()
    {
        return $this->rtl;
    }
    
    /**
     * @param bool|null $rtl
     */
    public function setRtl($rtl)
    {
        $this->rtl = $rtl;
    }
    
    /**
     * @return string|null
     */
    public function getValue()
    {
        return $this->value;
    }
    
    /**
     * @param string|null $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }
    
    
}