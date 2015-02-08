<?php
namespace Admin\Controller;
use Think\Controller;
 class BlogController extends AdminController{
	
	public  function index (){
		$blog=$this->blog=D('blog')->getBlogs();		
		//p(D('blog'));//
		$this->display();
	}
	
	public  function addblog (){
		$m = D('Cate');
		$categ = $m->reSort();
		$attr=M('attr')->select();
		$this->assign('attr',$attr);
		//$this->assign('category', $categ);
		//p($attr);die;
		$this->assign('cates',$categ);
		$this->display();
	}
	//博文表单处理
	public  function runblog (){
	    $c = $_POST;
			//p($c);die;
	   $data=array(
	   'title'=>$c['title'],
	    'content'=>$c['content'],
	    'click'=>$c['click'],
		'cid'=>$c['cid'],		
		'time' => time(),
		);
		 $blog=D('Blog');
		if(isset($c['aid'])){
			
			foreach($c['aid'] as $v){
				$data['attr'][]=$v;
			}
		}
		if(D('Blog')->relation(true)->add($data))
		{
			$this->success('添加成功',U('blog/index'));
		}
		else
			{
				$this->error('添加失败');
			
			}
		
		//p($data);die;
		//$this->display();
		
	}
	
	public  function upload (){
		echo "1";
		//$this->display();
	}
	/****
	 * 博文删除回收站
	 ***/
	public  function trach (){
		//p($_GET);die;
		$del=array(
		'id'=>(int)$_GET['id'],
		'del'=>(int)$_GET['type']	
		);
		if(M('blog')->save($del))
		{
			if($del['del']==0)
			{
				$this->success('还原成功',U('blog/index'));
			}
			
		else{
			$this->success('删除成功',U('blog/index'));
				
			}
		}
		else
			{
				$this->error('删除失败');
			
			}
		//$this->display();
	}
	/****
	 * 博文回收站
	 ***/
	public  function tracher (){
		$id=$_GET['id'];
		//p($id);	
		if(isset($id))
		{
		$where = 'id='.$id;
		if(M('blog')->where('id='.$id)->delete())
		{
			$this->success('删除成功',U('blog/index'));
		}
		else
			{
				$this->error('删除失败');
			
			}
		}
		else{
			$this->blog=D('blog')->getBlogs(1);
             $this->display('index');
		}
		
	}
	public function ueditor(){
        $data = new \Org\Util\Ueditor();
        echo $data->output();
    }
		/****
	 * 博文修改
	 ***/
	public  function edit (){
		$id=$_GET['id'];
		$blog=$this->blog=D('blog')->where('id='.$id)->getBlogs();
		$attr=M('attr')->select();
		foreach ( $blog[0][attr] as $s => $q)
		//echo $s.'='.$q;
		foreach ( $q as $k => $v)
		//echo $k.'='.$v;
		$att=$v;
		echo '<p>';
		foreach ( $attr as $ks => $vs)
		//echo $ks.'='.$vs;
		$atts=$vs;

		$this->assign('att',$att);
		$this->assign('atts',$atts);
		$this->assign('blog',$blog);
		$this->assign('attr',$attr);
		//p($attr);
		//p($blog);
		$this->display();
		
	}
		            /****
	 * 博文修改处理
	 ***/
	public  function runedit (){
	    $g = $_POST;
		$id=(int)$_POST['id'];
	   $data=array(
	   'title'=>$g['title'],
	    'content'=>$g['content'],
	    'click'=>$g['click'],
		'cid'=>$g['cid'],	
		'time' => time(),);
		 $blog=D('Blog');
		if(isset($g['aid'])){
			$at=implode(',', $g['aid']);
			foreach($g['aid'] as $v){		
				$data['attr'][]=$v;				
			}
		}
		//p($data);
		//die;
		if(D('Blog')->relation(true)->where('id='.$g['id'])->save($data))
		{
			$this->success('修改成功',U('blog/index'));
		}
		else
			{
				$this->error('修改失败');			
			}
		$this->display();		
	}
}

?>