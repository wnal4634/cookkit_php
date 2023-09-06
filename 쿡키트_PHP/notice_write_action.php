<?php
$connect = mysqli_connect("localhost","admin0000","admin124!","admin0000");

$notice_title = $_POST['notice_title'];
$notice_content = $_POST['notice_content'];

$URL = './notice_write.php';                   //return URL


$query = "INSERT INTO notice_info (notice_title, notice_content) 
        values('$notice_title', '$notice_content')";


$result = $connect->query($query);
if ($result) {
?> <script>
        alert("<?php echo "게시글이 등록되었습니다." ?>");
        location.replace("<?php echo $URL ?>");
    </script>
<?php
} else {
?> <script>
        alert("<?php echo "게시글 등록에 실패하였습니다." ?>");
        location.replace("<?php echo $URL ?>");
    </script>
<?php
}
mysqli_close($connect);
?>