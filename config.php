<?php
    /*host จริง//
    $host='localhost';
    $user='planetco_64309010001';
    $password='64309010001';
    $dbname='planetco_64309010001';
*/
    //host ของ xampp
    
    $host='localhost';
    $user='root';
    $password='';
    $dbname='webit41';
    

    $con=mysqli_connect($host,$user,$password,$dbname);
    $con->query('SET NAMES UTF8');
?>