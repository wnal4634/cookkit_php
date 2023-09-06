<?php
    $con = mysqli_connect("localhost","admin0000","admin124!","admin0000");
    mysqli_query($con,'SET NAMES utf8');
 
    $member_id = $_POST["member_id"];
    $member_pw = $_POST["member_pw"];
    
    $statement = mysqli_prepare($con, "SELECT * FROM member_info WHERE member_id = ? AND member_pw = ?");
    mysqli_stmt_bind_param($statement, "ss", $member_id, $member_pw);
    mysqli_stmt_execute($statement);
 
 
    mysqli_stmt_store_result($statement);
    mysqli_stmt_bind_result($statement, $member_id, $member_pw, $name, $email, $phone_num, $post_num, $member_ad);
 
    $response = array();
    $response["success"] = false;
 
    while(mysqli_stmt_fetch($statement)) {
        $response["success"] = true;
        $response["member_id"] = $member_id;
        $response["member_pw"] = $member_pw;
        $response["name"] = $name; 
        $response["email"] = $email;  
        $response["phone_num"] = $phone_num;  
        $response["post_num"] = $post_num;  
        $response["member_ad"] = $member_ad;     
    }
 
    echo json_encode($response);
?>