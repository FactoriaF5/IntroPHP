<?php

if (!empty($_POST)) {
    echo "Enviado por método: POST";
    var_dump($_POST);
    echo "NAME: " . $_POST["userName"] . " - ROLE:" . $_POST["role"];
}

if (!empty($_GET)) {
    echo "Enviado por método: GET";
    var_dump($_GET);
    echo "NAME: " . $_GET["userName"] . " - ROLE:" . $_GET["role"];
}
