<?php

namespace Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\BasicPropertyData\Photos;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Main
 *
 * @Serializer\ExclusionPolicy("none")
 */
class Main
{
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("__typename")
     */
    protected $typename;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\BasicPropertyData\Photos\Main\HighResJpegUrl|null
     * @Serializer\Type("Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\BasicPropertyData\Photos\Main\HighResJpegUrl")
     * @Serializer\SerializedName("highResJpegUrl")
     */
    protected $highResJpegUrl;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\BasicPropertyData\Photos\Main\LowResJpegUrl|null
     * @Serializer\Type("Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\BasicPropertyData\Photos\Main\LowResJpegUrl")
     * @Serializer\SerializedName("lowResJpegUrl")
     */
    protected $lowResJpegUrl;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\BasicPropertyData\Photos\Main\LowResUrl|null
     * @Serializer\Type("Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\BasicPropertyData\Photos\Main\LowResUrl")
     * @Serializer\SerializedName("lowResUrl")
     */
    protected $lowResUrl;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\BasicPropertyData\Photos\Main\HighResUrl|null
     * @Serializer\Type("Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\BasicPropertyData\Photos\Main\HighResUrl")
     * @Serializer\SerializedName("highResUrl")
     */
    protected $highResUrl;
    
    
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
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\BasicPropertyData\Photos\Main\HighResJpegUrl|null
     */
    public function getHighResJpegUrl()
    {
        return $this->highResJpegUrl;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\BasicPropertyData\Photos\Main\HighResJpegUrl|null $highResJpegUrl
     */
    public function setHighResJpegUrl($highResJpegUrl)
    {
        $this->highResJpegUrl = $highResJpegUrl;
    }
    
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\BasicPropertyData\Photos\Main\LowResJpegUrl|null
     */
    public function getLowResJpegUrl()
    {
        return $this->lowResJpegUrl;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\BasicPropertyData\Photos\Main\LowResJpegUrl|null $lowResJpegUrl
     */
    public function setLowResJpegUrl($lowResJpegUrl)
    {
        $this->lowResJpegUrl = $lowResJpegUrl;
    }
    
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\BasicPropertyData\Photos\Main\LowResUrl|null
     */
    public function getLowResUrl()
    {
        return $this->lowResUrl;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\BasicPropertyData\Photos\Main\LowResUrl|null $lowResUrl
     */
    public function setLowResUrl($lowResUrl)
    {
        $this->lowResUrl = $lowResUrl;
    }
    
    
    /**
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\BasicPropertyData\Photos\Main\HighResUrl|null
     */
    public function getHighResUrl()
    {
        return $this->highResUrl;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\BasicPropertyData\Photos\Main\HighResUrl|null $highResUrl
     */
    public function setHighResUrl($highResUrl)
    {
        $this->highResUrl = $highResUrl;
    }
    
    
}