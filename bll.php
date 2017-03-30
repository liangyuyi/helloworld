<?php
class B_Member
{
	static function login($member)
	{
		if(($member->Name=="zhht")&&($member->Pass=="123456"))			return true;
		else 	return false;
	}
	static function view(){return D_Member::view();}
}
class B_Admin
{
	static function login($admin)
	{
		if(($admin->Name=="admin")&&($admin->Pass=="admin"))			return true;
		else 	return false;
	}
	static function view(){return D_Admin::view();}
	static function getList(){return D_Admin::getList();}
}
?>