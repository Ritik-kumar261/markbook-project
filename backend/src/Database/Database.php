<?php  
namespace App\Database;

use PDO;
use PDOException;

class Database {
    private static $instance=null;
    private $db;
    private function __construct() {
        $serverName = "RITIK-1234\\SQLEXPRESS";
        $dbName = "MarkbookTracker";
        $dbUser = "sa";
        $dbPassword = "work123@#$";
        try {
            //code...
            $this->db = new PDO("sqlsrv:Server=$serverName;Database=$dbName", $dbUser, $dbPassword);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo"connected succesfuly";
        } catch (PDOException $th) {
            echo "Connection failed". $th->getMessage();
            //throw $th;
        }
    }
    public static function getInstance() {
            if(!self::$instance){
                self::$instance = new Database();
            }
            return self::$instance->db;
    }

}

