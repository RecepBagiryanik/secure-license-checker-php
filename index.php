<?php
/*
@author : RecepBagiryanik
This is a secure license check file.
*/


//Put this function in your license check file, please encode it.
function getHeaders($headerName) {
    $server = apache_request_headers();
    return $server[$headerName];
}

if ($_SERVER["SERVER_NAME"] != getHeaders("Host")) {
    die("Don't change any http headers to manipulate the license check system, this is not legal!");
} else {
    echo "Succesfull";
}