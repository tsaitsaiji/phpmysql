<?php
require 'conn.php';
$id=isset($_GET['id']) ?$_GET['id']:exit();//沒id就跳出
$query = 'select * from students where id="'.$id.'";';//以條件抓特定學生資料
$result = mysqli_fetch_row(mysqli_query($conn,$query))
?>
<form method="post" action="update.php">
<input type="hidden" name="id" value="<?= $result[0]?>"> 
<input type="text" name="name" value="<?= $result[1]?>" placeholder="輸入名字">
    <input type="date" name="birth" value="<?= $result[2]?>" >
    <select name="gender" id="">
        <option <?= $result[3]==='0'?'selected' : ''?> value="0">男</option>
        <option <?= $result[3]==='1'?'selected' : ''?> value="1">女</option>
</select>
<button type="submit">修改</button>
</form>