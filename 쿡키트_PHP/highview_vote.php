<!DOCTYPE html>
<html>
<head>
    <title>CookKit 관리자페이지</title>
    <link rel="stylesheet" href="{% static 'style.css' %}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <style>
        body {padding: 72px 0 50px 0;}
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
              <a class="dropdown-item" href="mealkit_detail.php">밀키트 설명 작성</a>
              <a class="dropdown-item" href="mealkit_buy_list.php">밀키트 구매자 목록</a>
            </div>
      </li>
      <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-weight: bold;">
              투표
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="highview_vote.php" style="font-weight: bold;">투표 제작</a>
              <a class="dropdown-item" href="voting_status.php">투표 현황</a>
            </div>
      </li>
    </ul>
    <a class="navbar-text" style="font-weight: bold; right: 30px;" href='manager_logout.php'>
      로그아웃
    </a>
  </div>
</nav>
</nav>

    <?php
    $connect = mysqli_connect("localhost","admin0000","admin124!","admin0000");
    $query = "select * from recipe_write order by click_count desc LIMIT 3";
    $result = mysqli_query($connect, $query);
    $total = mysqli_num_rows($result);  //result set의 총 레코드(행) 수 반환
    ?>
    <table align=center style="border-top: 1px solid #444444;
            border-collapse: collapse;">
        <thead align="center">
            <tr style="font-weight: bold;">
                <td width="100" align="center">No</td>
                <td width="120" align="center">작성자</td>
                <td width="120" align="center">레시피아이디</td>
                <td width="120" align="center">레시피명</td>
                <td width="120" align="center">카테고리</td>
                <td width="120" align="center">조회수</td>
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
                    <td width="100" align="center" style="color: #7A7A7A;"><?php echo $total ?></td>
                    <td width="120" align="center"><?php echo $rows['member_id'] ?></td>
                    <td width="120" align="center"><?php echo $rows['recipe_id'] ?></td>
                    <td width="120" align="center"><?php echo $rows['recipe_title'] ?></td>
                    <td width="120" align="center"><?php echo $rows['recipe_category'] ?></td>
                    <td width="120" align="center"><?php echo $rows['click_count'] ?></td>
                    </tr>
                <?php
                $total--;
            }
                ?>
        </tbody>
    </table>
    <form method="post"> 
      <center>
        <input style="margin-top: 20px;" type="submit" value="데이터 전송" name="button1">
      </center>
    </form> 
    <?php
  
    if(isset($_POST['button1'])) { 
      mysqli_query($connect,"insert into meal_vote (member_id, recipe_id, recipe_title, recipe_category, click_count, image_main) select member_id, recipe_id, recipe_title, recipe_category, click_count, image_main from recipe_write order by click_count desc LIMIT 3");
      mysqli_close($connect);
      unset($button1);
    } 
  ?>
  <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
  </script>

    <center>
  <a href="delete_vote.php" class="btn btn-danger" onclick="return confirm('일괄 삭제하시겠습니까?')" style="margin: 50px 0 20px 0;">일괄 삭제</a>
  </center>

  <?php
    $connect1 = mysqli_connect("localhost","admin0000","admin124!","admin0000");
    $query1 = "select * from meal_vote";
    $result1 = mysqli_query($connect1, $query1);
    $total1 = mysqli_num_rows($result1);  //result set의 총 레코드(행) 수 반환
    ?>
  <table align=center style="border-top: 1px solid #444444;
            border-collapse: collapse;">
        <thead align="center">
            <tr style="font-weight: bold;">
                <td width="100" align="center">No</td>
                <td width="120" align="center">작성자</td>
                <td width="120" align="center">레시피아이디</td>
                <td width="120" align="center">레시피명</td>
                <td width="120" align="center">카테고리</td>
            </tr>
        </thead>

        <tbody>
            <?php
            while ($rows1 = mysqli_fetch_assoc($result1)) { //result set에서 레코드(행)를 1개씩 리턴
                if ($total1 % 2 == 0) {
            ?>
                    <tr class="even" style="color: #5E5E5E;">
                        <!--배경색 진하게-->
                    <?php } else {
                    ?>
                    <tr style="color: #5E5E5E;">
                        <!--배경색 그냥-->
                    <?php } ?>
                    <td width="100" align="center" style="color: #7A7A7A;"><?php echo $total1 ?></td>
                    <td width="120" align="center"><?php echo $rows1['member_id'] ?></td>
                    <td width="120" align="center"><?php echo $rows1['recipe_id'] ?></td>
                    <td width="120" align="center"><?php echo $rows1['recipe_title'] ?></td>
                    <td width="120" align="center"><?php echo $rows1['recipe_category'] ?></td>
                    </tr>
                <?php
                $total1--;
            }
                ?>
        </tbody>
    </table>
    
</body>

</html>