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
    public $cities = array();

    function __construct($iD, $name, $code, $cities) {
        $this->iD = $iD;
        $this->name = $name;
        $this->code = $code;
        $this->cities = $cities;
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

    function getCities() {
        return $this->cities;
    }

    function setID($iD) {
        $this->iD = $iD;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setCode($code) {
        $this->code = $code;
    }

    function setCities($cities) {
        $this->cities = $cities;
    }

}

?>