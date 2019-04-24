<?php
require_once 'config.php';

abstract class Connection {
    private static $instance;

    public static function getInstance() {
        if (!isset(self::$instance)):
            try {
                self::$instance = new  PDO('mysql:host=' . HOST . ';dbname=' . BASE, USER,
                    PASSWORD);
                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$instance->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

            } catch (PDOException $error ) {
                echo $error->getMessage();
            }
        endif;

        return self::$instance;
    }

    public static function prepare($sql) {
        return self::getInstance()->prepare($sql);
    }
}
