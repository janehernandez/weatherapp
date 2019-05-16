<?php
class Post {
    public function postLogs($description, $module, $tamperedid) {
        $helper = new Helpers;
        $session = new Sessions;
        $url = "http://202.124.147.85:8081/api/logs";

        date_default_timezone_set("Asia/Manila");
        $time = $helper->getdatetime();
        $parameters = array(
            'userid' => $session->getUserid(),
            'description' => $description,
            'logdate' => $time,
            'module' => $module,
            'tamperedid' => $tamperedid
        );

        $result = $helper->postApi($url, $parameters);
    }
}

?>