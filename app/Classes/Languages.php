<?php

namespace App\Classes;

/**
 * @access public
 * @author Tarek.Chida
 */
class Languages {

    /**
     * @AttributeType int
     */
    private $iD;

    /**
     * @AttributeType int
     */
    private $name;

    function __construct($iD, $name) {
        $this->iD = $iD;
        $this->name = $name;
    }

    function getID() {
        return $this->iD;
    }

    function getName() {
        return $this->name;
    }

    function setID($iD) {
        $this->iD = $iD;
    }

    function setName($name) {
        $this->name = $name;
    }

}

?>