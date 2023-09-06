<?php


	if ($_SERVER['REQUEST_METHOD'] == 'POST')
	{
	    $recipe_title = $_POST['recipe_title'];
	    $recipe_material = $_POST['recipe_material'];
	    $recipe_category = $_POST['recipe_category'];
	    $recipe_text1 = $_POST['recipe_text1'];
	    $recipe_text2 = $_POST['recipe_text2'];
	    $recipe_text3 = $_POST['recipe_text3'];
	    $recipe_text4 = $_POST['recipe_text4'];
	    $recipe_text5 = $_POST['recipe_text5'];
	    $recipe_text6 = $_POST['recipe_text6'];
	    $comment = $_POST['comment'];
	    $image_main = $_POST['image_main'];
		$member_id = $_POST['member_id'];
		$recipe_id = $_POST['recipe_id'];

	    require_once 'volley_connect.php';

	    $sql = "UPDATE recipe_write SET recipe_title = '$recipe_title', recipe_material = '$recipe_material', recipe_category = '$recipe_category', recipe_text1 = '$recipe_text1', recipe_text2 = '$recipe_text2', recipe_text3 = '$recipe_text3', recipe_text4 = '$recipe_text4', recipe_text5 = '$recipe_text5', recipe_text6 = '$recipe_text6', image_main = '$image_main', comment = '$comment' WHERE recipe_id = '$recipe_id'";

	    if (mysqli_query($conn, $sql))
	    {
	        $result['success'] = true;

	        echo json_encode($result);
	        mysqli_close($conn);
	    }
	}


?>