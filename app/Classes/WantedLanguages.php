<?php

namespace App\Classes;

/**
 * @access public
 * @author Tarek.Chida
 */
class WantedLanguages {

    /**
     * @AttributeType Timestamp
     */
    private $date;

    /**
     * @AssociationType Users
     * @AssociationMultiplicity 1
     */
    public $users;

    /**
     * @AssociationType Languages
     * @AssociationMultiplicity 1
     */
    public $languages;

    function __construct($date, $users, $languages) {
        $this->date = $date;
        $this->users = $users;
        $this->languages = $languages;
    }

    function getDate() {
        return $this->date;
    }

    function getUsers() {
        return $this->users;
    }

    function getLanguages() {
        return $this->languages;
    }

    function setDate($date) {
        $this->date = $date;
    }

    function setUsers($users) {
        $this->users = $users;
    }

    function setLanguages($languages) {
        $this->languages = $languages;
    }

}

?>