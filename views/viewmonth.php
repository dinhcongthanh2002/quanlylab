<?php 
	include 'header.php';
?>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 col-md-2 sidebar">
		<form role="search">
			<div class="form-group">
				<!-- <input type="text" class="form-control" placeholder="Search"> -->
			</div>
		</form>
		<ul class="nav menu">
			<li class="">
				<a href="dashboard">
					<svg class="glyph stroked dashboard-dial">
						<use xlink:href="#stroked-dashboard-dial"></use>
					</svg>
					Dashboard
				</a>
			</li>
			<li class="parent ">
				<a href="#sub-item-1" data-toggle="collapse">
					<span data-toggle="collapse" href="#sub-item-1"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg></span> Chuyển giao 
				</a>
				<ul class="children collapse" id="sub-item-1">
					
<li>
						<a class="" href="reservation">
							<svg class="glyph stroked eye">
								<use xlink:href="#stroked-eye"/>
							</svg>
							Kho
						</a>
					</li>


					<li>
						<a class="" href="new">
							<svg class="glyph stroked plus sign">
								<use xlink:href="#stroked-plus-sign"/>
							</svg>
							Mới
						</a>
					</li>
					<li>
						<a class="" href="borrow">
							<svg class="glyph stroked download">
								<use xlink:href="#stroked-download"/>
							</svg>
							Đồ đã mượn
						</a>
					</li>
					<li>
						<a class="" href="return">
							<svg class="glyph stroked checkmark">
								<use xlink:href="#stroked-checkmark"/>
							</svg>
							Đồ đã trả
						</a>
					</li>
				</ul>
			</li>
			<?php if($_SESSION['admin_type'] == 1){ ?>
			<li>
				<a href="items">
					<svg class="glyph stroked desktop">
						<use xlink:href="#stroked-desktop"/>
					</svg>
					Đồ
				</a>
			</li>
			<li>
				<a href="members">
					<svg class="glyph stroked male user ">
						<use xlink:href="#stroked-male-user"/>
					</svg>
					Người mượn
				</a>
			</li>
			<li>
				<a href="room">
					<svg class="glyph stroked app-window">
						<use xlink:href="#stroked-app-window"></use>
					</svg>
					Phòng
				</a>
			</li>
			<li class="active">
				<a href="#">
					<svg class="glyph stroked clipboard with paper">
						<use xlink:href="#stroked-clipboard-with-paper"/>
					</svg>
					Hành trang
				</a>
			</li>
			<li>
				<a href="report">
					<svg class="glyph stroked line-graph">
						<use xlink:href="#stroked-line-graph"/>
					</svg>
					Báo cáo
				</a>
			</li>
			<li>
				<a href="user">
					<svg class="glyph stroked female user">
						<use xlink:href="#stroked-female-user"/>
					</svg>
					Người dùng
				</a>
			</li>
			<?php
				}
				($_SESSION['admin_type'] == 1) ? include('include_history.php') : false;
			 ?>
		</ul>
	</div><!--/.sidebar-->


	<div class="col-sm-9 col-lg-10 col-md-10 col-lg-offset-2 col-md-offset-2 col-sm-offset-3 main">
		
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="dashboard"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Hành trang</li>
			</ol>
			<div class="breadcrumb">
				<div class="row">
					<div class="col-md-12">
						<ul class="nav nav-pills">
							<li class="active"><a href="#new" data-toggle="tab"><i class="fa fa-list"></i>&nbsp;&nbsp;Mới</a></li>
							<li><a href="#old" data-toggle="tab"><i class="fa fa-question"></i>&nbsp;&nbsp;Cũ</a></li>
							<li><a href="#lost" data-toggle="tab"><i class="fa fa-question"></i>&nbsp;&nbsp;Mất</a></li>
							<li><a href="#damaged" data-toggle="tab"><i class="fa fa-file-code-o"></i>&nbsp;&nbsp;Hỏng</a></li>
							<li><a href="#pulledout" data-toggle="tab"><i class="fa fa-chevron-circle-right"></i>&nbsp;&nbsp;Tổng</a></li>
							<li><a href="#transferred" data-toggle="tab"><i class="fa fa-chevron-circle-right"></i>&nbsp;&nbsp;Giao</a></li>
							<li><a href="#report2" data-toggle="tab"><i class="fa fa-chevron-circle-right"></i>&nbsp;&nbsp;Mượn</a></li>
						</ul>
					</div>
					<!-- <div class="col-md-2">
						<button class="btn btn-primary add_equipment ">
							<svg class="glyph stroked plus sign">
								<use xlink:href="#stroked-plus-sign"/>
							</svg> &nbsp;
							Add Equipment
						</button>
					</div> -->
				</div>
			</div>
		</div><!--/.row-->


		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="tab-content">
							<div class="tab-pane fade in active" id="new">
								<table class="table table_inventory_new">
									<thead>
										<tr>
											<th>Model</th>
											<th>Loại</th>
											<th>Hãng</th>
											<th>Số lượng</th>
											<th>Còn</th>
										</tr>
									</thead>
								</table>
							</div>
							<div class="tab-pane fade" id="old">
								<table class="table table_inventory_old">
									<thead>
										<tr>
											<th>Model</th>
											<th>Loại</th>
											<th>Hãng</th>
											<th>Số lượng</th>
											<th>Ghi chú</th>
										</tr>
									</thead>
								</table>
							</div>
							<div class="tab-pane fade" id="lost">
								<table class="table table_inventory_lost">
									<thead>
										<tr>
											<th>Model</th>
											<th>Loại</th>
											<th>Hãng</th>
											<th>Số lượng</th>
											<th>Ghi chú</th>
										</tr>
									</thead>
								</table>
							</div>
							<div class="tab-pane fade" id="damaged">
								<table class="table table_inventory_damaged">
									<thead>
										<tr>
											<th>Model</th>
											<th>Loại</th>
											<th>Brand</th>
											<th>Số lượng</th>
											<th>Ghi chú</th>
										</tr>
									</thead>
								</table>
							</div>
							<div class="tab-pane fade" id="pulledout">
								<table class="table table_inventory_all">
									<thead>
										<tr>
											<th>Loại</th>
											<th>Có sẵn</th>
											<th>Không sẵn có</th>
											<th>Tổng</th>
										</tr>
									</thead>
								</table>
							</div>
							<div class="tab-pane fade" id="transferred">
								<table class="table table_inventory_transfer">
									<thead>
										<tr>
											<th>Model</th>
											<th>Loại</th>
											<th>Hãng</th>
											<th>Số lượng</th>
											<th>Phòng</th>
										</tr>
									</thead>
								</table>
							</div>
							<div class="tab-pane fade" id="report2">
								<table class="table table_inventory_transfer">
									<thead>
									
										
										<tr>	
										
										 <div id="" style=" margin-right:20px">
										<label>Chọn Tháng:&nbsp &nbsp </label>
																					<?php
																								
																							$pic=mysql_query("Select * from borrow where progid<>0 order by borrow asc");
																						echo "<select name = 'month' onchange='location = this.value;'class ='span2' style=\"margin-top:-10px; width:280px; border: 2px solid #0099CC;\">";		
				                                                                        echo "</option>";while($pics=mysql_fetch_array($pic)){
																							$fname = $pics['date_return'];
																							$mname = $pics['date_return'];

																						echo "<option   value = 'viewreport.php?program={$fname}'";
																						if ($selected_venue_id == $fname)
																						echo "selected = 'selected'";
																						echo strtoupper( ">{$mname}</a></option>");
																						}
																						echo "</select>";
																						?>
										
										</div>
									<hr/>
										 
											<th>Người mượn</th>
											<th>Đồ</th>
											<th>Thời điểm mượn</th>
											<th>Thời điểm trả</th>
											
										</tr>
									</thead>
								</table>
							</div>
						</div>
					</div>
				</div><!-- panel -->
			</div><!-- panel -->
		</div><!-- row -->


	</div>



<?php include 'footer.php'; ?>