<?php
    include_once("./config.php");
    $name = $_GET['name'];
    $Phone = str_replace(" ","",$_GET['phone']);
    $str1 = chunk_split($Phone,8,".");
    $str2 = explode(".",$str1);
    $Phone1 = $str2[1];
    $Random1 = rand(10,99);
    $Random2 = rand(10,99);
    echo "Phone: ".$Phone."<br>";
    echo "Random: ".$Random1." ".$Random2."<br>";
    echo "Phone oxiri: ".$Phone1." ";
    $Tasdiqlash = "Tasdiqlash kodi: ".$Random1." ".$Random1."\n ATKO o'quv markazi. Ma'lumot uchun: (91) 950 1101";


    $sql1 = "SELECT * FROM `users` WHERE `Phone`='".$Phone."'";
    $res1 = $conn->query($sql1);
    $count = $res1->fetchColumn();
    if($count>0){
        header("location: ./login_reg.php?registr=true");
    }else{
        echo "SMS yuborish uchun tayyor bolgan SMS yuborishi kerak";
        
    }


?>