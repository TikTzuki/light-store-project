<?php
include_once 'Connection.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SiteAnalysis
 *
 * @author Tik
 */
class SiteAnalysis {
    private $connect;
    public function __construct(){
        $this->connect = new Connection();
    }
    public function getTotalRevenueStatement($beforeDate,$afterDate){
        $query = "SELECT SUM(dongia) FROM `ct_dh` inner JOIN `hoadon` on ct_dh.mahd = hoadon.mahd WHERE ngaydat BETWEEN '$beforeDate' and '$afterDate'"; 
        return $stmt = $this->connect->select($query);
        /*
        while($row = $stmt->fetch()){
            $result[] = $row['dongia'];
        }*/
    }
    public function getTotalOrderStatement($beforeDate,$afterDate){
        $query = "SELECT COUNT(mahd) FROM hoadon WHERE ngaydat BETWEEN '$beforeDate' and '$afterDate'";
        return $stmt = $this->connect->select($query);
    }
    public function getTotalProductsSelledStatement($beforeDate,$afterDate){
        $query = "SELECT SUM(soluong) FROM `ct_dh` inner JOIN `hoadon` on ct_dh.mahd = hoadon.mahd WHERE ngaydat BETWEEN '$beforeDate' and '$afterDate'";
        return $stmt = $this->connect->select($query);
    }
    public function getAVGOrderValueStatement($beforeDate,$afterDate){
        $query = "SELECT ROUND(AVG(subTotal),0) FROM (SELECT sum(dongia) as subTotal FROM ct_dh inner JOIN hoadon on ct_dh.mahd = hoadon.mahd WHERE ngaydat BETWEEN '$beforeDate' and '$afterDate'  GROUP BY ct_dh.mahd) as TEMP";
        return $stmt = $this->connect->select($query);
    }
    public function getTopProductSelledStatement($beforeDate,$afterDate){
        $query = "SELECT bongden.tenbd as light_name,bongden.mota as detail,bongden.hinhanh as images,bongden.gia as price,quantity,subtotal FROM bongden,(SELECT ct_dh.mabd as mabd,SUM(ct_dh.soluong) as quantity,SUM(ct_dh.dongia) as subtotal FROM ct_dh,hoadon,giaohang WHERE ct_dh.mahd = hoadon.mahd AND hoadon.magh = giaohang.magh AND hoadon.ngaydat >= '$beforeDate' AND giaohang.ngaygh <= '$afterDate' AND giaohang.tinhtrang=2 GROUP BY ct_dh.mabd) as tbl_temp WHERE bongden.mabd = tbl_temp.mabd LIMIT 1,5";
        return $stmt = $this->connect->select($query);
    }
}
