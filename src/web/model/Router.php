<?php
namespace app\mod\web\model;

use app\mod\web\controller\AppController as App;
use zion\orm\ObjectVO;

class Router
{
  public $request;
  public $routes = [];

  public function __construct(array $request){
    $this->request = basename($request['REQUEST_URI']);
  }

	/**
  * Add a route and callback to our $routes array.
  *
  * @param string $uri
  * @param Callable $fn
  */
  public function addRoute(string $uri, \Closure $fn) : void
  {
		$this->routes[$uri] = $fn;
  }

  /**
  * Determine is the requested route exists in our
  * routes array.
  *
  * @param string $uri
  * @return boolean
  */
  public function hasRoute(string $uri) : bool
	{
    return array_key_exists($uri, $this->routes);
  }

  /**
  * Run the router.
  *
  * @return mixed
  */
  public function run()
  {
    if($this->hasRoute($this->request)) {
			$this->routes[$this->request]->call($this);
		}

		http_response_code(404);
		header("Content: txt/html");
		echo "Esta perdido?";
  }
}
