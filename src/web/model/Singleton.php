<?php
namespace app\mod\web\model;

Trait Singleton{

	static protected $instance;
	
	static public function getInstance(){
		if(empty(self::$instance)){
			return self::$instance = new self;
		}
		return self::$instance;
	}
}
