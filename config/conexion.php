<?php
    //TODO Inicia la sesion si no esta inciciada
    session_start();

    //TODO Definicion de la clase conecta
    class Conectar{
        // TODO Propiedad protegida para almacenar la BBDD
        protected $dbh;
        // TODO Metodo para establecer la conexion a la base de datos
        protected function conexion(){
           /*  if ($_SERVER['SERVER_NAME'] == 'localhost') { */
                // Modo local
                $host="localhost";
                $db="mesadepartes";
                $user="usuario";
                $pass="0x0sidewinder";
		        //print "Local";
          /*   }else{
                // Modo remoto
                $host="135.125.74.179";
                $db="mesadepartes";
                $user="usuario";
                $pass="0x0sidewinder";
                //print "Remoto";
            } */

            try {
                //TODO Estable POO
                $conectar = $this->dbh = new PDO("mysql:host=$host;port=3306;dbname=$db",$user,$pass);
                return $conectar;

            } catch (Exception $e) {
                //TODO Error
                print "Error DB:" . $e->getMessage() . "<br>";
                die();
            }
        }
        // TODO Establece a utf8
        public function set_names(){
            return $this->dbh->query("SET NAMES 'utf8'");

        }
        // TODO Método estático que devuelve la ruta base del proyecto
        public static function ruta(){
            //return "http://localhost:1802/";
            //return "http://localhost/PERSONAL_MesadePartes/";
            return "http://localhost/";
        }

    }


?>