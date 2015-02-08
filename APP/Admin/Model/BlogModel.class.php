<?php 
namespace Admin\Model;
use Think\Model\RelationModel;
	Class BlogModel extends RelationModel{
		Protected $_link = array(
			'attr' => array(
				'mapping_type' => self::MANY_TO_MANY,
				'mapping_name' => 'attr',//关联表
				//'class_name'=>'blog',
				'foreign_key' => 'bid',//主表字段
				'relation_foreign_key' => 'aid',//中间表字段
				'relation_table' => 'hd_blog_attr',//中间表
			),
			'cate' => array(
				'mapping_type' => self::BELONGS_TO,
				'foreign_key' =>'cid',
				'mapping_fields' => 'name',
				'as_fields' => 'name:cate'
			)			
		);

		Public function getBlogs($type = 0){
			$field = array('del');
			$where = array('del' => $type);
			return $this->field($field, true)->where($where)->relation(true)->select();
		}
	}
?>