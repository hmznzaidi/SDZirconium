<?php
session_start();
include('includes/config.php');
error_reporting(0);

?>

<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="keywords" content="">
<meta name="description" content="">
<title>ZIRCONIUM</title>
<!--Bootstrap -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="assets/css/style.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css">
<link href="assets/css/slick.css" rel="stylesheet">
<link href="assets/css/bootstrap-slider.min.css" rel="stylesheet">
<link href="assets/css/font-awesome.min.css" rel="stylesheet">

<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/favicon-icon/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/favicon-icon/apple-touch-icon-114-precomposed.html">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/favicon-icon/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="assets/images/favicon-icon/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="assets/images/favicon-icon/favicon.png">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
</head>
<body>

<!--Header-->
<?php include('includes/header.php');?>
<!-- /Header -->

<!-- Banners -->
<section id="banner" class="banner-section">
  <div class="container">
    <div class="div_zindex">
      <div class="row">
        <div class="col-md-5 col-md-push-7">
          <div class="banner_content">
            <h1>Welcome to Zirconium <br> with our memberships</h1>
            <p>You can have lots of benefits with <br> vouchers, daily Newsletter & many more!
            </p>
        </div>  
      </div>
    </div>
  </div>
</section>
<!-- /Banners -->

<!-- Resent Cat-->
<section class="section-padding gray-bg">
  <div class="container">
    <div class="section-header text-center">

      <h2><span>Get your </span>promotions <span>today!</span></h2>
      <p>with free vouchers for our new members.</p>
    </div>
    <div class="row">

      <!-- Nav tabs -->
      <div class="recent-tab">
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active"><a href="#resentnewcar" role="tab" data-toggle="tab">Promotions</a></li>
        </ul>
      </div>
      <!-- Recently Listed New -->
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="resentnewcar">

<?php $sql = "SELECT tblmemberships.VehiclesTitle,tblbrands.BrandName,tblmemberships.PricePerDay,tblmemberships.FuelType,tblmemberships.ModelYear,tblmemberships.id,tblmemberships.SeatingCapacity,tblmemberships.VehiclesOverview,tblmemberships.Vimage1 from tblmemberships join tblbrands on tblbrands.id=tblmemberships.VehiclesBrand";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{
?>

<div class="col-list-3">
<div class="recent-car-list">
<div class="car-info-box"> <a href="vehical-details.php?vhid=<?php echo htmlentities($result->id);?>"><img src="admin/img/vehicleimages/<?php echo htmlentities($result->Vimage1);?>" class="img-responsive" alt="image"></a>
<ul>
</ul>
</div>
<div class="car-title-m">
<h6><a href="vehical-details.php?vhid=<?php echo htmlentities($result->id);?>">  <?php echo htmlentities($result->VehiclesTitle);?> <?php echo htmlentities($result->BrandName);?> </a></h6>
<span class="price">RM<?php echo htmlentities($result->PricePerDay);?> / Month</span>
</div>
<div class="inventory_info_m">
<p><?php echo substr($result->VehiclesOverview,0,70);?></p>
</div>
</div>
</div>
<?php }}?>

      </div>
    </div>
  </div>
  <div class="section-header text-center">
  <br><br><br><br>
  <h1 >Important Notice!</h1>
		<p1>If you have any symtoms like fever, flu, cough, running nose,<br>
		diarrhea or in close contact with persons with covid-19 or under <br>
		investigation. Please Do Not Enter!. You are prohibited from entering the gym.	</p1>
</div>
</section>

<!--Footer -->
<?php include('includes/footer.php');?>

<!--Back to top-->
<div id="back-top" class="back-top"> <a href="#top"><i class="fa fa-angle-up" aria-hidden="true"></i> </a> </div>

<!--Login-Form -->
<?php include('includes/login.php');?>

<!--Register-Form -->
<?php include('includes/registration.php');?>

<!--Forgot-password-Form -->
<?php include('includes/forgotpassword.php');?>

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/interface.js"></script>
<!--bootstrap-slider-JS-->
<script src="assets/js/bootstrap-slider.min.js"></script>
<!--Slider-JS-->
<script src="assets/js/slick.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>

</body>
</html>
