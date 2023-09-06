<?php
    include $_SERVER['DOCUMENT_ROOT']."/volley_connect.php";
    
    $recipe_id = $_GET['recipe_id'];
    $sql = mysqli_query($conn, "truncate table meal_vote;");
?>
<script type="text/javascript">alert("삭제되었습니다.");</script>
<meta http-equiv="refresh" content="0 url=/highview_vote.php" />