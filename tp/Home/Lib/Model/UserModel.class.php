<?php
	class UserModel extends Model{
	function get_user(){
		$userObj=M("User");
		$rows=$userObj->select();
		return $rows;
	}
	}
?>