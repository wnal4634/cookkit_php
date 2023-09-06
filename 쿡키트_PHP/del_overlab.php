<?php

	$con = mysqli_connect("localhost","admin0000","admin124!","admin0000");
    mysqli_query($con,'SET NAMES utf8');
 
    $sql= "DELETE n1 FROM recipe_write n1, recipe_write n2 WHERE n1.recipe_id < n2.recipe_id AND n1.image_main = n2.image_main";
 
    if (mysqli_query($con, $sql))
        {
            $result['success'] = true;

            echo json_encode($result);
            mysqli_close($conn);
        }
?>