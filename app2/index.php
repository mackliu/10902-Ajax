<?php include_once "base.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>學生資料管理系統</title>
    <link rel="shortcut icon" href="#" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <style>

  table td{
    padding:5px 10px;
    border:0.5px solid #ccc;
  }

    </style>
    <!---匯入要使用的函式庫--->


</head>
<body>
  <h1 class="header">學生資料管理系統</h1>
  <h5>新增學生</h5>
  <form action="api/insert.php" method='POST'>
    <div>姓名<input type="text" name='name'></div>
    <div>班級<input type="text" name='classes'></div>
    <div>座號<input type="text" name='num'></div>
    <div>成績<input type="text" name='score'></div>
    <input type="submit" value="新增">   
  </form>
  
<table>
  <tr>
    <td>id</td>
    <td>name</td>
    <td>classes</td>
    <td>num</td>
    <td>score</td>
  </tr>
  <?php
  $rows=$Stu->all();

  foreach($rows as $row){
  ?>
  <tr>
    <td><?=$row['id'];?></td>
    <td><?=$row['name'];?></td>
    <td><?=$row['classes'];?></td>
    <td><?=$row['num'];?></td>
    <td><?=$row['score'];?></td>
  </tr>
  <?php
}
  ?>
</table>

</body>
</html>
<script>
/************************************
* 1.考慮觸發行為的事件
* 2.建立監聽行為
* 3.考慮是否需要代入參數
* 4.是否會有回傳值？回傳值的功用及處理？
* 5.是否需要更新畫面內容？更新畫面的方法？
************************************/


//新增資料的函式
function create(){

}

//查詢資料的函式
function query(){

}

//編輯資料的函式
function update(){

}

//刪除資料的函式
function del(){

}

</script>