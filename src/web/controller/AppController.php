<?php
namespace app\mod\web\controller;

use zion\core\Session;
use zion\core\System;

if(Session::hasData() ?? null){
	header("Location: /");
	exit();
}

Class AppController{

	static private $instance;	
	const css = "web/public/view/css/";
	const js =  "web/public/view/js/";
	const view = "web/public/view/";
	private const tpl = "src/web/public/view/tpl/";
	

	public function __construct(){}

	static public function getInstance(){
		if(self::$instance ?? true){
			return self::$instance = new AppController;
		}
		return self::$instance;
	}

	private function pageBuilder($pathPage){
		require_once(\zion\APP_ROOT . self::tpl . "header.phtml");
		require_once($pathPage);
		include_once(\zion\APP_ROOT . self::tpl . "footer.phtml");
	}
	
	public function actionLogin(){
		System::add('cssList',self::css . "login.css");
		System::add('jsList',self::js . "login.js");
		$this->pageBuilder(self::view . "login.phtml");
	}

	public function actionHome(){
		System::add('cssList',  self::css . "home.css");
		System::add('jsList', self::js . "home.js");
		$this->pageBuilder(\zion\APP_ROOT ."src/". self::view . "home.phtml");
	}
	
	public function actionDashboard(){
		$this->pageBuilder(\zion\APP_ROOT . self::view . "dashboard.phtml");
		
	}
}

