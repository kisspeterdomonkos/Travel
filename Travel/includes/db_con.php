<?php
    Function Connect(){
        $server  = "localhost";
        $user     = "root";
        $pass     = "";
        $dbname   = "travel";

        $con = mysqli_connect($server, $user, $pass, $dbname);
        if(!$con)
        {
            die("Az oldal nemtudott csatlakozni az adatbázishoz!");
        } 
        return $con;
    }
?>