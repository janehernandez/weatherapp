<?php 
require_once("helpers.php");
require_once("post.php");
$helper = new Helpers;
$post = new Post;

if (isset($_POST['login'])) {
    if (isset($_POST['txtUsername']) and isset($_POST['txtPassword'])){
        $username = filter_input(INPUT_POST, 'txtUsername', FILTER_SANITIZE_STRING);
        $password = filter_input(INPUT_POST, 'txtPassword', FILTER_DEFAULT);

        $url = "http://202.124.147.85:8081/api/me?username=$username&password=$password";
        $data = $helper -> getApi($url, 'json');

        if(count($data) == 1) {
            $row = $data[0];
            $session -> setUserSession($row['id'], $row['fullname'], $row['username'], $row['privelege'], $row['branch']);
          
            $description = $session -> getUsername().': Online in the system';
            $module = 'LOGIN';
            $tamperedid = 0;
            $post -> postLogs($description, $module, $tamperedid);

            echo "<script> success(); </script>";
            

            $session ->  currentPage();
        } else {
            echo "<script> warning('Please check your credentials or if your account is still active.'); </script>";
        }
    }
}
?>