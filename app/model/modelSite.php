<?php

require_once 'SModel.php';

class modelSite
{
    private $id, $label, $location, $area, $type;

    public function __construct($_id = NULL, $label = NULL, $location = NULL, $area = NULL, $type = NULL)
    {
        if(!is_null($_id)) {
            $this->id = $_id;
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

    public static function readAll() {
        try {
            $database = SModel::getInstance();
            $query = "select * from site";
            $statement = $database->prepare($query);
            $statement->execute();
            $results = $statement->fetchAll(PDO::FETCH_CLASS, "modelSite");
            return $results;
        } catch (PDOException $e) {
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return NULL;
        }
    }

    public static function insert($label, $location, $area, $type) {
        try {
            $database = SModel::getInstance();
            $query = "insert into site values (LAST_INSERT_ID(), :label, :location, :area, :type)";
            $statement = $database->prepare($query);
            $statement->execute([
                'label' => $label,
                'location' => $location,
                'area' => $area,
                'type' => $type
            ]);
            return TRUE;
        } catch (PDOException $e) {
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return FALSE;
        }
    }

    public static function delete($id) {
        try {
            $database = SModel::getInstance();
            $query = "delete from site where id=:id";
            $statement = $database->prepare($query);
            $statement->execute([
                'id' => $id
            ]);
            return TRUE;
        } catch (PDOException $e) {
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return FALSE;
        }
    }
}