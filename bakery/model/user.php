<?php
include '../utils/MYSQLConnect.php';
class User{
    private $username;
    private $password;
    public function __construct($username,$password){
        $this->username=$username;
        $this->password=$password;
    }
    public function __destruct(){
        $this->username="";
        $this->password="";
    }
    public function showInfo(){
        echo $this->username ." ". $this->password;
    }
    public function getUsername(){
        return $this->username;
    }
    public function getPassword(){
        return $this->password;
    }
    public function setUsername($username){
        $this->username=$username;
    }
    public function setPassword($password){
        $this->password=$password;
    }
    public function insertUser(){
        $dbCon=new MYSQLConnect();
        $data=[
            'name'=>$this->username,
            'pass'=>$this->password
        ];
        $sql="insert into user(username,password) values(:name,:pass)";
        $dbCon->insertData($sql,$data);

    }
    public function getUser($username){
        $dbCon=new MYSQLConnect();
        $data=['username'=>$username];
        $sql="select * from user where username=:username"; 
        $user=$dbCon->getData($sql,$data);
        return $user;
    }
}