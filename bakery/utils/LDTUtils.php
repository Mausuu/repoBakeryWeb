<?php
define("TY_GIA",22000);
function chuyenUSD2VND($gia)
{
    return number_format($gia*TY_GIA,0,",",".") . " VNĐ";
}
function chuyenVND2USD($gia)
{
    return number_format($gia*TY_GIA,0,",",".") . " $";
}

function rand_index($arr=array()){
    return rand(0,count($arr)-1);
}
function get_color($price){
    if($price>3){
        return "red";
    }elseif ($price>2){
        return "yellow";
    }else{
        return "green";
    }
}
