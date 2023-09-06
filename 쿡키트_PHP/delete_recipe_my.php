<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{

    $recipe_id = $_POST['recipe_id'];

    require_once 'volley_connect.php';

    $sql = "DELETE FROM recipe_write WHERE recipe_id = '$recipe_id'";

    if (mysqli_query($conn, $sql))
    {
        $result['success'] = true;

        echo json_encode($result);
        mysqli_close($conn);
    }
}
?>