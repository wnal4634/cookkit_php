<?php 
    $con = mysqli_connect("localhost","admin0000","admin124!","admin0000");

    $member_id = $_POST["member_id"];
    $member_pw = $_POST["member_pw"];

    $statement = mysqli_prepare($con, "SELECT member_id FROM member_info WHERE member_id = ?");

    mysqli_stmt_bind_param($statement, "s", $member_id);
    mysqli_stmt_execute($statement);
    mysqli_stmt_store_result($statement);
    mysqli_stmt_bind_result($statement, $userID);

    $response = array();
    $response["success"] = true;

    while(mysqli_stmt_fetch($statement)){
      $response["success"] = false;
      $response["member_id"] = $member_id;
    }

    echo json_encode($response);
?>