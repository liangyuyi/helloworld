<html>
	<body>
<form name="form1" method="poster" action="index.php">
	<span class="STYLE1">�û�</span><input type="text" name="userneme"/>
	<span class="STYLE1">����</span><input type="password" name="userpass"/>
	<input name="action" type="hidden" id="action" value="login">
	<input name="submit" name="button" id="button" value="��½">
</form>

<?php
require 'model.php';
require 'dal.php';
require 'bll.php';
if(isset($_POST["action"]))//$_POST[" "]��ȡ�����ڵ�ֵ isset��������ڵ�ֵ�Ƿ����
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
echo "<script>alert('��֤ʧ��');</script>";
	
}
// 	echo $_POST["username"];
}
?>
</body>
</html>