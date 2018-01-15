<?php

namespace App\Classes;

/**
 * @access public
 * @author Tarek.Chida
 */
class Cities {

    /**
     * @AttributeType int
     */
    private $iD;

    /**
     * @AttributeType int
     */
    private $name;

    /**
     * @AttributeType int
     */
    private $StatesID;

    /**
     * @access public
     */
    function __construct($iD, $name, $StatesID) {
        $this->iD = $iD;
        $this->name = $name;
        $this->StatesID = $StatesID;
    }

    function getID() {
        return $this->iD;
    }

    function getName() {
        return $this->name;
    }

    function getStatesID() {
        return $this->StatesID;
    }

}

?>