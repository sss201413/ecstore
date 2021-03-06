<?php
/**
 * ShopEx licence
 *
 * @copyright  Copyright (c) 2005-2010 ShopEx Technologies Inc. (http://www.shopex.cn)
 * @license  http://ecos.shopex.cn/ ShopEx License
 */
 
$db['modules']=array (
    'columns' =>
    array (
        'id' =>
        array (
            'type' => 'int unsigned',
            'required' => true,
            'pkey' => true,
            'extra' => 'auto_increment',
            'comment' => app::get('wap')->_('模块ID'),
        ),
        'app' =>
        array (
            'type' => 'varchar(50)',
            'default' => '',
            'required' => true,
            'label' => app::get('wap')->_('程序目录'),
            'width'=>80,
            'default_in_list'=>true,
            'in_list'=>true,
            'comment' => app::get('wap')->_('应用(app)'),
        ),
        'ctl' =>
        array (
            'type' => 'varchar(50)',
            'default' => '',
            'required' => true,
            'label' => app::get('wap')->_('控制器'),
            'width'=>80,
            'default_in_list'=>true,
            'in_list'=>true,
        ),
        'path' => 
        array (
            'type' => 'varchar(50)',
            'default' => '',
            'required' => true,
            'label' => app::get('wap')->_('路径标识'),
            'width'=>80,
            'default_in_list'=>true,
            'in_list'=>true,
        ),
        'extension' => 
        array (
            'type' => 'varchar(10)',
            'default' => '',
            'required' => true,
            'label' => app::get('wap')->_('扩展名'),
            'width'=>50,
            'default_in_list'=>true,
            'in_list'=>true,
        ),
        'title' =>
        array (
            'type' => 'varchar(50)',
            'default' => '',
            'required' => true,
            'label' => app::get('wap')->_('名称'),
            'width' => 100,
            'default_in_list'=>true,
            'in_list'=>true,
        ),
        'allow_menus'=>
        array (
            'type' => 'varchar(255)',
            'default' => '',
            'required' => true,
            'label' => app::get('wap')->_('允许菜单'),
            'width' => 200,
            'default_in_list'=>true,
            'in_list'=>true,
        ),
        'is_native'=>
        array (
            'type' => 'bool',
            'required' => true,
            'default'=>'false',
            'label'=>app::get('wap')->_('原生模块'),
            'width'=>80,
            'default_in_list'=>true,
            'in_list'=>true,
        ),
        'enable' =>
        array (
            'type' => 'bool',
            'required' => true,
            'default'=>'false',
            'label'=>app::get('wap')->_('启用'),
            'width'=>80,
            'default_in_list'=>true,
            'in_list'=>true,
        ),
        'use_ssl' => 
        array (
            'type' => 'bool',
            'required' => true,
            'default'=>'false',
            'label'=>app::get('wap')->_('HTTPS'),
            'width'=>80,
            'default_in_list'=>true,
            'in_list'=>true,
            'comment' => app::get('wap')->_('是否使用SSL'),
        ),
        'update_modified' => 
        array (
          'type' => 'time',
          'editable' => false,
          'comment' => app::get('wap')->_('更新时间'),
        ),
    ),
    'comment' => app::get('wap')->_('前台模块表'),
);
