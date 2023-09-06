<?php 
    $con = mysqli_connect("localhost","admin0000","admin124!","admin0000");
    mysqli_query($con,'SET NAMES utf8');
 
    (int)$click_count = $_POST["click_count"];
    $recipe_id = $_POST['recipe_id'];

    $sql = "UPDATE recipe_write SET click_count = click_count + 1 WHERE recipe_id = '$recipe_id'";

        if (mysqli_query($con, $sql))
        {
            $result['success'] = true;

            echo json_encode($result);
            mysqli_close($con);
        }
?>