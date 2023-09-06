<?php
    include $_SERVER['DOCUMENT_ROOT']."/volley_connect.php";
    
    $notice_id = $_GET['notice_id'];
    $sql = mysqli_query($conn, "delete from notice_info where notice_id='$notice_id';");
?>
<script type="text/javascript">alert("삭제되었습니다.");</script>
<meta http-equiv="refresh" content="0 url=/manage_notice_list.php" />