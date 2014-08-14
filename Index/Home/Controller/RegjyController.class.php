<?php
namespace Home\Controller;
use Think\Controller;
class RegjyController extends Controller {
    public function Regjy(){
    	
    	$this->display();

	}
	Public function zhuce_jy(){
		$this->display();
	}

	public function Create(){
			$m=M('cduserjiaoyuan');
			$m->shenfen=$_POST['Jproperty'];  //类似表中
			$m->realname=$_POST['jRealName'];
			$m->sex=$_POST['jsex'];
			$m->birth=$_POST['shengri'];
			$m->minzu=$_POST['jminzu'];
			$m->jiguan=$_POST['jjiguan'];
			$m->jsProfessional=$_POST['jsProfessional'];
			$m->techang=$_POST['jtechang'];
			$m->school=$_POST['jytSchool'];
			$m->zhicheng=$_POST['jzhicheng'];
			$m->jingyan=$_POST['jjingyan'];
			$m->language=$_POST['jlanguage'];
			$m->lanlevel=$_POST['jlanlevel'];
			$m->pthua=$_POST['jpthua'];
			$m->myfirstjob=$_POST['jMyFirstJob'];
			$m->gzdd=$_POST['jgzdd'];
			$m->info_from=$_POST['jinfo_from'];
			$m->fudaofangshi=$_POST['jfudaofangshi'];
			$m->shoufei=$_POST['jshoufei'];
			$m->tel=$_POST['jtel'];
			$m->UserEmail=$_POST['jUserEmail'];
			$m->qq=$_POST['jqq'];
			$m->address=$_POST['jaddress'];
			$m->upimg=$_POST['jupimg'];
			$m->jingli=$_POST['jjingli'];
			$idNum=$m->add();
			if($idNum>0){
				$this->success('数据添加成功','');
			}else{
				$this->error('数据添加失败');
			}
		}


}