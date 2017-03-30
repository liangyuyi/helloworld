<?php
class D_Member
{
	static function view($member)
	{
		$u=$member;
		 $str="编号：".$u->Id."<br/>".
				"姓名：".$u->Name."<br/>".
				"昵称：".$u->Nickname."<br/>".
				"角色：".$u->Role."<br/>".
				"积分：".$u->Score."<br/>";
		return $str;
	}
}
class D_Admin
{
	static function view()
	{
		$u=D_Admin::getList()[0];
		$str="编号：".$u["Id"]."<br/>".
				"姓名：".$u["Name"]."<br/>".
				"昵称：".$u["Nickname"]."<br/>".
				"密码：".$u["Pass"]."<br/>".
				"角色：".$u["Role"]."<br/>".
				"积分：".$u["Score"]."<br/>".
				"QQ：".$u["QQ"]."<br/>";
		return $str;
	}
	static function getList()
	{
		$arr = array(
				array("Id" =>1,"Name" =>"Admin", "Nickname" =>"admin","Pass"=>"123456", "Role" =>"超级管理员","Score"=>100,"QQ"=>"26805376"),
				array("Id" =>2,"Name" =>"somboy", "Nickname" =>"均焘","Pass"=>"som114", "Role" =>"副管理员","Score"=>100,"QQ"=>"77552596"),
				array("Id" =>3,"Name" =>"itzcn", "Nickname" =>"窗内网","Pass"=>"zz@@#", "Role" =>"栏目管理员","Score"=>100,"QQ"=>"873033910"),
				array("Id" =>4,"Name" =>"ayhncn", "Nickname" =>"网安","Pass"=>"cnIje", "Role" =>"新闻管理员","Score"=>100,"QQ"=>"13504141")
				);
		return $arr;
	}
}
?>