<?php 

// include_once "./config.php";
/**
 * DB Connection Function
 */
function connection(){
    return new mysqli(HOST, USER, PASSWORD, DB);
}


?>