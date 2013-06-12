<?php 
/*  
*  Desenvolvido por: Luiz Fernando Alves dos Anjos.  
*  Email: fernandoguaiba@gmail.com - developer.fernando@gmail.com  
*  Site:  www.ycontrol.com.br  
*  Vers�o: 1.0 
*  
* Este projeto foi desenvolvido com o intuito de ajudar aqueles que  
* est�o iniciando com o desenvolvimento web na plataforma php. 
*  
*  
* Por favor n�o remova este conte�do, ele ajuda para que o projeto  
* continue sendo desenvolvido.  
* Agrade�o a compreens�o.  
*  
*  
* Developed by: Luiz Fernando Alves dos Anjos.   
* Email: fernandoguaiba@gmail.com - developer.fernando @ gmail.com   
* Site: www.ycontrol.com.br   
* Version: 1.5   
*   
* This project was developed in order to help those who   
* are starting with php web development platform,*   
*   
* Please do not remove this content, it helps to have the project   
* Continue to be developed.   
* Thank you for understanding.  
*/ 

abstract class Config{


   abstract function mysqlConnect();
   /*abstract function postgreConnect();
   abstract function sqliteConnect();
   abstract function oracleConnect();
   abstract function mssqlConnect();
   abstract function firebirdConnect();*/
   function lm_db($lm_values){
   	switch ($lm_values) {
   		case 'host':
				$lm_db_host = 'localhost';
   			break;
   		case 'user':
				$lm_db_host = 'leelamco_client';
   			break;

   			case 'password':
				$lm_db_host = '9396220538';
   			break;
   			case 'name':
				$lm_db_host = 'leelamco_cms15';
   			break;
   			case 'port':
				$lm_db_host = '3306';
 			
   			break;
   			
   		default:
   			# code...
   			break;
   	}

   
   }
}
?>