<?php
session_start();
if (empty($_COOKIE['auser'])) {
    echo 	"<script>";
	echo	"alert('กรุณาเข้าสู่ระบบ');";
	echo "window.location='login.php'";
	echo 	"</script>";
     exit;
}
?>
<?php
require('../config/config.php');
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">
    <meta name="author" content="">
    <title>BEEBY SHOP DASHBOARD</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body class="fixed-nav sticky-footer bg-dark" id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <a class="navbar-brand" href="#">BEEBY SHOP DASHBOARD</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
            </a>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="เพิ่มสินค้า">
            <a class="nav-link" href="index.php">
              <i class="fa fa-fw fa-list"></i>
              <span class="nav-link-text">
                รายการสินค้า
              </span>
            </a>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="เพิ่มสินค้า">
            <a class="nav-link" href="add_product.php">
              <i class="fa fa-fw fa-plus"></i>
              <span class="nav-link-text">
                เพิ่มสินค้า
              </span>
            </a>
          </li>
		 <li class="nav-item"  data-toggle="tooltip" data-placement="right" title="ออร์เดอร์สินค้า">
            <a class="nav-link" href="view_orders.php">
              <i class="fa fa-shopping-cart"></i>
              <span class="nav-link-text">
                ออร์เดอร์สินค้า
		  </span>
            </a>
          </li>
		 <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Contact">
            <a class="nav-link" href="view_contact.php">
              <i class="fa fa-envelope"></i>
              <span class="nav-link-text">
                Contact
              </span>
            </a>
          </li>
		<li class="nav-item" data-toggle="tooltip" data-placement="right" title="สมาชิก">
            <a class="nav-link" href="user.php">
              <i class="fa fa-fw fa-user-circle"></i>
              <span class="nav-link-text">
                สมาชิก
		  </span>
            </a>
          </li>
        </ul>
	  
        <ul class="navbar-nav sidenav-toggler">
          <li class="nav-item">
            <a class="nav-link text-center" id="sidenavToggler">
              <i class="fa fa-fw fa-angle-left"></i>
            </a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle mr-lg-2" href="#" id="messagesDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-fw fa-envelope"></i>
              <span class="d-lg-none">Messages
                <span class="badge badge-pill badge-primary">12 New</span>
              </span>
              <span class="new-indicator text-primary d-none d-lg-block">
                <i class="fa fa-fw fa-circle"></i>
                <span class="number">12</span>
              </span>
            </a>
            <div class="dropdown-menu" aria-labelledby="messagesDropdown">
              <h6 class="dropdown-header">New Messages:</h6>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">
                <strong>David Miller</strong>
                <span class="small float-right text-muted">11:21 AM</span>
                <div class="dropdown-message small">Hey there! This new version of SB Admin is pretty awesome! These messages clip off when they reach the end of the box so they don't overflow over to the sides!</div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">
                <strong>Jane Smith</strong>
                <span class="small float-right text-muted">11:21 AM</span>
                <div class="dropdown-message small">I was wondering if you could meet for an appointment at 3:00 instead of 4:00. Thanks!</div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">
                <strong>John Doe</strong>
                <span class="small float-right text-muted">11:21 AM</span>
                <div class="dropdown-message small">I've sent the final files over to you for review. When you're able to sign off of them let me know and we can discuss distribution.</div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item small" href="#">
                View all messages
              </a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle mr-lg-2" href="#" id="alertsDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-fw fa-bell"></i>
              <span class="d-lg-none">Alerts
                <span class="badge badge-pill badge-warning">6 New</span>
              </span>
              <span class="new-indicator text-warning d-none d-lg-block">
                <i class="fa fa-fw fa-circle"></i>
                <span class="number">6</span>
              </span>
            </a>
            <div class="dropdown-menu" aria-labelledby="alertsDropdown">
              <h6 class="dropdown-header">New Alerts:</h6>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">
                <span class="text-success">
                  <strong>
                    <i class="fa fa-long-arrow-up"></i>
                    Status Update</strong>
                </span>
                <span class="small float-right text-muted">11:21 AM</span>
                <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">
                <span class="text-danger">
                  <strong>
                    <i class="fa fa-long-arrow-down"></i>
                    Status Update</strong>
                </span>
                <span class="small float-right text-muted">11:21 AM</span>
                <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">
                <span class="text-success">
                  <strong>
                    <i class="fa fa-long-arrow-up"></i>
                    Status Update</strong>
                </span>
                <span class="small float-right text-muted">11:21 AM</span>
                <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item small" href="#">
                View all alerts
              </a>
            </div>
          </li>
          <li class="nav-item">
            <form class="form-inline my-2 my-lg-0 mr-lg-2">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
                  <button class="btn btn-primary" type="button">
                    <i class="fa fa-search"></i>
                  </button>
                </span>
              </div>
            </form>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
              <i class="fa fa-fw fa-sign-out"></i>
              Logout</a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="content-wrapper">

      <div class="container-fluid">
       
