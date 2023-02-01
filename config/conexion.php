<?php
    session_start();

    class Conectar{
        protected $dbh;

        protected function Conexion(){
            try {
                //Local
				//$conectar = $this->dbh = new PDO("mysql:local=localhost;dbname=helpdesk","root","");
                //Produccion
                $conectar = $this->dbh = new PDO("mysql:host=localhost;dbname=kwecfdkz_helpdesk","kwecfdkz_andres","Emilian0621.");
				return $conectar;
			} catch (Exception $e) {
				print "¡Error BD!: " . $e->getMessage() . "<br/>";
				die();
			}
        }

        public function set_names(){
			return $this->dbh->query("SET NAMES 'utf8'");
        }

        public static function ruta(){
            //Local
			//return "http://localhost/PERSONAL_HelpDesk/";
            //Produccion
            return "http://helpdesk.tecnoaka.cl/";
		}

    }
?>