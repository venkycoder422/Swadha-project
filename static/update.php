<?php 
$servername = "localhost";
$username = "wwebhelp_spashtam";
$password = "amS6&)xC68?I";
$dbname = "wwebhelp_spashtamm";

//$servername = "localhost";
//$username = "root";
//$password = "";
//$dbname = "spastam";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if(!$conn)
{
  echo 'database not connected';
}
$id = $_GET['id'];
if (isset($_POST['SubM2'])) {
    
  $nooC=$_POST['nooC'];
$pmmP=$_POST['pmmP'];
$gdpP=$_POST['gdpP'];
$avGg=($pmmP+$gdpP)/2;;
$sql22 = "UPDATE cropinfo
        SET cropname='$nooC',private_market_price='$pmmP',govt_purchase_price='$gdpP',average_price='$avGg'
        WHERE id = $id;";
		$conn->query($sql22);
		header('location:threshold-value-update.php');
}



?>


<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

	<title>Blank Page | AdminKit Demo</title>

	<link href="css/app.css" rel="stylesheet">
	<link href="css/tabs.css" rel="stylesheet">

	<style type="text/css">
		.wizard .nav-tabs > li {
			width:16.6%;
		}
		.connecting-line {
		    height: 2px;
		    background: #e0e0e0;
		    position: absolute;
		    width: 81%;
		    margin: 0 auto;
		    left: 100px;
		    right: 425px;
		    top: 15px;
		    z-index: 1;
		}
		.wizard .nav-tabs > li a i{
			top: -20px;
		}
		.mydiv label{
			font-weight: bold;
		}
		#step5{
			overflow-y: scroll;
			height: 350px;
			overflow-x: hidden;
		}
		.asset{
			    vertical-align: middle;
    display: block;
    /* height: 83px; */
    margin: 30px 0;
		}
		@media only screen and (max-width: 600px) {
		#step5{
		overflow-y: revert;
		height: auto;
		overflow-x: initial;
		}
	}
		@media only screen and (max-width: 800px) {
		#step5{
		overflow-y: revert;
		height: auto;
		overflow-x: initial;
		}
	}
	table.GeneratedTable {
  width: 100%;
  background-color: #ffffff;
  border-collapse: collapse;
  border-width: 2px;
  border-color: #000000;
  border-style: solid;
  color: #000000;
}

table.GeneratedTable td, table.GeneratedTable th {
  border-width: 2px;
  border-color: #000000;
  border-style: solid;
  padding: 3px;
}

table.GeneratedTable thead {
  background-color: #ffffff;
}
.adding{
    width: 50px;
    height: 30px;
    padding: 0;
    margin: 0;
    float: left;
    text-align: center;
    vertical-align: middle;
    color: #000;
}
.wid{
 width: 100%;
}
.table th{
    border-color: #000000 !important;
}

	</style>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<script>
$(document).ready(function(){
      var i=1;
     $("#add_row").click(function(){
      $('#addr'+i).html("<td>"+ (i+1) +"</td><td><input name='noC[]' type='text'class='wid'/></td><td><input  name='pmP[]' type='text' class='wid'></td><td><input  name='gpP[]' type='text' class='wid'></td><td><input name='avG[]' type='text' class='wid'></td>");
    
	
      $('#tab_logic').append('<tr id="addr'+(i+1)+'"></tr>');
      i++; 
  });
     $("#delete_row").click(function(){
         if(i>1){
         $("#addr"+(i-1)).html('');
         i--;
         }
     });

});
</script>

<script>
$(document).ready(function(){
      var i=1;
     $("#addd_row").click(function(){
      $('#adddr'+i).html("<td>"+ (i+1) +"</td><td><input name='noCC[]' type='text'class='wid'/></td><td><input  name='pmppU[]' type='text' class='wid'></td>");
    
	
      $('#tab_logic2').append('<tr id="adddr'+(i+1)+'"></tr>');
      i++; 
  });
     $("#deletee_row").click(function(){
         if(i>1){
         $("#adddr"+(i-1)).html('');
         i--;
         }
     });

});
</script>
<script>
function myFunction() {
    for (j=0;j<pmp.length;j++){
        document.getElementById(avg[j]).value=(document.getElementById(pmp[j]).value + document.getElementById(gdp[j]).value)/2;
    }
}

