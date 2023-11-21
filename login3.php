<?php
    include_once("./config.php");
    $mytext = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium id odio cumque. Exercitationem assumenda suscipit eveniet, pariatur laborum id natus soluta perspiciatis necessitatibus magnam iste sed blanditiis quibusdam aspernatur optio.";
    $text="text=".$mytext."&tel=".$_GET['tel']."&phone=".$_GET['phone']."&Random=".$_GET['Random']."&Random1=".$_GET['Random1']."&error=true&UserID=".$_GET['UserID']."";
    if($_GET['Random1'].$_GET['Random']===$_POST['Kode']){
        echo "Kod to'g'ri";
        setcookie("UserID", $_GET['UserID'], time() + (3600 * 12), "/");
        header("location: ./index.php");
    }else{
        header("location: ./login2.php?text=".$text."");
    }
?>