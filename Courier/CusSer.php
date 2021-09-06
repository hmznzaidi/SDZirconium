<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel= "stylesheet" type="text/css" href="calculator/calculator.css">
  <link href="https://fonts.googleapis.com/css?
  family=Open+Sanss:600,700" rel="stylesheet"></link>

  <script src="//code.jquery.com/jquery-1.10.2.js"></script>

  <script>
  $(function(){
    $('#header').load('header.php');
    $("#footer").load("footer.html");
  });
  </script>

  <title>Customer Service</title>
</head>
<body>
  <div id="header"></div>

<h2>Having Problem?</h2>

  <div id="container">
  <h1>Customer Support</h1>
  <div id="calculator">


    <form>
      <p>Phone Number<p>
      <p>Email</p>

          <p>Type of problem
            <p>
              <select id="serviceQual">
            <option disabled selected value="0">-- Choose an Option --</option>
            <option value="0.1">cirit birit</option>
            <option value="0.05">jubok terkoyak</option>
            <option value="0.02">gile</option>
        </select>
    </form>

  </div>
  <!--calculator end-->
  <div id="totalTip">
    <sup>dollar</sup><span id="tip">0.00</span>
    <small id="each">each</small>
  </div>
  <!--totalTip end-->

</div>
<!--container end-->

<script type="text/javascript" src="calculator/script.js"></script>

</body>
</html>