</script>

</head>

<body>
	<div class="wrapper">
		<nav id="sidebar" class="sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="index.html">
					<img src="img/icons/s-logo.svg" alt="Logo">
          			<span class="align-middle">SPASHTAM</span>
        		</a>

				<ul class="sidebar-nav">

					
                     <li class="sidebar-item">
						<a href="#sel" data-toggle="collapse" class="sidebar-link collapsed">
              				<i class="align-middle" data-feather="calendar"></i> <span class="align-middle"> Selection</span>
            			</a>
						<ul id="sel" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
							<li class="sidebar-item"><a class="sidebar-link" href="assessment-questionnaire.html">Interviews</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="beneficiary_information7.php">House Visits</a></li>
						</ul>
					</li>
					<li class="sidebar-header">
						MASTERS
					</li>
					<li class="sidebar-item active">
						<a class="sidebar-link" href="threshold-value.php">
              <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Selection</span>
            </a>
					</li>
			</div>
		</nav>




		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle d-flex">
          <i class="hamburger align-self-center"></i>
        </a>

				<form class="d-none d-sm-inline-block">
					<div class="input-group input-group-navbar">
						<input type="text" class="form-control" placeholder="Search…" aria-label="Search">
						<button class="btn" type="button">
              <i class="align-middle" data-feather="search"></i>
            </button>
					</div>
				</form>

				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-toggle="dropdown">
								<div class="position-relative">
									<i class="align-middle" data-feather="bell"></i>
									<span class="indicator">4</span>
								</div>
							</a>
							<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right py-0" aria-labelledby="alertsDropdown">
								<div class="dropdown-menu-header">
									4 New Notifications
								</div>
								<div class="list-group">
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="text-danger" data-feather="alert-circle"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">Update completed</div>
												<div class="text-muted small mt-1">Restart server 12 to complete the update.</div>
												<div class="text-muted small mt-1">30m ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="text-warning" data-feather="bell"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">Lorem ipsum</div>
												<div class="text-muted small mt-1">Aliquam ex eros, imperdiet vulputate hendrerit et.</div>
												<div class="text-muted small mt-1">2h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="text-primary" data-feather="home"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">Login from 192.186.1.8</div>
												<div class="text-muted small mt-1">5h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="text-success" data-feather="user-plus"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">New connection</div>
												<div class="text-muted small mt-1">Christina accepted your request.</div>
												<div class="text-muted small mt-1">14h ago</div>
											</div>
										</div>
									</a>
								</div>
								<div class="dropdown-menu-footer">
									<a href="#" class="text-muted">Show all notifications</a>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle d-none" href="#" id="messagesDropdown" data-toggle="dropdown">
								<div class="position-relative">
									<i class="align-middle" data-feather="message-square"></i>
								</div>
							</a>
							<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right py-0" aria-labelledby="messagesDropdown">
								<div class="dropdown-menu-header">
									<div class="position-relative">
										4 New Messages
									</div>
								</div>
								<div class="list-group">
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<img src="img/avatars/avatar-5.jpg" class="avatar img-fluid rounded-circle" alt="Vanessa Tucker">
											</div>
											<div class="col-10 pl-2">
												<div class="text-dark">Vanessa Tucker</div>
												<div class="text-muted small mt-1">Nam pretium turpis et arcu. Duis arcu tortor.</div>
												<div class="text-muted small mt-1">15m ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<img src="img/avatars/avatar-2.jpg" class="avatar img-fluid rounded-circle" alt="William Harris">
											</div>
											<div class="col-10 pl-2">
												<div class="text-dark">William Harris</div>
												<div class="text-muted small mt-1">Curabitur ligula sapien euismod vitae.</div>
												<div class="text-muted small mt-1">2h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<img src="img/avatars/avatar-4.jpg" class="avatar img-fluid rounded-circle" alt="Christina Mason">
											</div>
											<div class="col-10 pl-2">
												<div class="text-dark">Christina Mason</div>
												<div class="text-muted small mt-1">Pellentesque auctor neque nec urna.</div>
												<div class="text-muted small mt-1">4h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<img src="img/avatars/avatar-3.jpg" class="avatar img-fluid rounded-circle" alt="Sharon Lessman">
											</div>
											<div class="col-10 pl-2">
												<div class="text-dark">Sharon Lessman</div>
												<div class="text-muted small mt-1">Aenean tellus metus, bibendum sed, posuere ac, mattis non.</div>
												<div class="text-muted small mt-1">5h ago</div>
											</div>
										</div>
									</a>
								</div>
								<div class="dropdown-menu-footer">
									<a href="#" class="text-muted">Show all messages</a>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-toggle="dropdown">
                <i class="align-middle" data-feather="settings"></i>
              </a>

							<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-toggle="dropdown">
                <img src="img/avatars/avatar.jpg" class="avatar img-fluid rounded mr-1" alt="Charles Hall" /> <span class="text-dark">Charles Hall</span>
              </a>
							<div class="dropdown-menu dropdown-menu-right">
								<a class="dropdown-item" href="pages-profile.html"><i class="align-middle mr-1" data-feather="user"></i> Profile</a>
								<a class="dropdown-item" href="#"><i class="align-middle mr-1" data-feather="pie-chart"></i> Analytics</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="pages-settings.html"><i class="align-middle mr-1" data-feather="settings"></i> Settings & Privacy</a>
								<a class="dropdown-item" href="#"><i class="align-middle mr-1" data-feather="help-circle"></i> Help Center</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#">Log out</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>

			<main class="content">
				<div class="container-fluid p-0">
						<section class="signup-step-container">
								<div class="container">
									<div class="row d-flex justify-content-center">
										<div class="col-md-12">
											<div class="wizard">
												<div class="wizard-inner">
													
											
												</div>
								
												<form role="form" class="login-box" method="post">
														<div class="card">									
																<div class="card-body">
																	 
													<div class="tab-content" id="main_form">
														<div class="tab-pane active" role="tabpanel" id="step1">
															<!-- <h4 class="text-center">Step 1</h4> -->
							

															<div class="form-2"	>
																 
																		<div class="row">
																																
																			</div>
																		
													
																</div>

    
  <form role="form" class="login-box" method="post">
    <div class="row">
																				
																				<div class="col-md-6 col-sm-12">
																					<p class="h3 mb-3" style=" font-size: 15px;"></p>

																				</div>
																				<div class="col-md-6 col-sm-12">	
																				</div>
																			</div>
																				<div class="row">
																				<div class="col-md-3 col-sm-12">
																					<p class="h3 mb-3" style=" font-size: 15px;"></p>

																				</div>
																				
																				<div class="col-md-6 col-sm-12">
																					<p class="h3 mb-3" style=" font-size: 15px;"></p>

																				</div>
																				<div class="col-md-3 col-sm-12">
																				</div>
																			</div>
																			<div class="row">
																			<div class="col-md-3 col-sm-12">
																				</div>
																				<div class="col-md-12 col-sm-12">
