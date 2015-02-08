<?php
class category {
	Static public function Leveler ($cate,$html='|-',$pid=0,$level=0){
		$arr=array();
		foreach ($cate as $v){
			if($v['pid']==$pid){
				$v['level']=$level + 1;
				//echo $v['level'];
				$v['html']=str_repeat($html,$level);
				
				$arr[]=$v;
			$arr=array_merge($arr, self::Leveler ($cate,$html,$v['id'],$level + 1));
//				foreach($v as $key=>$value)
//               echo '&nbsp;'.$key."=>".$value;
//				echo '<br/>';
			}
			
		}
		
		return $arr;
	}	
		
}
?>