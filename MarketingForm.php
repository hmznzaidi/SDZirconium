<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
<title>Assignment 2 by Group 4</title>
</head>
<style>
 /*To style all*/
body {
 font-family: Times New Roman;
 font-size:20px;
 background-color: 	#00CED1;
 text-align:center;
 margin:10%;
}
/*To style the input box that user will fill*/
input[type=text], input[type=email], input[type=address]{
 width: 700px;
 padding: 3px;
 display: inline-block;
 background-color: #E0FFFF;
}
input[type=name], input[type=phoneno]{
width: 700px;
padding: 3px;
background-color: #E0FFFF;
}
/*To style the button*/
.btn {
 background-color: #008080;
 color: #7FFFD4;
 padding: 10px;
 font-size: 14px;
 cursor: pointer;
 width: 20%;
}
*To style the word company information*/
legend {
background-color: #E0FFFF;
color: #008080;
padding: 20px;
}
/*To style the outline fieldset*/
fieldset {
background-color: #AFEEEE;
margin-left:19%;
margin-right:20%;
color:#008080;
border: 5px solid #008080;
}
/*To style the word in the fieldset*/
.field{
padding-left: 18%;
text-align: left;
}
</style>
<body>
 <form class="action" action="upload.php" method="post"
enctype="multipart/form-data">
 <fieldset>
 <legend>Company Information</legend>
 <p>Company Logo: <input type="file" name="file"></p>
 <p>Company Name: <input type="name" name="name" value=""></p>
 <p>Telephone No: <input type="phoneno" name="phoneno" value=""></p>
 <p>Email: <input type="email" name="email" value=""> </p>
 <p>Address: <input type="address" name="address" value=""></p>
 <button type="submit" class="btn" name="submit">Submit</button>
 </fieldset>
 </form>
</body>
</html>