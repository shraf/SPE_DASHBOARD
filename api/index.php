<?php
    function get($section_name){
        $json = file_get_contents(__DIR__."/../{$section_name}.json");

        header('Content-Type: application/json; charset=utf-8');
        if(isset($_GET['id'])){
            $id=$_GET['id'];
            $json_arr = json_decode($json,true);
            if(isset($json_arr[$id])){
                echo json_encode($json_arr[$id]);
                return;
            }
            http_response_code(404);
            echo "not found";
            return;
        }
        echo $json;        
    }

    function post($section_name){
        $file_path="./{$section_name}.json";
        chmod($file_path,0777);
        $json = file_get_contents($file_path);
        $body = json_decode(file_get_contents('php://input'),true);
        echo json_encode($body);
        header('Content-Type: application/json; charset=utf-8');
        $json = json_decode($json,true);
        $json=json_encode(array_merge($json,$body));
        file_put_contents($file_path,$json);
        if(is_writable($file_path))
            echo "true";
        else
            echo "false";
        
    }

    function put($section_name){

    }
    $get_functions=[
        'get'=>'get'
    ];

    $post_functions = [
        'post'=>'post'
    ];

   $request = $_SERVER['REQUEST_METHOD'];
   $path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
   $points = explode('/',$path);
   $end_point= $points[count($points)-1];
    switch($request){
        case "GET":
            $get_functions['get']($end_point);
            break;
        case "POST":
            $post_functions['post']($end_point);
            break;
        case "PUT":
            break;
        default :
            break;
    }

    

?>