<?php
include_once '../layout/utils/MYSQLUTILS.php';
class Product{
    private $idproduct;
    private $ten;
    private $mota;
    private $gia;
    private $img;
    private $idcat;
    private $gia_km;

    private $number;

    public function getNumber(){
        return $this->number;
    }
    public function getIdproduct(){
        return $this->idproduct;
    }
    public function getTen(){
        return $this->ten;
    }
    public function getMota(){
        return $this->mota;
    }
    public function Img(){
        return $this->img;
    }
    public function getIdcat(){
        return $this->idcat;
    }
    public function getGia_km(){
        return $this->gia_km;
    }
    public function setIdproduct($idproduct){
         $this->idproduct = $idproduct;
    }
    public function setTen($ten){
         $this->ten = $ten;
    }
    public function setMota($mota){
        $this->mota = $mota ;
    }
    public function setImg($img){
         $this->img = $img;
    }
    public function setIdcat($idcat){
        $this->idcat  = $idcat;
    }
    public function setGia_km($gia_km){
         $this->gia_km = $gia_km;
    }
    public function setNumber($number){
        $this->number = $number;
   }
   public function __construct($idproduct,$ten,$mota,$img,$idcat,$gia_km,$number)
   {
    $this->idproduct =$idproduct;
    $this->ten = $ten;
    $this->mota = $mota;
    $this->img = $img;
    $this->idcat = $idcat;
    $this->number =$number;
   }
    public function getAllProducts()
   {
        $data = NULL;
        $myDB = new MYSQLUTILS();
        $query = "Select idproduct,ten,mota,img,idcat,gia_km";
        $data = $myDB->getAllData($query);
        $myDB->disconnectDB();
        return $data;
   }

}
?>