<table class="table table-hover small-text GeneratedTable" id="tab_logic">
<thead>
<tr class="tr-header">
<th>Name of crop</th>
<th>Private market price </th>
<th>Govt. purchase price</th>
<th>Average ( should calculate average of both the prices)</th>
</tr>
</thead>
<tbody>
<?php
$sql5="SELECT * FROM cropinfo WHERE id=$id";
$results =mysqli_query($conn, $sql5);
while($cinfo=mysqli_fetch_array($results)){
?>
<tr id='addr0'>
<td><input type="text" name="nooC" class='wid' value=<?php echo $cinfo["cropname"];?>></td>
<td><input type="text" id="pmmP" name="pmmP" class='wid' value=<?php echo $cinfo["private_market_price"];?> onchange='ShowAvg2();'></td>
<td><input type="text" id="gdpP" name="gdpP" class='wid' value=<?php echo $cinfo["govt_purchase_price"];?> onchange='ShowAvg2();'></td>
<td><input type="text" id="avGg" name="avGg" class='wid' value=<?php echo $cinfo["average_price"];?> onClick='ShowAvg2();'></td>
</tr>
<?php

}

?>
</tbody>
</table>
</div>
</div>
<div class="text-right">
							<button name="SubM2" type="Submit" class="btn btn-primary btn-lg">Update</button>
						</div>
