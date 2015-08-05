<?php
class test_mdl_goods extends dbeav_model{
	var $has_many=array(
			'brand'=>'brand@test:replace:brand_id^brand_id',//品牌表关联
			'rebate'=>'rebate@test:replace:rebate_id^rebate_id',//活动详情
			'tabate_type'=>'rebate@test:replace:tabate_type^rebate_id',
			);
	
	var $subSdf = array(
			'default'=>array(
					'brand'=>array('brand_name','brand_id'),
					'rebate'=>array('rebate_content'),
					'tabate_type'=>array('rebate_content')
					),);
	/*
	 * 商品活动详情，计算价格
	 * */
	function goodslist($brand_id = 0){
		$sql='SELECT * FROM test_goods g 
		LEFT JOIN test_rebate r on g.brand_id = r.rebate_id'
		.$brand_id ==0?'':'WHERE g.brand_id ='.$brand_id ;
	 // $retult = $this->db->select($sql);
	 	$retult = kernel::database()->select($sql);
	  return $retult;
	}
}