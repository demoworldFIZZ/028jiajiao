<?php
namespace Home\Controller;
use Think\Controller;
class RegxyController extends Controller {
    public function Regxy(){
    	
    	$this->display();

	}
	public function Create(){
			$m=M('regxy');
			$m->jzname=$_POST['JZName'];
			$m->jzsex=$_POST['JZsex'];
			$m->jztel=$_POST['JZTel'];
			$m->jzmob=$_POST['JZmob'];
			$m->XYname=$_POST['xyname'];
			$m->jzsex=$_POST['JZsex'];
			$m->xysex=$_POST['XYsex'];
			$m->xygrade=$_POST['xygrade'];
			$m->xyschool=$_POST['xyschool'];
			$m->fdkemu=$_POST['FDKemu'];
			$m->skhours=$_POST['SKhours'];
			$m->jzbeizhu=$_POST['JZbeizhu'];
			$m->jysex=$_POST['JYsex'];
			$m->jyage=$_POST['JYage'];
			$m->jyshenfen=$_POST['JYshenfen'];
			$m->fdfangshi=$_POST['FDfangshi'];
			$m->xinchou=$_POST['XinChou'];
			$m->jzbeizhu=$_POST['JZbeizhu'];
			$idNum=$m->add();
			if($idNum>0){
				$this->success('数据添加成功','regxy');
			}else{
				$this->error('数据添加失败');
			}
		}
}