<?php   
//$servername = "localhost";
//username = "wwebhelp_spashtam";
//$password = "amS6&)xC68?I";
//$dbname = "wwebhelp_spashtamm";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "spastam";

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
/***************insert on main table*************/
if(isset($_POST['SubM']))
{
$id = $_REQUEST['appNo'];
$sql1="SELECT * FROM beneficiaryinformation WHERE Application_number='$id'";
        $results1 =mysqli_query($conn, $sql1);
while($binfo=mysqli_fetch_array($results1)){
$val1=$binfo['How_many_in_informal_labour'];
$val2=$binfo['average_daily_labour_of_all_members_combined'];
$val3=$binfo['Average_no_of_days_of_employment_in_a_month'];
$tval=$val2*$val3*12;
$val4=$binfo['How_many_members_are__salaried_employees'];
$val5=$binfo['the_total_monthly_take_home_salary_received_of_the_family'];
$tval2=$val4*$val5*12;
session_start();
    $_SESSION["a"] = $tval;
	$_SESSION["b"] = $tval2;
	//echo $_SESSION['a'];
	//echo $_SESSION['b'];
}
$_SESSION['aa']=array();
$sql2="SELECT * FROM beneficiarycinfo WHERE fid='$id'";
        $results2 =mysqli_query($conn, $sql2);
while($b2info=mysqli_fetch_array($results2)){
	$val6=$b2info['crop_name'];
	$fid=$b2info['fid'];
	$ar1=array("crop_name"=>"$val6");
	array_push($_SESSION['aa'],$ar1);
	$max=sizeof($_SESSION['aa']);
    for($i=0; $i<$max; $i++) { 
     // print_r($_SESSION['aa'][$i]); 
     //echo "<br>";
      }
	 
}
$sql3="SELECT * FROM beneficiaryinformation WHERE Application_number='$id'";
        $results3 =mysqli_query($conn, $sql3);
while($b3info=mysqli_fetch_array($results3)){
	$val7=$b3info['Place_of_sale'];
	$_SESSION["bb"] = $val7;
	//echo $_SESSION["bb"];
	$val8=$b3info['Yield_in_the_previous_financial_year'];
	$val1992=$b3info['Unit_of_measurement'];
	if($val1992=="ton"){
	$val8=$val8*10;	
	}
	echo $val8;
	$_SESSION["cc"] = $val8;
	//echo $_SESSION["cc"];
}
$pos=$_SESSION["bb"];	
//echo $pos;
$_SESSION['dd']=array();


if($pos == 'both'){
	$max2=sizeof($_SESSION['aa']);
for($i=0; $i<$max2; $i++) { 
while (list ($key, $val) = each ($_SESSION['aa'][$i])) {
$cn= $val;
//echo $cn;
	$tql1="SELECT average_price FROM cropinfo WHERE cropname='$cn'";
        $tresults1 =mysqli_query($conn, $tql1);
while($t1info=mysqli_fetch_array($tresults1)){
	$tem1=$t1info['average_price'];
	$ar2=array("$tem1");
	array_push($_SESSION['dd'],$ar2);
}
}
}
}
if($pos == 'government'){
	$max2=sizeof($_SESSION['aa']);
for($i=0; $i<$max2; $i++) { 
while (list ($key, $val) = each ($_SESSION['aa'][$i])) {
$cn= $val;
//echo $cn;
	$tql1="SELECT govt_purchase_price FROM cropinfo WHERE cropname='$cn'";
        $tresults1 =mysqli_query($conn, $tql1);
while($t1info=mysqli_fetch_array($tresults1)){
	$tem1=$t1info['govt_purchase_price'];
	$ar2=array("$tem1");
	array_push($_SESSION['dd'],$ar2);
}
}
}
}
if($pos == 'private'){
	$max2=sizeof($_SESSION['aa']);
for($i=0; $i<$max2; $i++) { 
while (list ($key, $val) = each ($_SESSION['aa'][$i])) {
$cn= $val;
//echo $cn;
	$tql1="SELECT private_market_price FROM cropinfo WHERE cropname='$cn'";
        $tresults1 =mysqli_query($conn, $tql1);
while($t1info=mysqli_fetch_array($tresults1)){
	$tem1=$t1info['private_market_price'];
	$ar2=array("$tem1");
	array_push($_SESSION['dd'],$ar2);
}
}
}
}
$max3=sizeof($_SESSION['dd']);
    for($j=0; $j<$max; $j++) { 
      //print_r($_SESSION['dd'][$j]); 
     //echo "<br>";
    }

$val9=$_SESSION["cc"];
//echo $val9;
//echo "<br>";
$tval3=0;
$max4=sizeof($_SESSION['dd']);
for($i=0; $i<$max2; $i++) { 
while (list ($key, $val) = each ($_SESSION['dd'][$i])) {
$tval3 += $val*$val9;
}
}
//echo $tval3;
//$val10=$_SESSION["dd"];
//$tval3=	$val9*$val10;
$_SESSION["c"] = $tval3;	
//echo $_SESSION["c"];	


$_SESSION['aaa']=array();
$sql14="SELECT * FROM beneficiarylinfo WHERE fid='$id'";
        $results10 =mysqli_query($conn, $sql14);
while($b7info=mysqli_fetch_array($results10)){
	$val66=$b7info['live_name'];
	$ar22=array("live_name"=>"$val66");
	array_push($_SESSION['aaa'],$ar22);
	$max5=sizeof($_SESSION['aaa']);
    for($i=0; $i<$max5; $i++) { 
     // print_r($_SESSION['aaa'][$i]); 
     //echo "<br>";
      }
	 
}
$_SESSION['bbb']=array();
$max6=sizeof($_SESSION['aaa']);
for($i=0; $i<$max6; $i++) { 
while (list ($key, $val) = each ($_SESSION['aaa'][$i])) {
$ln= $val;
//echo $ln;
if($ln == 'Cow'){
	//echo 'hi';
	$sql15="SELECT * FROM milkproduction";
        $results11 =mysqli_query($conn, $sql15);
while($b8info=mysqli_fetch_array($results11)){
$_SESSION['sp']=$b8info['Sale_price_of_1_liter_of_milk_in_Rs'];
$_SESSION['avg']=$b8info['Average_daily_yield_of_milk_in_litres_post_home_consumption'];
//echo $_SESSION['sp'];
//echo $_SESSION['avg'];
}
$sql15="SELECT * FROM milkproduction";
        $results11 =mysqli_query($conn, $sql15);
while($b8info=mysqli_fetch_array($results11)){
$_SESSION['sp']=$b8info['Sale_price_of_1_liter_of_milk_in_Rs'];
$_SESSION['avg']=$b8info['Average_daily_yield_of_milk_in_litres_post_home_consumption'];
//echo $_SESSION['sp'];
//echo $_SESSION['avg'];
}
$sql16="SELECT * FROM beneficiaryinformation WHERE Application_number='$id'";
        $results30 =mysqli_query($conn, $sql16);
while($b22info=mysqli_fetch_array($results30)){
	$val7=$b22info['with_a_field_to_take_daily_yield_per_cow_of_milk'];
	$_SESSION['cno']=$val7;
}
$tval4=0;
$sp=$_SESSION['sp'];
$avg=$_SESSION['avg'];
$cno=$_SESSION['cno'];
$tval4 +=(float)$sp*(float)$avg*(float)$cno*365;
//echo $sp,$avg,$cno;
//echo "<br>";	
//echo $tval4;
$_SESSION["d"] = $tval4;
//echo "<br>";	
//echo $_SESSION["d"];
}
if($ln == 'Chicken'|| $ln == 'Fish'){
$_SESSION['ccc']=array();
$sql17="SELECT 	* FROM livestock where livestockname='Chicken' OR livestockname='Fish' ";
        $results15 =mysqli_query($conn, $sql17);
while($b28info=mysqli_fetch_array($results15)){
	$val106=$b28info['private_price'];
	$val107=$b28info['livestockname'];
	$ar48=array("livestockname"=>"$val106");
	array_push($_SESSION['ccc'],$ar48);
}
$sql18="SELECT * FROM beneficiaryinformation WHERE Application_number='$id'";
        $results31 =mysqli_query($conn, $sql18);
while($b33info=mysqli_fetch_array($results31)){
	$val17=$b33info['No_of_livestock__owned'];
	$_SESSION['nol']=$val17;
	//echo $_SESSION['nol'];
}
    $max48=sizeof($_SESSION['ccc']);
    for($l=0; $l<$max48; $l++) { 
	while (list ($key, $val) = each ($_SESSION['ccc'][$l])) {
     $lsp= floatval($val);
	 $tval5 = $tval5 + $lsp;
      }
    }
     //print_r($_SESSION['ccc']);
     //echo "<br>";	 
     $qls=floatval($_SESSION['nol']);
	 //$tval6=array_sum($_SE['eee']);
	 //echo "5". $tval5;
	 //echo $qls2;
	 //echo "<br>";
	 $tval9 = ($tval5 * $qls) *8;
	 //echo "value".$tval9."<br>";
	 $_SESSION['e']=$tval9/$max48;

}
else{
$_SESSION['ddd']=array();
$sql18="SELECT 	* FROM livestock where livestockname='$ln'";
        $results155 =mysqli_query($conn, $sql18);
while($b32info=mysqli_fetch_array($results155)){
	$val1066=$b32info['private_price'];
	$arr48=array("livestockname"=>"$val1066");
	array_push($_SESSION['ddd'],$arr48);
}
 
   
    
    $max49=sizeof($_SESSION['ddd']);
    for($o=0; $o<$max49; $o++) { 
	while (list ($key, $val) = each ($_SESSION['ddd'][$o])) {
     $lsp= floatval($val);
	 $tval7 = $tval7 + $lsp;
	 //echo gettype($tval7);
	 //echo gettype($lsp);
	 
     }
	 
    }	
     //print_r($_SESSION['eee']);
     //echo "<br>";	 
     $qls2=floatval($_SESSION['nol']);
	 //$tval6=array_sum($_SE['eee']);
	 //echo $tval7;
	 //echo $qls2;
	 //echo "<br>";
	 $tval8 = $tval7 * $qls2;
	 //echo $tval8;
	 $_SESSION['f']=$tval8;
	 //echo $_SESSION['f'];
	 //echo "E".$_SESSION['e']."<br>";
      
}



}
}

$sqlRC="SELECT * FROM beneficiaryinformation WHERE Application_number='$id'";
$resultsRC =mysqli_query($conn, $sqlRC);
while($RCincome=mysqli_fetch_array($resultsRC)){
$RC1=$RCincome['Rent_earned_per_day'];
$RC2=$RCincome['Average_no_of_days_rented'];
$RC4=$RCincome['No_of_members_living_in_the_house'];
$RC3=($RC1*$RC2)*12;
$_SESSION['g']=$RC3;
$_SESSION['x']=$RC4;
echo $_SESSION['x'];
}

$a=$_SESSION['a'];
$b=$_SESSION['b'];
$c=$_SESSION['c'];
$d=$_SESSION['d'];
$e=$_SESSION['e'];
$f=$_SESSION['f'];
$g=$_SESSION['g'];
$_SESSION['h']=$d+$e+$f;

$trus=$a+$b+$c+$d+$e+$f+$g;
$_SESSION['$trus']=$trus;
$sqlTE="SELECT * FROM beneficiaryinformation WHERE Application_number='$id'";
$resultsTE =mysqli_query($conn, $sqlTE);
while($TEX=mysqli_fetch_array($resultsTE)){
$e1=$TEX['Average_value_of_the_last_three_months'];
$e2=$TEX['monthly_cable_bill_give_the_bill_value_in_Rs'];
$e3=$TEX['monthly_fees_paid_for_the_hostel_in_Rs'];
$e4=$TEX['Total_value_of_the_mobile_phone_cost_in_a_month'];
$e5=$TEX['monthly_rent__of_the_house_in_Rs'];
$e6=$TEX['the_cost_of_fuel_per_month_in_Rs'];
$e7=$TEX['monthly__payout_towards_repaying_the_loan_be_given_in_Rs'];
$e8=$TEX['the_fees_to_be_paid_for_other_children_in_Rs'];
$e9=$TEX['monthly_payout_made_towards_the_loan_in_Rs'];
$e10=$TEX['Monthly_expense_for_procuring_groceries_in_Rs'];
$e11=$TEX['rearing_livestock_if_4_1_is_said_to_have_the_same'];
$e12=$TEX['Annualized_cost_of_procuring_seeds_and_fertilizers_in_Rs'];

$te=($e1*12)+($e2*12)+($e3*12)+($e4*12)+($e5*12)+($e6*12)+($e7*12)+$e8+($e9*12)+($e10*12)+($e11*12)+$e12;
$_SESSION['te']=$te;
echo $_SESSION['te'];
}


if($trus < $_SESSION['te'])
{
	$trus=$_SESSION['te'];
}







//echo $trus;
$sqlFN="SELECT * FROM farmincome WHERE unique_id='456'";
$resultsFN =mysqli_query($conn, $sqlFN);
while($faincome=mysqli_fetch_array($resultsFN)){
$totalIN=$faincome['annual_family_income'];
$perHIN=$faincome['perhead_annual_earnings'];
$_SESSION['z']=$totalIN;
$_SESSION['y']=$perHIN;

}
$AtotalIN=$_SESSION['z'];
$AperHIN=$_SESSION['y'];
//echo $AtotalIN;
//echo $AperHIN;
$aTp=$AtotalIN-(($AtotalIN/100)*20);

//echo $aTp;
if($trus>$AtotalIN)
{
$_SESSION['m']='#FF0000';
}
if($trus<$AtotalIN && $aTp<$trus)
{
$_SESSION['m']='#FFBF00';
}
if($aTp>$trus)
{
$_SESSION['m']='#228B22';
}
$NoM=$_SESSION['x'];
echo $NoM;
$aTPP=$AperHIN-(($AperHIN/100)*20);
$trus2=$_SESSION['$trus']/$_SESSION['x'];
echo $trus2;
$_SESSION['trus2']=$trus2;
if($trus>$AperHIN)
{
$_SESSION['n']='#FF0000';
}
if($trus<$AperHIN && $aTPP<$trus)
{
$_SESSION['n']='#FFBF00';
}
if($aTPP>$trus)
{
$_SESSION['n']='#228B22';
}

if($trus<$_SESSION['te'])
{
$_SESSION['o']='#FF0000';
}
if($trus>$_SESSION['te'])
{
$_SESSION['o']='#228B22';
}



}

