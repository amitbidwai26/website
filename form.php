	<!DOCTYPE html>
	<html lang="en">
	<head>
	<title>Home</title>
	<meta charset="utf-8">
	<meta name="format-detection" content="telephone=no" />
	<link rel="icon" href="images/favicon.ico">
		<link rel="shortcut icon" href="images/favicon.ico" />
	<link rel="stylesheet" href="css/style.css">
	<script src="js/jquery.js"></script>
	<script src="js/jquery-migrate-1.1.1.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/script.js"></script> 
	<script src="js/superfish.js"></script>
	<script src="js/jquery.equalheights.js"></script>
	<script src="js/jquery.mobilemenu.js"></script>
	<script src="js/tmStickUp.js"></script>
	<script src="js/jquery.ui.totop.js"></script>

	<script>
	 $(window).load(function(){
	  $().UItoTop({ easingType: 'easeOutQuart' });
	  $('#stuck_container').tmStickUp({});  
	 }); 
	</script>
	<!--[if lt IE 8]>
	 <div style=' clear: both; text-align:center; position: relative;'>
	   <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
	     <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
	   </a>
	</div>
	<![endif]-->
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<link rel="stylesheet" media="screen" href="css/ie.css">
	<![endif]-->
	</head>
	<body class="page1" id="top">
	<!--==============================
	              header
	=================================-->
	<header>
	  <div class="container">
	    <div class="row">
	      <div class="grid_12 rel">
	        <h1>
	          <a href="index.html">
	            <img src="images/logo.png" alt="Logo alt">
	          </a>
	        </h1>
	      </div>
	    </div>
	  </div>


<!-- Menu Start-->

<div class="menu">
<?php include 'menu.php';?>
</div>

<!-- Menu End-->




	  <section class="page1_header">
	    <div class="container">
	    	 <div class="grid_101">
	          <h2>Find right candidates. Fast.</h2>
	         </div>
	    </div>
	   
	  </section>
	</header>

	<!--=====================
	          Content
	======================-->
	<section id="content"><div class="ic">Test</div>
	  <div class="container">
	    <div class="row">
	      <div class="grid_10 preffix_1 ta__center">
	        <div class="greet">
	          <h2 class="head__12">
	          <br>
	            Submit your requirement by filling form</h2>
	<form action="formsubmit.php" method="post">
	<table align="left">
	<tr>
	        <td   class="form_table">Person Name:</td>   <td colspan="4"  class="form_table"><input type="text" name="name" size="40" required=""></td>
	</tr>
	<tr>
		<td  class="form_table">Phone Number: </td><td colspan="4"  class="form_table"><input type="text" name="phone" size="40" required=""></td>
	</tr>
	<tr>
		<td   class="form_table">Email: </td><td colspan="4"  class="form_table"><input type="text" name="email" size="40"></td>
	</tr>
	<tr>
	        <td   class="form_table">Company Name:</td>   <td colspan="4"  class="form_table"><input type="text" name="company_name" size="40"></td>
	</tr>

	<tr>
	        <td class="form_table">Location:</td>   <td colspan="4" class="form_table"><input type="text" name="location" size="40"></td>
	</tr>
	<tr>
			<td colspan="5"  class="form_table">Want to hire</td>
	</tr>
	
	<tr>
			<td></td>
			<td class="checkbox_lable"><input type="checkbox" name="house_keeping" value="House Keeping">House Keeping</td>
			<td colspan="2" class="checkbox_lable"><input type="checkbox" name="delivery" value="Logistics/ Delivery">Logistics/ Delivery</td>
			
		
	</tr>
	<tr>
			<td></td>
			<td class="checkbox_lable"><input type="checkbox" name="sales" value="Sales">Sales&nbsp;&nbsp;</td>
			<td class="checkbox_lable"><input type="checkbox" name="marketing" value="Marketing">Marketing&nbsp;&nbsp;</td>
		
		
	</tr>
	
	<tr>
			<td></td>
			<td class="checkbox_lable"><input type="checkbox" name="hotel_staff" value="Hotel Executive">Hotel Executives </td>
			<td class="checkbox_lable"><input type="checkbox" name="customer_support" value="Customer Support">Customer Support</td>

	</tr>
	<tr>
			<td></td>
			<td class="checkbox_lable"><input type="checkbox" name="dataentry_backoffice" value="Data Entry">Data Entry/Back office</td>
			<td class="checkbox_lable"><input type="checkbox" name="cook" value="Cook">Cook</td>

	</tr>
	<tr>
		<td colspan="5"></td>
	</tr>
	<tr>
		<td class="form_table">
			Number of people required </td><td class="form_table"><input type="text" name="total_people" size="40">
		</td>
	</tr>
	<tr>
		<td class="form_table">Any other requirement:</td><td class="form_table"><textarea rows="5" name="message" cols="30"></textarea></td>
	</tr>
	<tr>
		<td class="form_table"></td><td class="form_table"><input class="btn" type="submit" name="submit" value="Submit"></td>
	</tr>
	</table> 



	</form>
	       </div>
	      </div>
	    </div>
	  </div>

	   
<hr>
  <div class="container">
    <div class="row">
      <div class="grid_5">
        <h4>About Company</h4>
        <img src="images/page1_img3.jpg" alt="" class="img_inner fleft">
          <p align="justify"> Kickstart is a startup founded by IIT- XLRI alumni. We, at KickStart, have developed a model that uses a unique combination of offline networks and technology solutions to connect employers to the best job seekers in blue and grey collar jobs. 
 </p>
<!--           <p class="offset__1" align="justify">We empower “KickStart Leaders” with technology to find the best candidates in their networks. We aggregate all such Leaders across communities providing them with a platform to access the most relevant jobs.
Employers get the right candidates (pre assessed, low turnaround time, no mismatch). Jobseekers get the best mode of access to jobs(through their own social networks).
Everyone is happy. Especially us.
 -->      </div>
     <!--  <div class="grid_4">
        <h4>Solutions</h4>
        <ul class="list-1">
          <li><a href="#">KickStart Leaders </a></li>
          <li><a href="#">Decentralized Assessment</a></li>
          <li><a href="#">Management using Mobile Application </a></li>
          <li><a href="#">Matching Algorithm to find perfect candidate </a></li>
          <li><a href="#">Kickstart 3 days Replacement Gurantee</a></li>
          <li><a href="#">and more...</a></li>
        </ul>
      </div> -->
      <div class="grid_3">
        <h4>Contact Info</h4>
        <address>
          <ul class="cont_address">
            <li>Kickstart Human Capital Solution Private Limited</li>
            <li>C-26, Omaxe City Center,</li>
            <li>Sector 49, Sohna Road,</li>
            <li>Gurgaon-122001</li>
            <li>+91-1244-08-66-95</li>
            <li><a href="#">nitin@kickstartjobs.in</a></li>
            <li><a href="#">www.kickstartjobs.in</a></li>
          </ul>
        </address>
      </div>
    </div>
  </div>
</section>


<!-- Footer Start-->

<div class="menu">
<?php include 'footer.php';?>
</div>

<!-- Footer End-->


<a href="#" id="toTop" class="fa fa-chevron-up"></a>
</body>
</html>