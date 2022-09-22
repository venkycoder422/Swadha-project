<!DOCTYPE html>

<html lang="en">



<head>

	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">

	<meta name="author" content="AdminKit">

	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass,
	html, theme, front-end, ui kit, web">



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



	</style>



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

							<li class="sidebar-item active"><a class="sidebar-link" href="beneficiary_information.html">House Visits</a></li>

						</ul>

					</li>

					<li class="sidebar-header">

						MASTERS

					</li>

					<li class="sidebar-item active">

						<a class="sidebar-link" href="threshold-value.html">

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



                <img src="img/avatars/avatar.jpg" class="avatar img-fluid rounded mr-1" alt="Charles Hall" /> <span
                class="text-dark">Charles Hall</span>



              </a>



							<div class="dropdown-menu dropdown-menu-right">



								<a class="dropdown-item" href="pages-profile.html"><i class="align-middle mr-1" data-feather="user"></i>
								Profile</a>



								<a class="dropdown-item" href="#"><i class="align-middle mr-1" data-feather="pie-chart"></i> Analytics</a>



								<div class="dropdown-divider"></div>



								<a class="dropdown-item" href="pages-settings.html"><i class="align-middle mr-1" data-feather="settings"></i>
								Settings & Privacy</a>



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
												


												<form role="form"  class="login-box" method="post" id="living_condition">



														<div class="card">									



																<div class="card-body">																	 



													<div id="main_form">

												

