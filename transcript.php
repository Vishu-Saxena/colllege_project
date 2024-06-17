<?php  
require('vendor/autoload.php');
include('show.php');
try {
	if(isset($_POST['name'] , $_POST['email'] )){
		$date1 = date("Y/m/d") ;
		$name = $_POST['name'];
		$email = $_POST['email'];
		$fname = $_POST['father'];
		$course = $_POST['co'];
		$en = $_POST['enrollNo'];
		$DOA = $_POST['DOA']; //date of admission
		$exno = $_POST['exrollNo']; 
		$YOP = $_POST['passingYear'];
		$medium = $_POST['medium'];
		$refno = $_POST['refno'];
		
		// $sem1 = [[$_POST['s1pc1'] ,$_POST['s1pn1'] ,$_POST['s1pt1'], $_POST['s1cr1'] ,$_POST['s1gl1'] ,	$_POST['s1gp1'] ,$_POST['s1cp1']] , 

		// 		[$_POST['s1pc2'] ,$_POST['s1pn2'] ,$_POST['s1pt2'], $_POST['s1cr2'] ,$_POST['s1gl2'] ,$_POST['s1gp2'] ,$_POST['s1cp2']],

		// 		[$_POST['s1pc3'] ,$_POST['s1pn3'] ,$_POST['s1pt3'], $_POST['s1cr3'] ,$_POST['s1gl3'] ,$_POST['s1gp3'] ,$_POST['s1cp3']],

		// 		[$_POST['s1pc4'] ,$_POST['s1pn4'] ,$_POST['s1pt4'], $_POST['s1cr4'] ,$_POST['s1gl4'] ,$_POST['s1gp4'] ,$_POST['s1cp4']]

		// ] ;    
		
		// $sem2 = [[$_POST['s2pc1'] , $_POST['s2pc1'] ,$_POST['s2pn1'] ,$_POST['s2pt1'], $_POST['s2cr1'] ,$_POST['s2gl1'] ,	$_POST['s2gp1'] ,$_POST['s2cp1']] , 

		// 		[$_POST['s2pc2'] , $_POST['s2pc2'] ,$_POST['s2pn2'] ,$_POST['s2pt2'], $_POST['s2cr2'] ,$_POST['s2gl2'] ,$_POST['s2gp2'] ,$_POST['s2cp2']],

		// 		[$_POST['s2pc3'] , $_POST['s2pc3'] ,$_POST['s2pn3'] ,$_POST['s2pt3'], $_POST['s2cr3'] ,$_POST['s2gl3'] ,$_POST['s2gp3'] ,$_POST['s2cp3']],

		// 		[$_POST['s2pc4'] , $_POST['s2pc4'] ,$_POST['s2pn4'] ,$_POST['s2pt4'], $_POST['s2cr4'] ,$_POST['s2gl4'] ,$_POST['s2gp4'] ,$_POST['s2cp4']]

		// ] ;
		
		// $sem3 = [[$_POST['s3c1'] , $_POST['s3pc1'] ,$_POST['s3pn1'] ,$_POST['s3pt1'], $_POST['s3cr1'] ,$_POST['s3gl1'] ,	$_POST['s3gp1'] ,$_POST['s3cp1']] , 

		// 		[$_POST['s3pc2'] , $_POST['s3pc2'] ,$_POST['s3pn2'] ,$_POST['s3pt2'], $_POST['s3cr2'] ,$_POST['s3gl2'] ,$_POST['s3gp2'] ,$_POST['s3cp2']],

		// 		[$_POST['s3pc3'] , $_POST['s3pc3'] ,$_POST['s3pn3'] ,$_POST['s3pt3'], $_POST['s3cr3'] ,$_POST['s3gl3'] ,$_POST['s3gp3'] ,$_POST['s3cp3']],

		// 		[$_POST['s3pc4'] , $_POST['s3pc4'] ,$_POST['s3pn4'] ,$_POST['s3pt4'], $_POST['s3cr4'] ,$_POST['s3gl4'] ,$_POST['s3gp4'] ,$_POST['s3cp4']]

		// ];  


		$html ='<body>';

		$html.='<style> .container{width : 100%; height: 100%;} </style>';
		$html.='<style>.sign{width : 60px; height: 30px; margin-left: 550px; margin-top: 20px;}</style>';

		$html.='<style>.table{border-width: 1px;border-color: black;border-style: solid;margin-top:120px; width:100%; padding: 20px 40px;} ,.img{width:90px; margin-left:0px; border-radius: 50%;} , .img1{width:100px;margin-left:10px; border-radius:50%;}</style>';

		$html.='<style> .border{border-width: 1px;border-color: black;border-style: solid;} </style>';

		$html.='<style> .table2{width : 100%} </style>';

		$html.='<style>.center{text-align:center; font-size:20px; padding-top:10px ;padding-bottom:10px;}</style>';
		$html.='<style>.colllegename{font-size:15px;} , .colSize{width : 250px;} </style>';
		$html.='<style>.p{font-size: 12px; margin-top:5px;} , .signimg{margin-bottom:25px; margin-right:-150px;}  </style>';
		$html.='<style>.cn{width:76%; margin:auto;} , .cn2{width : 64%;} , .cn3{width : 40%; margin-left : 75%; margin-top: 2px;} ,.cn4{width:74%;}</style>';
		$html.='<style> .mt{margin-top:10px;} , .mt2{margin-top: 50px} , .mt3{margin-top : 5px , margin-bottom:2px;}, .pt{padding-top:10px; padding-bottom : 10px; padding-left:2px; padding-right :3px;} , .pad{padding-left : 25px; padding-right : 25px;} , .textCenter{text-align:center;} .mtngtv{margin-top: -15px;} ,.mbngtv{margin-bottom : 2px;}, .ml{margin-left : 15px;}, .ml2{margin-left : 5px;} </style>';

		$html.='<style>.txtalign{text-align: right;}, .smlFont{font-size : 12px;} , .smlFont2{font-size : 8px;} , .smlFont3{font-size : 12px;} ,.padding{padding : 5px;} </style>';
		// class for page3 footer
		$html.='<style>.footer1{margin-top : 230px;}</style>';


		// ----------------------------------------------------PAGE 1---------------------------------------------------//

		$html.='<div class="container border">';
		// /--------------header-----------------//
		$html.='<div class = "table2"> <table class="table2 border"> <tbody> <tr><td ><img class="img1" src="dulogo.jpg"/><td/>
		<td class="center"><P class="colllegename"><b> BHASKARACHARYA COLLEGE OF APPLIED SCIENCES </b></P>  <P class="p">(University of Delhi)</P> <p class="p"> Sector-2, Dwarka, New Delhi-110075 </p> <P class="p"> Accredited "A" Grade by NAAC. </P><td/> <td><img class="img" src="logo.jpeg"/> <td/> <tr/>
		</tbody> </table> </div>';

		$html.='<table class = "cn mtngtv pad "><tr><td class="smlFont2">STAR College Status by DBT,Govt. of India <td/> <td class=" textCenter smlFont2" >IGNOU-LSC 38042 <td/> <tr/>';
		$html.='</table>';
		$html.='<table class="table2"><tr><td class="cn smlFont">Ref. No. '.$refno.' <td/> <td class="smlFont" >Date : '.$date1.' <td/> <tr/>';
		$html.='</table>';
		$html.='<table class="table2 mt"><tr class="border"> <td class=" textCenter"> <h4 class="textCenter" >STATEMENT OF MARKS</h4> </td> </tr>
		</table>';

		$html.='<table class="table2 "> <tr> <td class ="cn2 smlFont3"> Candidate Name : '.$name.' <td/> <td class="smlFont3"> Enrollment No. : '.$en.'<td/> </tr> </table>';
		
		$html.='<table class="table2 "> <tr> <td class =" cn2 smlFont3"> Fathers Name :  '.$fname.' <td/> <td class="smlFont3"> Date Of Admission : '.$DOA.' <td/> </tr> </table>';

		$html.='<table class="table2 "> <tr> <td class =" cn2 smlFont3"> Course Pursuing : '.$course.' <td/> <td class="smlFont3"> Examination Roll No.: '.$exno.' <td/> </tr> </table>';
		
		$html.='<table class="table2 "> <tr> <td class =" cn2 smlFont3"> Medium : '.$medium.' <td/> <td class="smlFont3"> Year of passing : '.$YOP.' <td/> </tr> </table>';

		// ---------------header ends----------------//
		$html.='<h4 class="textCenter mt3">I Semester</h4>';

		$html.='<table class="border table2">';
		$html.='<thead><tr>
		<th scope="col" class = "border padding smlFont">S.No</th>
		<th scope="col" class = "border padding smlFont">Paper Code</th>
		<th scope="col" class = "border padding smlFont colSize">Paper Name</th>
		<th scope="col" class = "border padding smlFont">Paper Type</th>
		<th scope="col" class = "border padding smlFont">Credit</th>
		<th scope="col" class = "border padding smlFont">Grade Letter</th>
		<th scope="col" class = "border padding smlFont">Grade Point</th>
		<th scope="col" class = "border padding smlFont">Credit Point</th>
		</tr></thead>';

		$html.='<tbody>';
		$html.='<tr>
		<th scope="row" class="border padding textCenter smlFont">1</th>
		<td class="border padding textCenter smlFont">758458</td>
		<td class="border padding textCenter smlFont colSize">C++</td>
		<td class="border padding textCenter smlFont">CORE</td>
		<td class="border padding textCenter smlFont"> 6</td>
		<td class="border padding textCenter smlFont">A</td>
		<td class="border padding textCenter smlFont">10</td>
		<td class="border padding textCenter smlFont"> 48 </td>
		
		</tr>';
		$html.='<tr>
		<th scope="row" class="border padding textCenter smlFont">2</th>
		<td class="border padding textCenter smlFont">758459</td>
		<td class="border padding textCenter smlFont colSize">Descrete Structures</td>
		<td class="border padding textCenter smlFont">CORE</td>
		<td class="border padding textCenter smlFont"> 6</td>
		<td class="border padding textCenter smlFont">A</td>
		<td class="border padding textCenter smlFont">10</td>
		<td class="border padding textCenter smlFont"> 43 </td>
		
		</tr>';
		$html.='<tr>
		<th scope="row" class="border padding textCenter smlFont">3</th>
		<td class="border padding textCenter smlFont">758480</td>
		<td class="border padding textCenter smlFont colSize">Pshycology</td>
		<td class="border padding textCenter smlFont">GE</td>
		<td class="border padding textCenter smlFont"> 4</td>
		<td class="border padding textCenter smlFont">A</td>
		<td class="border padding textCenter smlFont">10</td>
		<td class="border padding textCenter smlFont"> 37 </td>
		
		</tr>';
		$html.='<tr>
		<th scope="row" class="border padding textCenter smlFont">4</th>
		<td class="border padding textCenter smlFont">758480</td>
		<td class="border padding textCenter smlFont colSize">English</td>
		<td class="border padding textCenter smlFont">AECC</td>
		<td class="border padding textCenter smlFont"> 4 </td>
		<td class="border padding textCenter smlFont">A</td>
		<td class="border padding textCenter smlFont">10</td>
		<td class="border padding textCenter smlFont"> 34 </td>
		</tr>';
		$html.='</tbody>';
		$html.='</table>';

		$html.='<h4 class="textCenter">II Semester</h4>';

		$html.='<table class="border table2">';
		$html.='<thead><tr>
		<th scope="col" class = "border padding smlFont">S.No</th>
		<th scope="col" class = "border padding smlFont">Paper Code</th>
		<th scope="col" class = "border padding smlFont colSize">Paper Name</th>
		<th scope="col" class = "border padding smlFont">Paper Type</th>
		<th scope="col" class = "border padding smlFont">Credit</th>
		<th scope="col" class = "border padding smlFont">Grade Letter</th>
		<th scope="col" class = "border padding smlFont">Grade Point</th>
		<th scope="col" class = "border padding smlFont">Credit Point</th>
		</tr></thead>';

		$html.='<tbody>';
		$html.='<tr>
		<th scope="row" class="border padding textCenter smlFont">1</th>
		<td class="border padding textCenter smlFont">mansi</td>
		<td class="border padding textCenter smlFont">mansi</td>
		<td class="border padding textCenter smlFont">mansi</td>
		<td class="border padding textCenter smlFont"> mansi</td>
		<td class="border padding textCenter smlFont">mansi</td>
		<td class="border padding textCenter smlFont">mansi</td>
		<td class="border padding textCenter smlFont"> mansi </td>
		
		</tr>';
		$html.='<tr>
		<th scope="row" class="border padding textCenter smlFont">2</th>
		<td class="border padding textCenter smlFont">mansi</td>
		<td class="border padding textCenter smlFont">mansi</td>
		<td class="border padding textCenter smlFont">mansi</td>
		<td class="border padding textCenter smlFont"> mansi</td>
		<td class="border padding textCenter smlFont">mansi</td>
		<td class="border padding textCenter smlFont">mansi</td>
		<td class="border padding textCenter smlFont"> mansi </td>
		
		</tr>';
		$html.='<tr>
		<th scope="row" class="border padding textCenter smlFont">3</th>
		<td class="border padding textCenter smlFont">mansi</td>
		<td class="border padding textCenter smlFont">mansi</td>
		<td class="border padding textCenter smlFont">mansi</td>
		<td class="border padding textCenter smlFont"> mansi</td>
		<td class="border padding textCenter smlFont">mansi</td>
		<td class="border padding textCenter smlFont">mansi</td>
		<td class="border padding textCenter smlFont"> mansi </td>
		
		</tr>';
		$html.='<tr>
		<th scope="row" class="border padding smlFont textCenter">4</th>
		<td class="border padding textCenter smlFont">mansi</td>
		<td class="border padding textCenter smlFont">mansi</td>
		<td class="border padding textCenter smlFont">mansi</td>
		<td class="border padding textCenter smlFont"> mansi</td>
		<td class="border padding textCenter smlFont">mansi</td>
		<td class="border padding textCenter smlFont">mansi</td>
		<td class="border padding textCenter smlFont"> mansi </td>
		</tr>';
		$html.='</tbody>';
		$html.='</table>';
		$html.='<h4 class="textCenter">III Semester</h4>';

		$html.='<table class="border table2">';
		$html.='<thead><tr>
		<th scope="col" class = "border padding smlFont">S.No</th>
		<th scope="col" class = "border padding smlFont">Paper Code</th>
		<th scope="col" class = "border padding smlFont colSize">Paper Name</th>
		<th scope="col" class = "border padding smlFont">Paper Type</th>
		<th scope="col" class = "border padding smlFont">Credit</th>
		<th scope="col" class = "border padding smlFont">Grade Letter</th>
		<th scope="col" class = "border padding smlFont">Grade Point</th>
		<th scope="col" class = "border padding smlFont">Credit Point</th>
		</tr></thead>';

		$html.='<tbody>';
		$html.='<tr>
		<th scope="row" class="border padding textCenter smlFont">1</th>
		<td class="border padding textCenter smlFont">mansi</td>
		<td class="border padding textCenter smlFont">mansi</td>
		<td class="border padding textCenter smlFont">mansi</td>
		<td class="border padding textCenter smlFont"> mansi</td>
		<td class="border padding textCenter smlFont">mansi</td>
		<td class="border padding textCenter smlFont">mansi</td>
		<td class="border padding textCenter smlFont"> mansi </td>
		
		</tr>';
		$html.='<tr>
		<th scope="row" class="border padding textCenter smlFont">2</th>
		<td class="border padding textCenter smlFont">mansi</td>
		<td class="border padding textCenter smlFont">mansi</td>
		<td class="border padding textCenter smlFont">mansi</td>
		<td class="border padding textCenter smlFont"> mansi</td>
		<td class="border padding textCenter smlFont">mansi</td>
		<td class="border padding textCenter smlFont">mansi</td>
		<td class="border padding textCenter smlFont"> mansi </td>
		
		</tr>';
		$html.='<tr>
		<th scope="row" class="border padding textCenter smlFont">3</th>
		<td class="border padding textCenter smlFont">mansi</td>
		<td class="border padding textCenter smlFont">mansi</td>
		<td class="border padding textCenter smlFont">mansi</td>
		<td class="border padding textCenter smlFont"> mansi</td>
		<td class="border padding textCenter smlFont">mansi</td>
		<td class="border padding textCenter smlFont">mansi</td>
		<td class="border padding textCenter smlFont"> mansi </td>
		
		</tr>';
		$html.='<tr>
		<th scope="row" class="border padding textCenter smlFont">4</th>
		<td class="border padding textCenter smlFont">mansi</td>
		<td class="border padding textCenter smlFont">mansi</td>
		<td class="border padding textCenter smlFont">mansi</td>
		<td class="border padding textCenter smlFont"> mansi</td>
		<td class="border padding textCenter smlFont">mansi</td>
		<td class="border padding textCenter smlFont">mansi</td>
		<td class="border padding textCenter smlFont"> mansi </td>
		</tr>';
		$html.='</tbody>';
		$html.='</table>';
		$html.='<img class="sign" src="sign2.jpg"/>';

		$html.='<div class="smlFont2 textCenter cn3">Acting Principal Bhaskaracharya College Of Applied Sciences (University of Delhi) Sector-2,Phase-1,Dwarka,New Delhi-110075 </div>';

		//------------------- footer -----------------//
		$html.='<hr class="mbngtv">';
		$html.='<table class="table2">
		<tr> <td class="smlFont2 cn"><p> Sector-2,Phase-1,Dwarka,New Delhi-110075(INDIA) </p> <p> Sector-2,Phase-1,Dwarka,New Delhi-110075(INDIA)</p></td><td class="smlFont2"> <p>Phone : 011-25087597, 011-25081015 </p> <p> E-mail : bhaskaracharya.college@bcas.du.ac.in </p><p>Website : https://bcas.du.ac.in </p></td></tr>
		</table>';
		$html.='</div>';


		//----------------------------------------------- page2 ------------------------------------------------//

		$html.='<div class="container border">';

		// /--------------header-----------------//
		$html.='<div class = "table2"> <table class="table2 border"> <tbody> <tr><td ><img class="img1" src="dulogo.jpg"/><td/>
		<td class="center"><P class="colllegename"><b> BHASKARACHARYA COLLEGE OF APPLIED SCIENCES </b></P>  <P class="p">(University of Delhi)</P> <p class="p"> Sector-2, Dwarka, New Delhi-110075 </p> <P class="p"> Accredited "A" Grade by NAAC. </P><td/> <td><img class="img" src="logo.jpeg"/><td/> <tr/>
		</tbody> </table> </div>';

		$html.='<table class = "cn mtngtv pad "><tr><td class="smlFont2 ">STAR College Status by DBT,Govt. of India <td/> <td class=" textCenter smlFont2" >IGNOU-LSC 38042 <td/> <tr/>';
		$html.='</table>';
		$html.='<table class="table2"><tr><td class="cn smlFont">Ref. No. '.$refno.' <td/> <td class="smlFont" >Date : '.$date1.' <td/> <tr/>';
		$html.='</table>';
		$html.='<table class="table2 mt"><tr class="border"> <td class=" textCenter"> <h4 class="textCenter" >STATEMENT OF MARKS</h4> </td> </tr>
		</table>';

		$html.='<table class="table2 "> <tr> <td class ="cn2 smlFont3"> Candidate Name : '.$name.' <td/> <td class="smlFont3"> Enrollment No. : '.$en.'<td/> </tr> </table>';
		
		$html.='<table class="table2 "> <tr> <td class =" cn2 smlFont3"> Fathers Name :  '.$fname.' <td/> <td class="smlFont3"> Date Of Admission : '.$DOA.' <td/> </tr> </table>';

		$html.='<table class="table2 "> <tr> <td class =" cn2 smlFont3"> Course Pursuing : '.$course.' <td/> <td class="smlFont3"> Examination Roll No.: '.$exno.' <td/> </tr> </table>';
		
		$html.='<table class="table2 "> <tr> <td class =" cn2 smlFont3"> Medium : '.$medium.' <td/> <td class="smlFont3"> Year of passing : '.$YOP.' <td/> </tr> </table>';

		// ---------------header ends----------------//
		$html.='<h4 class="textCenter mt3">I Semester</h4>';

		$html.='<table class="border table2">';
		$html.='<thead><tr>
		<th scope="col" class = "border padding smlFont">S.No</th>
		<th scope="col" class = "border padding smlFont">Paper Code</th>
		<th scope="col" class = "border padding smlFont colSize">Paper Name</th>
		<th scope="col" class = "border padding smlFont">Paper Type</th>
		<th scope="col" class = "border padding smlFont">Credit</th>
		<th scope="col" class = "border padding smlFont">Grade Letter</th>
		<th scope="col" class = "border padding smlFont">Grade Point</th>
		<th scope="col" class = "border padding smlFont">Credit Point</th>
		</tr></thead>';

		$html.='<tbody>';
		$html.='<tr>
		<th scope="row" class="border padding textCenter smlFont">1</th>
		<td class="border padding textCenter smlFont">mansi</td>
		<td class="border padding textCenter smlFont colSize">mansi</td>
		<td class="border padding textCenter smlFont">mansi</td>
		<td class="border padding textCenter smlFont"> mansi</td>
		<td class="border padding textCenter smlFont">mansi</td>
		<td class="border padding textCenter smlFont">mansi</td>
		<td class="border padding textCenter smlFont"> mansi </td>
		
		</tr>';
		$html.='<tr>
		<th scope="row" class="border padding textCenter smlFont">2</th>
		<td class="border padding textCenter smlFont">mansi</td>
		<td class="border padding textCenter smlFont colSize">mansi</td>
		<td class="border padding textCenter smlFont">mansi</td>
		<td class="border padding textCenter smlFont"> mansi</td>
		<td class="border padding textCenter smlFont">mansi</td>
		<td class="border padding textCenter smlFont">mansi</td>
		<td class="border padding textCenter smlFont"> mansi </td>
		
		</tr>';
		$html.='<tr>
		<th scope="row" class="border padding textCenter smlFont">3</th>
		<td class="border padding textCenter smlFont">mansi</td>
		<td class="border padding textCenter smlFont colSize">mansi</td>
		<td class="border padding textCenter smlFont">mansi</td>
		<td class="border padding textCenter smlFont"> mansi</td>
		<td class="border padding textCenter smlFont">mansi</td>
		<td class="border padding textCenter smlFont">mansi</td>
		<td class="border padding textCenter smlFont"> mansi </td>
		
		</tr>';
		$html.='<tr>
		<th scope="row" class="border padding textCenter smlFont">4</th>
		<td class="border padding textCenter smlFont">mansi</td>
		<td class="border padding textCenter smlFont colSize">mansi</td>
		<td class="border padding textCenter smlFont">mansi</td>
		<td class="border padding textCenter smlFont"> mansi</td>
		<td class="border padding textCenter smlFont">mansi</td>
		<td class="border padding textCenter smlFont">mansi</td>
		<td class="border padding textCenter smlFont"> mansi </td>
		</tr>';
		$html.='</tbody>';
		$html.='</table>';

		$html.='<h4 class="textCenter">II Semester</h4>';

		$html.='<table class="border table2">';
		$html.='<thead><tr>
		<th scope="col" class = "border padding smlFont">S.No</th>
		<th scope="col" class = "border padding smlFont">Paper Code</th>
		<th scope="col" class = "border padding smlFont colSize">Paper Name</th>
		<th scope="col" class = "border padding smlFont">Paper Type</th>
		<th scope="col" class = "border padding smlFont">Credit</th>
		<th scope="col" class = "border padding smlFont">Grade Letter</th>
		<th scope="col" class = "border padding smlFont">Grade Point</th>
		<th scope="col" class = "border padding smlFont">Credit Point</th>
		</tr></thead>';

		$html.='<tbody>';
		$html.='<tr>
		<th scope="row" class="border padding textCenter smlFont">1</th>
		<td class="border padding textCenter smlFont">mansi</td>
		<td class="border padding textCenter smlFont">mansi</td>
		<td class="border padding textCenter smlFont">mansi</td>
		<td class="border padding textCenter smlFont"> mansi</td>
		<td class="border padding textCenter smlFont">mansi</td>
		<td class="border padding textCenter smlFont">mansi</td>
		<td class="border padding textCenter smlFont"> mansi </td>
		
		</tr>';
		$html.='<tr>
		<th scope="row" class="border padding textCenter smlFont">2</th>
		<td class="border padding textCenter smlFont">mansi</td>
		<td class="border padding textCenter smlFont">mansi</td>
		<td class="border padding textCenter smlFont">mansi</td>
		<td class="border padding textCenter smlFont"> mansi</td>
		<td class="border padding textCenter smlFont">mansi</td>
		<td class="border padding textCenter smlFont">mansi</td>
		<td class="border padding textCenter smlFont"> mansi </td>
		
		</tr>';
		$html.='<tr>
		<th scope="row" class="border padding textCenter smlFont">3</th>
		<td class="border padding textCenter smlFont">mansi</td>
		<td class="border padding textCenter smlFont">mansi</td>
		<td class="border padding textCenter smlFont">mansi</td>
		<td class="border padding textCenter smlFont"> mansi</td>
		<td class="border padding textCenter smlFont">mansi</td>
		<td class="border padding textCenter smlFont">mansi</td>
		<td class="border padding textCenter smlFont"> mansi </td>
		
		</tr>';
		$html.='<tr>
		<th scope="row" class="border padding smlFont textCenter">4</th>
		<td class="border padding textCenter smlFont">mansi</td>
		<td class="border padding textCenter smlFont">mansi</td>
		<td class="border padding textCenter smlFont">mansi</td>
		<td class="border padding textCenter smlFont"> mansi</td>
		<td class="border padding textCenter smlFont">mansi</td>
		<td class="border padding textCenter smlFont">mansi</td>
		<td class="border padding textCenter smlFont"> mansi </td>
		</tr>';
		$html.='</tbody>';
		$html.='</table>';
		$html.='<h4 class="textCenter">III Semester</h4>';

		$html.='<table class="border table2">';
		$html.='<thead><tr>
		<th scope="col" class = "border padding smlFont">S.No</th>
		<th scope="col" class = "border padding smlFont">Paper Code</th>
		<th scope="col" class = "border padding smlFont colSize">Paper Name</th>
		<th scope="col" class = "border padding smlFont">Paper Type</th>
		<th scope="col" class = "border padding smlFont">Credit</th>
		<th scope="col" class = "border padding smlFont">Grade Letter</th>
		<th scope="col" class = "border padding smlFont">Grade Point</th>
		<th scope="col" class = "border padding smlFont">Credit Point</th>
		</tr></thead>';

		$html.='<tbody>';
		$html.='<tr>
		<th scope="row" class="border padding textCenter smlFont">1</th>
		<td class="border padding textCenter smlFont">mansi</td>
		<td class="border padding textCenter smlFont">mansi</td>
		<td class="border padding textCenter smlFont">mansi</td>
		<td class="border padding textCenter smlFont"> mansi</td>
		<td class="border padding textCenter smlFont">mansi</td>
		<td class="border padding textCenter smlFont">mansi</td>
		<td class="border padding textCenter smlFont"> mansi </td>
		
		</tr>';
		$html.='<tr>
		<th scope="row" class="border padding textCenter smlFont">2</th>
		<td class="border padding textCenter smlFont">mansi</td>
		<td class="border padding textCenter smlFont">mansi</td>
		<td class="border padding textCenter smlFont">mansi</td>
		<td class="border padding textCenter smlFont"> mansi</td>
		<td class="border padding textCenter smlFont">mansi</td>
		<td class="border padding textCenter smlFont">mansi</td>
		<td class="border padding textCenter smlFont"> mansi </td>
		
		</tr>';
		$html.='<tr>
		<th scope="row" class="border padding textCenter smlFont">3</th>
		<td class="border padding textCenter smlFont">mansi</td>
		<td class="border padding textCenter smlFont">mansi</td>
		<td class="border padding textCenter smlFont">mansi</td>
		<td class="border padding textCenter smlFont"> mansi</td>
		<td class="border padding textCenter smlFont">mansi</td>
		<td class="border padding textCenter smlFont">mansi</td>
		<td class="border padding textCenter smlFont"> mansi </td>
		
		</tr>';
		$html.='<tr>
		<th scope="row" class="border padding textCenter smlFont">4</th>
		<td class="border padding textCenter smlFont">mansi</td>
		<td class="border padding textCenter smlFont">mansi</td>
		<td class="border padding textCenter smlFont">mansi</td>
		<td class="border padding textCenter smlFont"> mansi</td>
		<td class="border padding textCenter smlFont">mansi</td>
		<td class="border padding textCenter smlFont">mansi</td>
		<td class="border padding textCenter smlFont"> mansi </td>
		</tr>';
		$html.='</tbody>';
		$html.='</table>';
		$html.='<img class="sign" src="sign2.jpg"/>';

		$html.='<div class="smlFont2 textCenter cn3">Acting Principal Bhaskaracharya College Of Applied Sciences (University of Delhi) Sector-2,Phase-1,Dwarka,New Delhi-110075 </div>';

		//------------------- footer -----------------//
		$html.='<hr class="mbngtv">';
		$html.='<table class="table2">
		<tr> <td class="smlFont2 cn"><p> Sector-2,Phase-1,Dwarka,New Delhi-110075(INDIA) </p> <p> Sector-2,Phase-1,Dwarka,New Delhi-110075(INDIA)</p></td><td class="smlFont2"> <p>Phone : 011-25087597, 011-25081015 </p> <p> E-mail : bhaskaracharya.college@bcas.du.ac.in </p><p>Website : https://bcas.du.ac.in </p></td></tr>
		</table>';
		$html.='</div>';

		// -------------------page 3 ---------------------------//

		$html.='<div class="container border">';
		// /--------------header-----------------//
		$html.='<div class = "table2"> <table class="table2 border"> <tbody> <tr><td ><img class="img1" src="dulogo.jpg"/><td/>
		<td class="center"><P class="colllegename"><b> BHASKARACHARYA COLLEGE OF APPLIED SCIENCES </b></P>  <P class="p">(University of Delhi)</P> <p class="p"> Sector-2, Dwarka, New Delhi-110075 </p> <P class="p"> Accredited "A" Grade by NAAC. </P><td/> <td><img class="img" src="logo.jpeg"/><td/> <tr/>
		</tbody> </table> </div>';

		$html.='<table class = "cn mtngtv pad "><tr><td class="smlFont2 ">STAR College Status by DBT,Govt. of India <td/> <td class=" textCenter smlFont2" >IGNOU-LSC 38042 <td/> <tr/>';
		$html.='</table>';
		$html.='<table class="table2"><tr><td class="cn smlFont">Ref. No. '.$refno.' <td/> <td class="smlFont" >Date : '.$date1.' <td/> <tr/>';
		$html.='</table>';
		$html.='<table class="table2 mt"><tr class="border"> <td class=" textCenter"> <h4 class="textCenter" >STATEMENT OF MARKS</h4> </td> </tr>
		</table>';

		$html.='<table class="table2 "> <tr> <td class ="cn2 smlFont3"> Candidate Name : naem if candidate <td/> <td class="smlFont3"> Enrollment No. : '.$en.'<td/> </tr> </table>';
		
		$html.='<table class="table2 "> <tr> <td class =" cn2 smlFont3"> Fathers Name :  '.$fname.' <td/> <td class="smlFont3"> Date Of Admission : '.$DOA.' <td/> </tr> </table>';

		$html.='<table class="table2 "> <tr> <td class =" cn2 smlFont3"> Course Pursuing : '.$course.' <td/> <td class="smlFont3"> Examination Roll No.: '.$exno.' <td/> </tr> </table>';
		
		$html.='<table class="table2 "> <tr> <td class =" cn2 smlFont3"> Medium : english <td/> <td class="smlFont3"> Year of passing : '.$YOP.' <td/> </tr> </table>';

		$html.='<h4 class="mt2 textCenter">Details Upto VI Semester</h4>';

		$html.='<table class="border table2">';
		$html.='<thead>
			<tr>
			<th scope="col" class="border padding textCenter">SEM</th>
			<th scope="col" class="border padding textCenter">Total Credit</th>
			<th scope="col" class="border padding textCenter">Total Credit Point</th>
			<th scope="col" class="border padding textCenter">SGPA</th>
			<th scope="col" class="border padding textCenter">Result</th>
			<th scope="col" class="border padding textCenter">CGPA</th>
			</tr>
			</thead>';

		$html.='<tbody>
			<tr>
			<th scope="row" class="border padding textCenter">I</th>
			<td class="border padding textCenter"></td>
			<td class="border padding textCenter"></td>
			<td class="border padding textCenter"></td>
			<td class="border padding textCenter" rowspan="2"></td>
			<td class="border padding textCenter" rowspan="2"></td>            
			</tr>

			<tr>
			<th scope="row" class="border padding textCenter">II</th>
			<td class="border padding textCenter"></td>
			<td class="border padding textCenter"></td>
			<td class="border padding textCenter"></td>
			</tr>

			<tr>
			<th scope="row" class="border padding textCenter">III</th>
			<td class="border padding textCenter"></td>
			<td class="border padding textCenter"></td>
			<td class="border padding textCenter"></td>
			<td class="border padding textCenter" rowspan="2"></td>
			<td class="border padding textCenter" rowspan="2"></td>  
			</tr>

			<tr>
			<th scope="row" class="border padding textCenter">IV</th>
			<td class="border padding textCenter"></td>
			<td class="border padding textCenter"></td>
			<td class="border padding textCenter"></td>
			</tr>

			<tr>
			<th scope="row" class="border padding textCenter">V</th>
			<td class="border padding textCenter"></td>
			<td class="border padding textCenter"></td>
			<td class="border padding textCenter"></td>
			<td class="border padding textCenter" rowspan="2"></td>
			<td class="border padding textCenter" rowspan="2"></td>  
			</tr>

			<tr>
			<th scope="row" class="border padding textCenter">VI</th>
			<td class="border padding textCenter"></td>
			<td class="border padding textCenter"></td>
			<td class="border padding textCenter"></td>
			</tr>

			</tbody>';
		$html.='</table>';
		
		$html.='<p class="smlFont3  ml2"> <b> Grand CGPA : 6.189, Division : Second. </b></p><p class="smlFont3 ml2"> <b>Final Percentage of marks(%)= CGPA based on all six Semesters X 9.5.</b></p>';

		$html.='<img class="sign" src="sign2.jpg"/>';

		$html.='<div class="smlFont2 textCenter cn3">Acting Principal Bhaskaracharya College Of Applied Sciences (University of Delhi) Sector-2,Phase-1,Dwarka,New Delhi-110075 </div>';

		//------------------- footer -----------------//
		$html.='<hr class="footer1">';
		$html.='<table class="table2">
		<tr> <td class="smlFont2 cn4"><p> Sector-2,Phase-1,Dwarka,New Delhi-110075(INDIA) </p> <p> Sector-2,Phase-1,Dwarka,New Delhi-110075(INDIA)</p></td><td class="smlFont2"> <p>Phone : 011-25087597, 011-25081015 </p> <p> E-mail: bhaskaracharya.college@bcas.du.ac.in </p> <p>Website : https://bcas.du.ac.in </p></td></tr>
		</table>';
		$html.='</div>';

		$html.='</body>';

		$mpdf = new \Mpdf\Mpdf();
		$mpdf -> WriteHTML($html);
		$file  =time().'.pdf';
		$file_path="certificate/".$file.".jpg";
		$file_path_pdf="certificate/".$file.".pdf";
		// $path = "1658458908.pdf";
		$mpdf -> output($file , 'F');//I

		include('smtp/PHPMailerAutoload.php');
		$mail=new PHPMailer();
		$mail->isSMTP();
		$mail->Host='smtp.gmail.com';
		$mail->Port=587;
		$mail->SMTPSecure="tls";
		$mail->SMTPAuth=true;
		$mail->Username="vishusaxena3110@gmail.com";
		$mail->Password="vbemeoeadopcvzqf";
		$mail->setFrom("vishusaxena3110@gmail.com");
		// $mail->addAddress($_POST['email']);
		$mail->addAddress("mansisaxena670@gmail.com");
		$mail->isHTML(true);
		$mail->Subject="Provisional Certificate";
		$mail->Body="This is an autogenerated email please do not reply to it .";
		$mail->addAttachment($file);
		$mail->SMTPOptions=array("ssl"=>array(
			"verify_peer"=>false,
			"verify_peer_name"=>false,
			"allow_self_signed"=>false,
		));
		//making changes is status of certificate only for tc
		if ($mail->send()) {
			$sql = "UPDATE `college3` SET `provCert`='alloted' WHERE ExaminationNo = '$exno' ";
			$result = mysqli_query($conn, $sql);
			if($result){
				header("Location:checked.html");
				return;
			}
		}else{
			header("Location:crossed.html");
		}
	}else{
		header("Location:phpmailer/ac.php");
	}
} catch (Exception $exception) {
    error_reporting(E_ALL);
    echo "An error occurred: " . $exception->getMessage();
}
?>