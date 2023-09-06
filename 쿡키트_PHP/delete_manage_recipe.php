<?php
    include $_SERVER['DOCUMENT_ROOT']."/volley_connect.php";
    
    $recipe_id = $_GET['recipe_id'];
    $sql = mysqli_query($conn, "delete from recipe_write where recipe_id='$recipe_id';");
?>
<script type="text/javascript">alert("삭제되었습니다.");</script>
<meta http-equiv="refresh" content="0 url=/manage_recipe_list.php" />