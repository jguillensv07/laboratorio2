<?php
session_start();

include('datos.php');


if (isset($_POST['login'])) {

    $username = $_POST['usuario'];
    $password = $_POST['password'];

    $result = $mysqli->query("SELECT * FROM usuarios WHERE username='" .  $username. "'");    

    if (!$result) {
        header("location: login.php");
    } else {

        $datoUsuario = $result->fetch_assoc();

        if (password_verify($password, $datoUsuario['password'])) {
            $_SESSION['user_id'] = $datoUsuario['id'];
            header("location: index.php");
        } else {
            header("location: login.php");
        }
    }
}


?>
