<?php

    require('Usuario.php');

    extract($_POST);

    $usuario = new Usuario();

    $usuario->cadastrar($login, $senha);

?>