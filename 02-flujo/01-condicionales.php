<?php

$user = [
    "name" => "Usuario1",
    "isAuthorized" => false
];

// IF

function authorize($user) {

    if ($user["isAuthorized"]) {
        return "You can pass";
    } 

        return "you can not Pass";
}

echo authorize($user) . PHP_EOL;
