<?php
function get($section_name)
{
    $json = file_get_contents(__DIR__ . "/../{$section_name}.json");

    header('Content-Type: application/json; charset=utf-8');
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $json_arr = json_decode($json, true);
        if (isset($json_arr[$id])) {
            echo json_encode($json_arr[$id]);
            return;
        }
        http_response_code(404);
        echo "not found";
        return;
    }
    echo $json;
}

function post($section_name)
{
    $file_path = "./{$section_name}.json";
    chmod($file_path, 0777);
    $json = file_get_contents($file_path);
    $body = json_decode(file_get_contents('php://input'), true);
    header('Content-Type: application/json; charset=utf-8');
    $json = json_decode($json, true);
    $json = json_encode(array_merge($json, $body));
    file_put_contents($file_path, $json);
    if (is_writable($file_path))
        echo "true";
    else
        echo "false";
}

function put($section_name)
{
    if (!isset($_POST["id"])) {
        http_response_code(400);
        echo "bad parameters";
    }
    var_dump($_FILES);
    $is_found=false;
    $target_dir = "/css/img/";
    $target_file = $_POST["src"];
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
        $check = getimagesize($_FILES["img"]["tmp_name"]);
        
        if ($check !== false) {
            echo"ok";
            $uploadOk = 1;
            chmod($_FILES["img"]["tmp_name"], 0777);
            chmod("/css/img", 0777);
            $img_name=explode("/",$_POST["src"]);
            echo  $_SERVER['DOCUMENT_ROOT'];
            move_uploaded_file($_FILES["img"]["tmp_name"],  $_SERVER['DOCUMENT_ROOT'].$_POST['src'].$imageFileType);

        } else {
            echo "not ok";
            $uploadOk = 0;
        }
        try{
    $file_path = __DIR__."/../{$section_name}.json";
    chmod($file_path, 0777);
    $json = file_get_contents($file_path);
    file_put_contents("/css/img/dsad",$json);
    $json = json_decode($json, true);

    $body = json_decode(file_get_contents("php://input"), true);
    header('Content-Type: application/json; charset=utf-8');
    array_walk($json["data"],function(&$value, $key) use($file_path,$json){
        if($value["id"]==$_POST["parent"]){
            array_walk($value["elements"],function(&$elmvalue,$key) use($file_path,$json){
                
                if($elmvalue["id"]==$_POST["id"]){
                    echo "found element";
                    $is_found=true;
                    unset ($_POST["_method"]);
                    unset($_POST["parent"]);
                    $elmvalue=$_POST;
                    file_put_contents($file_path, json_encode($json));
                    echo "success";
                    return ;
                }
                else{
                    
                }
            });
        }
    });
}
catch(Exception $e){
    echo "error";
    echo $e;
}
}
$get_functions = [
    'get' => 'get'
];

$post_functions = [
    'post' => 'post'
];

$put_functions = [
    'put' => 'put'
];

$request = $_SERVER['REQUEST_METHOD'];
$path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
$points = explode('/', $path);
$end_point = $points[count($points) - 1];
switch ($request) {
    case "GET":
        $get_functions['get']($end_point);
        break;
    case "POST":
        if(isset($_POST["_method"])&&$_POST["_method"]=="PUT"){
            echo "hi";
            $put_functions['put']($end_point);
        }
        else{
            echo "bye";
            $post_functions['post']($end_point);
        
        }
            break;
    case "PUT":
        echo "hi";
       echo $_SERVER["name"];
        break;
    default:
        break;
}
