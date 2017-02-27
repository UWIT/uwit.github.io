
<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>Cafe </title>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="coffe2.jpg">
<link rel="stylesheet" href="stylesheet.css">

</head>

<style>
	
	/* side bar- left side of all pages */
	#sidebar {
				width: 280px;
				float: right;
				margin: 0 auto;
				text-align: center;
				margin-top:25px;
	}
	
	/* contents located in sidebar*/
	#sidebarContent {
					width: 250px;
					margin: 0 auto;
					padding: 20px 4px;
					text-align: center;
					border: #655629 2px solid;
					border-radius: 20px;
					background: #cbd1db;
					padding-top:20px;
					margin-top:10px;
	}
	
	
	#forms {
			width: 580px;
			float: left;
			margin: 0 auto;
			margin-top:10px;
			padding: 20px;
			text-align: left;
			background: #dadfe8;
			border: #655629 0px solid;
			border-radius: 20px;
			border-top-right-radius: 20px;
			border-top-left-radius: 20px;
			border-bottom-right-radius: 20px;
			border-bottom-left-radius: 20px;
			position: relative;
	}
	
	
	
	
	/*extra space */
	.clearfloat {
				clear: both;
				height: 0;
				font-size: 1px;
				line-height: 0;
	}	
	
/*Button design*/
.buttdesign{
overflow:hidden;
text-decoration:none!important;
padding:6px 16px;
color:#fff;
background-color: black;
text-align:center;
white-space:nowrap}
.buttdesign:hover{
box-shadow:0 8px 16px 0 rgba(0,0,0,0.2),
			0 6px 20px 0 rgba(0,0,0,0.19)}

	
	
	
</style>

<body>
	<!--side navbar -->
	<nav class="sidenav h" style="display:none" id="mySidenav">
	  <a href="javascript:void(0)" class="effect"onclick="click_close()"><button>Close &times;</button></a>
	  <a class="effect" href="#">Link 1</a>
	  <a class="effect" href="#">Link 2</a>
	  <a class="effect" href="#">Link 3</a>
	  <a class="effect" href="#">Link 4</a>
	  <a class="effect" href="#">Link 5</a>
	</nav>

		<div id="main">

	<div class="top h"><!--keeps navbar on top -->

		<!--horizontal navbar -->
		<ul class="navbar black" id="myNavbar">
			<li><span class="xlarge effect" onclick="click_open()" id="openNav">&#9776;</span></li>
			<li><a class="effect" href="#">Home</a></li>
		</ul>
	</div><!--End of top navbar-->


	<!--first background image -->
	<div class="bgimg-1"></div>

	<!--second page content -->
	<div class="page "> 
				
<div id="forms">
				    

<?php

    $_SESSION['Name'] = $_POST['Name'];
	
	 $_SESSION['Gyroptn'] = $_POST['Gyroptn'];
 $_SESSION['Burgerptn'] = $_POST['Burgerptn'];
  $_SESSION['Paniniptn'] = $_POST['Paniniptn'];

 
// $_SESSION['SALES'] = $_POST['SALES'];


	
	$Name = $_POST['Name'];
	$Burger = $_POST['Burger'];
	$Gyro  = $_POST['Gyro'];
	$Panini  = $_POST['Panini'];
    $date  = $_POST['date'];
    $time  = $_POST['time'];
    $Gyroptn  = $_POST['Gyroptn'];
    $Burgerptn  = $_POST['Burgerptn'];
	$Paniniptn  = $_POST['Paniniptn'];


	
	$Burgerprc = 9.95;
	$Gyroprc = 10.95;
	$Paniniprc = 11.95;
	
$okay = TRUE;
	
	//Defining the constant for sales tax
	define("SALES", (0.10*(($Burger*$Burgerprc)+($Gyro*$Gyroprc)+($Panini*$Paniniprc))));


	//Calculating total price
	$total = $Burger*$Burgerprc + $Gyro*$Gyroprc + $Panini*$Paniniprc + SALES;

	
	

?>

<h2><?php echo $_SESSION['Name'];?> please enter pick up person information </h2>

		<form method="post" action="online3.php" >
			
			<h3>Pick up person
 			<input type="text" name="Names" value="<?php echo $_SESSION['Name'];?>"><br><br>
			
			Phone number
			<input type="number" name="number" size="10"><br><br><br>

			Email Address
			<input type="email" name="email" size="20"><br><br><br>
			
			Address
			
			<input type="address" name="address" size="30"><br><br><br>

			
			<input type="hidden" name="SALES" value="<?php echo round(SALES,2); ?>"size="20" />

			<input type="hidden" name="total" value="<?php echo round($total, 2); ?>"size="20" />


		<button class="buttdesign"> Continue</button></h3>

<br>
</form>

<br><br>
</div> <!-- end of main -->

<!--
	   <form method="post" action="var.php" >

            <input type="hidden" name="total" value="<?php echo round($total, 2); ?>"size="20" />

		<button> Continue</button>
</form> -->
			
		<!-- end of main -->
 
<div id="sidebar">
		
			<!-- contents located in sidebar -->
			<div id="sidebarContent">
				<aside>
				
				<h3>Order of <?php echo $_POST["Name"]; ?></h3>
				<p>Pick up date: <br> <?php echo $_POST["date"]; ?>	</P>
				<p>Pick up time: <br> <?php echo $_POST["time"]; ?>	</p>

<table style="width:100%">
  <tr>
  
<td>Your order:</td>  <td><?php echo " $Burgerptn"; ?><br><?php echo " $Gyroptn"; ?><br><?php echo " $Paniniptn"; ?></td>
  </tr>

    <tr>

<td><br>Sales Tax:</td> <td><br> $<?php echo round(SALES,2); ?></td>
  </tr>
</table>
<br><br>

<table style="width:100%">
<hr color="black" align="center" width="100%">
    <tr>
<td>Total Price: </td> <td>$<?php echo round($total, 2); ?></td>
  </tr>

</table>
					<br><br>

					<a href="online1.html"> 
  <button class="buttdesign">  Cancel  </button></a>

					<br><br>
					
			
					
					</aside>
			<!-- end sidebarContent -->
			</div>	

		<!-- end sidebar -->
		</div>
		<!--extra spaces -->
		<br class="clearfloat" />
		
		
		</div><!-- end of page -->
		
		
	<!--Footer end of webpage -->
	<footer>
	</footer>
</div>
<script>
// Side navigation
function click_open() {
  document.getElementById("main").style.marginLeft = "25%";
  document.getElementById("mySidenav").style.width = "25%";
  document.getElementById("mySidenav").style.display = "block";
  document.getElementById("openNav").style.display = 'none';
}
function click_close() {
  document.getElementById("main").style.marginLeft = "0%";
  document.getElementById("mySidenav").style.display = "none";
  document.getElementById("openNav").style.display = "inline-block";
}
// Change style of navbar on scroll
window.onscroll = function() {myFunction()};
function myFunction() {
    var navbar = document.getElementById("myNavbar");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = "navbar" + " w3-card-2" + " w3-animate-top" + " color-red";
    } else {
        navbar.className = navbar.className.replace(" w3-card-2 w3-animate-top color-red", "");
    }
}

</script>

</body>
</html>