<?php

require "IDB.php";
require "MySQL.php";

try {
    $driver = new MySQL();
    $db = $driver->connect("127.0.0.1", "root", "", "db_for_driver");

    $select = $db->select("SELECT * FROM users");
    print_r($select);

    $insert = $db->insert("users", ["username"=>"admin", "email"=>"admin@admin.com"]);
    print_r($insert);

    $update = $db->update("users", 1, ["username"=>"admin", "email"=>"notadmin@admin.com"]);
    print_r($update);

    $delete = $db->delete("users", 2);
    print_r($delete);
    
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}