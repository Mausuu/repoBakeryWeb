<?php
class MYSQLConnect{
    private $servername;
    private $username;
    private $password;
    private $dbname;
    private $conn;
    
    public function __construct(){
        $this->servername = "localhost";
        $this->username = "root";
        $this->password = "";
        $this->dbname="dbbakery";
    }
    public function connected(){
        try {
        $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
        // set the PDO error mode to exception
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Connected successfully";
        return $this->conn;
        } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        }
    }
    public function disconnected(){
        $this->conn=null;
    }
    public function insertData($sql,$data=array()){
        $dbCon=new MYSQLConnect();
        $pdo=$dbCon->connected();
        
        $stml=$pdo->prepare($sql);
        $stml->execute($data);
        $dbCon->disconnected();
    }
    public function getData($sql,$data=array()){
        $dbCon=new MYSQLConnect();
        $pdo=$dbCon->connected();
        $stml=$pdo->prepare($sql);
        $stml->execute($data);
        $user=$stml->fetch();
        $dbCon->disconnected();
        return $user;
    }
    
}