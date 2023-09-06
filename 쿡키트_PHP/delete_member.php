<?php
    include $_SERVER['DOCUMENT_ROOT']."/volley_connect.php";
    
    $member_id = $_GET['member_id'];
    $sql = mysqli_query($conn, "delete from member_info where member_id='$member_id';");
?>
<script type="text/javascript">alert("삭제되었습니다.");</script>
<meta http-equiv="refresh" content="0 url=/mem_list.php" />