// system/Router.php
class Router {
    public static function route($url) {
        $controllerName = isset($url[0]) ? ucfirst($url[0]) . 'Controller' : 'HomeController';
        $methodName = isset($url[1]) ? $url[1] : 'index';
        $params = array_slice($url, 2);

        $controllerPath = "../app/controllers/$controllerName.php";

        if (file_exists($controllerPath)) {
            require_once $controllerPath;
            $controller = new $controllerName();
            if (method_exists($controller, $methodName)) {
                call_user_func_array([$controller, $methodName], $params);
            } else {
                echo "Method $methodName not found!";
            }
        } else {
            echo "Controller $controllerName not found!";
        }
    }
}
