<?php
require 'conn.php';
$resource=mysqli_query($conn,'select * from students');
$result=[];
while($row=mysqli_fetch_row($resource)){
    //讀取每一列資料
    $result[]=$row;
}
print '<a href ="new.php">新增</a>';
//print_r($result);//顯示結果
//結合以table呈現
print '<table border=1>';
foreach($result as $key =>$value){
    print '<tr>';
    print '<td><a href="edit.php?id='.$value[0].'">修改</a></td>';//name欄位
    print '<td><a href="delete.php?id='.$value[0].'">刪除</a></td>';//name欄位
    print '<td>'.$value[1].'</td>';//name欄位
    print '<td>'.$value[2].'</td>';//birth欄位
    print '<td>'.($value[3] === '0'?'男':'女').'</td>';//gender欄位
    print '</tr>';
}
?>