<!doctype html>
<?php session_start(); 
header('Content-Type: text/html; charset=UTF-8');
?>
<html lang="en">
  <head>
    <title>Hệ thống quản lý</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- Material Kit CSS -->
    <link href="assets/css/material-kit.css?v=2.1.1" rel="stylesheet" />
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-primary sticky-top">
      <div class="container">
        <a class="navbar-brand">HỆ THỐNG QUẢN LÝ</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="sr-only">Toggle navigation</span>
        <span class="navbar-toggler-icon"></span>
        <span class="navbar-toggler-icon"></span>
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav col-auto mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Đặt hàng</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="dashboard.php">Thống kê</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="product.php">Sản phẩm <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="employee.php">Nhân viên</a>
            </li>
          </ul>
          <ul class="navbar-nav col-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?php 
                include ('sql_conn.php');
                if (isset($_SESSION['account']) && $_SESSION['account']){ //Kiểm tra session
                       $name = "SELECT * FROM employees WHERE account = '".$_SESSION['account']."'";
                       $queryName = mysqli_query($conn, $name); //Thực hiện câu truy vấn
                        if ($queryName->num_rows > 0) { //Kiểm tra số dòng
                         while ($row = mysqli_fetch_assoc($queryName)) { //Nếu có kết quả thì đưa tất cả vào bảng
                          if ($row['user_group']=="admin") {
                            echo "Xin chào ".$row['fullname'];
                          } else {
                            header('Location: index.php');
                          }
                        }
                       }        
                     }else{
                    header('Location: login.php'); 
                }
                ?>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="logout.php">Đăng xuất</a>
                </div>
              </li>
          </ul>
        </div>
      </div>
</nav>
      <main role="main" class="container md">                                  
        <div class="my-3 p-3 bg-white rounded shadow-sm">
          <div class="card card-nav-tabs card-plain">
            <div class="card-header card-header-danger">
                <!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
                <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                        <ul class="nav nav-tabs" data-tabs="tabs">
                            <li class="nav-item">
                                <a class="nav-link active" href="#employee" data-toggle="tab"><i class="material-icons">face</i>Nhân viên</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#shift" data-toggle="tab"><i class="material-icons">assignment</i>Lịch trực</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#salary" data-toggle="tab"><i class="material-icons">attach_money</i>Lương</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div><div class="card-body ">
                <div class="tab-content text-center">
                    <div class="tab-pane active" id="employee">
                        <section name="addEmployee">
                          <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="#">Nhân viên</a></li>
                              <li class="breadcrumb-item active" aria-current="page">Thên nhân viên</li>
                            </ol>
                          </nav>
                          <form method="get" action="add_emp.php" onsubmit="return validateEmp()">
                            <div class="form-row">
                              <div class="col-4">
                                <label class="bmd-label-static">Họ tên*</label>
                                <input type="text" name="fullname" id="fullname" class="form-control" >
                              </div>
                              <div class="col-2">
                                <label class="bmd-label-static">Số điện thoại*</label>
                                <input type="text" name="phone" id="phone" class="form-control" pattern="\d{10,10}">
                              </div>
                              <div class="col">
                              	<label class="bmd-label-static">Số CMND*</label>
                              	<input type="text" name="id_num" id="id_num" class="form-control" pattern="\d{9,12}">
                              </div>
                              <div class="col">
                                <label class="bmd-label-static">Địa chỉ*</label>
                                <input type="text" name="address" id="address" class="form-control" >
                              </div>
                            </div>
                            <div class="form-row">
                              <div class="col-2">
                              	<label class="bmd-label-static">Tài khoản*</label>
                              	<input type="text" name="account" id="account" class="form-control" pattern="^[a-z0-9_-]{3,15}$">
                              </div>
                              <div class="col-2">
                              	<label class="bmd-label-static">Mật khẩu*</label>
                              	<input type="password" name="password" id="password" class="form-control">
                              </div>
                              <div class="col-3">
                                <select class="selectpicker show-tick" data-style="select-with-transition" name="job" id="job">
                                  <option disabled selected>Công việc*</option>
                                  <option value="Phục vụ">Phục vụ</option>
                                  <option value="Chế biến">Chế biến</option>
                                  <option value="Order">Order</option>
                                </select>
                              </div>
                              <div class="col">
                                <label class="bmd-label-static">Năm vào làm*</label>
                                <input type="text" name="start" id="start" class="form-control" pattern="\d{4,4}">
                              </div>
                            </div>
                              <div class="row">
                                <div class="col-auto mr-auto"> </div>
                                <div class="col-auto">
                                <button class="btn btn-success" type="submit"><i class="material-icons">add</i> THÊM NHÂN VIÊN</button>
                                </div>
                              </div>
                          </form>
