<?php

namespace App\Classes;

/**
 * @access public
 * @author Tarek.Chida
 */
class Countries {

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
    private $code;

    /**
     * @AssociationType Cities
     * @AssociationMultiplicity *
     */
    public $states = array();

    function __construct($iD, $name, $code, $states) {
        $this->iD = $iD;
        $this->name = $name;
        $this->code = $code;
        $this->states = $states;
    }

    function getID() {
        return $this->iD;
    }

    function getName() {
        return $this->name;
    }

    function getCode() {
        return $this->code;
    }

    function getStates() {
        return $this->states;
    }

}

?>