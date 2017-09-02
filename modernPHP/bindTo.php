<?php
	/**
	*
	*/
	class App
	{
		protected $routes = array();
		protected $responseStatus = "200 OK";
		protected $responseContentType = "text/html";
		protected $responseBody = "Hello World!";

		public function addRoute($routePath, $routeCallback) {
			$this->routes[$routePath] = $routeCallback->bindTo($this, __CLASS__);
		}
		public function dispatch($currentPath = NULL) {
			foreach ($this->routes as $routePath => $callback) {
				if ($routePath === $currentPath) {
					$callback();
				}

			}
			header("HTTP/1.1 " . $this->responseStatus);
			header("Content-type: " . $this->responseContentType);
			header("Content-length: ". mb_strlen($this->responseBody));
            echo $this->responseBody;
		}

	}
	$app = new App();
	$app->addRoute('/user/josh', function () {
		$this->responseContentType = "application/json;charset=utf8";
		$this->responseBody='{"name":"Json"}';
	});
	$app->dispatch('/user/josh');
	function test ()
	{
	    daf

	}