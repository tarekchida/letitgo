<?php

namespace App\Classes;

/**
 * @access public
 * @author Tarek.Chida
 */
class Messages {

    /**
     * @AttributeType int
     */
    private $iD;

    /**
     * @AttributeType string
     */
    private $chainId;

    /**
     * @AttributeType Timestamp
     */
    private $date;

    /**
     * @AssociationType Dislikes
     * @AssociationMultiplicity *
     */
    public $dislikers = array();

    /**
     * @AssociationType Likes
     * @AssociationMultiplicity *
     */
    public $likers = array();

    /**
     * @AssociationType Bookmarks
     * @AssociationMultiplicity *
     */
    public $bookmarkers = array();

    /**
     * @AssociationType Reporting
     * @AssociationMultiplicity *
     */
    public $reporters = array();

    /**
     * @AssociationType Viewed
     * @AssociationMultiplicity *
     */
    public $viewers = array();

    /**
     * @access public
     */
    function __construct($iD, $chainId, $date, $dislikers, $likers, $bookmarkers, $reporters, $viewers) {
        $this->iD = $iD;
        $this->chainId = $chainId;
        $this->date = $date;
        $this->dislikers = $dislikers;
        $this->likers = $likers;
        $this->bookmarkers = $bookmarkers;
        $this->reporters = $reporters;
        $this->viewers = $viewers;
    }

    function getID() {
        return $this->iD;
    }

    function getChainId() {
        return $this->chainId;
    }

    function getDate() {
        return $this->date;
    }

    function getDislikers() {
        return $this->dislikers;
    }

    function getLikers() {
        return $this->likers;
    }

    function getBookmarkers() {
        return $this->bookmarkers;
    }

    function getReporters() {
        return $this->reporters;
    }

    function getViewers() {
        return $this->viewers;
    }

    function setID($iD) {
        $this->iD = $iD;
    }

    function setChainId($chainId) {
        $this->chainId = $chainId;
    }

    function setDate($date) {
        $this->date = $date;
    }

    function setDislikers($dislikers) {
        $this->dislikers = $dislikers;
    }

    function setLikers($likers) {
        $this->likers = $likers;
    }

    function setBookmarkers($bookmarkers) {
        $this->bookmarkers = $bookmarkers;
    }

    function setReporters($reporters) {
        $this->reporters = $reporters;
    }

    function setViewers($viewers) {
        $this->viewers = $viewers;
    }

}

?>