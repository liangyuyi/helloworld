<html>
	<body>
<form name="form1" method="poster" action="index.php">
	<span class="STYLE1">用户</span><input type="text" name="userneme"/>
	<span class="STYLE1">密码</span><input type="password" name="userpass"/>
	<input name="action" type="hidden" id="action" value="login">
	<input name="submit" name="button" id="button" value="登陆">
</form>

<?php
require 'model.php';
require 'dal.php';
require 'bll.php';
if(isset($_POST["action"]))//$_POST[" "]获取括号内的值 isset检查括号内的值是否存在
{
	$admin=new M_Admin();
	$admin->Name=$_POST["username"];
	$admin->Pass=$_POST["userpass"];
	if(B_Admin::login($admin))
{
	$_SESSION["admin"]=$admin;
	header("Location: main.html");
// 	header("Location: tab/tab.php");
}
else{
echo "<script>alert('验证失败');</script>";
	
}
// 	echo $_POST["username"];
}
?>
</body>
</html>