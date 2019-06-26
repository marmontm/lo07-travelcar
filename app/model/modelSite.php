<?php

require_once 'SModel.php';

class modelSite
{
    private $_id, $label, $location, $area, $type;

    public function __construct($_id = NULL, $label = NULL, $location = NULL, $area = NULL, $type = NULL)
    {
        if(!is_null($_id)) {
            $this->_id = $_id;
            $this->label = $label;
            $this->location = $location;
            $this->area = $area;
            $this->type = $type;
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
     * @param null $location
     */
    public function setLocation($location): void
    {
        $this->location = $location;
    }

    /**
     * @return null
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param null $area
     */
    public function setArea($area): void
    {
        $this->area = $area;
    }

    /**
     * @return null
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * @param null $type
     */
    public function setType($type): void
    {
        $this->type = $type;
    }

    /**
     * @return null
     */
    public function getType()
    {
        return $this->type;
    }
}