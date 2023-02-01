<?php
    /* llamada a las clases necesarias */
    require_once("../config/conexion.php");
    require_once("../models/Whatsapp.php");
    require_once ('../vendor/autoload.php'); // if you use Composer
    $whatsapp = new Whatsapp();

    /* opciones del controlador */
    switch ($_GET["op"]) {
        /*  enviar ticket abierto con el ID */
        case "w_ticket_abierto":
            $whatsapp->w_ticket_abierto($_POST["tick_id"]);
            break;


    }
?>