<script type="text/javascript">
  function validateEmp(){
    var fullname = document.getElementById('fullname').value;
    var account = document.getElementById('account').value;
    var password = document.getElementById('password').value;
    var id_num = document.getElementById('id_num').value;
    var address = document.getElementById('address').value;
    var phone = document.getElementById('phone').value;
    var job = document.getElementById('job').value;
    var start = document.getElementById('start').value;

    if (fullname!="" && account!="" && password!="" && id_num!="" && address!="" && phone!="" && job!="" && start!="") {
      return true;
    }else{
      alert("Vui lòng điền đủ thông tin có dấu *");
      return false;
    }
    return false;
  }
</script>
                          <hr>
                        </section>
                        <section name="listEmployee">
                          <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="#">Nhân viên</a></li>
                              <li class="breadcrumb-item active" aria-current="page">Danh sách nhân viên</li>
                            </ol>
                          </nav>
                          <div class="row">
                            <div class="col-auto mr-auto" id="numberOfEmployee">
                              <?php
                                include('sql_conn.php');
                                $numberOfEmployee = "SELECT COUNT(id) as total FROM employees";
                                $sqlCount = mysqli_query($conn, $numberOfEmployee); //Thực hiện truy vấn đếm dựa vào id
                                $data = mysqli_fetch_assoc($sqlCount); //Đưa tất cả dữ liệu select được vào mảng
                                echo "<h4>Có tất cả ".$data['total']." nhân viên</h4>";
                              ?>
                            </div>
                            
                            <!-- Bảng hiển thị danh sách nhân viên -->
                            <table class="table table-hover table-bordered" name="employeeTable">
                              <thead>
                                <tr>
                                  <th>Mã</th>
                                  <th class="text-left">Tên nhân viên</th>
                                  <th>Tài khoản</th>
                                  <th>Số điện thoại</th>
                                  <th>Số CMND</th>
                                  <th>Địa chỉ</th>
                                  <th>Công việc</th>
                                  <th>Năm vào</th>
                                  <th>Thao tác</th>
                                </tr>
                              </thead>
                              <tbody>
  <?php 
    $select_emp = "SELECT * FROM employees";
    $result_emp = mysqli_query($conn, $select_emp);
    if ($result_emp->num_rows > 0) {
      while ($row = mysqli_fetch_assoc($result_emp)) {
  ?>
    <tr>
      <td><?php echo $row['id']; ?></td>
      <th class="text-left"><?php echo $row['fullname']; ?></th>
      <td><?php echo $row['account']; ?></td>
      <td><?php echo $row['phone']; ?></td>
      <td><?php echo $row['id_num']; ?></td>
      <td class="text-left"><?php echo $row['address']; ?></td>
      <td><?php echo $row['job']; ?></td>
      <td><?php echo $row['start']; ?></td>
      <td>
        <?php 
          if ($row['user_group']=="admin") {
            echo "<i class='material-icons' style='color: green;'>verified_user</i>";
          }else{
        ?>
         <form method="get" action="delete_emp.php">
          <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#edit<?php echo $row['id']; ?>"><i class="material-icons">edit</i></button>
          <button type="submit" class="btn btn-sm btn-danger" name="delete" value="<?php echo $row['id']; ?>"><i class="material-icons">delete</i></button>
         </form>
        <?php
          }
        ?>
      </td>
    </tr>
    <!-- modal sua thong tin nhan vien -->
    <div class="modal fade" id="edit<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="editModal" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
         <form method="get" action="update_emp.php">
          <div class="modal-header">
            <h3 class="modal-title" id="editModal"><?php echo $row['fullname']; ?></h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body text-left">
            <div class="form-group">
              <label for="ephone">Số điện thoại</label>
              <input type="text" name="ephone" id="ephone" pattern="\d{10,10}" class="form-control">
            </div>
            <div class="form-group">
              <label for="eaddress">Địa chỉ</label>
              <input type="text" name="eaddress" id="eaddress" class="form-control">
            </div>
            <div class="form-group">
              <label for="ejob">Công việc</label>
              <select class="form-control" data-style="btn btn-link" id="ejob" name="ejob">
                <option disabled selected value="">Công việc*</option>
                <option value="Phục vụ">Phục vụ</option>
                <option value="Chế biến">Chế biến</option>
                <option value="Order">Order</option>
              </select>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="update" value="<?php echo $row['id']; ?>" class="btn btn-primary">Lưu</button>
          </div>
         </form>
        </div>
      </div>
    </div>
  <?php
      }
    }
  ?>
                              </tbody>
                            </table>
                          </div>
                        </section>
                    </div>
                    <div class="tab-pane" id="shift">
                      <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="#">Lịch trực</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Ca trực</li>
                        </ol>
                      </nav>
                      <hr>
                      <table class="table table-hover table-bordered" name="shifts">
                      <thead>
                        <tr>
                          <th scope="col-md-5">Ca</th>
                          <th scope="col-md-5">Thứ</th>
                          <th scope="col-auto">Tên nhân viên</th>
                          <th scope="col-md-2">Xóa</th>
                        </tr>
                      </thead>
                      <tbody>
                          <?php
                            include 'sql_conn.php';
                            error_reporting(E_PARSE);
                            $selectShift = "SELECT a.fullname, b.shiftName, b.dayOfShift, b.id FROM employees as a, shifts as b WHERE a.account = b.empAccount ORDER BY a.fullname";
                            $selectShift_Result = mysqli_query($conn, $selectShift);
                            if ($selectShift_Result->num_rows > 0) {
                              while ($row = mysqli_fetch_assoc($selectShift_Result)) {
                                echo '<tr><td>'.$row['shiftName'].'</td>
                                  <td>'.$row['dayOfShift'].'</td>
                                  <th>'.$row['fullname'].'</th>
                                  <td>
                                  <form method="post">
                                  <button type="submit" rel="tooltip" class="btn btn-danger btn-sm" name="delBtn1'.$row["id"].'">
                                                              <i class="material-icons">delete</i>
                                                          </button></form></td></tr>';

                                                  $deleteBtn1 = "delBtn1".$row['id'];
                                                    if (isset($_POST[$deleteBtn1])) { //Kiểm tra nút xóa có được nhấn hay chưa
                                                      $del = "DELETE FROM shifts WHERE id = '".$row['id']."'";
                                                      $del_query = mysqli_query($conn, $del); //Thực thi câu lệnh xóa
                                                      echo '<script type="text/javascript">
                                                            window.location.href = "employee.php";
                                                            </script>'; //Dùng JS để load lại page sau khi xóa
                                                        }
                              }
                            }

                          ?>
                      </tbody>
                    </table>  
                    </div>
                    <div class="tab-pane" id="salary">
                      <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="#">Lương</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Lương nhân viên</li>
                        </ol>
                      </nav>
                      <hr>
                      <?php
                        include 'sql_conn.php';
                        error_reporting(E_PARSE);

                        $select = "SELECT * FROM employees";
                        $select_query = mysqli_query($conn, $select);
                        $account = array(); 
                        if ($select_query->num_rows > 0) {
                          while ($row = mysqli_fetch_assoc($select_query)) {
                            array_push($account, $row['account']);
                          }
                        }
                        echo '<table class="table table-hover table-bordered">
                              <thead>
                                <tr>
                                  <th scope="col">STT</th>
                                  <th scope="col">Họ tên</th>
                                  <th scope="col">Số ca trực/Tháng</th>
                                  <th scope="col">Tổng tiền lương</th>
                                </tr>
                              </thead>
                              <tbody>';
                        foreach ($account as $key) {
                          $create = "CREATE VIEW ".$key." AS
                              SELECT empAccount as Account, COUNT(shiftName) as sumOfShifts, COUNT(shiftName)*salaryOfShift as sumOfSalary
                              FROM shifts
                              WHERE empAccount='".$key."'";
                          $create_query = mysqli_query($conn, $create);

                          $sel = "SELECT a.*, b.fullname as fullname, b.id as ID 
                              FROM ".$key." as a, employees as b 
                              WHERE sumOfShifts > 0 
                                AND a.Account = b.account";
                          $sel_query = mysqli_query($conn, $sel);
                          if ($sel_query->num_rows > 0) {
                            while ($row = mysqli_fetch_assoc($sel_query)) {
                              echo '<tr>
                                  <th>'.$row['ID'].'</th>
                                  <td>'.$row['fullname'].'</td>
                                  <td class="text-right">'.$row['sumOfShifts'].'</td>
                                  <td class="text-right">'.$row['sumOfSalary'].' VNĐ</td>
                                  </tr>';
                            }
                          } 
                          $dropView = "DROP VIEW ".$key."";
                          $dropView_query = mysqli_query($conn, $dropView);
                        }
                        echo  '</tbody>
                            </table>';
                      ?>
                    </div>
                </div>
            </div>
          </div>
          
        </div>
      </main>
  </body>
  <footer class="footer footer-default" >
    <div class="container">
      <div class="copyright float-left">
          &copy;
          <script>
              document.write(new Date().getFullYear())
          </script>
      </div>
      <div class="copyright float-right">
          Made with <i class="material-icons">all_inclusive</i> love by
          <a href="https://www.facebook.com/giangpt2808">Giang</a>
      </div>
    </div>
  </footer>
<!--   Core JS Files   -->
<script src="assets/js/core/jquery.min.js" type="text/javascript"></script>
<script src="assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
<script src="assets/js/plugins/moment.min.js"></script>
<!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
<script src="assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
<!--  Google Maps Plugin  -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
<script src="assets/js/plugins/bootstrap-tagsinput.js"></script>
<!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
<script src="assets/js/plugins/bootstrap-selectpicker.js" type="text/javascript"></script>
<!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="assets/js/plugins/jasny-bootstrap.min.js" type="text/javascript"></script>
<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
<script src="assets/js/material-kit.js?v=2.1.1" type="text/javascript"></script></body>
</html>