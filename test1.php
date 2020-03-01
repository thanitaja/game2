<!DOCTYPE html>
<html lang="en">
<head>
<title>แบบทดสอบ12ข้อ</title>
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
   <center> <h2>แบบสอบถามสุขภาพทั่วไป </h2></center>

	<center> <h3>(Thai GHQ – 12)</h3></center>
    
   <hr><br>
<button type="button" class="btn btn-success">คําชี้แจง</button><br><br>
แบบสอบถามนี้มีวัตถุประสงค์เพื่อต้องการทราบถึงสภาวะสุขภาพของท่านในระยะสองถึงสามสัปดาห์ที่ผ่านมาเป็นอย่างไรบ้าง กรุณาตอบคําถามต่อไปนี้ โดยเลือกคําตอบที่ใกล้เคียงกับสภาพของท่านในปัจจุบันหรือในช่วงสามสัปดาห์ที่ผ่านมามากที่สุด โดยไม่รวมถึงปัญหาที่ท่านเคยมีในอดีต และกรุณาตอบคําถามทุกข้อ<br>
<br>




<form method="post" action="process.php">  
      
   <center><div class="row">       
      	<div class="col-75">
		<label for="sex"> เพศ :: </label>
        		<select id="sex" name="sex" required>
	  			<option value="title">กรุณาระบุ</option>
          			<option value="male">ชาย</option>
          			<option value="female">หญิง</option>
        		</select>
      	</div>
	<div class="col-75">
		<label for="age"> อายุ :: </label>
        		<select id="age" name="age" required>
         			 <option value="title">กรุณาระบุ</option>
          			<option value="1">0-12 ปี</option>
	  			<option value="2">13-19 ปี</option>
          			<option value="3">20-25 ปี</option>
	  			<option value="4">26-39 ปี</option>
	 			 <option value="5">40-59 ปี</option>
          			<option value="6">60 ปีขึ้นไป</option>
        		</select>
    	</div>
  </div>

</center>
<br>
<h4><u>ในระยะสองถึงสามสัปดาห์ที่ผ่านมานี้ท่าน</u></h4><br>

    <strong>1.</strong> สามารถมีสมาธิจดจ่อกับสิ่งที่กำลังทำอยู่ได้<br>
	<div class="form-check">
  		
    		<input type="radio" class="form-check-input" name="t1" value="1" checked>&nbsp;&nbsp;ดีกว่าปกติ
  		
	</div>
	
  	<div class="form-check">
    		<input type="radio" class="form-check-input" name="t1" value="2" >&nbsp;&nbsp;เหมือนปกติ
  		
	</div>
	
  	<div class="form-check">
    		<input type="radio" class="form-check-input" name="t1" value="3" >&nbsp;&nbsp;น้อยกว่าปกติ
  		
	</div>
	
  	<div class="form-check">
    		<input type="radio" class="form-check-input" name="t1" value="4" >&nbsp;&nbsp;น้อยกว่าปกติมาก
  	
	</div>

<br><br>

	<strong>2.</strong> นอนไม่หลับเพราะกังวลใจ<br>
	<div class="form-check">
  		
    		<input type="radio" class="form-check-input" name="t2" value="1" checked>&nbsp;&nbsp;ไม่เลย
  		
	</div>
	
  	<div class="form-check">
    		<input type="radio" class="form-check-input" name="t2" value="2">&nbsp;&nbsp;ไม่มากว่าปกติ
  		
	</div>
	
  	<div class="form-check">
    		<input type="radio" class="form-check-input" name="t2" value="3">&nbsp;&nbsp;ค่อนข้างมากกว่าปกติ
  		
	</div>
	
  	<div class="form-check">
    		<input type="radio" class="form-check-input" name="t2" value="4">&nbsp;&nbsp;มากกว่าปกติมาก
  	
	</div>

<br><br>

