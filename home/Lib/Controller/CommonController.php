<?php
class CommonController extends Controller
{
	public function __construct()
	{
		parent::__construct();
		//$this->checkPower();
	}
	
	public function checkPower()
	{
		if(!isset($_SESSION['username']))
		{
			$this->error('您无权访问该页，请先登录',ROOT.'index.php?/Login/index');
			exit();
		}
	}
	
	public function getHeader()
	{
		$this->assign('title', 'MyPHP');
	}
	
	public function getSider()
	{
		$Post = M('Post');
		$Post->limit(10);
		$newpost = $Post->select();
		$this->assign('newpost', $newpost);
	}
	
	
}