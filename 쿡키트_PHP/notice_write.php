<html>
<head>
    <title>CookKit 관리자페이지</title>
    <link rel="stylesheet" href="{% static 'style.css' %}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <style>
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
            width: 100px;
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
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-weight: bold;">
              공지사항
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="manage_notice_list.php">공지사항 목록</a>
              <a class="dropdown-item" href="notice_write.php" style="font-weight: bold;">공지사항 작성</a>
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

<form method="post" action="notice_write_action.php">
        <!-- method : POST!!! (GET X) -->
        <table style="padding-top:50px" align=center width=auto border=0 cellpadding=2>
            <tr>
                <td style="height:40; float:center; background-color:#3C3C3C">
                    <p style="font-size:25px; text-align:center; color:white; margin-top:15px; margin-bottom:15px"><b>공지사항 작성</b></p>
                </td>
            </tr>
            <tr>
                <td bgcolor=white>
                    <table class="table2">
                        <tr>
                            <td>제목</td>
                            <td><input type="text" name="notice_title" size=50></td>
                        </tr>

                        <tr>
                            <td>내용</td>
                            <td><textarea name="notice_content" cols=75 rows=10></textarea></td>
                        </tr>
                    </table>

                    <center>
                        <input type="submit" value="작성">
                    </center>
                </td>
            </tr>
        </table>
    </form>

</body>

</html>