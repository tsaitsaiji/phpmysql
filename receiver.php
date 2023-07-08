<?php
require 'conn.php';
$query='insert into students set name="'.$_POST['name'].'",birth="'.$_POST['birth'].'",gender="'.$_POST['gender'].'";';
if(mysqli_query($conn,$query)){//新增的一筆資料
    print 'success';
    header('location:index.php');
    }

?>