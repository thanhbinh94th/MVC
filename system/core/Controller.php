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
class Controller
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
     
	
	function __construct()
	{
		# code...
	}
	// Hàm chạy ứng dụng
	function load($controller,$action)
	{
		
	}
}

?>	