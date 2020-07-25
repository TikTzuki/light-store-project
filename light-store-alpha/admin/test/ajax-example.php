<?php
   
   class Connection{
      private $dbhost;// = "localhost";
      private $dbuser;// = "root";
      private $dbpass;// = "";
      private $dbname;// = "test";
         //Kết nối với MySQL Server
      private $connect = new PDO('mysql:host='.$dbhost.';dbname='.$dbname,$dbuser,$dbpass);
      
      public Connection($dbhost, $dbuser, $dbpass, $dbname){
         $this->dbhost = $dbhost;
         $this->dbuser = $dbuser;
         $this->dbpass = $dbpass;
      }
   
   }
   
   // lấy dữ liệu
   $age = $_GET['age'];
   $sex = $_GET['sex'];
   $wpm = $_GET['wpm'];
   
   //truy vấn
   $query = "SELECT * FROM ajax_example WHERE sex = '$sex'";
   
   if(is_numeric($age))
   $query .= " AND age <= $age";
   
   if(is_numeric($wpm))
	$query .= " AND wpm <= $wpm";
   
   //thực thi truy vấn
   $qry_result =  $connect -> query($query);
   
   //định dạng chuỗi kết quả
   $display_string = "<table>";
   $display_string .= "<tr>";
   $display_string .= "<th>Name</th>";
   $display_string .= "<th>Age</th>";
   $display_string .= "<th>Sex</th>";
   $display_string .= "<th>WPM</th>";
   $display_string .= "</tr>";
   
   // chèn một hàng mới vào trong bảng
   while($row = mysqli_fetch_array($qry_result)){
      $display_string .= "<tr>";
      $display_string .= "<td>$row[name]</td>";
      $display_string .= "<td>$row[age]</td>";
      $display_string .= "<td>$row[sex]</td>";
      $display_string .= "<td>$row[wpm]</td>";
      $display_string .= "</tr>";
   }
   echo "Truy vấn: " . $query . "<br />";
   
   $display_string .= "</table>";
   echo $display_string;
   $connect = null;
   
   <!-- Modal sửa mật khẩu -->
   <div class=\"modal\" id=\"myModal\">
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
?>