<!-- Breadcrumbs -->
	<ol class="breadcrumb">
		  <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">สินค้า</li>
        </ol>
<!-- Example Tables Card -->
<div class="card mb-3">
  <div class="card-header">
     <i class="fa fa-table"></i>
     รายการสินค้าทั้งหมด
</div>
  <div   class="card-body">
  <div   class="table-responsive">
  <table class="table table-bordered" width="100%" 
         id="dataTable" cellspacing="0">
<thead>
<tr>
   <th>ลำดับที่</th>
   <th>ภาพสินค้า</th>
   <th>รหัสสินค้า</th>
   <th>ชื่อสินค้า</th>
   <th>ราคาสินค้า</th>
   <th>จำนวนสินค้า</th>
   <th>ลดราคา(%)</th>
   <th>จัดการ</th>
</tr>
</thead>
<tfoot>
<tr>
    <th>ลำดับที่</th>
    <th>ภาพสินค้า</th>
    <th>รหัสสินค้า</th>
    <th>ชื่อสินค้า</th>
    <th>ราคาสินค้า</th>
	<th>จำนวนสินค้า</th>
	<th>ลดราคา(%)</th>
    <th>จัดการ</th>
</tr>
</tfoot>
<tbody>
<?php $str = "SELECT * FROM tblproduct";
      $rs = mysqli_query($link,$str);
      $num=1;
      while ($data = mysqli_fetch_array($rs)) {
?>
      <tr>
        <td><?php echo $num;?></td>
        <td><img src="../<?php echo $data['image'];?>" 
                 width="50" height="50"></td>
        <td><?php echo $data['code'];?></td>
        <td><?php echo $data['name'];?></td>
        <td><?php echo $data['price'];?></td>
		<td>
	  <form method="post" action="unit.php?id=<?=$data['id'];?>">
		<input id="name" class="col-1" name="unit" type="text" 
			   value="<?php echo $data['unit'];?>" 
			   class="form-control input-md" required="">
		<button type="submit">เพิ่มจำนวน</button>
	  </form>
		</td>
	  <td>
	  <form method="post" action="sale.php?id=<?=$data['id'];?>">
	  <input id="name" class="col-1" name="sale" type="text" 
			 value="<?php echo $data['sale'];?>" 
			 class="form-control input-md" required="">
	  <button type="submit">ลดราคา (%)</button>
	  </form>
	  </td>
      <td>
		  <a href="edit_product.php?code=<?=$data['code'];?>" 
			 role="button">  <i class="fa fa-fw fa-cog"></i>แก้ไข</a>
          <a href="JavaScript:if(confirm('ลบสินค้านี้ ?')==true)
                   JavaScript:window.location='delete.php?code=<?=$data['code'];?>',
                   '',400,320" role="button">
                   <i class="fa fa-fw fa-trash"></i>ลบ</a>
      </td>
    </tr>
<?php $num++;
}
?>
     </tbody>
     </table>
   </div>
</div>
<div class="card-footer small text-muted">
รายการสินค้าทั้งหมด
</div>
</div>
</div>
<!-- /.container-fluid -->

      </div>
      <!-- /.container-fluid -->

    </div>
    <!-- /.content-wrapper -->

    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright &copy; TOP SHOP 2017</small>
        </div>
      </div>
    </footer>

    <!-- Scroll to Top Button -->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>

    <!-- Logout Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Select "Logout" below if you are ready to end your current session.
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.php">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/sb-admin.min.js"></script>

  </body>

</html>
