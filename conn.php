<?php
 $conn=mysqli_connect('127.0.0.1','test001','password');

 if($conn){
    echo'<h1>連線成功</h1>';
 }else{
    echo '<h1>連線失敗</h1>';
    exit();
 }
$flag= mysqli_select_db($conn,'test001');//database name
if($flag){
    echo'<h1>資料庫可用</h1>';
}else{
    echo'<h1>資料庫不可用</h1>';
    exit();
}
mysqli_query($conn,'set names utf8');//確定連線採用 utf-8
?>