<?php
require 'conn.php';
$id=isset($_GET['id']) ?$_GET['id']:exit();//沒id就跳出
$query = 'delete from students where id="'.$id.'";';//以條件抓特定學生資料
//print $query;
print mysqli_query($conn,$query);
//$result = mysqli_fetch_row(mysqli_query($conn,$query));
header('location:index.php');