</form>

    </div>
										</div>
									</div>
								</div>
									</div>
								</div>
							</section>

					<!-- <h1 class="h3 mb-3">Add new Student</h1>
					<ul class="stepbar">
					 
					</ul>
					 
					<div class="col-lg-12">
						<div class="text-right">
							<button class="btn btn-secondary btn-lg">Cancel</button>
							<button class="btn btn-primary btn-lg">Submit</button>
						</div>
					</div> -->
				</div>
			</main>

			<footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-6 text-left">
							<p class="mb-0">
								<a href="index.html" class="text-muted"><strong>AdminKit Demo</strong></a> &copy;
							</p>
						</div>
						<div class="col-6 text-right">
							<ul class="list-inline">
								<li class="list-inline-item">
									<a class="text-muted" href="#">Support</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="#">Help Center</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="#">Privacy</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="#">Terms</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</footer>
		</div>
	</div>

	


	<script src="js/jquery3.4.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

	<script src="js/app.js"></script>
<script>
$(document).ready(function () {
    $('.nav-tabs > li a[title]').tooltip();
    
    //Wizard
    $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {

        var target = $(e.target);
    
        if (target.parent().hasClass('disabled')) {
            return false;
        }
    });

    $(".next-step").click(function (e) {

        var active = $('.wizard .nav-tabs li.active');
        active.next().removeClass('disabled');
        nextTab(active);

    });
    $(".prev-step").click(function (e) {

        var active = $('.wizard .nav-tabs li.active');
        prevTab(active);

    });
});

function nextTab(elem) {
    $(elem).next().find('a[data-toggle="tab"]').click();
}
function prevTab(elem) {
    $(elem).prev().find('a[data-toggle="tab"]').click();
}


$('.nav-tabs').on('click', 'li', function() {
    $('.nav-tabs li.active').removeClass('active');
    $(this).addClass('active');
});



</script>

<script type="text/javascript">
	
	function ShowAvg2() {
		var value1=document.getElementById('pmmP').value;
		var value2=document.getElementById('gdpP').value;
		var avg=(parseInt(value1)+parseInt(value2))/2;
		document.getElementById('avGg').value= avg;
    }
	
</script>
</body>
<script src="js/app.js"></script>

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
			<h2 class="modal-title" id="exampleModalLongTitle">Bulk Upload</h2>
				<i class="fa fa-times" data-dismiss="modal" aria-label="Close"></i>
			</div>
				<div class="modal-body">
					<div class="file-upload">
						<div class="image-upload-wrap">
						  <input class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" />
						  <div class="drag-text">
							<h3>Drag and drop a file or select add Image</h3>
						  </div>
						</div>
						<div class="file-upload-content">
						  <img class="file-upload-image" src="#" alt="your image" />
						  <div class="image-title-wrap">
							<button type="button" onclick="removeUpload()" class="remove-image">Remove <span class="image-title">Uploaded Image</span></button>
						  </div>
						</div>
						<button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Upload</button>
					</div>
				</div>
			</div>
		</div>
  	</div>
</html>