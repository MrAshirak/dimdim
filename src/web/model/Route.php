<?php
namespace app\mod\web\model;

use app\mod\web\model\Router;
use app\mod\web\controller\AppController as App;

Class Route extends Router{
	protected $router; 
	
	use \app\mod\web\model\Singleton;

	public function __construct()
	{
		$this->router = new Router($_SERVER);
		$this->map();
		$this->router->run();
	}

	private function map(){
		$this->router->addRoute('home', function() {
			(new App)->actionHome();
			exit();
		});
		
		$this->router->addRoute('login', function() {
			(new App)->actionLogin();
			exit();
		});

		$this->router->addRoute('dashboard', function() {
			(new App)->actionDashboard();
			exit();
		});	
	}
}
