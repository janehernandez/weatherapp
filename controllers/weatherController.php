<?php 
    require_once("../configs/helpers.php");
    require_once("../configs/sessions.php");

    $helper = new Helpers;
    $session = new Sessions;
    $session -> createSession();
    
    $data = 
    $obj ='';
    $params = isset($_GET["params"]);
    if($params){
        if($_GET['params'] == 'getWeather') {
            $obj = $helper -> getApi('https://openweathermap.org/data/2.5/forecast?id='.$_GET["city"].'&appid=b6907d289e10d714a6e88b30761fae22', 'object');
        }
        
        echo $obj;
    } 
?>