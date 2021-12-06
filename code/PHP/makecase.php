<?php

    //指定用來存放檔案的資料夾名稱及檔名
    $upload_dir =  "../plan_file/";
        $upload_file = $upload_dir . $to = iconv("UTF-8", "Big5", $_FILES["plan"]["name"]);
    
    //將上傳的檔案由暫存資料夾移至指定的資料夾
    move_uploaded_file($_FILES["plan"]["tmp_name"], $upload_file);

    require_once("dbtools.inc.php");
    $name=$_POST["username"];
    $email=$_POST["email"];
    $phone_number=$_POST["phone_number"];
    $case_title=$_POST["case_title"];
    $discritble_case=$_POST["discritble_case"];
    $people_need=$_POST["people_need"];
    $current_time = date("Y-m-d H:i:s");
    $case_code=rand(10000000,99999999);
    
    $link=create_connection();
    $sql = "INSERT INTO peole_data(name, email, phone_number,case_title, discritble_case,people_need,date,case_code)
        VALUES('$name', '$email','$phone_number', '$case_title', '$discritble_case', '$people_need','$current_time','$case_code')";
    $result=execute_sql($link,"makecase",$sql);
    header('Location:../HTML/sus.html');
    mysqli_close($link);

    exit();
php?>