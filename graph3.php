<!DOCTYPE html>
<html lang="en">
<head>
<title>กราฟแสดงเปอร์เซนต์ผู้เข้าทำแบบทดสอบ  Thai GHQ – 30</title>
<meta charset="utf-8">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.4.1/css/all.css' integrity='sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz' crossorigin='anonymous'>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
* {
    box-sizing: border-box;
}

body {
    background-color:rgb(0, 145, 168);
    font-family: MS Sans Serif ,Arial, Helvetica, sans-serif;    
}

::-webkit-scrollbar {
    width: 12px;
}
 
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
    border-radius: 10px;
}
 
::-webkit-scrollbar-thumb {
    border-radius: 10px;
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.5); 
}
p{
   font-size: 10px;
}

ul.b {
    list-style-type: square;
}

nav {
   width: 70%;
   margin: auto auto;
   
}



header {
    margin: auto auto;
    background-color: rgba(49, 214, 134 , 0.8);
    width: 70%;
    padding: 30px;   
    font-size: 35px;
    color: white;
}

eiei{
	text-align: right;
}

hl{
	font-size: 24px;
}

text1{
	font-size: 16px;
	padding: 20px;
}



article {
    float: left;
    padding: 20px;
    width: 100%;
    background-color: #f1f1f1;
    padding-top: 50px;
    padding-right: 40px;
    padding-bottom: 50px;
    padding-left: 70px;
    
}


section {
  
    clear: both;
    margin: auto auto;
    width: 70%;
}


footer {
    background-color: rgba(49, 214, 134 , 0.8);
    text-align: left;
    padding: 20px;
    color: black;
    width: 70%;
    margin: auto auto;
}


hr{
    display: block;
    margin-top: 0.5em;
    margin-bottom: 0.5em;
    margin-left: auto;
    margin-right: auto;
    border-style: inset;
    border-width: 1px;
}

 i1 {
filter:alpha(opacity=70); 
opacity:.7;
-webkit-transition:1.0s; 
-moz-transition:1.0s;
 -o-transition:1.0s;
} 
 i1:hover {
filter: alpha(opacity=100);
opacity:1.0
}


 img{
 -webkit-transition: 1.0s!important;
 -moz-transition: 1.0s!important;}
 img:hover{
 -webkit-animation: zoom  1s alternate infinite linear;
 -webkit-transition: 1.0s!important;
 -moz-transition: 1.0s!important;
 }@-webkit-keyframes zoom {
 10% {-webkit-transform: rotate(-5deg)  scale(1.0) }
 20% {-webkit-transform: rotate(-15deg)  scale(1.3) }
 }

</style>


</head>



<body>


<header>

	<eiei><form class="form-inline my-2 my-lg-0" action="https://www.google.co.th/search" method="GET" target="_blank">
      		<input class="form-control mr-sm-1" type="text" placeholder="Search" name="q" id="q">
      		<button type="submit" class="btn btn-primary" action="submit">Search</button>
    	</form></eiei>

</header>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
		    
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="home.php"><i class='fas fa-align-justify' style='font-size:14px;color:white'></i>  Home  </a></li>
    </ul>

    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown" ><a class="dropdown-toggle" data-toggle="dropdown" href="#" >  โรคซึมเศร้า  <span class="caret"></span></a>
        <ul class="dropdown-menu">
           <li ><a href="type.php">  ประเภท  </a></li>
          <li ><a href="state.php">  อาการ  </a></li>
          <li ><a href="rule.php">  ข้อควรปฏิบัติ   </a></li>
   
        </ul>
      </li>
      <li><a href="test.php">  แบบทดสอบ  </a></li>
      <li><a href="heal.php">  แนวทางการรักษา  </a></li>
      <li><a href="connect.php">  โรงพยาบาลที่เกี่ยวข้อง  </a></li>
    </ul>
  </div>
</nav>


<section>


  
  <article>
  
<?php
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "web";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	
	// Check connection
	if (!$conn) {
    		die("Connection failed: " . mysqli_connect_error());		
	}
		
	mysqli_query($conn,"SET character_set_results=utf8");
	mysqli_query($conn,"SET character_set_client=utf8");
	mysqli_query($conn,"SET character_set_connection=utf8");

	$result = mysqli_query($conn,"SELECT count FROM `graph3`");	
	$output = array();
	
	while ($row = $result->fetch_row()) {
		$output[] = $row;
	}
	
?>  
  
  
   <center> <h2> กราฟแสดงเปอร์เซนต์ผู้เข้าทำแบบทดสอบ  Thai GHQ – 30</h2>

    
   <hr><br>

<div id="chartContainer" style="height: 500px; width: 95%;"></div>
<script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
<script src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>



<script>
window.onload = function () {

var options = {
	theme: "dark2",
	animationEnabled: true,	
	
	title: {
		text: "Thai GHQ – 30"
	},
	data: [{
		type: "doughnut",
		innerRadius: "30%",
		legendText: "{label}",
		indexLabel: "{label}: #percent%",
		dataPoints: [
			{ label: "ไม่ระบุเพศมีเกณฑ์ปกติ", y: 	<?php echo  $output[0][0]; ?>},
			{ label: "ไม่ระบุเพศมีเกณฑ์ผิดปกติ", y: 	<?php echo  $output[1][0]; ?> },
            { label: "ผู้ชายที่อยู่ในเกณฑ์ปกติ", y: 	<?php echo  $output[2][0]; ?> },
			{ label: "ผู้ชายที่อยู่ในเกณฑ์ผิดปกติ", y: <?php echo  $output[3][0]; ?> },
			{ label: "ผู้หญิงที่อยู่ในเกณฑ์ปกติ", y: 	<?php echo  $output[4][0]; ?> },
            { label: "ผู้หญิงที่อยู่ในเกณฑ์ผิดปกติ", y: <?php echo  $output[5][0]; ?> }
		]
	}]
};
$("#chartContainer").CanvasJSChart(options);

}
</script>

<br><br>

<hr><br>

</center>
  </article>

</section>



<footer>
  
  <div class="row" >
    <div class="col-sm-8" margin= left>
      <br><h4><u>ABOUT AS</u></h4><br>
      	<p> นาย &nbsp;&nbsp;&nbsp;	&nbsp;&nbsp;&nbsp;    ชวัลวิทย์ &nbsp;	มอญใต้ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;			รหัสนักศึกษา 	5904062610046 </p>
	<p> นาย&nbsp;&nbsp;	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    ภาสุวุฒิ &nbsp;	จุณณะปิยะ 	&nbsp;&nbsp;&nbsp;	รหัสนักศึกษา	5904062610135</p>
	<p> นางสาว &nbsp;&nbsp; ธนิตา	&nbsp;พลายละหาร	&nbsp;&nbsp;&nbsp;&nbsp;	รหัสนักศึกษา	5904062620033</p>

    </div>



    <div class="col-sm-4" margin= right>
    <br><br>
     <center> <h4>ยอดผู้เข้าชมเว็บไซต์</h4>
      
      <p ><script type='text/javascript' src='https://www.siamecohost.com/member/gcounter/graphcount.php?page=www.home.html&style=02&maxdigits=5'></script></p>
	  
	  <a href ="https://www.dmh.go.th/">กรมสุขภาพจิต   </a> || <a href ="https://www.honestdocs.co/most-common-psychiatric-disorders">Honestdocs </a> || <a href ="http://www.jvkk.go.th/jvkkfirst/test.htm">โรงพยาบาลจิตเวชขอนแก่น   </a>
     </center>
    </div>

 
</div>

</footer>

</body>
</html>
