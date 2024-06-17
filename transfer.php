<?php
require('vendor/autoload.php');
include('show.php');
try {
	if(isset($_POST['name'])){
		$date1 = date("Y/m/d") ;
		// echo $date;
		$name = $_POST['name'];
		$fname = $_POST['father'];
		$course = $_POST['co'];
		$en = $_POST['en'];
		$DOB = $_POST['dob'];
		$rollno = $_POST['rn'];
		$exno = $_POST['num'];
		$year = $_POST['date'];
		$year2 = $_POST['date2'];
		$date = explode("-",$DOB);
		$y = $date[2];
		$m = $date[1];
		$d = $date[0];
		$newdob = $y."-".$m."-".$d;	
		$state = false;

			$html = '<body>';	
			$html.='<style>.table{border-width: 1px;border-color: black;border-style: solid;margin-top:120px; width:100%; padding: 20px 40px;}
			</style><div class = "table">';
			// $html.='<style> h3{text-align: center;border-width: 0px 0px 1px 0px;border-color: blue;border-color: black;border-style: solid; margin-bottom: 0.7rem;}</style> <h3>College Leaving Certificate</h3>';

			// $html.='<style>table{width:100%;}</style><table>';
			// $html.='<style>.main{width:100%;}</style><table>';

			// $html.= '<style>td{padding-top:4px;border-width: 2px;border-color: black;border-style: solid; }
			// .td{padding-bottom:20px;}.date{text-decoration: underline;}
			// </style><tr><td class="td">Certificate Number. : </td> <td class="td">BCAS/CLC/2022/2102038</td> <td class="td"> Date :</td><td class="td date">' . $date . '</td></tr>';

			// $html.='<tr><td class="td">This is to certify that Mr/Ms. ' .$_POST['name']. '</td></tr>';


			// $html.='<style>.middle{width:50%;}</style>';

			// $html.= '<tr><td >Name</td> <td class="middle" >:  '. $_POST['name'] .'</td></tr> <tr> <td> Salary </td> <td class="middle" >:  Rs.'.$_POST['name'] .'</td></tr> <tr> <td> In Words</td> <td class="middle" >: '. $_POST['name'] .' Rupees ' . '</td></tr> <tr> <td> Paid by</td> <td> :  '.$_POST['name'] .'</td></tr><tr> <td> Paid For</td> <td>:  ________________________________________</td></tr> ';

			// $html.= '<style>td{padding-top:4px;}
			// .td{padding-top:25px;}
			// </style><tr><td class="td"> Prepared By :</td> <td class="td">_________________</td> <td class="td">Recieved By :</td><td class="td">________________</td></tr>';

			$html.='<style>.table{background-image: url("azadi2.jpg");}</style>';
			$html.='<style>table{width:100%;}</style><table>';
			$html.= '<style>td{ border-width: 2px;}</style>';
			$html.= '<style>.cn{width:75%;}</style>';
			$html.= '<style>.center{text-align:center; font-size:20px; padding-top:10px ;padding-bottom:10px;}</style>';
			$html.= '<style>.center2{text-align:left;}</style>';
			$html.='<style>td{padding-top:10px; padding-bottom:10px} </style>';
			$html.='<style>.sign{padding-left:470px; margin-bottom:80px;} </style>';
			$html.='<style>.colllegename{font-size:20px;} </style>';
			$html.='<style>.wish{text-align:justify;font-size:14px;} </style>';
			$html.='<style>.undrline{text-decoration : underline;} </style>';
			$html.='<style>.p{font-size:"10px"; margin-top:5px;} , .signimg{margin-bottom:25px; margin-right:-150px;} </style>';
			$html.= '<style>.img{width:120px; margin-left:350px;} , .img1{width: 130px;margin-left:30px;}</style>';
			$html.='<style>.footer1{font-size:9px;text-align:center;margin-top:0;padding-top:0;} </style>';

			$html.='<tr><td><img class="img1" src="dulogo.jpg"/><td/> <td><img class="img" src="clogo.jpg"/><td/> <tr/></table>';
			// <P class="headername"> BHASKARACHARYA COLLEGE OF APPLIED SCIENCES</P> <P>(University of Delhi)</P><P> Accredited "A" Grade by NAAC. </P>  
			$html.='<table><tr><td class="center"><P class="colllegename"><b> BHASKARACHARYA COLLEGE OF APPLIED SCIENCES </b></P>  <P class="p">(University of Delhi)</P> <p class="p"> Sector-2, Dwarka, New Delhi-110075 </p> <P class="p"> Accredited "A" Grade by NAAC. </P><td/> <tr/></table>';
			
			$html.='<table><tr><td class="cn">Certificate Number: BCAS/CLC/2022/'.$rollno.'<td/> <td>Date : '.$date1.'<td/> <tr/>';
			$html.='</table>';
			
			$html.='<table>';
			$html.='<tr><td class="center"> <b> College Leaving Certificate </b> <td/><tr/>';
			$html.='<tr><td class="wish"> This is to certify that <b> Mr./Ms. '.$name. '</b> son/daughter of <b>Mr. ' .$fname. ' </b>was a student of this college from '.$year2.' to '.$year.' and has successfully passed <b>'.$course.' </b>third year/sixth semester when he/she left the college. <td/><tr/>';
			$html.='<tr><td class="wish"> As per the college record his/her university Enrollment Number is <b>' .$en.' </b>and the date of birth is <b>' .$newdob.' </b><td/><tr/>';
			$html.='<tr><td class="wish"> During the course of study his/her conduct has been found to be good. I have no objection on his/her being transfered to some other college or university.  <td/><tr/>';
			$html.='<tr><td class="center2"><b> I wish him/her all success in his/her career. </b> <td/><tr/>';
			$html.='<tr><td class="sign"> <img src="sign.jpg" class="signimg"/> <b class = "undrline"> Principal (Officiating) </b><td/><tr/>';
			// $html.='<hr>';
			$html.='<tr><td class="footer1">Phone : 011-25087597 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Email:bhaskaracharya.college@bcas.du.ac.in &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; website: https://www.bcas.du.ac.in <td/><tr/>';
			$html.='</table>';
			
			// $html.='<div class="footer">';
			// $html.='<p class="footer1">Phone : 011-25087597 Email:bhaskaracharya.college@bcas.du.ac.in</p>';
			// $html.='<p class="footer2">website: https://www.bcas.du.ac.in</p>';
			// $html.='</div>';
			$html.='</div>';
		$html.= '</body>';

		$mpdf = new \Mpdf\Mpdf();
		$mpdf -> WriteHTML($html);
		$file  = time().'.pdf';
		$file_path="certificate/".$file.".jpg";
		$file_path_pdf="certificate/".$file.".pdf";
		// $path = "1658458908.pdf";
		$mpdf->output($file , 'F');//I(view) , D(download) , F(save in folder), s(store in variable)

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
		$mail->Subject="Transfer Certificate";
		$mail->Body="Transfer Certificate";
		$mail->addAttachment($file);
		// $mail->addStringAttachment($data , "file");
		$mail->SMTPOptions=array("ssl"=>array(
			"verify_peer"=>false,
			"verify_peer_name"=>false,
			"allow_self_signed"=>false,
		));

		if ($mail->send()) {
			$sql = "UPDATE `college3` SET `TC`='alloted' WHERE ExaminationNo = '$exno' ";
			$result = mysqli_query($conn, $sql);
			if($result){
				header("Location:checked.html");
				return;
			}
		}else{
			header("Location:crossed.html");
		}
		
	}else{
		echo "Kindly fill the TC form first";
	}
}  catch (Exception $exception) {
    error_reporting(E_ALL);
    echo "An error occurred: " . $exception->getMessage();
}











	// $font= __DIR__.'/AGENCYR.TTF';
	// header('content-type:image/jpeg');
	// $image=imagecreatefromjpeg("cl.jpg");
	// //echo $image;
	// $color=imagecolorallocate($image,19,21,22);
	// // imagettftext($image,50,0,365,420,$color,$font,$_POST['name']);
	// $dob="31/10/2002";
	// $date=date("Y/m/d");
	// imagettftext($image,10,0,520,45,$color,$font,$date);
	// imagettftext($image,13,0,322,170,$color,$font,ucwords($_POST['name']));
	// imagettftext($image,13,0,115,195,$color,$font,ucwords($_POST['father']));
	// imagettftext($image,12,0,310,220,$color,$font,ucwords($_POST['co']));
	// imagettftext($image,13,0,380,270,$color,$font,$_POST['en']);
	// imagettftext($image,11,0,283,295,$color,$font,$dob);

	// $file= time();
	// $file_path="certificate/".$file.".jpg";
	// $file_path_pdf="certificate/".$file.".pdf";
	// imagejpeg($image,$file_path);
	// imagedestroy($image);

	// require('fpdf.php');
	// $pdf=new FPDF();
	// $pdf->AddPage();
	// $pdf->Image($file_path,0,0,210,150);
	// $pdf->Output($file_path_pdf,"F");

	// include('smtp/PHPMailerAutoload.php');
	// $mail=new PHPMailer();
	// $mail->isSMTP();
	// $mail->Host='smtp.gmail.com';
	// $mail->Port=587;
	// $mail->SMTPSecure="tls";
	// $mail->SMTPAuth=true;
	// $mail->Username="vishusaxena3110@gmail.com";
	// $mail->Password="wtctbbcyaqsfrbmk";
	// $mail->setFrom("vishusaxena3110@gmail.com");
	// $mail->addAddress($_POST['email']);
	// $mail->isHTML(true);
	// $mail->Subjet="Transfer Certificate";
	// $mail->Body="Transfer Certificate";
	// $mail->addAttachment($file_path_pdf);
	// $mail->SMTPOptions=array("ssl"=>array(
	// 	"verify_peer"=>false,
	// 	"verify_peer_name"=>false,
	// 	"allow_self_signed"=>false,
	// ));

	// if($mail->send()){
	// 	//making changes is status of certificate only for tc
	// 	$sql = "UPDATE `collegetable2` SET `TransferCertificate`='alloted' WHERE RollNo = '$rollno' ";
	// 	echo " mansi saxena";
	// 	$result = mysqli_query($conn, $sql);
	// 	if($result){
	// 		header("Location:checked.html");
	// 	}
		
	// }else{
	// 	header("Location:crossed.html");
	// 	// echo 'not send';
	// }

?> 
