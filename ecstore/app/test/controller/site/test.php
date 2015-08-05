<?php
class test_ctl_site_test extends site_controller{
	function __construct(&$app){
		parent::__construct($app);
	}
	/*
	 * 显示品牌列表
	 * */
	function index(){
		$this->pagedata['brandlist'] = $this->app->model('brand')->getlist('brand_id,brand_name,brand_url,brand_logo');
		$this->page('site/test.html');
	}	
	/*
	 * 商品详情
	 * @param $barnd_id 品牌id
	 * */
	function goods($brand_id ){
		echo $brand_id;
		$goodsModel = $this->app->model('goods');
		$goodsList = $goodsModel->goodslist($brand_id);
		//var_dump( method_exists($goodsModel, 'goodsList'));
		print_r($goodslist);
	}
	def
}