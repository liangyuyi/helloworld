<?php
abstract class User
{
	var $Id;
	var $Name;
	var $Pass;
	var $Role;
}
class M_Member extends User
{
	var $Nickname;
	var $Score;
}
class M_Admin extends M_Member
{
	var $QQ;
}
?>