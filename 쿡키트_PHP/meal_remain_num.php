<?php 
    $con = mysqli_connect("localhost","admin0000","admin124!","admin0000");
    mysqli_query($con,'SET NAMES utf8');
 
    $remain_num = $_POST["remain_num"];
    // $count = $_POST["count"];

    $sql = "UPDATE meal_detail SET remain_num = '$remain_num'";

        if (mysqli_query($con, $sql))
        {
            $result['success'] = true;

            echo json_encode($result);
            mysqli_close($con);
        }
?>