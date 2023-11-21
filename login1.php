<?php
    include_once("./config.php");
    $Phone = str_replace(" ","",$_GET['Phone']);
    $str1 = chunk_split($Phone,8,".");
    $str3 = str_replace("998 ","",$_GET['Phone']);
    $str2 = explode(".",$str1);
    $Phone1 = $str2[1];
    $Random1 = rand(10,49);
    $Random2 = rand(50,99);
    $Tasdiqlashkodi = $Random1.$Random2;
    $tell = str_replace(" ","",$str3);
    $TasdiqlashSMS = "Tasdiqlash kodi: ".$Random1." ".$Random2."\n ATKO o'quv markazi. Ma'lumot uchun: (91) 950 1101";
    $mytext = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium id odio cumque. Exercitationem assumenda suscipit eveniet, pariatur laborum id natus soluta perspiciatis necessitatibus magnam iste sed blanditiis quibusdam aspernatur optio.";
    
    $sql1 = "SELECT * FROM `users` WHERE `Phone`='".$Phone."'";
    $res1 = $conn->query($sql1);
    $count = $res1->fetchColumn();

    $sql122 = "SELECT * FROM `users` WHERE `Phone`='".$Phone."'";
    $res122 = $conn->query($sql122);
    $rows = $res122->fetch();
    echo $rows['UserID'];
    if($count>0){
        if(sendMessege($TasdiqlashSMS,$tell)===200){
            header("location: ./login2.php?text=".$mytext."&tel=".$Phone1."&phone=".$Phone."&Random=".$Random2."&Random1=".$Random1."&UserID=".$rows['UserID']."");
        }else{
            header("location: ./login.php?phone1=error");
        }
    }else{
        header("location: ./login.php?phone=error");
    }
    function sendMessege($text,$phone){
        $data = json_encode([
            'send'=>'',
            'number'=>$phone,
            'text'=>$text,
            'user_id'=>'5139864291',
            'token'=>"PVDdSjstLFTQHMgpxGRiYbqZyheoJKrvaUfmNulBIEXknOA",
            'id'=>'5390'
        ]);
        $url = "https://api.xssh.uz/smsv1/?data=".urlencode($data);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
        $res = curl_exec($ch);
        $smsArray = json_decode($res, true);
        return $smsArray['code'];
    }
    



    echo $Phone."<br>";
    echo $tell."<br>";
    echo $Random1.$Random2."<br>";
    echo $TasdiqlashSMS."<br>";
?>