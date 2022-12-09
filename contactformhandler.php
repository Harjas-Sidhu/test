
<?php 


if(isset($_POST['email'])){
    
    $name = $_POST['name']; 
    $nemail = $_POST['email']; 

    $email = filter_var($nemail,
        FILTER_SANITIZE_EMAIL);
    
    $six_digit_number = random_int(100000, 999999);
    
   
    $mailBody = '<div style="font-family: Helvetica,Arial,sans-serif;min-width:1000px;overflow:auto;line-height:2">
    <div style="margin:50px auto;width:70%;padding:20px 0">
      <div style="border-bottom:1px solid #eee">
        <a href="" style="font-size:1.4em;color: #00466a;text-decoration:none;font-weight:600">IGC
        LPU</a>
      </div>
      <p style="font-size:1.1em">Hi,<b>'.$name.'<b></p>
      <p>Thank you for Registring to IGC. Use the following OTP to complete your Sign Up procedures.</p>
      <h2 style="background: #00466a;margin: 0 auto;width: max-content;padding: 0 10px;color: #fff;border-radius: 4px;">'.$six_digit_number.'</h2>
      <p style="font-size:0.9em;">Regards,<br />IGC LPU</p>
      <hr style="border:none;border-top:1px solid #eee" />
      <div style="float:right;padding:8px 0;color:#aaa;font-size:0.8em;line-height:1;font-weight:300">
        <p>IGC LPU</p>
        <p>Lovely Professional University,Phagwara,Punjab</p>
        <p>India</p>
      </div>
    </div>
  </div>';
    
    
    $subject = "MyFreeOnlineTools -  OTP (One Time Password)";
    $from = 'harjasuchiha@gmail.com';
    $to = $email; 
    $emailFrom = 'IGC LPU'; 
    $headers = 'From: '. $emailFrom ."\r\n";
    $headers .= 'Reply-To: '. $to ."\r\n";
    $headers .= 'MIME-Version: 1.0' . "\r\n";
    $headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n".'X-Mailer: PHP/' . phpversion();

    
    if($email != ''){
        
        mail($to, $subject, $mailBody, $headers);
        
    }
 echo $six_digit_number; 
    

}



?>