<?php

	$con = mysqli_connect("localhost","admin0000","admin124!","admin0000");
    mysqli_query($con,'SET NAMES utf8');
 
    $sql= "select meal_id, meal_title, meal_text, meal_sale_period, meal_price, remain_num, meal_image_sub from meal_detail";
    
    $result=mysqli_query($con, $sql);
 
    $rowCnt= mysqli_num_rows($result);
 
    $arr= array(); //빈 배열 생성
 
    for($i=0;$i<$rowCnt;$i++){
        $row= mysqli_fetch_array($result, MYSQLI_ASSOC);
        //각 각의 row를 $arr에 추가
        $arr[$i]= $row;
        
    }
 
    //배열을 json으로 변환하는 함수가 있음.
        $jsonData=json_encode($arr); //json배열로 만들어짐.
        echo "$jsonData";
 
    mysqli_close($con);
?>