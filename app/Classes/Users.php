<?php

namespace App\Classes;

/**
 * @access public
 * @author Tarek.Chida
 */
class Users {

    /**
     * @AttributeType int
     */
    private $iD;

    /**
     * @AttributeType string
     */
    private $firstName;

    /**
     * @AttributeType string
     */
    private $lastName;

    /**
     * @AttributeType string
     */
    private $mail;

    /**
     * @AttributeType string
     */
    private $userName;

    /**
     * @AttributeType string
     */
    private $password;

    /**
     * @AttributeType Timestamp
     */
    private $birthDate;

    /**
     * @AttributeType Timestamp
     */
    private $lastConnectionDate;

    /**
     * @AttributeType Timestamp
     */
    private $creationDate;

    /**
     * @AttributeType string
     */
    private $avatar;

    /**
     * @AssociationType Cities
     * @AssociationMultiplicity 1
     */
    public $city;

    /**
     * @AssociationType WantedLanguages
     * @AssociationMultiplicity *
     */
    public $wantedLanguages = array();

    /**
     * @AssociationType Messages
     * @AssociationMultiplicity *
     */
    public $messageses = array();

    /**
     * @AssociationType UsedLanguages
     * @AssociationMultiplicity 1..*
     */
    public $usedLanguage = array();

    /**
     * @AssociationType Likes
     * @AssociationMultiplicity 1..*
     */
    public $liked = array();

    /**
     * @AssociationType Likes
     * @AssociationMultiplicity 1..*
     */
    public $disliked = array();

    /**
     * @AssociationType Viewed
     * @AssociationMultiplicity 1..*
     */
    public $viewed = array();

    /**
     * @AssociationType Viewed
     * @AssociationMultiplicity 1..*
     */
    public $reported = array();

    /**
     * @access public
     */
    function __construct($iD, $firstName, $lastName, $mail, $userName, $password, $birthDate, $lastConnectionDate, $creationDate, $avatar, $city, $wantedLanguages, $messageses, $usedLanguage, $liked, $disliked, $viewed, $reported) {
        $this->iD = $iD;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->mail = $mail;
        $this->userName = $userName;
        $this->password = $password;
        $this->birthDate = $birthDate;
        $this->lastConnectionDate = $lastConnectionDate;
        $this->creationDate = $creationDate;
        $this->avatar = $avatar;
        $this->city = $city;
        $this->wantedLanguages = $wantedLanguages;
        $this->messageses = $messageses;
        $this->usedLanguage = $usedLanguage;
        $this->liked = $liked;
        $this->disliked = $disliked;
        $this->viewed = $viewed;
        $this->reported = $reported;
    }

    function getID() {
        return $this->iD;
    }

    function getFirstName() {
        return $this->firstName;
    }

    function getLastName() {
        return $this->lastName;
    }

    function getMail() {
        return $this->mail;
    }

    function getUserName() {
        return $this->userName;
    }

    function getPassword() {
        return $this->password;
    }

    function getBirthDate() {
        return $this->birthDate;
    }

    function getLastConnectionDate() {
        return $this->lastConnectionDate;
    }

    function getCreationDate() {
        return $this->creationDate;
    }

    function getAvatar() {
        return $this->avatar;
    }

    function getCity() {
        return $this->city;
    }

    function getWantedLanguages() {
        return $this->wantedLanguages;
    }

    function getMessageses() {
        return $this->messageses;
    }

    function getUsedLanguage() {
        return $this->usedLanguage;
    }

    function getLiked() {
        return $this->liked;
    }

    function getDisliked() {
        return $this->disliked;
    }

    function getViewed() {
        return $this->viewed;
    }

    function getReported() {
        return $this->reported;
    }

    function setID($iD) {
        $this->iD = $iD;
    }

    function setFirstName($firstName) {
        $this->firstName = $firstName;
    }

    function setLastName($lastName) {
        $this->lastName = $lastName;
    }

    function setMail($mail) {
        $this->mail = $mail;
    }

    function setUserName($userName) {
        $this->userName = $userName;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setBirthDate($birthDate) {
        $this->birthDate = $birthDate;
    }

    function setLastConnectionDate($lastConnectionDate) {
        $this->lastConnectionDate = $lastConnectionDate;
    }

    function setCreationDate($creationDate) {
        $this->creationDate = $creationDate;
    }

    function setAvatar($avatar) {
        $this->avatar = $avatar;
    }

    function setCity($city) {
        $this->city = $city;
    }

    function setWantedLanguages($wantedLanguages) {
        $this->wantedLanguages = $wantedLanguages;
    }

    function setMessageses($messageses) {
        $this->messageses = $messageses;
    }

    function setUsedLanguage($usedLanguage) {
        $this->usedLanguage = $usedLanguage;
    }

    function setLiked($liked) {
        $this->liked = $liked;
    }

    function setDisliked($disliked) {
        $this->disliked = $disliked;
    }

    function setViewed($viewed) {
        $this->viewed = $viewed;
    }

    function setReported($reported) {
        $this->reported = $reported;
    }

}

?>