<?php
    include_once("./config.php");
    $mytext = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium id odio cumque. Exercitationem assumenda suscipit eveniet, pariatur laborum id natus soluta perspiciatis necessitatibus magnam iste sed blanditiis quibusdam aspernatur optio.";
    $text="text=".$mytext."&tel=".$_GET['tel']."&phone=".$_GET['phone']."&Random=".$_GET['Random']."&name=".$_GET['name']."&Random1=".$_GET['Random1']."&codeerror=true";
    if($_GET['Random1'].$_GET['Random']===$_POST['code']){
        $UserID = time();
        $sql122 = "INSERT INTO `users`(`id`, `UserID`, `FIO`, `Phone`, `Addres`, `Email`, `Dates`) 
        VALUES (NULL,?,?,?,'','',CURRENT_TIMESTAMP)";
        $stmt122= $conn->prepare($sql122);
        $stmt122->execute([$UserID, $_GET['name'], $_GET['phone']]);
        echo "Ro'yhatga olindi";
        setcookie("UserID", $UserID, time() + (3600 * 12), "/");
        header("location: ./index.php");
    }else{
        header("location: ./login_reg2.php?text=".$text."");
    }
?>