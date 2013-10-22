<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Animals Map</title>
<link href="styles.css" rel="stylesheet" type="text/css">
<link href="css/page-styles.css" rel="stylesheet" type="text/css">
<script src="http://maps.google.com/maps?file=api&amp;v=2.133d&amp;key=ABQIAAAAjU0EJWnWPMv7oQ-jjS7dYxSPW5CJgpdgO_s4yyMovOaVh_KvvhSfpvagV18eOyDWu7VytS6Bi1CWxw"
      type="text/javascript"></script>
<script language="javascript" type="text/javascript" src="js/map-google.js"></script>
</head>
<!--[if !IE]><!--><script>
if (/*@cc_on!@*/false) {
    document.documentElement.className+=' ie10';
}
</script>
<!--<![endif]-->
<body onload="initialize()" onunload="GUnload()">
<div class="container-pestSightIndex">
  <div class="header"> <a href="index.html"><img src="image/websitelogo-03.png" alt="" name="animal map logo" width="281" height="162" id="Insert_logo" style="background-color: #FFF; display:block;" /> </a> 
    <!-- end .header -->
    <div class="accountbar">
      <ul class="accountbar-bg" id="account-bar" name="account-bar">
        <li class="support-lg">Welcome, Dane</li>
        <li class="support-ac"><a href="#">MyAccount</a></li>
        <li class="support-sp"><a href="#">Support</a></li>
        <li class="support-lo"><a href="index.html">Log off</a></li>
      </ul>
    </div>
  </div>
  <!-- end .accountbar -->
  <div class="header-wrap">
    <ul class="group" id="header-one" name="header-one">
      <li id="home-wrap" class="current_page_item"> <a href="#">Home</a></li>
      <li id="login-wrap"><a href="login.php">Login</a></li>
      <li id="user-wrap"><a href="userRegister.php">Register</a></li>
      <li id="account-wrap"><a href="#">MyAccount</a></li>
      <li id="sighing-wrap"><a href="pestSightingIndex.html">Pest Sight</a></li>
      <li id="report-wrap"><a href="#">Weekly Report</a></li>
      <li id="register-wrap"><a href="pestRegister.html">Pest Register</a></li>
    </ul>
  </div>
  <!-- end .header-warp -->
  <div class="pest_sighting_index">
    <ul id="pest_sighting_index-bg" name="pest_sighting_index-bg">
      <section class="googlemap cf">
        <li><img src="image/loginpage-02.png"></li>
        <li id="animal-title"> Select an animal: </li>
        <div class="animal_wrapper">
          <div class="feral_fox"><a href="#"></a></div>
          <div class="feral_dog"><a href="#"></a></div>
          <div class="feral_cat"><a href="#"></a></div>
          <div class="feral_rat"><a href="#"></a></div>
          <div class="feral_rabbit"><a href="#"></a></div>
        </div>       
        <!-- end animal button -->
          <form name="google-map" action="#" onsubmit="showAddress(this.address.value); return false">
            <div>
              <p> Enter an address and you may drag the tack to reposition it. </p>
              <p class="map-input-park">
				  
				  <!-- Dynamic Select Box based on Database -->
				  <select name="address" id="address">
						<option value="">-- Select Park --</option>
							<?php
								include('connect.inc.php');						        
								
									$parkquery = "SELECT name FROM  `park`";
									if(mysqli_query($link,$parkquery)){    
									$parkresult = mysqli_query($link,$parkquery);    
									while($row = mysqli_fetch_array($parkresult)) {
										echo "<option value=\"".$row['name']."\">".$row['name']."</option>\n  ";										
									}
								}
								else{
									echo '<option value="QueryFail"> Query Fail </option>';
								}
							?>
							<script type="text/javascript">
								document.getElementById('Park').value = <?php echo json_encode(trim($_POST['Park']));?>;
							</script>
					</select>
				<!--End of Dynamic Select Box -->
                <input type="hidden" id="Latitude" value=""/>
                <input class="google-go" type="submit" value="Go" />
              </p>
              <div id="map_canvas"></div>
              <!--<div id="map-panel">
                <input id="latlng" type="text" value="40.714224,  -73.961452">
                <input class="google-gecode" type="submit" value="Reverse Geocode" onclick="codeLatLng()">
              </div>-->
            </div>
            <div id="sighting-bottom">			
              <p class="sight-time"><input type="radio" name="dateandtime" id="dateandtime">Your date and time </p>
              <p id="my-datetime">
                <input id="mydate" type="date" value="dd/mm/yyyy"/>
                <input id="mytime" type="time" value="mm/hh"/>
              </p>            
              <p class="sight-time-auto"><input type="radio" name="dateandtime" id="autodateandtime">Automatism date and time </p>
              <p id="auto-datetime">
                <input id="autodate" name="autodate" value="<?
                date_default_timezone_set('Australia/Sydney');
                echo date('m/d/Y, G:i:s');
                ?>"/>
              </p>
              <p class="sight-inform">Additional Information </p>
              <p>
                <textarea name="sight-commond" cols="60" rows="4"></textarea>
              </p>
              <p class="sight-report">Number of Pest Sighted</p>
              <p>
                <input id="sight-id" type="text" value="Enter report ID"/>
                <a href="#"><input id="autobutton" type="submit" value="Submit"/></a>
              </p>
            </div>
          </form>
        <!--end .googlemap--> 
      </section>
    </ul>
  </div>
  <!-- end .pest_sighting_index -->
  <div>
    <ul id="footer-text" name="footer-text">
      <li><a href="#">Blog</a> | <a href="#">Support</a> | <a href="#">About Us</a> | <a href="#">Contact Us</a> | <a href="#">Site Map</a> | <a href="#">News Letter</a> | <a href="#">Join Us</a> | <a href="#">Disclaimer</a> | <a href="#">Policies</a></li>
      <ol>
        ©2013 Dynamic Motion, INC. ALL RIGHTS RESERVED
      </ol>
    </ul>
    <li class="footer-img"><img src="image/websignlayout-23.png">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="image/CompanyLogodesign-04.png"> </li>
  </div>
</div>
<!-- end .container -->
<div class="footer"> </div>
<!-- end .footer -->
</body>
</html>