<div class="row">



																<div class="col-md-4 col-sm-12">



																			<label class="col-form-label">Does the applicant
																			live  or is from the house visited?</label>



																			<div class="applicant-Radio">



																				<label class="form-check">



																					<input  type="radio" class="form-check-input"
																					checked="" id="id48" name="id48" value="yes">



																					<span class="form-check-label">Yes</span>



																				</label>



																				<label class="form-check">



																					<input  type="radio" class="form-check-input"
																					id="id48" name="id48" value="no">



																					<span class="form-check-label">No</span>



																				</label>



																			</div>



																			</div>



																<div class="col-md-4 col-sm-12">



																			<label class="col-form-label">If the applicant is
																			not staying in house to check if student is staying
																			in </label>



																			<div class="applicant-Radio">



																				<label class="form-check">



																					<input  type="radio" class="form-check-input"
																					 id="id50" name="id50" value="paid">



																					<span class="form-check-label">Paid hostel</span>



																				</label>



																				<label class="form-check">



																					<input  type="radio"
																					class="form-check-input"id="id50" name="id50"
																					value="free">



																					<span class="form-check-label">free hostel</span>



																				</label>

																				<label class="form-check">



																					<input  type="radio" class="form-check-input"
																					id="id50" name="id50" value="relatives">



																					<span class="form-check-label">relatives house
																					</span>



																				</label>



																			</div>



																			</div>





										                            	<div class="col-md-4
										                            	col-sm-12">



																			<label class="col-form-label">Type of roof in
																			applicant's house?</label>



																			<div class="applicant-Radio">



																				<label class="form-check">



																					<input  type="radio" class="form-check-input"
																					id="id53" name="id53" value="tiles">



																					<span class="form-check-label">Tiles</span>



																				</label>



																				<label class="form-check">



																					<input  type="radio" class="form-check-input"
																					id="id53" name="id53" value="tin">



																					<span class="form-check-label">Tin</span>



																				</label>

																				<label class="form-check">



																					<input  type="radio" class="form-check-input"
																					id="id53" name="id53" value="leaves">



																					<span class="form-check-label">leaves or
																					hay</span>



																				</label>

																					<label class="form-check">



																					<input  type="radio" class="form-check-input"
																					id="id53" name="id53" value="asbestos">



																					<span class="form-check-label">Asbestos</span>



																				</label>

																				<label class="form-check">



																					<input  type="radio" class="form-check-input"
																					id="id53" name="id53" value="concrete">



																					<span class="form-check-label">Concrete</span>



																				</label>

																						<label class="form-check">



																					<input  type="radio" class="form-check-input"
																					id="id53" name="id53" value="others">



																					<span class="form-check-label">Others</span>



																				</label>

																			</div>



																			</div>







																	</div>

																	<div class="row">



																<div class="col-md-4 col-sm-12">



																			<label class="col-form-label">Type of walls in the
																			house?(Tick alongside the right one ) </label>



																			<div class="applicant-Radio">



																				<label class="form-check">



																					<input  type="radio" class="form-check-input"
																					 id="id59" name="id59" value="pucca">



																					<span class="form-check-label">Pucca ( proper
																					walls with bricks or cement) </span>



																				</label>



																				<label class="form-check">



																					<input  type="radio" class="form-check-input"
																					id="id50" name="id59" value="nonpucca">



																					<span class="form-check-label">Non Pucca ( made
																					of mud/ only bricks, thatched leaves / tin/ tiles
																					)   </span>



																				</label>



																			</div>



																			</div>



																<div class="col-md-4 col-sm-12">



																			<label class="col-form-label">No. of rooms in the
																			house</label>



																			<div class="applicant-Radio">



																				<label class="form-check">



																					<input  type="radio" class="form-check-input"
																					 id="id61" name="id61" value="1">



																					<span class="form-check-label">1</span>



																				</label>



																				<label class="form-check">



																					<input  type="radio" class="form-check-input"
																					id="id61" name="id61" value="2">



																					<span class="form-check-label">2</span>



																				</label>

																				<label class="form-check">



																					<input  type="radio" class="form-check-input"
																					id="id61" name="id61" value="3">



																					<span class="form-check-label">3 </span>



																				</label>

																			<label class="form-check">



																					<input  type="radio" class="form-check-input"
																					id="id61" name="id61" value="4">



																					<span class="form-check-label">4 </span>



																				</label>

																				<label class="form-check">



																					<input  type="radio" class="form-check-input"
																					id="id61" name="id61" value="5">



																					<span class="form-check-label">5 </span>



																				</label>

																			</div>



																			</div>





										                            	<div class="col-md-4
										                            	col-sm-12">



																			<label class="col-form-label">Is the applicant or
																			his/her family living in a house?</label>



																			<div class="applicant-Radio">



																				<label class="form-check">



																					<input  type="radio" class="form-check-input"
																					id="id66" name="id66" value="yes">



																					<span class="form-check-label">Yes</span>



																				</label>



																				<label class="form-check">



																					<input  type="radio" class="form-check-input"
																					id="id66" name="id66" value="no">



																					<span class="form-check-label">No</span>



																				</label>

																				

																			</div>



																			</div>







																	</div>

									



											<div class="row">



																<div class="col-md-4 col-sm-12">



																			<label class="col-form-label">No. of members living
																			in the house </label>

																		<select class="form-control mb-3" style="appearance:
																		auto;"  id="id68" name="id68">

																			<option selected="" value="1">1</option>

																			<option value="2">2</option>

																			<option value="3">3</option>

																			<option value="4">4</option>

																			<option value="5">5</option>

																			<option value="6">6</option>

																			<option value="7">7</option>

																			<option value="8">8</option>

																			<option value="9">9</option>

																			<option value="10">10</option>

																			</select>



																			</div>



																<div class="col-md-4 col-sm-12">





																			</div>





										                            	<div class="col-md-4
										                            	col-sm-12">



															



																			</div>







																	</div>




															<div class="row">



																<div class="col-md-6 col-sm-12">



																	



																</div>



																<div class="col-md-6 col-sm-12">



																<ul class="list-inline pull-right">



																<li><button type="button" class="default-btn
																btn-secondary prev-step">Back</button></li>



																<li><button type="button" class="default-btn
																btn-primary next-step">Continue</button></li>



															</ul>



																</div>



															</div>


														
												




												
												</div>



										</div>
									</div>


												</form>



										



									</div>



								</div>



									</div>



								</div>



							</section>




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

</body>

<script src="js/app.js"></script>



<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
aria-hidden="true">

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

							<button type="button" onclick="removeUpload()" class="remove-image">Remove <span class="image-title">Uploaded
							Image</span></button>

						  </div>

						</div>

						<button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Upload</button>

					</div>

				</div>

			</div>

		</div>

  	</div>

</html>