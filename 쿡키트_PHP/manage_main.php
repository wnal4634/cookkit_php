<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head> 
  <title>CookKit 관리자페이지</title>
  <style type="text/css">
    * {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    }
    body {padding: 72px 0 50px 0;}
    .navbar-text {position: fixed; right: 30px;}
    .btn-hover {
      text-align: center;
      width: 200px;
      font-size: 16px;
      font-weight: 600;
      color: #fff;
      cursor: pointer;
      margin: 20px;
      height: 55px;
      text-align:center;
      border: none;
      background-size: 300% 100%;

      border-radius: 50px;
      moz-transition: all .4s ease-in-out;
      -o-transition: all .4s ease-in-out;
      -webkit-transition: all .4s ease-in-out;
      transition: all .4s ease-in-out;
      background-image: linear-gradient(to right, #ed6ea0, #ec8c69, #f7186a , #FBB03B);
      box-shadow: 0 4px 15px 0 rgba(236, 116, 149, 0.75);
    }
    .btn-hover:hover {
      background-position: 100% 0;
      moz-transition: all .4s ease-in-out;
      -o-transition: all .4s ease-in-out;
      -webkit-transition: all .4s ease-in-out;
      transition: all .4s ease-in-out;
    }
    .btn-hover:focus {
    outline: none;
    }

  </style>

    <link rel="stylesheet" href="{% static 'style.css' %}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

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
      <li class="nav-item active">
        <a class="nav-link" href="manage_main.php" style="font-weight: bold;">홈 <span class="sr-only">(current)</span></a>
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
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              투표
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="highview_vote.php">투표 제작</a>
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

<button class="btn-hover" onclick="window.open('https://colab.research.google.com/drive/1J7EqgxYWoEuZ9I5JBLfM-QWb1vxx4YgD?usp=sharing')">데이터 시각화 보러 가기</button>
</body>

</html>
