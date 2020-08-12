<?php
	header("Content-Type:text/plain;charset=utf-8");
	//定义变量接受传输过来的账号、密码
	$uname = $_POST['username'];
	$pword = $_POST['password'];
	
	//准备链接信息
	$myhost = 'localhost';
	$myusername = 'phpmyadmin';
	$mypassword = '';
	$mydatabase = 'test';
	//创建连接
	$conn = mysqli_connect($myhost,$myusername,$mypassword,$mydatabase);
	//设置字符集，防止出现乱码
	mysqli_set_charset($conn,'utf8');
	//执行并发送SQL语句，返回一个结果集对象
$sql = mysqli_query($conn,"insert into user value(1,'{$uname}','{$pword}')");
	$row = mysqli_query($conn,$sql);
	
	if($row) {
			echo "2";
		} else {
			echo "1";
		}
?>	 
