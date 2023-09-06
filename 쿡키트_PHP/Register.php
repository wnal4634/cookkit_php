<?php 
    $con = mysqli_connect("localhost","admin0000","admin124!","admin0000");
    mysqli_query($con,'SET NAMES utf8');
 
    $member_id = $_POST["member_id"];
    $member_pw = $_POST["member_pw"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone_num = $_POST["phone_num"];
    $post_num = $_POST["post_num"];
    $member_ad = $_POST["member_ad"];
 
    $statement = mysqli_prepare($con, "INSERT INTO member_info VALUES (?,?,?,?,?,?,?)");
    mysqli_stmt_bind_param($statement, "sssssss", $member_id, $member_pw, $name, $email, $phone_num, $post_num, $member_ad);
    mysqli_stmt_execute($statement);
 
 
    $response = array();
    $response["success"] = true;
 
   
    echo json_encode($response);
?>