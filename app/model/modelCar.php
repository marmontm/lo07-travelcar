<?php

require_once 'SModel.php';

class modelCar
{
    private $id, $owner, $brand, $model, $year, $category, $licencePlate, $color;

    public function __construct($_id = NULL, $owner = NULL, $brand = NULL, $model = NULL, $year = NULL, $category = NULL, $licencePlate = NULL, $color = NULL)
    {
        if(!is_null($_id)) {
            $this->id = $_id;
            $this->owner = $owner;
            $this->brand = $brand;
            $this->model = $model;
            $this->year = $year;
            $this->category = $category;
            $this->licencePlate = $licencePlate;
            $this->color = $color;
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
     * @param null $owner
     */
    public function setOwner($owner): void
    {
        $this->owner = $owner;
    }

    /**
     * @return null
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * @param null $brand
     */
    public function setBrand($brand): void
    {
        $this->brand = $brand;
    }

    /**
     * @return null
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * @param null $model
     */
    public function setModel($model): void
    {
        $this->model = $model;
    }

    /**
     * @return null
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @param null $year
     */
    public function setYear($year): void
    {
        $this->year = $year;
    }

    /**
     * @return null
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * @param null $category
     */
    public function setCategory($category): void
    {
        $this->category = $category;
    }

    /**
     * @return null
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param null $licencePlate
     */
    public function setLicencePlate($licencePlate): void
    {
        $this->licencePlate = $licencePlate;
    }

    /**
     * @return null
     */
    public function getLicencePlate()
    {
        return $this->licencePlate;
    }

    /**
     * @param null $color
     */
    public function setColor($color): void
    {
        $this->color = $color;
    }

    /**
     * @return null
     */
    public function getColor()
    {
        return $this->color;
    }
}