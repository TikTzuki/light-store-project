<div class="page-wrapper">
<?php 
    include_once "./model/Connection.php";
    $connect = new Connection();
    /*
SELECT hoadon.mahd as Mahd, khachhang.tenkh as Tenkh, giaohang.sdt as Sdt, giaohang.diachi as Diachi,
        hoadon.ngaydat as Ngaydat, giaohang.ngaygh as Ngaygh, hoadon.ghichu as Ghichu, 
        hoadon.hinhthuc_chitra as Hinhthuc_chitra, SUM(ct_dh.soluong) as Sum_soluong, 
        giaohang.tinhtrang as Tinhtrang
FROM hoadon,khachhang,giaohang,ct_dh
WHERE giaohang.magh = hoadon.magh AND hoadon.mahd = ct_dh.mahd AND khachhang.makh=hoadon.makh 
AND hoadon.mahd = 1 GROUP BY hoadon.mahd    
    */
    $mahoadon = $_GET['order_id'];
    $query = "SELECT hoadon.mahd as Mahd, khachhang.tenkh as Tenkh, giaohang.sdt as Sdt, giaohang.diachi as Diachi,
    hoadon.ngaydat as Ngaydat, giaohang.ngaygh as Ngaygh, hoadon.ghichu as Ghichu, 
    hoadon.hinhthuc_chitra as Hinhthuc_chitra, SUM(ct_dh.soluong) as Sum_soluong, 
    giaohang.tinhtrang as Tinhtrang FROM hoadon,khachhang,giaohang,ct_dh ";

?>
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Chi tiết đơn hàng</h4>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="?page=home">Home</a></li>
                            <li class="breadcrumb-item"><a href="?page=manager_order">Quản Lý Đơn Hàng</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Chi tiết Đơn Hàng</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <?php 
            
            ?>
        </div>
        <div class="row">
        
        </div>
    </div>
</div>