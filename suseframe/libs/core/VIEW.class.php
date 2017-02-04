<?php

class VIEW {

	public static $view;

	public static function init($viewtype,$config){
		self::$view = new $viewtype;
		/*$smarty = new Smarty();//ʵ����smarty
		$smarty->left_delimiter=$config["left_delimiter"];//�󶨽��
		$smarty->right_delimiter=$config["right_delimiter"];//�Ҷ����
		$smarty->template_dir=$config["template_dir"];//htmlģ��ĵ�ַ
		$smarty->compile_dir=$config["compile_dir"];//ģ��������ɵ��ļ�
		$smarty->cache_dir=$config["cache_dir"];//����*/
		foreach($config as $key=>$value){
			self::$view -> $key = $value;
		}

	}

	public static function clear_all_cache(){
			self::$view->clearAllCache();
	}

	public static function clear_all_temp(){
			self::$view->clearCompiledTemplate();
	}

	public static function assign($key, $value){
			self::$view->assign($key, $value);
	}

	public static function assignarr($data){
		foreach($data as $key=>$value){
			self::$view->assign($key, $value);
		}
	}

	public static function display($template){
		self::$view->display(APP_PATH.$template);
	}
}