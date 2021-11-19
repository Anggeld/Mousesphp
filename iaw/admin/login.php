<?php
    if ($_REQUEST["usuario"] == "admin" and $_REQUEST["contra"] == "admin"){
        header("location: adminindex.php");
    }else {
        header("location: errorlogin.php");
    }
?>