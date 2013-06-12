<?php
require_once('Config.class.php');
require_once('sessions.php');
$lm_db_lmuser = 'root';
$lm_db_lmpassword='';
$lm_db_lmname = "civil";
global $lm_db_lmname,$lm_db_lmpassword,$lm_db_lmuser;


class Connect extends Config{
 
    
/*  public $configuration = array(
	'host' => 'localhost',
'user' => 'leelamco_client',
	'password' => '9396220538',
	'database' => 'leelamco_cms15',
	'port'     => '3306',
	'charset'  => '',
	'use_database' => 'mysql' // 'mysql', 'postgre', 'sqlite', 'oracle', 'mssql', 'firebird'
  );
  */
  
  public $conn;

  public function __construct()
   {
   global $lm_db_lmpassword,$lm_db_lmuser,$lm_db_lmname;
   
	$this->configuration['host'] = 'localhost';
	$this->configuration['user'] = $lm_db_lmuser;
	$this->configuration['password'] = $lm_db_lmpassword;
	$this->configuration['database'] = $lm_db_lmname;
	$this->configuration['port'] = '3306';
	$this->configuration['use_database'] = 'mysql';

	    $this->mysqlConnect();
	  
	
   } 

public function mysqlConnect()
	{
   
     try
	  {
        $this->conn = new PDO("mysql:host={$this->configuration['host']}; dbname={$this->configuration['database']}", $this->configuration['user'], $this->configuration['password'] );   
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	  }
	  catch(PDOException $ex)
	   { 
	     echo " There was an error. Please contact your administrator";
echo $ex->getMessage();
	   }
   }
  
}



?>
