<?php
    include $_SERVER['DOCUMENT_ROOT']."/volley_connect.php";
    
    $meal_title = $_GET['meal_title'];
    $sql = mysqli_query($conn, "truncate table meal_detail;");
?>
<script type="text/javascript">alert("삭제되었습니다.");</script>
<meta http-equiv="refresh" content="0 url=/mealkit_detail.php" />