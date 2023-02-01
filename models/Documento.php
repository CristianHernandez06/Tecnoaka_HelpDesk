<?php
    class Documento extends Conectar {
        public function insert_documento($tick_id,$doc_nom){
            $conectar= parent::conexion();
            //consulta sql
            $sql="INSERT INTO td_documento (doc_id,tick_id,doc_nom,fech_crea,est)VALUES(NULL,?,?,now(),1)";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $tick_id);
            $sql->bindValue(2, $doc_nom);
            $sql->execute();
            return $resultado=$sql->fetchAll();
            
        }

        public function get_documento_x_ticket($tick_id){
            $conectar= parent::conexion();
            //consulta sql
            $sql="SELECT * FROM td_documento WHERE tick_id =?";
            $sql = $conectar->prepare($sql);
            $sql->bindValue(1, $tick_id);
            $sql->execute();
            return $resultado=$sql->fetchAll(pdo::FETCH_ASSOC);
        }
    }

?>