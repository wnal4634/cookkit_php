<?php 
    $con = mysqli_connect("localhost","admin0000","admin124!","admin0000");
    mysqli_query($con,'SET NAMES utf8');
 
    $member_id = $_POST["member_id"];
    $recipe_id = $_POST['recipe_id'];
    $recipe_title = $_POST['recipe_title'];

    $sql = "insert into vote_count ( member_id, recipe_id, recipe_title ) 
    values ( '$member_id','$recipe_id','$recipe_title')";

        if (mysqli_query($con, $sql))
        {
            $result['success'] = true;

            echo json_encode($result);
            mysqli_close($con);
        }
?>