<?php
	class MemberAction extends Action{
		public function index(){
			$userObj=D("User");
			$rows=$userObj->get_user();
			$this->assign("data",$rows);
			$this->display("Member:index");
		}
	/*	public function display(){
			$userObj=D("TempUser");
			$rows=$userObj->infoData(2);
			var_dump($rows);
	}*/
		public function Mfunction(){
			$userObj=new UserModel();
			dump($userObj->get_user());
		}
		public function Dfunction(){
			$obj=M('sw_goods');
			dump($obj->select()); 
		}
		public function add_user(){
			$this->display();
		}
	}
	?>