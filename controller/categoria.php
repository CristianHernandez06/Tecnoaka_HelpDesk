<?php
    require_once("../config/conexion.php");//se llama al archivo conexion.php
    require_once("../models/Categoria.php");//se llama al modelo Categoria.php
    $categoria = new Categoria();

    switch($_GET["op"]){
        case "combo":
            $datos = $categoria->get_categoria();//llamada al metodo get_categoria
            if(is_array($datos)==true and count($datos)>0){//si la variable datos es un array y tiene datos
                foreach($datos as $row)//recorre el array
                {
                    $html.= "<option value='".$row['cat_id']."'>".$row['cat_nom']."</option>";//concatena el codigo html
                }
                echo $html;
            }
        break;//fin del case combo

    }
?>