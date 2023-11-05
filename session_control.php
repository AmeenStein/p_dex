<?php
    if(!isset($_SESSION["p_main"])){
        header("Location: ./?not_set");
        exit();
    }
?>