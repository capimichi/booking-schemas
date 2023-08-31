<?php

namespace Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\BasicPropertyData;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class PaymentConfig
 *
 * @Serializer\ExclusionPolicy("none")
 */
class PaymentConfig
{
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("__typename")
     */
    protected $typename;
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("installments")
     */
    protected $installments;
    
    
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
     * @return string|null
     */
    public function getInstallments()
    {
        return $this->installments;
    }
    
    /**
     * @param string|null $installments
     */
    public function setInstallments($installments)
    {
        $this->installments = $installments;
    }
    
    
}