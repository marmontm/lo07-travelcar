<?php


class SModel extends PDO
{
    private static $_instance;

    // Constructor
    public function __construct($dsn, $username = null, $passwd = null, $options = null)
    {
        parent::__construct($dsn, $username, $passwd, $options);
    }

    // Singleton
    public static function getInstance() {
        // les variables sont définies dans le fichier config.php
        global $dsn, $username, $password;

        // Enable PDO exceptions
        $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

        if (!isset(self::$_instance)) {
            try {
                self::$_instance = new PDO($dsn, $username, $password, $options);
            } catch (PDOException $e) {
                printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            }
        }
        return self::$_instance;
    }
}
