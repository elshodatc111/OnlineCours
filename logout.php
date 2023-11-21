<?php
    if(isset($_COOKIE['UserID'])){
        setcookie('UserID', '', time() - 43200, "/");
        header("location: index.php");
    }
?>