<strong>3.</strong> รู้สึกว่าได้ทำตัวให้เป็นประโยชน์ในเรื่องต่างๆ<br>
	<div class="form-check">
  		
    		<input type="radio" class="form-check-input" name="t3" value="1" checked>&nbsp;&nbsp;มากกว่าปกติ
  		
	</div>
	
  	<div class="form-check">
    		<input type="radio" class="form-check-input" name="t3" value="2">&nbsp;&nbsp;เหมือนปกติ
  		
	</div>
	
  	<div class="form-check">
    		<input type="radio" class="form-check-input" name="t3" value="3">&nbsp;&nbsp;น้อยกว่าปกติ
  		
	</div>
	
  	<div class="form-check">
    		<input type="radio" class="form-check-input" name="t3" value="4">&nbsp;&nbsp;น้อยกว่าปกติมาก
  	
	</div>

<br><br>

<strong>4.</strong> รู้สึกว่าสามารถตัดสินใจในเรื่องราวต่างๆ ได้<br>
	<div class="form-check">
  		
    		<input type="radio" class="form-check-input" name="t4" value="1" checked>&nbsp;&nbsp;มากกว่าปกติ
  		
	</div>
	
  	<div class="form-check">
    		<input type="radio" class="form-check-input" name="t4" value="2">&nbsp;&nbsp;เหมือนปกติ
  		
	</div>
	
  	<div class="form-check">
    		<input type="radio" class="form-check-input" name="t4" value="3">&nbsp;&nbsp;น้อยกว่าปกติ
  		
	</div>
	
  	<div class="form-check">
    		<input type="radio" class="form-check-input" name="t4" value="4">&nbsp;&nbsp;น้อยกว่าปกติมาก
  	
	</div>

<br><br>

<strong>5.</strong> รู้สึกตึงเครียดอยู่ตลอดเวลา<br>
	<div class="form-check">
  		
    		<input type="radio" class="form-check-input" name="t5" value="1" checked>&nbsp;&nbsp;ไม่เลย
  		
	</div>
	
  	<div class="form-check">
    		<input type="radio" class="form-check-input" name="t5" value="2">&nbsp;&nbsp;ไม่มากกว่าปกติ
  		
	</div>
	
  	<div class="form-check">
    		<input type="radio" class="form-check-input" name="t5" value="3">&nbsp;&nbsp;ค่อนข้างมากกว่าปกติ
  		
	</div>
	
  	<div class="form-check">
    		<input type="radio" class="form-check-input" name="t5" value="4">&nbsp;&nbsp;มากกว่าปกติมาก
  	
	</div>

<br><br>

<strong>6.</strong>  รู้สึกว่าไม่สามารถที่จะเอาชนะความยากลำบากต่างๆ ได้<br>
	<div class="form-check">
  		
    		<input type="radio" class="form-check-input" name="t6" value="1" checked>&nbsp;&nbsp;ไม่เลย
  		
	</div>
	
  	<div class="form-check">
    		<input type="radio" class="form-check-input" name="t6" value="2">&nbsp;&nbsp;ไม่มากกว่าปกติ

  		
	</div>
	
  	<div class="form-check">
    		<input type="radio" class="form-check-input" name="t6" value="3">&nbsp;&nbsp;ค่อนข้างมากกว่าปกติ
  		
	</div>
	
  	<div class="form-check">
    		<input type="radio" class="form-check-input" name="t6" value="4">&nbsp;&nbsp;มากกว่าปกติมาก
  	
	</div>

<br><br>

<strong>7.</strong> สามารถมีความสุขกับกิจกรรมในชีวิตประจำวันตามปกติได้<br>
	<div class="form-check">
  		
    		<input type="radio" class="form-check-input" name="t7" value="1" checked>&nbsp;&nbsp;มากกว่าปกติ
  		
	</div>
	
  	<div class="form-check">
    		<input type="radio" class="form-check-input" name="t7" value="2">&nbsp;&nbsp;เหมือนปกติ
  		
	</div>
	
  	<div class="form-check">
    		<input type="radio" class="form-check-input" name="t7" value="3">&nbsp;&nbsp;น้อยกว่าปกติ
  		
	</div>
	
  	<div class="form-check">
    		<input type="radio" class="form-check-input" name="t7" value="4">&nbsp;&nbsp;น้อยกว่าปกติมาก
  	
	</div>

<br><br>

