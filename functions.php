<?php
@session_start();




include("class/db.php");
include("class/user.php");
$user = new USER();
include("class/config.php");
$opt = new OPTIONS();

if(!$user -> is_login()){
    if(isset($_POST['login'])){
        $user -> do_login();
    }
}else if($opt->request() == "logout"){
    $user -> do_logout();
    header("Location: ".$opt->site_url());
}