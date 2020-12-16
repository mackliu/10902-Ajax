<?php
include_once "../base.php";

$id=$_POST['id'];
$row=$Stu->find($id);
?>

<h5>編輯學生</h5>

    <div>姓名<input type="text" name='name' id="edit_name" value="<?=$row['name'];?>"></div>
    <div>班級<input type="text" name='classes' id="edit_classes" value="<?=$row['classes'];?>"></div>
    <div>座號<input type="text" name='num' id='edit_num' value="<?=$row['num'];?>"></div>
    <div>成績<input type="text" name='score' id='edit_score' value="<?=$row['score'];?>"></div>
    <input type="button" value="編輯" onclick="update(<?=$row['id'];?>)">
    <input type="button" value="取消" onclick="cl()">   
