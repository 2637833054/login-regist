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
$sql = mysqli_query($conn,"select * from user where username = '{$uname}' && password = '{$pword}'");

	
	$arr = array();
	// 从结果集中取出所有行，并以数组的形式返回，一次返回一条
	while ($row = mysqli_fetch_assoc($sql)) {
		$arr[] = $row;
		
	}
	// 如果查询到数据，数组不为空，则输出：登陆成功
	if($arr) {
			echo "1";
		} else {
			echo "2";
		}

	
?>	 