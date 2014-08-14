<?php
namespace Home\Controller;
use Think\Controller;
class KujyController extends Controller {
    public function kujy(){
   

     $User = M('cduserjiaoyuan'); // 实例化User对象
    $count = $User->count();// 查询满足要求的总记录数
    $Page = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数(25)
    $show = $Page->show();// 分页显示输出
    // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
    $list = $User->order('joindate desc')->limit($Page->firstRow.','.$Page->listRows)->select();
    $this->assign('list',$list);// 赋值数据集
    $this->assign('page',$show);// 赋值分页输出
    $this->display(); // 输出模板


    }

    public function search(){
            //获取post的数据，根据数据组装查询的条件，根据条件从数据库中获取数据，返回给页面中遍历
            if(isset($_POST['jjkm']) && $_POST['jjkm']!=null){
                $where['myfirstjob']=array('like',"%{$_POST['jjkm']}%");
            }
            if(isset($_POST['jysex']) && $_POST['jysex']!=null){
                $where['sex']=array('eq',$_POST['jysex']);
            }
             if(isset($_POST['jyschool']) && $_POST['jyschool']!=null){
                $where['school']=array('eq',$_POST['jyschool']);
            }
            if(isset($_POST['other']) && $_POST['other']!=null){
                $where['shenfen']=array('like',"%{$_POST['other']}%");
            }
             
            $m=M('cduserjiaoyuan');
            $arr=$m->where($where)->select();
            $this->assign('list',$arr);
            $this->display('kujy');
        }

        public function showjy(){   //获取到xyid号，利用id在数据库中查找到记录组，
            $m=M('cduserjiaoyuan');
            $userid=$_GET['userid'];
            $arr=$m->find($userid);
            $this->assign('data',$arr);
            $this->display(jiaoyuaninfo);
        }
	
}