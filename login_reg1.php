<?php
    include_once("./config.php");
    $name = $_GET['name'];
    $Phone = str_replace(" ","",$_GET['phone']);
    $str1 = chunk_split($Phone,8,".");
    $str3 = str_replace("998 ","",$_GET['phone']);
    $str4 = str_replace(" ","",$str3);
    $str2 = explode(".",$str1);
    $Phone1 = $str2[1];
    $Random1 = rand(10,99);
    $Random2 = rand(10,99);
    echo "Phone 998956565: ".$Phone."<br>";
    echo "Random: ".$Random1." ".$Random2."<br>";
    echo "Phone oxiri: ".$Phone1." <br>";
    echo $str4;

    $Tasdiqlash = "Tasdiqlash kodi: ".$Random1." ".$Random1."\n ATKO o'quv markazi. Ma'lumot uchun: (91) 950 1101";


    $sql1 = "SELECT * FROM `users` WHERE `Phone`='".$Phone."'";
    $res1 = $conn->query($sql1);
    $count = $res1->fetchColumn();
    if($count>0){
        header("location: ./login_reg.php?registr=true");
    }else{
        echo "SMS yuborish uchun tayyor bolgan SMS yuborishi kerak";
        sendMessege($str4,$Tasdiqlash);
    }
    function sendMessege($text,$phone){
        $data = json_encode([
            'send'=>'',
            'number'=>$phone,
            'text'=>$text,
            'user_id'=>'5139864291',
            'token'=>"emNlVoGxdivUfMjAKYXPIORyDFLkqtSsnEZHarTQuBhbJgp",
            'id'=>'5390'
        ]);
        $url = "https://api.xssh.uz/smsv1/?data=".urlencode($data);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
        $res = curl_exec($ch);
        $smsArray = json_decode($res, true);
        echo "oke";
    }

?>