<strong>8.</strong> สามารถที่จะเผชิญหน้ากับปัญหาต่างๆ ของตัวเองได้<br>
	<div class="form-check">
  		
    		<input type="radio" class="form-check-input" name="t8" value="1" checked>&nbsp;&nbsp;ดีกว่าปกติ
  		
	</div>
	
  	<div class="form-check">
    		<input type="radio" class="form-check-input" name="t8" value="2">&nbsp;&nbsp;เหมือนปกติ
  		
	</div>
	
  	<div class="form-check">
    		<input type="radio" class="form-check-input" name="t8" value="3">&nbsp;&nbsp;น้อยกว่าปกติ
  		
	</div>
	
  	<div class="form-check">
    		<input type="radio" class="form-check-input" name="t8" value="4">&nbsp;&nbsp;น้อยกว่าปกติมาก
  	
	</div>

<br><br>

<strong>9.</strong> รู้สึกไม่มีความสุขและเศร้าหมอง<br>
	<div class="form-check">
  		
    		<input type="radio" class="form-check-input" name="t9" value="1" checked>&nbsp;&nbsp;ไม่เลย
  		
	</div>
	
  	<div class="form-check">
    		<input type="radio" class="form-check-input" name="t9" value="2">&nbsp;&nbsp;ไม่มากกว่าปกติ
  		
	</div>
	
  	<div class="form-check">
    		<input type="radio" class="form-check-input" name="t9" value="3">&nbsp;&nbsp;ค่อนข้างมากกว่าปกติ
  		
	</div>
	
  	<div class="form-check">
    		<input type="radio" class="form-check-input" name="t9" value="4">&nbsp;&nbsp;มากกว่าปกติมาก
  	
	</div>

<br><br>

<strong>10.</strong> รู้สึกเสียความมั่นใจในตัวเองไป<br>
	<div class="form-check">
  		
    		<input type="radio" class="form-check-input" name="t10" value="1" checked>&nbsp;&nbsp;ไม่เลย
  		
	</div>
	
  	<div class="form-check">
    		<input type="radio" class="form-check-input" name="t10" value="2">&nbsp;&nbsp;ไม่มากกว่าปกติ
  		
	</div>
	
  	<div class="form-check">
    		<input type="radio" class="form-check-input" name="t10" value="3" >&nbsp;&nbsp;ค่อนข้างมากกว่าปกติ
  		
	</div>
	
  	<div class="form-check">
    		<input type="radio" class="form-check-input" name="t10" value="4">&nbsp;&nbsp;มากกว่าปกติมาก
  	
	</div>

<br><br>

<strong>11.</strong>  คิดว่าตัวเองเป็นคนไร้ค่า<br>
	<div class="form-check">
  		
    		<input type="radio" class="form-check-input" name="t11" value="1" checked>&nbsp;&nbsp;ไม่เลย
  		
	</div>
	
  	<div class="form-check">
    		<input type="radio" class="form-check-input" name="t11" value="2">&nbsp;&nbsp;ไม่มากกว่าปกติ
  		
	</div>
	
  	<div class="form-check">
    		<input type="radio" class="form-check-input" name="t11" value="3">&nbsp;&nbsp;ค่อนข้างมากกว่าปกติ
  		
	</div>
	
  	<div class="form-check">
    		<input type="radio" class="form-check-input" name="t11" value="4">&nbsp;&nbsp;มากกว่าปกติมาก
  	
	</div>

<br><br>

<strong>12.</strong> รู้สึกมีความสุขดีตามสมควร เมื่อดูโดยรวมๆ<br>
	<div class="form-check">
  		
    		<input type="radio" class="form-check-input" name="t12" value="1" checked>&nbsp;&nbsp;มากกว่าปกติ
  		
	</div>
	
  	<div class="form-check">
    		<input type="radio" class="form-check-input" name="t12" value="2">&nbsp;&nbsp;เท่าๆปกติ
  		
	</div>
	
  	<div class="form-check">
    		<input type="radio" class="form-check-input" name="t12" value="3">&nbsp;&nbsp;น้อยกว่าปกติ
  		
	</div>
	
  	<div class="form-check">
    		<input type="radio" class="form-check-input" name="t12" value="4">&nbsp;&nbsp;น้อยกว่าปกติมาก
  	
	</div>

<br><br>
<center><button type="submit" class="btn btn-success">ตรวจสอบคะแนน</button></center>
  </form>


<br><br>







 <br><br><hr><br>
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