?>
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
.circle{
height:80px !important;
width: :80px !important;
border-radius: 100%;
margin-right:140%;
margin-left:-80%;
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
							<li class="sidebar-item"><a class="sidebar-link" href="#">House Visits</a></li>
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
								
												<form role="form" id="myform" class="login-box" method="post">
												<div class="card">									
																<div class="card-body">
																	 <div class="row">

																				

																				<div class="col-md-6 col-sm-12">

																					<p class="h3 mb-3" style=" font-size: 15px;">Enter application number.  </p>



																				</div>

																				<div class="col-md-6 col-sm-12">

																				<input type="text" id="" name="appNo">	

																				</div>

																			</div>
																			<div class="row">

																			<div class="col-lg-12">

																			<div class="text-right">

																			<button name="SubM" class="btn btn-primary btn-lg">Submit</button>

																			</div>

																			</div>

																			</div>
															<div class="row">
																				
																				<div class="col-md-6 col-sm-12">
																					<p class="h3 mb-3" style=" font-size: 15px;">Informal income Rs. </p>

																				</div>
																				<div class="col-md-6 col-sm-12">
																				<?php echo $_SESSION['a'];?>	
																				</div>
																			</div>
																			<div class="row">
																				
																				<div class="col-md-6 col-sm-12">
																					<p class="h3 mb-3" style=" font-size: 15px;"> Formal income Rs. </p>

																				</div>
																				<div class="col-md-6 col-sm-12">
																				<?php echo $_SESSION['b'];?>	
																				</div>
																			</div>
																			
																			<div class="row">
																				
																				<div class="col-md-6 col-sm-12">
																					<p class="h3 mb-3" style=" font-size: 15px;"> Income from crops in Rs. </p>

																				</div>
																				<div class="col-md-6 col-sm-12">
																				<?php echo $_SESSION['c'];?>	
																				</div>
																			</div>
																			
																			<div class="row">
																				
																				<div class="col-md-6 col-sm-12">
																					<p class="h3 mb-3" style=" font-size: 15px;"> Income from livestocs in Rs. </p>

																				</div>
																				<div class="col-md-6 col-sm-12">
																				<?php echo $_SESSION['h'];?>	
																				</div>
																			</div>
																			<div class="row">
																				
																				<div class="col-md-6 col-sm-12">
																					<p class="h3 mb-3" style=" font-size: 15px;"> Income from rented items in Rs. </p>

																				</div>
																				<div class="col-md-6 col-sm-12">
																				<?php echo $_SESSION['g'];?>	
																				</div>
																			</div>
																			
                                                                            <div class="row">
																			<div class="col-lg-3">
																			<div class="text-left">
																			Method 1
																			</div>
																			</div>
                                                                             <div class="col-lg-3">
																			<div class="text-left">
																			<div class="circle" style="background-color:<?php echo $_SESSION['m'];?>"></div>
																			</div>
																			</div>
                                                                            <div class="col-lg-6">
																			</div>
																	 
														                    </div>
																			
																			<div class="row">
																				
																				<div class="col-md-6 col-sm-12">
																					<p class="h3 mb-3" style=" font-size: 15px;">average annual income per family member in Rs. </p>

																				</div>
																				<div class="col-md-6 col-sm-12">
																				<?php echo $_SESSION['trus2'];?>	
																				</div>
																			</div>
																			
                                                                            <div class="row">
																			<div class="col-lg-3">
																			<div class="text-left">
																			Method 2
																			</div>
																			</div>
                                                                             <div class="col-lg-3">
																			<div class="text-left">
																			<div class="circle" style="background-color:<?php echo $_SESSION['n'];?>"></div>
																			</div>
																			</div>
                                                                            <div class="col-lg-6">
																			</div>
																	 
														</div>
														<div class="row">
																				
																				<div class="col-md-6 col-sm-12">
																					<p class="h3 mb-3" style=" font-size: 15px;"> Total annual expenses in Rs. </p>

																				</div>
																				<div class="col-md-6 col-sm-12">
																				<?php echo $_SESSION['te'];?>	
																				</div>
																			</div>
														
														 <div class="row">
																			<div class="col-lg-3">
																			<div class="text-left">
																			Method 3
																			</div>
																			</div>
                                                                             <div class="col-lg-3">
																			<div class="text-left">
																			<div class="circle" style="background-color:<?php echo $_SESSION['o'];?>"></div>
																			</div>
																			</div>
                                                                            <div class="col-lg-6">
																			</div>
																	 
														</div>
														</div>
												
												</form>
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