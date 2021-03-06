<?php
//psql -U postgres -W -h localhost calendario_tareas
class Connection
{
  private static $instance;
  private $connection;
  
  private function __construct()
  {
    $cadena = "host='localhost' port='5432' dbname='calendario_tareas' user = 'postgres' password = 'cronos'";
    $this->connection = pg_connect ($cadena) or die ('Error de conexión. Póngase en contacto con el administrador');
  }
  
  
  
  public static function getInstance(){
     
  	if (!isset(self::$instance))
  	  self::$instance = new Connection();
  		
  	return self::$instance;
  }
  
  public function query($aQuery){
    return pg_query($this->connection, $aQuery);
  }
  
}

?>
