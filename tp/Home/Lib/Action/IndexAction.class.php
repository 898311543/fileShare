<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
		$this->assign("title","欢迎进入首页");
		$this->display();
    }
	public function time(){
		$rows=array(
			0=>array(
				"user_id"=>1,
				"user_name"=>"xiaoming",
				"user_email"=>"kf@1245.com",
				),
			1=>array(
				"user_id"=>2,
				"user_name"=>"lishi",
				"user_email"=>"ceiba@qq.com",
				),
			2=>array(
				"user_id"=>3,
				"user_name"=>"xiaohong",
				"user_email"=>"12345@qq.com",
				),
			3=>array(
				"user_id"=>4,
				"user_name"=>"wangwu",
				"user_email"=>"12345@126.com",
				),	
				);
		$this->assign("list",$rows);
		$this->display();
		
				
	}
	public function fileDetails(){
			$array=array();
			$i=-1;
			if($handle=opendir(FILE_PATH)) {
			/* 这是正确地遍历目录方法 */
			while (false !== (($file = readdir($handle)))) {
				if($file != "." && $file != ".."){
					$array[++$i]=array();
					$filename=iconv('gb2312','utf-8',$file);
					$filemtime=filemtime(FILE_PATH.$file);
					$filesize=sprintf("%.2f",filesize(FILE_PATH.$file)/1024/1024);
					$array[$i]["filename"]=$filename;
					$array[$i]["filesize"]=$filesize;
					$array[$i]["filetime"]=$filemtime;
					$array[$i]["href"]=TRUE_FILE.FILE_PATH.$filename;
				}
				}
			closedir($handle);
			$this->assign("file",$array);
			$this->display();
}
}
	public function delFile(){
			$array = $this->_get();
			$name = $array['_URL_'][2];
			//windows文件名用gb2312存储
			$name=urldecode($name);
			$name=iconv('utf-8','gb2312',$name);
			header("Content-type: text/html; charset=utf-8");
			if(!unlink(FILE_PATH.$name)){
				echo("<script type='text/javascript'>alert('删除失败');window.close();</script>");
			}
			else{
				echo("<script type='text/javascript'>alert('删除成功');window.close();</script>");
			}
	}
	public function upload(){
		import('ORG.Net.UploadFile');
		$upload = new UploadFile;
		$upload->maxSize = 31459280;
		$upload->allowExts = array('rar','zip','c','xml','doc','xls','exe','jpeg','jpg','gif','pdf');
		$upload->savePath=FILE_PATH;
		$upload->saveRule='';
		$info=$upload->upload();
		header("Content-type: text/html; charset=utf-8");
		if(!$info){
			echo $upload->getErrorMsg();
		}
		else{
			echo "上传成功";
		}
	}
	public function play(){
	    $this->display();
    }
}
?>