<?php 
    $con = mysqli_connect("localhost","admin0000","admin124!","admin0000");
    mysqli_query($con,'SET NAMES utf8');
 
    $member_id = $_POST["member_id"];
    $recipe_title = $_POST["recipe_title"];
    $recipe_material = $_POST["recipe_material"];
    $recipe_category = $_POST["recipe_category"];
    $recipe_text1 = $_POST["recipe_text1"];
    $recipe_text2 = $_POST["recipe_text2"];
    $recipe_text3 = $_POST["recipe_text3"];
    $recipe_text4 = $_POST["recipe_text4"];
    $recipe_text5 = $_POST["recipe_text5"];
    $recipe_text6 = $_POST["recipe_text6"];
    $comment = $_POST["comment"];
    $image_main = $_POST["image_main"];
    
    $sql = "insert into recipe_write ( member_id, recipe_title, recipe_material, recipe_category, recipe_text1, recipe_text2, recipe_text3, recipe_text4, recipe_text5, recipe_text6, image_main, comment) 
    values ( '$member_id','$recipe_title', '$recipe_material', '$recipe_category', '$recipe_text1', '$recipe_text2', '$recipe_text3', '$recipe_text4', '$recipe_text5', '$recipe_text6', '$image_main', '$comment')";

        if (mysqli_query($con, $sql))
        {
            $result['success'] = true;

            echo json_encode($result);
            mysqli_close($con);
        }
?>