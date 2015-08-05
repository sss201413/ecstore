<?php
/**
 * 商品表
 */
$db['goods']=array(
		'columns'=>array(
				'goods_id'=>array('type'=>'number',
						'required'=>true,
						'extra'=>'auto_increment',
						'pkey'=>true),
				'brand_id'=>array('type'=>'number'),//品牌
				'rebate_id'=>array('type'=>'number'),//折扣表id
				'tebate_type'=>array('type'=>'number'),//活动类型
				'goods_title'=>array('type'=>'varchar(100)'),//品牌名
				'goods_price'=>array('type'=>'number'),//价格
				'goods_num'=>array('type'=>'number'),//库存
				),);