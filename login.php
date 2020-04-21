<?php


$name = $_POST['username'];
$password = $_POST['password'];


if($name == "divanlautaro" or $password == "BlessingS101"){
    
    setcookie('name',$name, time()+ 10800);
    setcookie('password',$password, time()+ 10800);

    $name = $_COOKIE['name'];
    $password = $_COOKIE['password'];
    
//    if(isset($name) and isset($password)){
    
    header('location:userpage.php');    
        
//    }
    
    
}

else{
    die('Invalid username and password');
    
    
}

?>
