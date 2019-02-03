<?php

//sender
$from = 'no-reply@mnnit';
$fromName = 'MNNIT no-reply';
$destination ='upload/charizard.png';

//header for sender info
$headers = "From: MNNIT no-reply<no-reply@mnnit>";

//boundary 
$semi_rand = md5(time()); 
$mime_boundary = "==Multipart_Boundary_x{$semi_rand}x"; 

//headers for attachment 
$headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\""; 

//multipart boundary 
$message = "--{$mime_boundary}\n" . "Content-Type: text/plain; charset=\"UTF-8\"\n" .
"Content-Transfer-Encoding: 7bit\n\n <b>Hello World\nbye-bye</b>\n\n"; 

//preparing attachment
if(!empty($destination) > 0){
    if(is_file($destination)){
        $message .= "--{$mime_boundary}\n";
        $fp =    @fopen($destination,"rb");
        $data =  @fread($fp,filesize($destination));

        @fclose($fp);
        $data = chunk_split(base64_encode($data));
        $message .= "Content-Type: application/octet-stream; name=\"".basename($destination)."\"\n" . 
        "Content-Description: ".basename($destination)."\n" .
        "Content-Disposition: attachment;\n" . " filename=\"".basename($destination)."\"; size=".filesize($destination).";\n" . 
        "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
    }
}
$message .= "--{$mime_boundary}--";
$returnpath = "-f" . $from;

//send email
$mail = @mail("mayanknimcet@gmail.com", $subject, $message, $headers, $returnpath); 
