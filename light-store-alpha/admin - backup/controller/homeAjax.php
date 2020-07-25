<?php
include_once '../model/SiteAnalysis.php';


class Home{
    public $siteAnalysis;
    public function __construct(){
        $this->siteAnalysis = new SiteAnalysis();
    }
    public function getTotalRevenue($beforeDate,$afterDate){
        $stmt = $this->siteAnalysis->getTotalRevenueStatement($beforeDate,$afterDate);
        while($row = $stmt->fetch()){
            return $row['SUM(dongia)'];
        }
    }
    public function getTotalOrder($beforeDate,$afterDate){
        $stmt = $this->siteAnalysis->getTotalOrderStatement($beforeDate,$afterDate);
        while($row = $stmt->fetch()){
            return $row['COUNT(mahd)'];
        }
    }
    public function getTotalProductsSelled($beforeDate,$afterDate){
        $stmt = $this->siteAnalysis->getTotalProductsSelledStatement($beforeDate,$afterDate);
        while($row = $stmt->fetch()){
            return $row['SUM(soluong)'];
        }
    }
    public function getAVGOrderValue($beforeDate, $afterDate){
        $stmt = $this->siteAnalysis->getAVGOrderValueStatement($beforeDate,$afterDate);
        while($row = $stmt->fetch()){
            return $row['ROUND(AVG(subTotal),0)'];
        }
    }
    public function showTopSeller($beforeDate,$afterDate){
        $stmt = $this->siteAnalysis->getTopProductSelledStatement($beforeDate,$afterDate);
        $result="";
        while($row = $stmt->fetch()){
            $result .= "<div class=\"d-flex flex-row comment-row m-t-0\">
            <img src=\"../images/".$row['images']."\" alt=\"\" class=\"rounded-circle\">
            <div class=\"comment-text active w-100\">
                <h6 class=\"font-medium\">".$row['light_name']."</h6>
                <span class=\"m-b-15 d-block\"> Doanh thu từ sản phẩm: <span class=\"subtotal-price\">".$row['subtotal']." &#8363; </span> </span>
                <span class=\"m-b-15 d-block\">  Bán được: <span class=\"quantity-selled\">".$row['quantity']."</span> </span>
                <span class=\"m-b-15 d-block\"> Giá: <span class=\"light-price\">".$row['price']." &#8363; </span> </span>
                <div class=\"comment-footer\">
                    <button type=\"button\" class=\"btn btn-success btn-sm\"><a
                            hreft=\"?page=change_product&light_id=1\">Chi tiết</a></button>
                </div>
            </div>
        </div>";
        }
        return $result;
    }

}

if(isset($_GET['beforedate']) && isset($_GET['afterdate'])){
    $beforeDate = $_GET['beforedate'];
    $afterDate = $_GET['afterdate'];
    $home = new Home();
    $string="";
    $string.=$home->getTotalRevenue($beforeDate,$afterDate);
    $string.="|;|";
    $string.=$home->getTotalOrder($beforeDate,$afterDate);
    $string.="|;|";
    $string.=$home->getAVGOrderValue($beforeDate,$afterDate);
    $string.="|;|";
    $string.=$home->getTotalProductsSelled($beforeDate,$afterDate);
    $string.="|;|";
    $string.=$home->showTopSeller($beforeDate,$afterDate);

    echo $string;
}

?>
