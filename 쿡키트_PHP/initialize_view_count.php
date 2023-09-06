<?php
    include $_SERVER['DOCUMENT_ROOT']."/volley_connect.php";
    $sql = mysqli_query($conn, "UPDATE recipe_write SET click_count = 0;");
?>
<script type="text/javascript">alert("초기화 되었습니다.");</script>
<meta http-equiv="refresh" content="0 url=/manage_recipe_list.php" />