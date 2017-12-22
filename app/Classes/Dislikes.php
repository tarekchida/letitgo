<?php

namespace App\Classes;

/**
 * @access public
 * @author Tarek.Chida
 */
class Dislikes {

    /**
     * @AttributeType Timestamp
     */
    private $date;

    /**
     * @AssociationType Messages
     * @AssociationMultiplicity 1
     */
    public $messageId;

    /**
     * @AssociationType Users
     * @AssociationMultiplicity 1
     */
    public $userId;

    function __construct($date, $messageId, $userId) {
        $this->date = $date;
        $this->messageId = $messageId;
        $this->userId = $userId;
    }

    function getDate() {
        return $this->date;
    }

    function getMessageId() {
        return $this->messageId;
    }

    function getUserId() {
        return $this->userId;
    }

    function setDate($date) {
        $this->date = $date;
    }

    function setMessageId($messageId) {
        $this->messageId = $messageId;
    }

    function setUserId($userId) {
        $this->userId = $userId;
    }

}

?>