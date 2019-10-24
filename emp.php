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
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/2.14.1/moment.min.js"></script> 
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>

	<script type='text/javascript'>
		$( document ).ready(function() {
			$('#datetimepicker1').datetimepicker();
		});
	</script>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-success sticky-top">
      <div class="container">
        <a class="navbar-brand">HỆ THỐNG QUẢN LÝ</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="sr-only">Toggle navigation</span>
        <span class="navbar-toggler-icon"></span>
        <span class="navbar-toggler-icon"></span>
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        	<ul class="navbar-nav col-auto mr-auto"></ul>
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
                          echo "Xin chào ".$row['fullname']; //Đúng thì cho phép truy cập và hiện xin chào
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
            <div class="card-header card-header-warning">
                <!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
                <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                        <ul class="nav nav-tabs" data-tabs="tabs">
                            <li class="nav-item">
                                <a class="nav-link active" href="#employee" data-toggle="tab"><i class="material-icons">person</i>Nhân viên</a>
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
                        <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="#">Nhân viên</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Thông tin chi tiết</li>
                        </ol>
                      </nav>
                      <div class="col-md">
		                <div class="rotating-card-container manual-flip" style="margin-bottom: 30px;">
		                  <div class="card card-rotate">
		                    <div class="front front-background" style="background-image: url(&quot;assets/images/cover.jpg&quot;); width: 350px;">
		                      <div class="card-body">
		                        <h3 class="card-title">Thông tin cá Nhân</h3>
		                        <div class="stats text-center">
		                          <button type="button" name="button" class="btn btn-success btn-fill btn-round btn-rotate">
		                            <i class="material-icons">refresh</i> Xem
		                          <div class="ripple-container"></div></button>
		                        </div>
		                      </div>
		                    </div>
		                    <div class="back back-background" style="background-image: url(&quot;assets/images/cover.jpg&quot;); width: 350px;">
		                      <div class="card-body">
		                        <?php
						    	include ('sql_conn.php');

						    	$selectEmp = "SELECT * FROM employees WHERE account = '".$_SESSION['account']."'";
						    	$selectEmp_query = mysqli_query($conn, $selectEmp);

						    	if ($selectEmp_query->num_rows > 0) {
						    		while ($row = mysqli_fetch_assoc($selectEmp_query)) {
						    			echo '<h3 class="card-title">
						                          '.$row["fullname"].'
						                        </h3>
						                        <p class="card-description">
						                        Số CMND: '.$row["id_num"].' <br>
						                        Địa chỉ: '.$row["address"].' <br>
						                        Số điện thoại: '.$row["phone"].' <br>
						                        Công việc: '.$row["job"].' <br>
						                        Năm vào làm: '.$row["start"].' <br>
						                        </p>
						                        <div class="stats text-center">
						                          <button type="button" name="button" class="btn btn-primary btn-fill btn-round btn-rotate">
						                            <i class="material-icons">refresh</i> Trở lại
						                          <div class="ripple-container"></div></button>
						                        </div>';
						    		}
						    	}
						    ?>
		                      </div>
		                    </div>
		                  </div>
		                </div>
		              </div>
                    </div>
                    <div class="tab-pane" id="shift">
                      <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="#">Lịch trực</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Đăng ký trực</li>
                        </ol>
                      </nav>
                      <hr>
                        <form method="post" style="text-align: left;">
						  <div class="form-group">
						  	<label for="shiftOfDay">Chọn ca</label>
						  	<div class="col-md-8" id="shiftOfDay">
						    <div class="form-check form-check-inline">
						      <label class="form-check-label">
						          <input class="form-check-input" type="checkbox" value="Ca 1" id="shift1" name="shift[]">
						          Ca 1 (6:00 - 10:00)
						          <span class="form-check-sign">
						            <span class="check"></span>
						          </span>
						      </label>
						    </div>
						    <div class="form-check form-check-inline">
						      <label class="form-check-label">
						          <input class="form-check-input" type="checkbox" value="Ca 2" id="shift2" name="shift[]">
						          Ca 2 (10:00 - 14:00)
						          <span class="form-check-sign">
						            <span class="check"></span>
						          </span>
						      </label>
						    </div>
						    <div class="form-check form-check-inline">
						      <label class="form-check-label">
						          <input class="form-check-input" type="checkbox" value="Ca 3" id="shift3" name="shift[]">
						          Ca 3 (14:00 - 18:00)
						          <span class="form-check-sign">
						            <span class="check"></span>
						          </span>
						      </label>
						    </div>
						    <div class="form-check form-check-inline">
						      <label class="form-check-label">
						          <input class="form-check-input" type="checkbox" value="Ca 4" id="shift4" name="shift[]">
						          Ca 4 (18:00 - 22:00)
						          <span class="form-check-sign">
						            <span class="check"></span>
						          </span>
						      </label>
						    </div>
						    
							</div>
						  </div>
						  <label for="dayOfWeek">Chọn ngày</label>
						  	<div class="col-md-8" id="dayOfWeek">
						    <div class="form-check form-check-inline">
						      <label class="form-check-label">
						          <input class="form-check-input" type="checkbox" value="2" id="checkbox1" name="day[]">
						          Thứ 2
						          <span class="form-check-sign">
						            <span class="check"></span>
						          </span>
						      </label>
						    </div>
						    <div class="form-check form-check-inline">
						      <label class="form-check-label">
						          <input class="form-check-input" type="checkbox" value="3" id="checkbox2" name="day[]">
						          Thứ 3
						          <span class="form-check-sign">
						            <span class="check"></span>
						          </span>
						      </label>
						    </div>
						    <div class="form-check form-check-inline">
						      <label class="form-check-label">
						          <input class="form-check-input" type="checkbox" value="4" id="checkbox3" name="day[]">
						          Thứ 4
						          <span class="form-check-sign">
						            <span class="check"></span>
						          </span>
						      </label>
						    </div>
						    <div class="form-check form-check-inline">
						      <label class="form-check-label">
						          <input class="form-check-input" type="checkbox" value="5" id="checkbox4" name="day[]">
						          Thứ 5
						          <span class="form-check-sign">
						            <span class="check"></span>
						          </span>
						      </label>
						    </div>
						    <div class="form-check form-check-inline">
						      <label class="form-check-label">
						          <input class="form-check-input" type="checkbox" value="6" id="checkbox5" name="day[]">
						          Thứ 6
						          <span class="form-check-sign">
						            <span class="check"></span>
						          </span>
						      </label>
						    </div>
						    <div class="form-check form-check-inline">
						      <label class="form-check-label">
						          <input class="form-check-input" type="checkbox" value="7" id="checkbox6" name="day[]">
						          Thứ 7
						          <span class="form-check-sign">
						            <span class="check"></span>
						          </span>
						      </label>
						    </div>
						    <div class="form-check form-check-inline">
						      <label class="form-check-label">
						          <input class="form-check-input" type="checkbox" value="8" id="checkbox7" name="day[]">
						          Chủ nhật
						          <span class="form-check-sign">
						            <span class="check"></span>
						          </span>
						      </label>
						    </div>
						</div>
						<div class="row">
                            <div class="col-auto mr-auto"> </div>
                            <div class="col-auto">
						  <button type="submit" class="btn btn-success" name="register">Đăng ký</button>
							</div>
						</div>
						</form>
						<?php
							include 'sql_conn.php';
							error_reporting(E_PARSE);
							if (isset($_POST["register"])) {
								if (!empty($_POST["shift"])) {
									foreach ($_POST["shift"] as $shifts) {
										if (!empty($_POST["day"])) {
											foreach ($_POST["day"] as $day) {
												$check = "SELECT shiftName, dayOfShift FROM shifts WHERE empAccount ='".$_SESSION['account']."' AND shiftName='".$shifts."' AND dayOfShift='".$day."'";
												$check_query = mysqli_query($conn, $check);
												if ($check_query->num_rows > 0)
													echo "<script>alert('Ca trực bị trùng!');</script>";
												else{
													$addShift = "INSERT INTO shifts (shiftName, dayOfShift, empAccount, salaryOfShift) VALUES ('".$shifts."', '".$day."', '".$_SESSION["account"]."', '100000')";
													$query0 = mysqli_query($conn, $addShift);
													}
												}
											}
										}
									}
								}
						?>
                      <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="#">Lịch trực</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Danh sách ca trực</li>
                        </ol>
                      </nav>
                      <table class="table table-hover ">
					  <thead>
					    <tr>
					      <th scope="col-md-5">Ca</th>
					      <th scope="col-md-5">Thứ</th>
					      <th scope="col-md-2" class="text-right">Xóa</th>
					    </tr>
					  </thead>
					  <tbody>
						    <?php
						    	include 'sql_conn.php';
						    	// error_reporting(E_PARSE);
						    	$selectShift = "SELECT id, shiftName, dayOfShift FROM shifts WHERE empAccount = '".$_SESSION['account']."'";
						    	$selectShift_Result = mysqli_query($conn, $selectShift);
						    	if ($selectShift_Result->num_rows > 0) {
						    		while ($row = mysqli_fetch_assoc($selectShift_Result)) {
						    			echo '<tr><th>'.$row['shiftName'].'</th>
						    				<td>'.$row['dayOfShift'].'</td>
						    				<td class="text-right">
						    				<form method="post">
                                  <button type="submit" rel="tooltip" class="btn btn-danger btn-sm" name="delBtn1'.$row["id"].'">
                                                              <i class="material-icons">delete</i>
                                                          </button></form></td></tr>';

                                                  $deleteBtn1 = "delBtn1".$row['id'];
                                                    if (isset($_POST[$deleteBtn1])) { //Kiểm tra nút xóa có được nhấn hay chưa
                                                      $del = "DELETE FROM shifts WHERE id = '".$row['id']."'";
                                                      $del_query = mysqli_query($conn, $del); //Thực thi câu lệnh xóa
                                                      echo '<script type="text/javascript">
                                                            window.location.href = "emp.php";
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
                      <table class="table table-hover table-bordered" name="salary">
                        <thead>
                          <tr>
                            <th scope="col">STT</th>
                            <th scope="col">Tên nhân viên</th>
                            <th scope="col">Số ca trực/Tháng</th>
                            <th scope="col">Lương</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                            include 'sql_conn.php';
                            $createView = "CREATE VIEW ".$_SESSION['account']." AS
                                        SELECT b.fullname as fullname, b.id as id, COUNT(a.dayOfShift) as soca, COUNT(a.dayOfShift)*a.salaryOfShift as tongtien FROM shifts as a, employees as b WHERE a.empAccount = b.account AND b.account='".$_SESSION['account']."'"; 
                            $createView_query = mysqli_query($conn, $createView);                  
                            $find = "SELECT * FROM ".$_SESSION['account']."";    
                            $findQuery = mysqli_query($conn, $find); //Thực hiện câu truy vấn
                              if (mysqli_num_rows($findQuery) > 0) { //Kiểm tra số dòng
                                while ($rows = mysqli_fetch_assoc($findQuery)) {
                                      echo '<tr><td>'.$rows["id"].'</td>
                                           <td>'.$rows["fullname"].'</td>
                                           <td>'.$rows["soca"].'</td>
                                           <td>'.$rows["tongtien"].' VNĐ</td></tr>';
                              }
                            }
                            $dropView = "DROP VIEW ".$_SESSION['account']."";
                            $dropView_query = mysqli_query($conn, $dropView);
                          ?>
                        </tbody>
                      </table>
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