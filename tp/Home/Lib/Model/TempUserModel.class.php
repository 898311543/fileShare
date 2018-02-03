<?php
	class TempUserModel extends Model{
		protected function userData(){
			return array(
				"1"=>array(
					"姓名"=>"张三",
					"性别"=>"男",
					"邮箱"=>"kf@123456.com",
					"爱好"=>"读书",
					),
				"2"=>array(
					"姓名"=>"李明",
					"性别"=>"男",
					"邮箱"=>"mail@mail.com",
					"爱好"=>"上网"
					),
				);
		}
		 public function infoData($userId=null){
			 if(empty($userId)){
				 return $this->userData();
			 }
			 else{
				 $array=$this->userData();
				 return $array[$userId];
			 }
			 
		 }
		}
	?>