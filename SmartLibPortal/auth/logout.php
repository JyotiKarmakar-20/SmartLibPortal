<?php
    session_start();
    session_destroy();
    header("location:../common/home.php");
?>