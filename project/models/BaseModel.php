<?php

abstract class BaseModel
{
    protected static $db;

    public function __construct()
    {
        if (self::$db == null) {
            self::$db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
            self::$db->set_charset("utf8");
            if (self::$db->connect_errno) {
                die('Cannot connect to database');
            }
        }
    }

    public function categories() : array
    {
        $statement = self::$db->query("SELECT type_category FROM categories ORDER BY id ASC ");
        return $statement->fetch_all(MYSQLI_ASSOC);
    }
}
