<?php
    include_once("./config.php");
    $name = $_GET['name'];
    $Phone = str_replace(" ","",$_GET['phone']);
    $str1 = chunk_split($Phone,8,".");
    $str3 = str_replace("998 ","",$_GET['phone']);
    $tell = str_replace(" ","",$str3);
    $str2 = explode(".",$str1);
    $Phone1 = $str2[1];
    $Random1 = rand(10,49);
    $Random2 = rand(50,99);
    $Tasdiqlashkodi = $Random1.$Random2;
    $TasdiqlashSMS = "Tasdiqlash kodi: ".$Random1." ".$Random2."\n ATKO o'quv markazi. Ma'lumot uchun: (91) 950 1101";
    $sql1 = "SELECT * FROM `users` WHERE `Phone`='".$Phone."'";
    $time = time();
    $res1 = $conn->query($sql1);
    $count = $res1->fetchColumn();
    $mytext = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium id odio cumque. Exercitationem assumenda suscipit eveniet, pariatur laborum id natus soluta perspiciatis necessitatibus magnam iste sed blanditiis quibusdam aspernatur optio.";
    if($count>0){
        header("location: ./login_reg.php?registr=true");
    }else{
        echo "Telefon raqam oxirgi 4 raqam: ".$Phone1."<br>";
        echo "Telefon raqam: ".$tell."<br>";
        echo "Yuboriladigan matn: ".$TasdiqlashSMS."<br>";
        echo "Tasdiqlash kodi: ".$Tasdiqlashkodi;
        echo "<br>SMS yuborish uchun tayyor bolgan SMS yuborishi kerak<br>";
        echo $Phone;
        if(sendMessege($TasdiqlashSMS,$tell)===200){
            header("location: ./login_reg2.php?text=".$mytext."&tel=".$Phone1."&phone=".$Phone."&Random=".$Random2."&name=".$_GET['name']."&Random1=".$Random1."");
        }else{
            header("location: ./login_reg.php?phone=error");
        }
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

?>