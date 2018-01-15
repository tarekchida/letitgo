<?php

namespace App\Classes;

/**
 * @access public
 * @author Tarek.Chida
 */
class States {

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
    private $countriesID;

    /**
     * @access public
     */
 
    function __construct($iD, $name, $countriesID) {
        $this->iD = $iD;
        $this->name = $name;
        $this->countriesID = $countriesID;
    }
    function getID() {
        return $this->iD;
    }

    function getName() {
        return $this->name;
    }

    function getCountriesID() {
        return $this->countriesID;
    }
 
}

?>