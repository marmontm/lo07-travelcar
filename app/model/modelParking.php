<?php

require_once 'SModel.php';

class modelParking
{
    private $id, $site_id, $label, $address, $totalSlots, $priceReservDay;

    public function __construct($_id = NULL, $site_id = NULL, $label = NULL, $address = NULL, $totalSlots = NULL, $priceReservDay = NULL)
    {
        if(!is_null($_id)) {
            $this->id = $_id;
            $this->site_id = $site_id;
            $this->label = $label;
            $this->address = $address;
            $this->totalSlots = $totalSlots;
            $this->priceReservDay = $priceReservDay;
        }
    }

    /**
     * @param null $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return null
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param null $site_id
     */
    public function setSiteId($site_id): void
    {
        $this->site_id = $site_id;
    }

    /**
     * @return null
     */
    public function getSiteId()
    {
        return $this->site_id;
    }

    /**
     * @param null $label
     */
    public function setLabel($label): void
    {
        $this->label = $label;
    }

    /**
     * @return null
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @param null $address
     */
    public function setAddress($address): void
    {
        $this->address = $address;
    }

    /**
     * @return null
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param null $totalSlots
     */
    public function setTotalSlots($totalSlots): void
    {
        $this->totalSlots = $totalSlots;
    }

    /**
     * @return null
     */
    public function getTotalSlots()
    {
        return $this->totalSlots;
    }

    /**
     * @param null $priceReservDay
     */
    public function setPriceReservDay($priceReservDay): void
    {
        $this->priceReservDay = $priceReservDay;
    }

    /**
     * @return null
     */
    public function getPriceReservDay()
    {
        return $this->priceReservDay;
    }
}