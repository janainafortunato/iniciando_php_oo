<?php
namespace Config;

//Constantes de parâmetros para configuração da conexão

define('DB_HOST','localhost');
define('DB_NAME', 'phpoo');
define('CHARSET', 'utf8');
define('DB_USER', 'root');
define('DB_PASS', '');


class Db
{
	//atributo esático para instância do PDO

	private static $conexao;

	//Escondendo o construtor da classe.
private function __construct(){

}

/*
*Método estático para retorna uma conexão válida
*/
  public static function conexao()
  {
  	if(!isset(self::$conexao)){
  		try{

  			self::$conexao = new \PDO("mysql:host=" . DB_HOST . "; dbname=". DB_NAME . ";charset" . CHARSET . ";", DB_USER, DB_PASS );
   			 //return $conexao;
  		}catch(PDOException $e){
  			print "Erro:" . $e->getMessage();
  		}
  	}
   		return self::$conexao;
  }
}
