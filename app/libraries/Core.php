<?php
//Core App Class
class Core
{
    protected $currentController = 'ProductsController';
    protected $currentMethods = 'products';
    protected $params = [];

    public function __construct()
    {
        $url = $this->getUrl();
        //Look in 'controllers' for first value, ucwords will capitalize first letter
        if (file_exists('../app/controllers/' . ucwords($url[0]) . '.php')) {
            //Will set a new controller 
            $this->currentController = ucwords($url[0]);
            unset($url[0]);
        }

        //Require the controller 
        require_once '../app/controllers/' . $this->currentController . '.php';
        $this->currentController = new $this->currentController;

        //Check for the second part of the URL
        if (isset($url[1])) {
            if (method_exists($this->currentController, $url[1])) {
                $this->currentMethods = $url[1];
                unset($url[1]);
            }
        }
        //Get parameters
        $this->params = $url ? array_values($url) : [];

        //Call a callback with array of params
        call_user_func_array([$this->currentController, $this->currentMethods], $this->params);
    }
    public function getUrl()
    {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            //Alaws you to filter variables as string/number
            $url = filter_var($url, FILTER_SANITIZE_URL);
            //Breaking it into array
            $url = explode('/', $url);
            return $url;
        }
    }
}
