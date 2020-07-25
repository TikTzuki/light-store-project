<div class="page-wrapper">
<?php
//Lay ra san pham can sua
include_once "./model/Connection.php";

$connect = new Connection();
$light_id = $_GET['light_id'];
$queryLight = "SELECT * FROM bongden WHERE mabd=".$light_id;
$thisLightStmt = $connect->select($queryLight);
$thisLight ;
while($row = $thisLightStmt->fetch()){
    $thisLight = array("mabd"=>$row['mabd'],"maloai"=>$row['maloai'],"tenbd"=>$row['tenbd'], "gia"=>$row['gia'], "soluongtonkho"=>$row['soluongtonkho'], "kichthuoc"=>$row['kichthuoc'],
     "mausac"=>$row['mausac'], "khoiluong"=>$row['khoiluong'], "mota"=>$row['mota'], "hinhanh"=>$row['hinhanh'], "mathuonghieu"=>$row['mathuonghieu'],
    "chatlieu"=>$row['chatlieu'], "trangthai"=>$row['trangthai']);
}

?>
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Thêm sản phẩm</h4>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Sản Phẩm</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Thêm Sản Phẩm</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <div class="row">
            <form action="./controller/change_product_perform.php?light_id=<?php echo $thisLight['mabd']; ?>" method="POST" enctype="multipart/form-data">
                <label for=""> Tên Sản Phẩm </label>
                <input type="text" name="light_name" value="<?php echo $thisLight["tenbd"]; ?>">
                <label for=""> Loại sản phẩm </label>
                <select name="light_category" id="light-category" >
                <?php 
                    //Option cua bong den hien tai
                    $stmtThisLightCate = $connect->select("SELECT * FROM loaibd WHERE maloai=".$thisLight['maloai']);
                    while($row = $stmtThisLightCate->fetch()){
                        echo"<option value=".$row["maloai"]."> ".$row["tenloai"]." </option>";
                    }
                    //Cac option con lai
                    $stmt = $connect->select("SELECT * FROM loaibd");
                    while($row = $stmt->fetch()){
                        echo"<option value=".$row["maloai"]."> ".$row["tenloai"]." </option>";
                    }
                ?>
                </select>
                <label for=""> Giá </label>
                <input type="text" name="light_price" value="<?php echo $thisLight['gia']; ?>">
                <label for=""> Số lượng </label>
                <input type="text" name="light_quantity" value="<?php echo $thisLight['soluongtonkho']?>">
                <label for=""> Kích thước </label>
                <input type="text" name="light_size" value="<?php echo $thisLight['kichthuoc']?>">
                <label for=""> Màu sắc </label>
                <input type="text" name="light_color" value="<?php echo $thisLight['mausac'] ?>"> 
                <label for=""> Khối lượng </label>
                <input type="text" name="light_weight" value="<?php echo $thisLight['khoiluong']?>">
                <label for=""> Thương hiệu </label>
                <select name="light_brand" id="light-brand" >
                <?php 
                    //Option cua bong den hien tai
                    $stmtThisLightCate = $connect->select("SELECT * FROM thuonghieu WHERE mathuonghieu=".$thisLight['mathuonghieu']);
                    while($row = $stmtThisLightCate->fetch()){
                        echo"<option value=".$row["mathuonghieu"]."> ".$row["tenthuonghieu"]." </option>";
                    }
                    //Cac option con lai
                    $stmt = $connect->select("SELECT * FROM thuonghieu");
                    while($row = $stmt->fetch()){
                        echo"<option value=".$row["mathuonghieu"]."> ".$row["tenthuonghieu"]." </option>";
                    }
                ?>
                </select>
                <label for=""> Mô tả </label>
                <input type="textarea" name="light_detail" value="<?php echo $thisLight['mota']; ?>">
                <label for=""> Hình ảnh </label>
                <div class="uploadFile">
                    <div class="image-preview">
                        <img src="<?php echo $site_img_path.$thisLight['hinhanh']; ?>" alt="light_image">
                    </div>
                    <input type="file" name="light_image">
                </div>
                <label for=""> Trạng thái </label>
                <?php 
                if($thisLight['trangthai']==='1'){
                    echo "<input type=\"checkbox\" name=\"light_state\" value=\"1\" checked data-toggle=\"toggle\">";
                } else {
                    echo "<input type=\"checkbox\" name=\"light_state\" value=\"1\" data-toggle=\"toggle\">";
                }
                ?>
                <input type="submit" value="Lưu thay đổi">
            </form>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    <footer class="footer text-center">
        All Rights Reserved by Matrix-admin. Designed and Developed by <a href="https://wrappixel.com">WrapPixel</a>.
    </footer>
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
</div>