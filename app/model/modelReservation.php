<?php

require_once 'SModel.php';

class modelReservation
{
    private $_id, $parking_id, $car_id, $dateStart, $dateEnd;

    public function __construct($_id = NULL, $parking_id = NULL, $car_id = NULL, $dateStart = NULL, $dateEnd = NULL)
    {
        if(!is_null($_id)) {
            $this->_id = $_id;
            $this->parking_id = $parking_id;
            $this->car_id = $car_id;
            $this->dateStart = $dateStart;
            $this->dateEnd = $dateEnd;
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
     * @param null $parking_id
     */
    public function setParkingId($parking_id): void
    {
        $this->parking_id = $parking_id;
    }

    /**
     * @return null
     */
    public function getParkingId()
    {
        return $this->parking_id;
    }

    /**
     * @param null $car_id
     */
    public function setCarId($car_id): void
    {
        $this->car_id = $car_id;
    }

    /**
     * @return null
     */
    public function getCarId()
    {
        return $this->car_id;
    }

    /**
     * @param null $dateStart
     */
    public function setDateStart($dateStart): void
    {
        $this->dateStart = $dateStart;
    }

    /**
     * @return null
     */
    public function getDateStart()
    {
        return $this->dateStart;
    }

    /**
     * @param null $dateEnd
     */
    public function setDateEnd($dateEnd): void
    {
        $this->dateEnd = $dateEnd;
    }

    /**
     * @return null
     */
    public function getDateEnd()
    {
        return $this->dateEnd;
    }
}