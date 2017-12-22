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
    private $code;

    /**
     * @access public
     */
    function __construct($iD, $name, $code) {
        $this->iD = $iD;
        $this->name = $name;
        $this->code = $code;
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

}

?>