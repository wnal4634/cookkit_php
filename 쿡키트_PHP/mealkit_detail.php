<?php
    $connect= mysqli_connect("localhost","admin0000","admin124!","admin0000");

    if(!$connect)die("연결에 실패 하였습니다.".mysqli_connect_error());

    mysqli_set_charset($connect,"utf8");
        
?>

<?header("content-type:text/html; charset=UTF-8");
 $meal_title=$_POST["meal_title"];
 $meal_text=$_POST["meal_text"];
 $meal_sale_period=$_POST["meal_sale_period"];
 $meal_price=$_POST["meal_price"];
 $meal_image=$_POST["meal_image"];
 $meal_image_sub=$_POST["meal_image_sub"];
 $Get_image_name = $_FILES['meal_image']['name'];
 $image_path="http://admin0000.dothome.co.kr/img/".basename($Get_image_name);
 $Get_image_name2 = $_FILES['meal_image_sub']['name'];
 $image_path2="http://admin0000.dothome.co.kr/img/".basename($Get_image_name2);

// http://admin0000.dothome.co.kr/img/

//쿼리전송
    mysqli_query($connect,"insert into meal_detail(meal_title, meal_text, meal_sale_period, meal_price, meal_image, meal_image_sub) 

                   values('$meal_title','$meal_text', '$meal_sale_period', '$meal_price', '$image_path', '$image_path2')");

?>

<html>
<head>
    <title>CookKit 관리자페이지</title>
    <link rel="stylesheet" href="{% static 'style.css' %}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <style type="text/css">
        body {padding: 72px 0 50px 0;}
        table {
            border-top: 1px solid #444444;
            border-collapse: collapse;
        }
        tr {
            border-bottom: 1px solid #444444;
            padding: 10px;
        }
        td {
            border-bottom: 1px solid #efefef;
            padding: 10px;
        }
        table .even {
            background: #efefef;
        }
        table.table2 {
            border-collapse: separate;
            border-spacing: 1px;
            text-align: left;
            line-height: 1.5;
            border-top: 1px solid #ccc;
            margin: 20px 10px 10px 10px;
        }

        table.table2 tr {
            width: 50px;
            padding: 10px;
            font-weight: bold;
            vertical-align: top;
            border-bottom: 1px solid #ccc;
        }

        table.table2 td {
            width: 170px;
            padding: 10px;
            vertical-align: top;
            border-bottom: 1px solid #ccc;
        }
        .navbar-text {position: fixed; right: 30px;}
    </style>
</head>
<body>
    <nav class="navbar fixed-top navbar-light bg-light">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" style="font-weight: bold;">Cookkit 관리자 페이지</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="manage_main.php">홈 <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="mem_list.php">유저목록</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="manage_recipe_list.php">레시피목록</a>
      </li>
      <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              공지사항
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="manage_notice_list.php">공지사항 목록</a>
              <a class="dropdown-item" href="notice_write.php">공지사항 작성</a>
            </div>
          </li>
      <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              밀키트
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="mealkit_detail.php" style="font-weight: bold;">밀키트 설명 작성</a>
              <a class="dropdown-item" href="mealkit_buy_list.php">밀키트 구매자 목록</a>
            </div>
      </li>
      <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              투표
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="highview_vote.php">투표 제작</a>
              <a class="dropdown-item" href="voting_status.php">투표 현황</a>
            </div>
      </li>
    </ul>
    <a class="navbar-text" style="font-weight: bold;" href='manager_logout.php'>
      로그아웃
    </a>
  </div>
</nav>
</nav>

<?php
    $connect = mysqli_connect("localhost","admin0000","admin124!","admin0000");
    $query = "select * from meal_detail";
    $result = mysqli_query($connect, $query);
    $total = mysqli_num_rows($result);  //result set의 총 레코드(행) 수 반환
    ?>
    <table align=center style="border-top: 1px solid #444444;
            border-collapse: collapse; margin-bottom: 30px;">
        <thead align="center">
            <tr style="font-weight: bold;">
                <td width="100" align="center">No</td>
                <td width="250" align="center">밀키트명</td>
                <td width="300" align="center">판매기간</td>
                <td width="120" align="center">가격</td>
                <td width="100" align="center">삭제</td>
            </tr>
        </thead>

        <tbody>
                    <?php
            while ($rows = mysqli_fetch_assoc($result)) { //result set에서 레코드(행)를 1개씩 리턴
                if ($total % 2 == 0) {
            ?>
                    <tr class="even" style="color: #5E5E5E;">
                        <!--배경색 진하게-->
                    <?php } else {
                    ?>
                    <tr style="color: #5E5E5E;">
                        <!--배경색 그냥-->
                    <?php } ?>
                    <tr style="color: #5E5E5E;">
                    <td width="100" align="center" style="color: #7A7A7A;"><?php echo $total ?></td>
                    <td width="250" align="center"><?php echo $rows['meal_title'] ?></td>
                    <td width="300" align="center"><?php echo $rows['meal_sale_period'] ?></td>
                    <td width="120" align="center"><?php echo $rows['meal_price'] ?></td>
                    <td width="100" align="center"><a href="batch_delete_detail.php?meal_title=<?php echo $rows['meal_title']; ?> " class="btn btn-danger" onclick="return confirm('삭제하시겠습니까?')">delete</a></td>
                    </tr>
                    </tr>
                <?php
                $total--;
            }
                ?>
        </tbody>
    </table>

<form method="post" action="./mealkit_detail.php" name='form1' enctype="multipart/form-data">
        <!-- method : POST!!! (GET X) -->
        <table style="padding-top:50px" align=center width=auto border=0 cellpadding=2>
            <tr>
                <td style="height:40; float:center; background-color:#3C3C3C">
                    <p style="font-size:25px; text-align:center; color:white; margin-top:15px; margin-bottom:15px"><b>밀키트 상세 설명 작성</b></p>
                </td>
            </tr>
            <tr>
                <td bgcolor=white>
                    <table class="table2">
                        <tr>
                            <td>밀키트명</td>
                            <td><input required type="text" name="meal_title" size=50></td>
                        </tr>

                        <tr>
                            <td>밀키트 상세 설명</td>
                            <td><textarea required name="meal_text" cols=75 rows=10></textarea></td>
                        </tr>
                        <tr>
                            <td>밀키트 판매 기간</td>
                            <td><input required placeholder=" ex) 0000. 00. 00 ~ 0000. 00. 00"type="text" name="meal_sale_period" size=50></td>
                        </tr>
                        <tr>
                            <td>밀키트 가격</td>
                            <td><input required placeholder=" 숫자만 작성. ex) 14000" type="text" name="meal_price" size=50></td>
                        </tr>
                    </table>

                    <center>
                        <input type="file" name="meal_image" /><input type="file" name="meal_image_sub" /><br><br>
                        <input type="submit" value="작성">
                    </center>
                </td>
            </tr>
        </table>
    </form>

    <center>
        <?php
    $tempFile = $_FILES['meal_image']['tmp_name'];
    $fileTypeExt = explode("/", $_FILES['meal_image']['type']);
    $fileType = $fileTypeExt[0];
    $fileExt = $fileTypeExt[1];
    $extStatus = false;
    switch($fileExt){
        case 'jpeg':
        case 'jpg':
        case 'gif':
        case 'bmp':
        case 'png':
            $extStatus = true;
            break;
        
        default:
            echo "이미지 전용 확장자(jpg, bmp, gif, png)외에는 사용이 불가합니다."; 
            exit;
            break;
    }
        if($extStatus){
            // 임시 파일 옮길 디렉토리 및 파일명
            $resFile = "./img/{$_FILES['meal_image']['name']}";
            // 임시 저장된 파일을 우리가 저장할 디렉토리 및 파일명으로 옮김
            $imageUpload = move_uploaded_file($tempFile, $resFile);
            
            // 업로드 성공 여부 확인
            if($imageUpload == true){
                ?> <script>
                alert("<?php echo "정상적으로 업로드 되었습니다." ?>");
                location.replace("<?php echo $URL ?>");
                if ( window.history.replaceState ) {
                    window.history.replaceState( null, null, window.location.href );
                }
            </script>
<?php
                echo "<img src='{$resFile}' width='100' />";
            }else{
                ?> <script>
                alert("<?php echo "파일 업로드를 실패했습니다." ?>");
                location.replace("<?php echo $URL ?>");
                if ( window.history.replaceState ) {
                    window.history.replaceState( null, null, window.location.href );
                }
            </script>
<?php
            }
        }   // end if - extStatus
            // 확장자가 jpg, bmp, gif, png가 아닌 경우 else문 실행
        else {
            echo "파일 확장자는 jpg, bmp, gif, png 이어야 합니다.";
            exit;
        }   

?>
    </center>
    <center>
        <?php
    $tempFile2 = $_FILES['meal_image_sub']['tmp_name'];
    $fileTypeExt2 = explode("/", $_FILES['meal_image_sub']['type']);
    $fileType2 = $fileTypeExt2[0];
    $fileExt2 = $fileTypeExt2[1];
    $extStatus2 = false;
    switch($fileExt2){
        case 'jpeg':
        case 'jpg':
        case 'gif':
        case 'bmp':
        case 'png':
            $extStatus2 = true;
            break;
        
        default:
            echo "이미지 전용 확장자(jpg, bmp, gif, png)외에는 사용이 불가합니다."; 
            exit;
            break;
    }
        if($extStatus2){
            // 임시 파일 옮길 디렉토리 및 파일명
            $resFile2 = "./img/{$_FILES['meal_image_sub']['name']}";
            // 임시 저장된 파일을 우리가 저장할 디렉토리 및 파일명으로 옮김
            $imageUpload2 = move_uploaded_file($tempFile2, $resFile2);
            
            // 업로드 성공 여부 확인
            if($imageUpload2 == true){
                ?> <script>
                alert("<?php echo "정상적으로 업로드 되었습니다." ?>");
                location.replace("<?php echo $URL ?>");
                if ( window.history.replaceState ) {
                    window.history.replaceState( null, null, window.location.href );
                }
            </script>
<?php
                echo "<img src='{$resFile2}' width='100' />";
            }else{
                ?> <script>
                alert("<?php echo "파일 업로드를 실패했습니다." ?>");
                location.replace("<?php echo $URL ?>");
                if ( window.history.replaceState ) {
                    window.history.replaceState( null, null, window.location.href );
                }
            </script>
<?php
            }
        }   // end if - extStatus
            // 확장자가 jpg, bmp, gif, png가 아닌 경우 else문 실행
        else {
            echo "파일 확장자는 jpg, bmp, gif, png 이어야 합니다.";
            exit;
        }   

?>
    </center>
</body>

</html>

