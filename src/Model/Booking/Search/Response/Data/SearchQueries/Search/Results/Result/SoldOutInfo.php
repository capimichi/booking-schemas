<?php

namespace Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class SoldOutInfo
 *
 * @Serializer\ExclusionPolicy("none")
 */
class SoldOutInfo
{
    
    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("__typename")
     */
    protected $typename;
    
    /**
     * @var \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\SoldOutInfo\AlternativeDatesMessages\AlternativeDatesMessage[]|null
     * @Serializer\Type("array<Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\SoldOutInfo\AlternativeDatesMessages\AlternativeDatesMessage>")
     * @Serializer\SerializedName("alternativeDatesMessages")
     */
    protected $alternativeDatesMessages;
    
    /**
     * @var bool|null
     * @Serializer\Type("bool")
     * @Serializer\SerializedName("isSoldOut")
     */
    protected $isSoldOut;
    
    /**
     * @var array|null
     * @Serializer\Type("array")
     * @Serializer\SerializedName("messages")
     */
    protected $messages;
    
    
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
     * @return \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\SoldOutInfo\AlternativeDatesMessages\AlternativeDatesMessage[]|null
     */
    public function getAlternativeDatesMessages()
    {
        return $this->alternativeDatesMessages;
    }
    
    /**
     * @param \Capimichi\BookingSchemas\Model\Booking\Search\Response\Data\SearchQueries\Search\Results\Result\SoldOutInfo\AlternativeDatesMessages\AlternativeDatesMessage[]|null $alternativeDatesMessages
     */
    public function setAlternativeDatesMessages($alternativeDatesMessages)
    {
        $this->alternativeDatesMessages = $alternativeDatesMessages;
    }
    
    
    /**
     * @return bool|null
     */
    public function getIsSoldOut()
    {
        return $this->isSoldOut;
    }
    
    /**
     * @param bool|null $isSoldOut
     */
    public function setIsSoldOut($isSoldOut)
    {
        $this->isSoldOut = $isSoldOut;
    }
    
    
    /**
     * @return array|null
     */
    public function getMessages()
    {
        return $this->messages;
    }
    
    /**
     * @param array|null $messages
     */
    public function setMessages($messages)
    {
        $this->messages = $messages;
    }
    
    
}