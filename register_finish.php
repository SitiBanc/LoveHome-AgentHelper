<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("mysql_connect.inc.php");

$name = $_POST['name'];
$password = $_POST['password'];
$password2 = $_POST['password2'];
$NR = $_POST['NR'];
$email = $_POST['email'];

//判斷帳號密碼是否為空值
//確認密碼輸入的正確性
$sql = "SELECT * FROM new_customer where NR = '$NR'";
$result = mysql_query($sql);
$row = @mysql_fetch_row($result);
if ( $row[1] == $NR)
{
	echo '此手機門號已註冊！';
	echo '<meta http-equiv=REFRESH CONTENT=2;url=index0.php>';	
}
	 
else if($name != null && $password != null && $password2 != null && $password == $password2)
{
        //新增資料進資料庫語法
        $sql = "insert into new_customer (name, password, NR, email) values ('$name', '$password', '$NR', '$email')";
        if(mysql_query($sql))
        {
                echo '新增成功!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=index0.php>';
        }
        else
        {
                echo '密碼錯誤!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=index0.php>';
        }
}
else
{
        echo '恭喜您！註冊成功！';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=index0.php>';
}
?>