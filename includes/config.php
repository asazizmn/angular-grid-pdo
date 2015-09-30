<?php
/* 
 *  config.php - angular-grid
 *  contains PDO (PHP Data Objects) connection logic
 *  
 *  Aziz | 21 Sep 2015
 */
function connect() 
{
    $host = 'localhost';
    $db_name = 'angularcode_grid';
    $db_user = 'root';
    $db_password = 'nxchmysql';
    
    return new PDO('mysql:host='.$host.';dbname='.$db_name, $db_user, $db_password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
}