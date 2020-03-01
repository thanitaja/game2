<!DOCTYPE html>
<html lang="en">
<head>
<title>แบบทดสอบ</title>
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

	$result = mysqli_query($conn, "SELECT `id_cos` FROM `comment`");
	
	@$comment = $_POST['comment'];
	@$email = $_POST['email'];
	@$id_cos = 1;
	$start =1;
	while($row = $result->fetch_assoc()) {
        	$id_cos = $id_cos+1;
    	}
	if($comment!="" && $email!=""){		
		$result = mysqli_query($conn, "INSERT INTO `comment`(`id_cos`, `comment`, `email`) VALUES ('$id_cos', '$comment', '$email')");
	 }



?>
  
  <article>
   <center> <h2>แบบทดสอบด้านสุขภาพจิต</h2></center>
<center> <h3>General Health Questionnaire</h3></center>
    
   <hr><br>

<button type="button" class="btn btn-success active">วิธีการใช้</button><br><br>
เป็นแบบสอบถามที่ประชาชนสามารถตอบได้ด้วยตนเอง ดังนั้นจึงเหมาะที่จะนำไปใช้กับบุคคลที่ สามารถอ่านออกเขียนได้ ในกรณีที่ไม่สามารถอ่านด้วยตนเองได้ อาจใช้วิธีให้บุคคลอื่นอ่านให้ฟังและผู้ตอบ แบบสอบถามเป็นผู้เลือกคำตอบด้วยตนเอง

ข้อคำถามของ Thai GHQ จะครอบคลุมปัญหาใหญ่ๆ 4 ด้าน คือ ความรู้สึกไม่เป็นสุข (Unhappiness) ความวิตกกังวล (Anxiety) ความบกพร่องเชิงสังคม (Social impairment) และความคิดว่ามี โรคทางกายโรคใดโรคหนึ่งหรือหลายโรค (Hypocondriasis)<br>

Thai GHQ – 60 มีทั้งหมด 4 ฉบับ ดังนี้<br>

1.	Thai GHQ – 60 มีข้อคำถามทั้งหมด 60 ข้อ<br>

2.	Thai GHQ – 30 มีข้อคำถามทั้งหมด 30 ข้อ<br>

3.	Thai GHQ – 28 มีข้อคำถามทั้งหมด 28 ข้อ<br>

4.	Thai GHQ – 12 มีข้อคำถามทั้งหมด 12 ข้อ<br>
<br>

สำหรับ Thai GHQ – 28 ซึ่งเป็น Sub-scaled GHQ แบ่งคะแนนเป็น 4 กลุ่ม ได้แก่<br>

กลุ่ม 1 ข้อ 1 – 7 เป็นอาการทางกาย (Somatic Symptoms)<br>

กลุ่ม 2 ข้อ 8 – 14 เป็นอาการวิตกกังวลและการนอนไม่หลับ (Anxiety and insomnia)<br>

กลุ่ม 3 ข้อ 15 – 21 เป็นความบกพร่องทางสังคม (Social dysfuction)<br>

กลุ่ม 4 ข้อ 22 – 28 เป็นอาการซึมเศร้าที่รุนแรง (Severe depression)<br>

เวลาที่ใช้ในการตอบคำถาม Thai GHQ – 60 ผู้ที่อ่านออกเขียนได้ และไม่มีปัญหาอื่น ๆ ที่จะเป็นอุปสรรค ต่อการตอบจะใช้เวลาประมาณ 5 – 10 นาที ส่วนฉบับอื่น ๆ ก็จะใช้เวลาน้อยลงตามลำดับ<br>

<br><br><br>
<button type="button" class="btn btn-success active">คำชี้แจง</button>
<br><br>
แบบสอบถามนี้มีวัตถุประสงค์เพื่อต้องการทราบถึงสภาวะสุขภาพของท่านในระยะสองถึงสาม สัปดาห์ที่ผ่านมา เป็นอย่างไรบ้าง กรุณาตอบคำถามต่อไปนี้ โดยเขียนเครื่องหมายวงกลมรอบคำตอบที่ใกล้เคียง กับสภาพของท่านในปัจจุบัน หรือในช่วงสัปดาห์ที่ผ่านมามากที่สุด โดยไม่รวมถึงปัญหาที่ท่านเคยมีในอดีต และกรุณาตอบคำถามทุกข้อ โดยคำตอบแต่ละข้อมี 4 ตัวเลือก

<br><br><br>


<div class="container-fluid">
  
  <div class="row">
    <div class="col-sm-4" >
	<center><i1><a href="test1.php"><img src="test1.png" width=200px></a></i1><br><br>
		<a href="graph.php" class="btn btn-primary" role="button">ดูลถิติ</a>
	</center><br>
    
    </div>

    <div class="col-sm-4" >
	<center><i1><a href="test2.php"><img src="test2.png" width=200px></a></i1><br><br>
		<a href="graph2.php" class="btn btn-primary" role="button">ดูลถิติ</a>
	</center><br>
      
    </div>
    
    <div class="col-sm-4" >
	<center><i1><a href="test3.php"><img src="test3.png" width=200px></a></i1><br><br>
		
  		<a href="graph3.php" class="btn btn-primary" role="button">ดูลถิติ</a>
	
	</center><br>
      
    </div>
  </div>
</div>
</div>   

 <br><br><hr><br>
 <h3><strong>COMMENT</strong></h3>
 <br>
 


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
		
	//$result = mysqli_query($conn, "UPDATE `graph1` SET `count`=0 WHERE id=1");

	mysqli_query($conn,"SET character_set_results=utf8");
	mysqli_query($conn,"SET character_set_client=utf8");
	mysqli_query($conn,"SET character_set_connection=utf8");
		
	
	$result = mysqli_query($conn, "SELECT * FROM `comment`");


	while($row = mysqli_fetch_array($result)) {
			echo "<div class='well' style='background-color:#7DE5EB '>";
			echo "ความคิดเห็นที่ ".$row[0];
			echo "<br><br>";
			echo "Email :: ".$row[2];
			echo "<br><br>";
			echo $row[1];
			echo "</div>";
			echo "<hr>";
        }

	
	

	echo "<br><br>";
	mysqli_close($conn);

?>
 
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

    <div class="col-sm-2" margin= right>
      
    </div>

    <div class="col-sm-4" margin= right>
    <br><br>
     <center> <h4>ยอดผู้เข้าชมเว็บไซต์</h4>
      
      <p ><script type='text/javascript' src='https://www.siamecohost.com/member/gcounter/graphcount.php?page=www.home.html&style=02&maxdigits=5'></script></p>
	  
	  <a href ="https://www.dmh.go.th/">กรมสุขภาพจิต   </a> || <a href ="https://www.honestdocs.co/most-common-psychiatric-disorders">Honestdocs   </a> || <a href ="http://www.jvkk.go.th/jvkkfirst/test.htm">โรงพยาบาลจิตเวชขอนแก่น   </a>
     </center>
    </div>

 
</div>

</footer>

</body>
</html>
