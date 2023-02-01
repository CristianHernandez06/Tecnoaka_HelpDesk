<?php

/* llamada de las clases necesarias que se usaran en el envio del mail */
require_once("../config/conexion.php");
require_once("../models/Ticket.php");
require_once ('../vendor/autoload.php'); // if you use Composer

class Whatsapp extends Conectar{

    public function w_ticket_abierto($tick_id){
        $ticket = new Ticket();
        $datos = $ticket->listar_ticket_x_id($tick_id);
        foreach ($datos as $row){
            $id = $row["tick_id"];
            $usu = $row["usu_nom"];
            $titulo = $row["tick_titulo"];
            $categoria = $row["cat_nom"];
            $correo = $row["usu_correo"];
        }
        $ultramsg_token="f39e8q0eik8e177x";
        $instance_id="instance21738";
        $client = new UltraMsg\WhatsAppApi($ultramsg_token,$instance_id);

        $to="56937239824"; 
        $body="ticket creado 100 : error de hardware";
        $api=$client->sendChatMessage($to,$body);
        print_r($api);


    }
}


?>