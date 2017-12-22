<?php

namespace App\Classes;

/**
 * @access public
 * @author Tarek.Chida
 */
class UsedLanguages {

    /**
     * @AttributeType Timestamp
     */
    private $date;

    /**
     * @AssociationType Languages
     * @AssociationMultiplicity 1
     */
    public $languages;

    function __construct($date, $languages) {
        $this->date = $date;
        $this->users = $users;
        $this->languages = $languages;
    }

    function getDate() {
        return $this->date;
    }

    function getLanguages() {
        return $this->languages;
    }

    function setDate($date) {
        $this->date = $date;
    }

    function setLanguages($languages) {
        $this->languages = $languages;
    }

}

?>