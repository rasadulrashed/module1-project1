<?php

Define("USERNAME", "admin");
Define("PASSWORD", "1234");

//enter user name
echo "Enter Your User Name: ";
$username = readline();

// enter password
echo "Enter Your Password: ";
$passwrod = readline();
// echo $username ."\n". $passwrod;

// checking username and passwrod for authentication system
if($username === USERNAME && $passwrod === PASSWORD){
    echo "login Succesfully!";
}else{
    echo "Sorry! Invalid user name or password";
}


//// more option checking user name and password (extra work)
    // if($username === USERNAME && $passwrod === PASSWORD){
    //     echo "login Succesfully!";
    // }elseif($username !== USERNAME && $passwrod !== PASSWORD){
    //     echo "Sorry! Wrong User name and password ";
    // }elseif($username !== USERNAME){
    //     echo "Sorry! Wrong USER NAME ";
    // }elseif($passwrod !== PASSWORD){
    //     echo "Sorry! Wrong Password";
    // }else{
    //     echo "Sorry! Invalid user name or password";
    // }

