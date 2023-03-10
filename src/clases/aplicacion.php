<?php

class Aplicacion {
	private static $instancia;
    private $bdDatosConexion; //datos de la conn
	private $inicializada = false;
	private $conn;
	
	//Devuelve unica instancia de aplicacion
	public static function getInstance() {
		if (  !self::$instancia instanceof self) {
			self::$instancia = new static();
		}
		return self::$instancia;
	}

	private function __construct() {

	}
	
	public function init($bdDatosConexion) {
        if ( ! $this->inicializada ) {
    	    $this->bdDatosConexion = $bdDatosConexion;
    		$this->inicializada = true;
    		session_start();
        }
	}
	
	public function shutdown() {
	    $this->compruebaInstanciaInicializada();
	    if ($this->conn !== null && ! $this->conn->connect_errno) {
	        $this->conn->close();
	    }
	}
	
	//Comprueba si la aplicación está inicializada. Si no lo está muestra un mensaje y termina la ejecución.
	private function compruebaInstanciaInicializada() {
	    if (! $this->inicializada ) {
	        echo "Aplicacion no inicializa";
	        exit();
	    }
	}
	
	public function getConexionBd() {
	    $this->compruebaInstanciaInicializada();
		if (! $this->conn ) {
			$bdHost = $this->bdDatosConexion['host'];
			$bdUser = $this->bdDatosConexion['user'];
			$bdPass = $this->bdDatosConexion['pass'];
			$bd = $this->bdDatosConexion['bd'];
			
			$conn = new \mysqli($bdHost, $bdUser, $bdPass, $bd);
			if ( $conn->connect_errno ) {
				echo "Error de conexión a la BD ({$conn->connect_errno}):  {$conn->connect_error}";
				exit();
			}
			if ( ! $conn->set_charset("utf8mb4")) {
				echo "Error al configurar la BD ({$conn->errno}):  {$conn->error}";
				exit();
			}
			$this->conn = $conn;
		}
		return $this->conn;
	}
}

?>