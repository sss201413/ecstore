<?php
/*
 * 商品活动返利
 * */
$db['rebate']=array(
		'columns'=>array(
				'rebate_id'=>array(
						'required'=>true,
						'type'=>'number',
						'extra'=>'auto_increment',
						'pkey'=>true),
				'rebate_content'=>array('type'=>'varchar(100)'),//返利标题
				'rebate_condition'=>array('type'=>'number'),//返利条件
				'rebate_price'=>array('type'=>'float'),//反利金额
				'type_id'=>array('type'=>'number'),//返利类型
				));