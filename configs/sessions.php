<?php
class Sessions{
    public function createSession(){
        session_start();
    }

    // ------------------- get & set path and page -------------- //
    public function setPath($path){
        $_SESSION['path'] = $path; 
    }

    public function setPage($page){
        $_SESSION['page'] = $page; 
    }
    
    public function getPage(){
        return $_SESSION['page'];
    }
    
    public function getPath(){
        return $_SESSION['path'];
    }
    // ------------------- ------------------------ -------------- //

    public function setUserSession($id, $fullname, $username, $privelege, $branch){
        $_SESSION['id'] = $id;
        $_SESSION['fullname'] = $fullname;
        $_SESSION['username'] = $username;
        $_SESSION['privelege'] = $privelege;
        $_SESSION['branch'] = $branch;
    }

    public function getUserid(){
        return $_SESSION['id'];
    }

    public function getPrivelege(){
        return $_SESSION['privelege'];
    }

    public function getUsername(){
        return $_SESSION['username'];
    }

    public function isLoggedin(){
        $login = (isset($_SESSION['privelege']) ? true : false);
        return $login;
    }

    public function currentPage(){
        $page = '';
        if ($this -> isLoggedin()){
            switch ($this -> getPrivelege()) {
                case 1:
                    $page = 'views/admin/';
                    break;
                case 2:
                    $page = 'views/operations/';
                    break;
                case 3:
                    $page = 'views/acco/';
                    break;
                case 4:
                    $page = 'views/boss/';
                    break;
                case 5:
                    $page = 'views/sales/';
                    break;
                case 6:
                    $page = 'views/operations/';
                    break;
            }
            
            try {
                header('location:'.$page);
            } catch (Exception $e) {
                echo '<script> window.location.href = '.$helper -> base_url().$page.'</script>';
              
            }
           
        } else {
            $page = 'location: ../../';
            header($page);
            die();
            exit();
        }

        
        
    }

    public function Module(){
        $module = '';
        if ($this -> isLoggedin()){
            switch ($this -> getPrivelege()) {
                case 1:
                    $module = 'ADMINISTRATOR';
                    break;
                case 2:
                    $module = 'OPERATIONS';
                    break;
                case 3:
                    $module = 'ACCOUNTING';
                    break;
                case 4:
                    $module = 'BOSS';
                    break;
                case 5:
                    $module = 'SALES';
                    break;
                default:
                    $module = 'LOGIN';
                    break;
            }
            
           
        } 

        return $module;
        
    }
}
?>