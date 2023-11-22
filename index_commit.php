<?php
    include_once("./config.php");

    $Text = $_POST['Text'];
    $CoursID = $_GET['CoursID'];
    $UserID = $_COOKIE['UserID'];
    $sql1 = "SELECT * FROM `users` WHERE `UserID`='".$UserID."'";
    $res1 = $conn->query($sql1);
    $row1=$res1->fetch();
    $FIO = $row1['FIO'];
    $Phone = $row1['Phone'];
    $Vaqt = date("d-M Y");


    $sql3 = "INSERT INTO `comment`(`id`, `CoursID`, `UserID`, `FIO`, `Phone`, `Vaqt`, `Text`, `Data`) VALUES 
    (NULL,?,?,?,?,?,?,CURRENT_TIMESTAMP)";
    $stmt3= $conn->prepare($sql3);
    $stmt3->execute([$CoursID, $UserID, $FIO, $Phone, $Vaqt, $Text]);

    header("location: index_eye.php?CoursID=".$CoursID."&commit=true");


?>