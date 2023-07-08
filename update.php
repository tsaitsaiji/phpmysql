<?php
require 'conn.php';
$query = 'update students set '.
'name="'.$_POST['name'].'",'.
'birth="'.$_POST['birth'].'",'.
'gender="'.$_POST['gender'].'" '.
'where id="'.$_POST['id'].'";';
//print $query;
print mysqli_query($conn,$query);
header('location: index.php');
//print mysqli_errno($conn);
//沒包也不會出錯
//
?>

