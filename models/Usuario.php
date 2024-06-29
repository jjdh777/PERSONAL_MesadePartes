<?php
    //TODO: Definicion de la clase  Usuario que extiende la clase Conectar
    class Usuario extends Conectar{
        public function registrar_usuario($usu_nomape,$usu_correo,$usu_pass){
            
            $conectar = parent::conexion();
            parent::set_names();
            $sql="INSERT INTO tm_usuario
                (usu_nomape, usu_correo, usu_pass)
                VALUES
                (?,?,?)";
            
            $sql=$conectar->prepare($sql);
            /* TODO: Vincular los valores a los parámetros de la consulta */
            $sql->bindValue(1,$usu_nomape);
            $sql->bindValue(2,$usu_correo);
            $sql->bindValue(3,$usu_pass);
            /* TODO: Ejecutar la consulta SQL */
            $sql->execute();
        
            $sql1="select last_insert_id() as 'usu_id'";
            $sql1=$conectar->prepare($sql1);
            $sql1->execute();
            return $sql1->fetchAll();
        }       
    }
?>



