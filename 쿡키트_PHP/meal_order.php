<?php 
    $con = mysqli_connect("localhost","admin0000","admin124!","admin0000");
    mysqli_query($con,'SET NAMES utf8');
 
    $meal_id = $_POST["meal_id"];
    $member_id = $_POST["member_id"];
    $meal_title = $_POST["meal_title"];
    $meal_set_count = $_POST["meal_set_count"];
    $meal_price = $_POST["meal_price"];
    $phone_num = $_POST["phone_num"];
    $post_num = $_POST["post_num"];
    $member_ad = $_POST["member_ad"];
    $meal_image = $_POST["meal_image"];


    $sql = "insert into meal_order ( meal_id, member_id, meal_title, meal_set_count, meal_price, phone_num, post_num, member_ad, meal_image) 
    values ( '$meal_id','$member_id', '$meal_title', '$meal_set_count', '$meal_price', '$phone_num', '$post_num', '$member_ad', '$meal_image')";

        if (mysqli_query($con, $sql))
        {
            $result['success'] = true;

            echo json_encode($result);
            mysqli_close($con);
        }
?>