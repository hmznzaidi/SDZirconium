<section class="section-padding gray-bg">
  <div class="container">
    <div class="section-header text-center">

      <h2><span>Find Your </span>Membership Plan <span>today!</span></h2>
      <p>Get your free gifts, vouchers, lucky draw & many more!</p>
    </div>
    <div class="row">

      <!-- Nav tabs -->
      <div class="recent-tab">
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active"><a href="#resentnewcar" role="tab" data-toggle="tab">Membership plans</a></li>
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
<h6><a href="vehical-details.php?vhid=<?php echo htmlentities($result->id);?>"> <?php echo htmlentities($result->VehiclesTitle);?> <?php echo htmlentities($result->BrandName);?> </a></h6>
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