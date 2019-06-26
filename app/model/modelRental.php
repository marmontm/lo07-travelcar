<?php

require_once 'SModel.php';

class modelRental
{
    private $_id, $reservation_id, $tenant, $dateStart, $dateEnd;

    public function __construct($_id = NULL, $reservation_id = NULL, $tenant = NULL, $dateStart = NULL, $dateEnd = NULL)
    {
        if (!is_null($_id)) {
            $this->_id = $_id;
            $this->reservation_id = $reservation_id;
            $this->tenant = $tenant;
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
     * @param null $reservation_id
     */
    public function setReservationId($reservation_id): void
    {
        $this->reservation_id = $reservation_id;
    }

    /**
     * @return null
     */
    public function getReservationId()
    {
        return $this->reservation_id;
    }

    /**
     * @param null $tenant
     */
    public function setTenant($tenant): void
    {
        $this->tenant = $tenant;
    }

    /**
     * @return null
     */
    public function getTenant()
    {
        return $this->tenant;
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