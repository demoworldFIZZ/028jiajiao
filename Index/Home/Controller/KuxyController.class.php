<?php
namespace Home\Controller;
use Think\Controller;
class KuxyController extends Controller {
    public function kuxy(){
    	
	
    	  $User = M('regxy'); // 实例化User对象
   		 $count = $User->count();// 查询满足要求的总记录数
   		 $Page = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数(25)
   		 $show = $Page->show();// 分页显示输出
   		 // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
   		 $list = $User->order('finish desc')->limit($Page->firstRow.','.$Page->listRows)->select();
    	$this->assign('list',$list);// 赋值数据集
   		 $this->assign('page',$show);// 赋值分页输出
   		 $this->display(); // 输出模板

	}
		public function showxy(){   //获取到xyid号，利用id在数据库中查找到记录组，
			$m=M('regxy');
			$xyid=$_GET['xyid'];
			$arr=$m->find($xyid);
			$this->assign('data2',$arr);
			$this->display(xueyuaninfo);
		}
    	

		

}