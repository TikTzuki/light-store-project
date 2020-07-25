<div class="page-wrapper">
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
            <form action="./controller/add_product_perform.php" method="POST" enctype="multipart/form-data">
                <label for=""> Tên Sản Phẩm </label>
                <input type="text" name="light_name">
                <label for=""> Loại sản phẩm </label>
                <select name="light_category" id="light-category">
                <?php 
                    include "./model/Connection.php";
                    include "./config/bdconfig.php";
                    $connect = new Connection();
                    $stmt = $connect->select("SELECT * FROM loaibd");
                    while($row = $stmt->fetch()){
                        $row["maloai"];
                        echo"<option value=".$row["maloai"]."> ".$row["tenloai"]." </option>";
                    }
                ?>
                </select>
                <label for=""> Giá </label>
                <input type="text" name="light_price">
                <label for=""> Số lượng </label>
                <input type="text" name="light_quantity">
                <label for=""> Kích thước </label>
                <input type="text" name="light_size">
                <label for=""> Màu sắc </label>
                <input type="text" name="light_color">
                <label for=""> Khối lượng </label>
                <input type="text" name="light_weight">
                <label for=""> Thương hiệu </label>
                <select name="light_brand" id="light-brand" >
                <?php 
                    //Cac option con lai
                    $stmt = $connect->select("SELECT * FROM thuonghieu");
                    while($row = $stmt->fetch()){
                        echo"<option value=".$row["mathuonghieu"]."> ".$row["tenthuonghieu"]." </option>";
                    }
                ?>
                </select>
                <label for=""> Mô tả </label>
                <input type="text" name="light_detail">
                <label for=""> Hình ảnh </label>
                <div class="uploadFile">
                    <input type="file" name="light_image">
                </div>
                <label for=""> Trạng thái </label>
                <input type="checkbox" name="light_state" value="1" data-toggle="toggle">
                <input type="submit" value="Thêm">
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