<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
		$this->show();
	}
	public function add(){
		$userObj=D('User');
		$userObj->create();
		$userObj->id = NULL;
		if($userObj->add())
			echo "添加成功";
		else 
			echo "添加失败";
	}
	public function get(){
		$acticleObj=D("Article");
		$rows=$acticleObj->field('title,id')->relation(true)->select();
		dump($rows);
}
    public function getBelong(){
        $commentObj=D("Comment");
        $rows=$commentObj->relation(true)->select();
        dump($rows);
    }
}