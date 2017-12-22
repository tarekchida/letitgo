<?php

namespace App\Classes;

/**
 * @access public
 * @author Tarek.Chida
 */
class MessageType {

    /**
     * @AttributeType int
     */
    private $iD;

    /**
     * @AttributeType Integer
     */
    private $typeName;

    /**
     * @access public
     */
    function __construct($iD, $typeName) {
        $this->iD = $iD;
        $this->typeName = $typeName;
    }

    function getID() {
        return $this->iD;
    }

    function getTypeName() {
        return $this->typeName;
    }

    function setID($iD) {
        $this->iD = $iD;
    }

    function setTypeName($typeName) {
        $this->typeName = $typeName;
    }

}

?>