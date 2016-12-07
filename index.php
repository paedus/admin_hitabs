<?php include("header.php") ?>

<?php
    if(!$user->is_login()){
        include("includes/login-form.php");
    }else{
        include("wrap.php");
    }
?>

<?php include("footer.php") ?>