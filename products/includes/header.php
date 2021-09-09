<header class="section-header">

<section class="header-main border-bottom">
	<div class="container">
<div class="row align-items-center">
	<div class="col-lg-2 col-4">
		<a href="../images/logos/Logo.png" class="brand-wrap">
			<img class="logo" src="../images/logos/Logo.png">
		</a> <!-- brand-wrap.// -->
	</div>
	<div class="col-lg-6 col-sm-12">
		<form action="#" class="search">
			<div class="input-group w-100">
			    <input type="text" class="form-control" placeholder="Search">
			    <div class="input-group-append">
			      <button class="btn btn-primary" type="submit">
			        <i class="fa fa-search"></i> Search
			      </button>
			    </div>
		    </div>
		</form> <!-- search-wrap .end// -->
	</div> <!-- col.// -->
	<div class="col-lg-4 col-sm-6 col-12">
		<div class="widgets-wrap float-md-right">
			<div class="widget-header  mr-3">
				<a href="#" class="icon icon-sm rounded-circle border"><i class="fa fa-shopping-cart"></i></a>
				<span class="badge badge-pill badge-danger notify">0</span>
			</div>
			<div class="widget-header icontext">
      <?php
        if (isset($_SESSION["user_id"])) {
				echo "<a href='profile.php' class='icon icon-sm rounded-circle border'><i class='fa fa-user'> </i></a>";
      }else{
      }
        ?>
				<div class="text">
					<span class="text-muted">Welcome!</span>
					<div> 
          <?php
            if (isset($_SESSION["user_id"])) {
             
              echo "<li><a href='logout.php'> Log Out</a></li>";
            }else{
              echo "<li><a href='login.php'> Sign in</a></li>";
              echo "<li><a href='signup.php'> Register</a></li>";
            }
        ?>
					</div>
				</div>
			</div>

		</div> <!-- widgets-wrap.// -->
	</div> <!-- col.// -->
</div> <!-- row.// -->
	</div> <!-- container.// -->
</section> <!-- header-main .// -->
</header> <!-- section-header.// -->

<nav class="navbar navbar-main navbar-expand-lg navbar-light border-bottom">
  <div class="container">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav" aria-controls="main_nav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="main_nav">
      <ul class="navbar-nav">
      	<li class="nav-item dropdown">
           <a class="nav-link" href="../../index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../../aboutus.php">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../../memberships.php">Memberships</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Promotions</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="../supermarket.php">Supermarket</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="../supermarket.php">All Groceries</a>
            <a class="dropdown-item" href="../frozen.php">Frozen</a>
            <a class="dropdown-item" href="../freshproducts.php">Fresh Products</a>
            <a class="dropdown-item" href="../confectioneries.php">Confectioneries</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"> More</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Health & Beauty</a>
            <a class="dropdown-item" href="#">Electronics</a>
            <a class="dropdown-item" href="#">Sports & Lifestyle</a>
            <a class="dropdown-item" href="#">Babies & Toys</a>
            <a class="dropdown-item" href="#">Books</a>
            <a class="dropdown-item" href="#">Appliances</a>
            <a class="dropdown-item" href="#">Automotive & Motocycles</a>
          </div>
        </li>
      </ul>
    </div> <!-- collapse .// -->
  </div> <!-- container .// -->
</nav>

</header> <!-- section-header.// -->