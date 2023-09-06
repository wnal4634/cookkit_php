<?php


	if ($_SERVER['REQUEST_METHOD'] == 'POST')
	{
	    $phone_num = $_POST['phone_num'];
	    $post_num = $_POST['post_num'];
	    $member_ad = $_POST['member_ad'];
		$member_id = $_POST['member_id'];

	    require_once 'volley_connect.php';

	    $sql = "UPDATE member_info SET phone_num = '$phone_num', post_num = '$post_num', member_ad = '$member_ad' WHERE member_id = '$member_id'";

	    if (mysqli_query($conn, $sql))
	    {
	        $result['success'] = true;

	        echo json_encode($result);
	        mysqli_close($conn);
	    }
	}


?>