<div class="page-wrapper">
    <?php
include_once "./model/Connection.php";
$connect = new Connection();
//Phân trang
$instance_page = 1;
$limit = 20;

if(isset($_GET['page_num'])){
    $instance_page = $_GET['page_num'];
}
$start = ($instance_page-1)*$limit;

//Khoi tao query
if($_SESSION['role_code']==="1"){
    $query = "SELECT * FROM nguoidung WHERE matruycap>'0'";
}
if($_SESSION['role_code']==="3"){
    $query = "SELECT * FROM nguoidung WHERE matruycap>='2'";
}
//phân trang khi query chưa có limit
$total_record = $connect->totalRecord($query);
$total_page = ceil($total_record/$limit);
//Gioi han record
$query .= " LIMIT $start,$limit ";
//connect
echo $query;
echo $_SESSION['username'];
 $user_stmt = $connect->select($query);
?>
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Quản lý người dùng</h4>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="?page=home">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><span>Người dùng</span></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <!-- Thêm user -->
        <div class="row">
            <button class="add-user"> <a href="?page=add_user"> Thêm người dùng </a> </button>
        </div>
        <!-- Table user-->
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <td> <span> Tên <a href="" id="sort-username"> <i class="fas fa-sort"></i></a></span> </td>
                        <td> <span> Quyền <a href="" id="sort-role-code"> <i class="fas fa-sort"></i></span> </td>
                        <td> <span> Ngày sinh <a href="" id="sort-birth-day"> <i class="fas fa-sort"></i></a> </span>
                        </td>
                        <td> <span> Email <a href="" id="sort-email"> <i class="fas fa-sort"></i></a> </span></td>
                        <td> <span> Matkhau </span> </td>
                        <td> <span> bật/tắt <a href="" id="sort-state"> <i class="fas fa-sort"></i></a> </span> </td>
                        <td> <span> Thao tác </span> </td>

                    </tr>
                </thead>
                <tbody id="body-table">
                    <?php 
                        while($row = $user_stmt->fetch()){
                            //Lấy ra quyền của tài khoản
                            $role_list = $connect->select("SELECT * FROM vaitro_nguoidung");
                            $role_list_option = "";
                            while($row_role = $role_list->fetch()){
                                if($row_role['matruycap']===$row['matruycap']){
                                $role_list_option .= "<option value=\"".$row_role['matruycap']."\" selected>". $row_role['quyen'] ."</option>";
                                }
                                else{
                                $role_list_option .= "<option value=\"".$row_role['matruycap']."\">". $row_role['quyen'] ."</option>";
                                }
                            }
                            //Lấy ra trạng thái
                            $state = "";
                            if($row['trangthai']==='1'){
                                $state ="<input type=\"checkbox\" name=\"state\" value=\"1\" checked data-toggle=\"toggle\" >";
                            }
                            else {
                                $state = "<input type=\"checkbox\" name=\" state\" value=\"1\" data-toggle=\"toggle\" >";
                            }
                            echo 
                            "<form action=\"./controller/manager_user_perform.php?username=".$row['tennd']."\" method=\"POST\" enctype=\"multipart/form-data\">
                            <tr> 
                                <td><span>".$row['tennd']."</span></td>
                                <td><select name=\"role_code\">".$role_list_option."</select></td>
                                <td><input class=\"birth-day\" name=\"birth_day\" value=\"".$row['ngaysinh']."\"></td>
                                <td><input class=\"email\" name=\"email\" value=\"".$row['thudientu']."\"></td>
                                <td><button type=\"button\" class=\"btn btn-secondary\" data-toggle=\"modal\" data-target=\"#myModal".$row['tennd']."\">Sửa mật khẩu</button></td>
                                <td>".$state."</td>
                                <td> 
                                    <ul>
                                        <li> <input type=\"submit\" name=\"submit_manager_user\" value=\"Lưu\"> </input></li>
                                    </ul>
                                </td>
                            </tr>
                            <!-- Modal sửa mật khẩu -->
                            <div class=\"modal\" id=\"myModal".$row['tennd']."\">
                                <div class=\"modal-dialog\">
                                    <div class=\"modal-content\">
                                        <!-- Modal Header -->
                                        <div class=\"modal-header\">
                                            <h4 class=\"modal-title\">Sửa mật khẩu</h4>
                                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                                        </div>
                                        
                                        <!-- Modal body -->
                                        <div class=\"modal-body\">
                                            <label class=\"required\" for=\"old-password\"> 
                                                <span class=\"label-name\"> Mật khẩu cũ </span>
                                                <input name=\"old-password\" class=\"required\" type=\"password\"> </input> 
                                            </label>
                                            <label class=\"required\" for=\"new-password\">
                                                <span class=\"label-name\"> Mật khẩu mới </span>
                                                <input name=\"password\" class=\"required\" type=\"password\"> </input>
                                            </label>
                                            <label class=\"required\" for=\"new-password-re\"> 
                                                <span class=\"label-name\">Nhập lại mật khẩu</span>
                                                <input name=\"password-re\" class=\"required\" type=\"password\"> </input>
                                            </label>
                                        </div>
                                        <!-- Modal footer -->
                                        <div class=\"modal-footer\">
                                            <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Close</button>
                                            <input type=\"submit\" class=\"btn btn-success\" value=\"Đổi mật khẩu\">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </form>"
                            ; 
                        }
                    ?>
                </tbody>
            </table>
        </div>

        <!-- Phân trang -->
        <div class="row">
            <ul class="pagination justify-content-center" style="margin:20px 0; width: 100%;">
                <?php 
                    for($i = 1; $i<=$total_page; $i++){
                        if($instance_page==$i){
                            echo "<li class=\"page-item active\"><a class=\"page-link\" href=\"#\">$i</a></li>";
                            continue;
                        }
                        echo "<li class=\"page-item\"><a class=\"page-link\" href=\"?page=manager_user&page_num=$i\">$i</a></li>";
                    }
                ?>
            </ul>
        </div>
    </div>
    <footer class="footer text-center">
        All Rights Reserved by Matrix-admin. Designed and Developed by <a href="https://wrappixel.com">WrapPixel</a>.
    </footer>
</div>