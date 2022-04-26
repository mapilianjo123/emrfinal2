<?php


if(!isset($_SESSION['auth'])){
    $_SESSION['message'] = "Your not Authorized as ADMIN";
    header("Location: ../welcome.php");
    exit(0);

}
else{
    if(isset($_SESSION['auth_role'])!="1"){
        $_SESSION['message'] = "Your are successfuly Log in";
        header("Location: ../Dasboard/index.php");
        exit(0);
}
}
?>