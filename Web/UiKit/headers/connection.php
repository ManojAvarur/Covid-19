<?php

include "headers/err.php" ;

$con = mysqli_connect('127.0.0.1','root','root','healthcare');

if(!$con){
    die("<h1> Connection Could Not Established To The Database Call <strong> Manoj </strong> Immediately </h1> <br> <h3>If he is sleeping you can call him later </h3>");
}

