<?php

require_once 'SModel.php';

class modelCarCategory
{
    private $_id, $label, $priceRentDay;

    public function __construct($_id = NULL, $label = NULL, $priceRentDay = NULL)
    {
        if(!is_null($_id)) {
            $this->_id = $_id;
            $this->label = $label;
            $this->priceRentDay = $priceRentDay;
        }
    }

    /**
     * @param null $id
     */
    public function setId($id): void
    {
        $this->_id = $id;
    }

    /**
     * @return null
     */
    public function getId()
    {
        return $this->_id;
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
     * @param mixed $priceRentDay
     */
    public function setPriceRentDay($priceRentDay): void
    {
        $this->priceRentDay = $priceRentDay;
    }

    /**
     * @return mixed
     */
    public function getPriceRentDay()
    {
        return $this->priceRentDay;
    }
}