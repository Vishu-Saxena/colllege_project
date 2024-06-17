<?php


// header('content-type:image/jpeg');
// //$image=imagecreatefromjpeg("certificate.jpg");




// require('fpdf.php');
// $pdf=new FPDF();
// $pdf->AddPage();
// $pdf->Image("college_leaving.jpg",0,0,210,160);
// $pdf->Output();
// include('smtp/PHPMailerAutoload.php');
// $mail=new PHPMailer();
// $mail->isSMTP();
// $mail->Host='smtp.gmail.com';
// $mail->Port=587;
// $mail->SMTPSecure="tls";
// $mail->SMTPAuth=true;
// $mail->Username="vishusaxena3110@gmail.com";
// $mail->Password="saxena3110";
// $mail->setFrom("vishusaxena3110@gmail.com");
// $mail->addAddress("mansisaxena670@gmail.com");
// $mail->isHTML(true);
// $mail->Subjet="Certificate Generated";
// $mail->Body="Certificate Generated";
// $mail->addAttachment("certificate/1588786846.pdf");
// $mail->SMTPOptions=array("ssl"=>array(
//     "verify_peer"=>false,
//     "verify_peer_name"=>false,
//     "allow_self_signed"=>false,
// ));
/*if($mail->send()){
    echo "Send";
}else{
    echo $mail->ErrorInfo;
}*/



$font= __DIR__.'/AGENCYR.TTF';
	header('content-type:image/jpeg');
	$image=imagecreatefromjpeg("cl.jpg");
	//echo $image;
	$color=imagecolorallocate($image,19,21,22);
	$name="Bhusheti venkata sai teza";
	$Fname="Bhusheti venkata sai teza";
	$course="B.Sc.(Hons)Computer Science ";
	$en="XXXXXXXXXXX";
	$dob="31/10/2002";
	// imagettftext($image,50,0,365,420,$color,$font,$_POST['name']);
	imagettftext($image,13,0,322,170,$color,$font,$name);
	imagettftext($image,13,0,115,195,$color,$font,$Fname);
	imagettftext($image,12,0,310,220,$color,$font,$course);
	imagettftext($image,13,0,380,270,$color,$font,$en);
	imagettftext($image,11,0,283,295,$color,$font,$dob);
	// $date="6th may 2020";
	$date=date("Y/m/d");
	imagettftext($image,10,0,520,45,$color,$font,$date);
	$file=time();
	$file_path="certificate/".$file.".jpg";
	$file_path_pdf="certificate/".$file.".pdf";
	imagejpeg($image,$file_path);
	imagedestroy($image);

	require('fpdf.php');
	$pdf=new FPDF();
	$pdf->AddPage();
	$pdf->Image($file_path,0,0,210,150);
	$pdf->Output($file_path_pdf,"F");


?>