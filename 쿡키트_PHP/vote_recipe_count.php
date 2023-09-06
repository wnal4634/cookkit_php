<?php

	$con = mysqli_connect("localhost","admin0000","admin124!","admin0000");
    mysqli_query($con,'SET NAMES utf8');
 
    $recipe_id = $_GET['recipe_id'];

    $sql = mysqli_query($con, "SELECT COUNT(*) FROM meal_vote");

    $response = array();

    while($row = mysqli_fetch_assoc($sql))
    {
        array_push($response, array(
            'num' => $row['COUNT(*)']
        ));
    }

    echo json_encode($response);
?>