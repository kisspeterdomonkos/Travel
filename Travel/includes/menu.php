<?php
    $content = "includes/main.php";

    if(isset($_GET["p"])){
        switch($_GET["p"]){
            case "uticel":
                $content = "includes/uticel.php";
                break;
                case "adatlap":
                    $content = "includes/adatlap.php";
                    break;
        }
    }
?>