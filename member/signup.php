<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	<title></title>

	<!-- bootstrap -->
	<link rel="stylesheet" type="text/css" href="../assets/custom/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/custom/css/bootstrap-table.css">
	<link rel="stylesheet" type="text/css" href="../assets/custom/css/datepicker.css">
	<link rel="stylesheet" type="text/css" href="../assets/custom/css/datepicker3.css">
	<link rel="stylesheet" type="text/css" href="../assets/custom/css/styles.css">


	<!-- datatables -->
	<link rel="stylesheet" type="text/css" href="../assets/datatables/css/jquery.dataTables.min.css">

	<!-- fontawesome -->
	<link rel="stylesheet" type="text/css" href="../assets/fontawesome/css/font-awesome.min.css">

	<!-- custom -->
	<link rel="stylesheet" type="text/css" href="../assets/mycustom/css/styles.css">

	<!-- toastr -->
	<link rel="stylesheet" type="text/css" href="../assets/toastr/css/toastr.css">


</head>
<body class="index-body login">


	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Bật tắt Nav</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Quản Lý Phòng Thí Nghiệm HUNRE</a>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>	


<div class="container-fluid">


	<div class="panel">
		<div class="panel-body">


		<div class="row">
			<div class="col-md-4 col-md-offset-2 student-div">
				<div class="panel panel-blue">
					<div class="panel-body">
						<h4 class="text-center color-white">
						<i class="fa fa-user fa-2x"></i> &nbsp;
						Tôi là sinh viên
						</h4>
					</div>
				</div>
			</div>
			<div class="col-md-4 faculty-div">
				<div class="panel panel-blue">
					<div class="panel-body">
						<h4 class="text-center color-white">
							<i class="fa fa-graduation-cap fa-2x"></i> &nbsp;
							Khoa
						</h4>
					</div>
				</div>
			</div>
		</div>


			<div class="col-md-4 col-sm-12 col-xs-12 col-md-offset-4">
				<form class="frm_student_sign">
					<h4 class="">Đăng ký - Sinh viên</h4>
					<hr>
					<div class="form-group">
						<label> ID </label>
						<input type="number" name="sid_number" class="form-control" required autocomplete="off">
					</div>
					<div class="form-group">
						<label>Họ</label>
						<input type="text" name="s_fname" class="form-control" required autocomplete="off">
					</div>
					<div class="form-group">
						<label>Tên</label>
						<input type="text" name="s_lname" class="form-control" required autocomplete="off">
					</div>
					<div class="form-group">
						<label>Giới tính</label>
						<select name="s_gender" class="form-control" required>
							<option disabled selected>Giới tính</option>
							<option>Nam</option>
							<option>Nữ</option>
						</select>
					</div>
					<div class="form-group">
						<label>Liên hệ</label>
						<input type="tel" name="s_contact" class="form-control" required autocomplete="off">
					</div>
					<div class="form-group">
						<label>Khoa</label>
						<select name="s_department" class="form-control" required>
							<option disabled selected>Chọn khoa</option>
							<option>CNTT</option>
							<option>TNN</option>
							<option>MMT</option>
							<option>Luật</option>
							<option>KT</option>
							<option>NNA</option>
							<option>VT</option>
						</select>
					</div>
					<div class="form-group hide">
						<label>Ngành</label>
						<input type="text" name="s_major" class="form-control" autocomplete="off">
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-md-6">
								<label>Năm</label>
								<select name="s_year" class="form-control" required>
									<option selected disabled>Chọn năm</option>
									<option>Nhất</option>
									<option>Hai</option>
									<option>Ba</option>
									<option>Tư</option>
									<option>Năm</option>
								</select>
							</div>
							<div class="col-md-6">
								<label>Section</label>
								<input type="text" name="s_section" class="form-control" required autocomplete="off">
							</div>
						</div>
					</div>
					<div class="form-group">
						<label>Mật khẩu</label>
						<input type="password" name="s_password" class="form-control" required>
					</div>
					<div class="form-group">
						<button class="btn btn-primary btn_student" type="submit">Đăng ký</button>
					</div>
				</form>

				<form class="frm_faculty_sign hide">
					<h4 class="">Đăng ký Khoa</h4>
					<hr>
					<div class="form-group">
						<label> ID </label>
						<input type="number" name="f_id" class="form-control" required autocomplete="off">
					</div>
					<div class="form-group">
						<label>Họ</label>
						<input type="text" name="f_fname" class="form-control" required autocomplete="off">
					</div>
					<div class="form-group">
						<label>Tên</label>
						<input type="text" name="f_lname" class="form-control" required autocomplete="off">
					</div>
					<div class="form-group">
						<label>Giới tính</label>
						<select name="f_gender" class="form-control" required>
							<option disabled selected>Chọn giới tính</option>
							<option>Nam</option>
							<option>Nữ</option>
						</select>
					</div>
					<div class="form-group">
						<label>Liên hệ</label>
						<input type="tel" name="f_contact" class="form-control" required autocomplete="off">
					</div>
					<div class="form-group">
						<label>Ngành công tác</label>
						<select name="f_department" class="form-control" required>
							<option disabled selected>Chọn ngành</option>
							<option>CNTT</option>
							<option>TNN</option>
							<option>MMT</option>
							<option>Luật</option>
							<option>KT</option>
							<option>NNA</option>
							<option>VT</option>
						</select>
					</div>
					<div class="form-group">
						<label>Mật khẩu</label>
						<input type="password" name="f_password" class="form-control" required autocomplete="off">
					</div>
					<div class="form-group">
						<button class="btn btn-primary btn_faculty" type="submit">Đăng ký</button>
					</div>
				</form>
			</div>

		</div>
	</div>
	
</div>



<?php include 'footer.php'; ?>