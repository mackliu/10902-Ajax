<?php
//處理查詢資料的請求
include_once "../base.php";

$rows=$Stu->all();

foreach($rows as $row){
  echo  "<tr>";
  echo  "  <td>{$row['id']}</td>";
  echo  "  <td>{$row['name']}</td>";
  echo  "  <td>{$row['classes']}</td>";
  echo  "  <td>{$row['num']}</td>";
  echo  "  <td>{$row['score']}</td>";
  echo  "  <td>";
  echo "<button type='button' data-id='{$row['id']}' onclick='del({$row['id']})'>刪除</button>";
  echo "<button type='button' data-id='{$row['id']}' onclick='op({$row['id']})'>編輯</button>";
  echo "</td>";
  echo  "</tr> ";
}


?>