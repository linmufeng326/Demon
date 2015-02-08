<?php
namespace Admin\Controller;
use Think\Controller;
 class CateController extends AdminController{
 	
	//栏目列表
	public function index()
	{
		//import('Class.Category',APP_PATH);
		$cate=M('cate')->order('sort asc')->select();
		//$cate=Category::Leveler($cate);
		//p($cate);die;
		$m = D('Cate');
	$cate = $m->reSort();
		$this->assign('cate',$cate)->display();
	}
	//添加栏目
	public function addCate(){
		$pid=I('pid',0,'intval');		
		if($pid)
		{
		$this->$pid=I('pid',0,'intval');
		//import('Class.Category',APP_PATH);
		$cates=M('cate')->where('id='.$pid)->select();
		//$cat=Category::Leveler($cates,$pid);
		//p($cat);die;
		$this->assign('cates',$cates)->display();
		}
		else{
		$m = D('Cate');
		$categ = $m->reSort();
		//$this->assign('category', $categ);
		//p($categ);die;
		$this->assign('cates',$categ)->display();}
		
	}
	public function delcate(){
		$id=I('id',0,'intval');	
        $where = 'id='.$id;
		if(M('cate')->where('id='.$id)->delete())
		{
			$this->success('删除成功',U('Cate/index'));
		}
		else
			{
				$this->error('删除失败');
			
			}
	}
	//表单处理
	public function runCate(){
		//p($_POST);die;
		if(M('cate')->add($_POST))
		{
			$this->success('添加成功',U('Cate/index'));
		}
		else
			{
				$this->error('添加失败');
			
			}
		
	}
	 public function Catesort(){
		 //p($_POST);die;
	 	$db=M('cate');
		foreach ($_POST as $k=>$v){
			
			$db->where(array('id'=>$k))->setField('sort',$v);
		}
		$this->redirect('Cate/index');
	 }
		 //修改
	 function edit(){
     $id=(int)$_GET['id'];
	 $pid=(int)$_GET['pid'];
	 $m = D('Cate');
	 $cate = $m->reSort();
	 $cate=M('cate')->order('sort asc')->where('id='.$id)->select();
	 $cates=$m->reSort();;
	 $this->assign('cate',$cate);
	 $this->assign('cates',$cates);
     $this->display();
   }
	public function Catedit(){
		//p($_POST);die;
 	$db = M('cate'); 
 	$c = $db->create();	//p($c);die;
	   $data=array(
	    'pid'=>$c['pid'],
		'name'=>$c['name'],		//'pid'=>$c['pid'],
		'sort'=>$c['sort']
		);		
		$a=$c['id'];		
      $info=$db->where('id='.$a)->save($data);	  
        if($info){
            $this->success("编辑成功",U('Cate/index'));
        }else{
            $this->error("编辑失败");
        }
    }
 }
?>