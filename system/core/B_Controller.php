<?php
if (! define('PATH_SYSTEM')) die('Không tồn tại')

/**
 * @package     MVC_Framework
 * @author      BinhLe
 * @email       thanhbinh1994th@gmail.com
 * @copyright   Copyright (c) 2019
 * @since       Version 1.0
 * @filesource  system/core/Controller.php
 */
/**
 * 
 */
class B_Controller
{
	// Đối tượng view
    protected $view     = NULL;
     
    // Đối tượng model
    protected $model    = NULL;
     
    // Đối tượng library
    protected $library  = NULL;
     
    // Đối tượng helper
    protected $helper   = NULL;
     
    // Đối tượng config
    protected $config   = NULL;
     
	
	public function __construct()
	{	
		# code...
	}
	// Hàm chạy ứng dụng
	public function load($controller,$action)
	{
		 // Chuyển đổi tên controller vì nó có định dạng là {Name}_Controller
		$controller=ucfirst(str($controller)).'_Controller';
		// chuyển đổi tên action vì nó có định dạng {name}Action
		$action=ucfirst(str($action)).'Action';

		// Kiểm tra file controller có tồn tại hay không

		if(!file_exists(PATH_APPLICATION.'/controller/'.$controller.'.php')){die('Controller không tồn tại');}
		require_once PATH_APPLICATION.'/controller/'.$controller.'.php';
		 // Kiểm tra class controller có tồn tại hay không
    	if (!class_exists($controller)){
        die ('Controller không tồn tại');
    	}
    	 $controllerObject = new $controller();
    	 // Kiểm tra action có tồn tại hay không
	    if ( !method_exists($controllerObject, $action)){
	        die ('Action không tồn tại');
	    }
	     // Gọi tới action
    	$controllerObject->{$action}();

	}

}

?>	