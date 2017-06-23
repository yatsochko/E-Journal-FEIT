<?php

class Router
{
    private  $routes;

    public function __construct()
    {
        $routesPath = ROOT . '/config/routes.php';
        $this->routes = include($routesPath);
    }
    /*
     * Returns request string.
     */
    private function getUTI()
    {
        if(!empty($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }
    public function run()
    {
        // 1. �������� ������ �������
        $uri = $this->getUTI();

        // 2. ��������� ������� ������ ������� � routes.php
        foreach ($this->routes as $uriPattern => $path) {

            //  3. ���������� $uriPattern � $uri
            if (preg_match("~$uriPattern~", $uri)) {
                // 4. ���� ���� ����������, ���������� ����� ����������
                // � action ������������ ������

//                echo '<br>��� ���� (������, ������� ������ ������������): '.$uri;
//                echo '<br>��� ���� (���������� �� �������): '.$uriPattern;
//                echo '<br>��� ���� (��� ������������): '.$path;

                // �������� ���������� ���� �� �������� �������� �������.
                $internalRoute = preg_replace("~$uriPattern~", $path, $uri);

//                echo '<br><br>����� ������������: '.$internalRoute.'<br><br>';

                // ������ ����� ���������� ����������, action, ���������
                $segments = explode('/', $internalRoute);

                $controllerName = array_shift($segments).'Controller';
                $controllerName = ucfirst($controllerName); // ������ ������ ����� ������ ���������

                $actionName = 'action'.ucfirst(array_shift($segments));

                $parameters = $segments; // ������� � ������� ��� ���������, ��������� �� � action

                // 5. ���������� ���� ������-�����������
                $controllerFile = ROOT . '/controllers/'. $controllerName . '.php';
                if (file_exists($controllerFile)){
                    include_once($controllerFile);
                }

                // 6. ������� ������, ������� ����� (�.�. action)
                $controllerObject = new $controllerName; // ������� ������ ������ ������� �����������
//                $result = $controllerObject->$actionName($parameters);
                // � ������ ������ ��������� �� ������ ����� ����������� ��� ����������
                $result = call_user_func_array(array($controllerObject, $actionName), $parameters);
                if ($result != null) {
                    break;
                }
            }
        }
    }
}