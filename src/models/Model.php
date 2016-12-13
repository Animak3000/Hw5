<?php
namespace onepersongroup\hw5\models;
/**
* The Model class stores and retrieves data needed by the View class.
*/
abstract class Model{
    /**
    * Connects to the Database.
    */
    function connectToDB(){
        $sql = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DB);
        return $sql;
    }
}
?>
