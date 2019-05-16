<?php
class Helpers{
    public function base_url(){
        $server = $_SERVER['SERVER_NAME'];
        
        return "http://".$server."/"."itcdv2/";
    }

    public function getLoader() {
        //loader
        $loader =   '<span class="lds-dual-ring"></span>';
        return $loader;
    }
    
    public function getdatetime() {
        date_default_timezone_set("Asia/Manila");
        $date = date('Y-m-d H:i:s');

        return $date;
    }

    public function getApi($url, $prefix) {
        $content = file_get_contents($url);
        return ($prefix === 'json' ? json_decode($content,true) : $content);
        
    }

    public function postApi($url, $parameters) {
        $params = json_encode($parameters);
        $opts = array(
            'http' => array(
            'method' => 'POST',
            'header' => 'Content-Type: application/json' . "\r\n"
            . 'Content-Length: ' . strlen($params) . "\r\n",
            'content' => $params,
            ),
        );
          
        $data = stream_context_create($opts);
        
        return file_get_contents($url, null, $data);
    }


    public function success($data){
        $response["data"] = $data;
        $response["msg"] = "Request Successful";
        $response["error"] = "0";

        return $response;
    }

    public function error($msg){
        $error["msg"] = $msg;
        $error["error"] = "-1";

        return $error;
    }
}
?>