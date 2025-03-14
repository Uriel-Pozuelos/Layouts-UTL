<?php

//index.php file
define('ROOT_PATH', dirname(__DIR__) . '/utleon.edu.mx/vista/');

class Route {

    private function simpleRoute($file, $route){
        //Version antes de parametros en URL
        // if(!empty($_SERVER['REQUEST_URI'])){
        //     $route = preg_replace("/(^\/)|(\/$)/","",$route);
        //     $reqUri =  preg_replace("/(^\/)|(\/$)/","",$_SERVER['REQUEST_URI']);
        // }else{
        //     $reqUri = "/";
        // }

        // if($reqUri == $route){
        //     $params = [];
        //     include($file);
        //     exit();
        // }

        // Remove query string for route matching
        $reqUri = $_SERVER['REQUEST_URI'];
        $route = preg_replace("/(^\/)|(\/$)/", "", $route);

        // Remove query string part (anything after '?') from the request URI
        $reqUri = preg_replace("/\?.*$/", "", $reqUri);
        $reqUri = preg_replace("/(^\/)|(\/$)/", "", $reqUri);

        if ($reqUri == $route) {
            include($file);
            exit();
        }
    }

    function add($route,$file){

        //will store all the parameters value in this array
        $params = [];

        //will store all the parameters names in this array
        $paramKey = [];

        //finding if there is any {?} parameter in $route
        preg_match_all("/(?<={).+?(?=})/", $route, $paramMatches);

        //if the $route does not contain any param call simpleRoute();
        if(empty($paramMatches[0])){
            $this->simpleRoute($file,$route);
            return;
        }

        //setting parameters names
        foreach($paramMatches[0] as $key){
            $paramKey[] = $key;
        }

        
        //replacing first and last forward slashes
        //$_SERVER['REQUEST_URI'] will be empty if req uri is /

        if(!empty($_SERVER['REQUEST_URI'])){
            $route = preg_replace("/(^\/)|(\/$)/","",$route);
            $reqUri =  preg_replace("/(^\/)|(\/$)/","",$_SERVER['REQUEST_URI']);
        }else{
            $reqUri = "/";
        }

        //exploding route address
        $uri = explode("/", $route);

        //will store index number where {?} parameter is required in the $route 
        $indexNum = []; 

        //storing index number, where {?} parameter is required with the help of regex
        foreach($uri as $index => $param){
            if(preg_match("/{.*}/", $param)){
                $indexNum[] = $index;
            }
        }

        //exploding request uri string to array to get
        //the exact index number value of parameter from $_SERVER['REQUEST_URI']
        $reqUri = explode("/", $reqUri);

        //running for each loop to set the exact index number with reg expression
        //this will help in matching route
        foreach($indexNum as $key => $index){

            //in case if req uri with param index is empty then return
            //because url is not valid for this route
            if(empty($reqUri[$index])){
                return;
            }

            //setting params with params names
            $params[$paramKey[$key]] = $reqUri[$index];

            //this is to create a regex for comparing route address
            $reqUri[$index] = "{.*}";
        }

        //converting array to sting
        $reqUri = implode("/",$reqUri);

        //replace all / with \/ for reg expression
        //regex to match route is ready !
        $reqUri = str_replace("/", '\\/', $reqUri);

        //now matching route with regex
        if(preg_match("/$reqUri/", $route))
        {
            include($file);
            exit();
        }
    }

    function notFound($file){
        include($file);
        exit();
    }
}
$route = new Route();

//inicio
$route->add("","vista/index.php");
$route->add("/test","vista/index.php");
$route->add("/test/{param1}/{param2}","vista/index.php");


$route->add("/zonas","vista/zonas.php");
$route->add("/zonas2","vista/zonas2.php");

$route->add("/home","vista/index.php");


//example route with multiple params
$route->add("/home/{param1}","vista/index.php");

$route->add("/test/{param1}/{param2}","vista/test.php");
$route->add("/informacion/{param1}","vista/test.php");
$route->add("/formacion","vista/test.php");

$route->notFound("404.php");
?>