<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	$m=M();
    	$arr=$m->query("select * from tp_cduserjiaoyuan limit 10");
    	$arr1=$m->query("select * from tp_regxy where finish='招聘中' limit 10");  
    	//array_merge($arr1, $arr2); 合并数组	
    	$this->assign('date',$arr);
    	$this->assign('date2',$arr1);
    	$this->display();

	}
	public function top(){
    	$m=M('cduserjiaoyuan');
        $jc=$m->count();
        echo $jc;
        $this->display('/Common/top');
	
	}
    public function xy(){
        $m=M('regxy');
        $xc=$m->count();
        echo $xc;
        $this->display('/Common/top');
    
    }

}