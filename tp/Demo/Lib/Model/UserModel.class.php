<?php
	class UserModel extends Model{
		protected $_map=array(
			"user"=>"user_name",
			"email"=>"user_email"
			);
		public function getUser($username){
			$rows=$this->where("user_name='$username'")->select();
			echo $this->where("user_name='$username'")->setInc('id',3);
			return $rows;
	}
	}