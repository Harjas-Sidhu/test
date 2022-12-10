<?php
    function sendotp($email, $otp)
    {
        $mailBody = '<div style="text-center: center; width: 60%; margin: auto; max-width: 100%; font-family: Arial;  ">
        <div><h1>OTP VerificationNumber</h1></div>
        <div>Hi, '.$name.'</div>
        <div style="margin: 20px 0px;"><span style="background-color: #000; color: #FFF; padding: 10px;  ">'.$six_digit_number.'<span></div>
        <div>Please use the above OTP to complete registration</div>';
         
        $subject = "IGC - LPU -  OTP (One Time Password)";
        $from = 'harjassidhu1@gmail.com';
        $to = $email; 
        $emailFrom = 'IGC - LPU'; 
        $headers = 'From: '. $emailFrom ."\r\n";
        $headers .= 'Reply-To: '. $to ."\r\n";
        $headers .= 'MIME-Version: 1.0' . "\r\n";
        $headers .= "Content-type:text/html;charset=utf-8" . "\r\n".'X-Mailer: PHP/' . phpversion();
 
     
        if($email != '')
        {
            mail($to, $subject, $mailBody, $headers);
        }
    }

    date_default_timezone_set("Asia/Kolkata");

    $success = 0;

    if(!empty($_POST["Submit"]))
    {
        $otp = rand(100000, 999999);
        $mail_status = sendotp($_POST["email"], $otp);
        $success = 1;
    }
    if(!empty($_POST["Submit_otp"]))
    {
        if($otp == $_POST["otp"])
        {
            $success = 2;
        }
        else
        {
            $success = 1;
            $error_msg = "Invalid OTP!";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(!empty($success == 1))
        {
    ?>
    <div style="position: absolute; top: 25%; left: 25%; height: 10vw; width: 20vw; background-color: aquamarine; display: flex; justify-content: center; align-items: center; flex-direction: column; row-gap: 2vw;">
            <h1>Enter OTP</h1>
            <input type="text" placeholder="                 OTP" name="otp" style="height: 2vw;">
            <button id="Submit_otp" name="Submit_otp">Submit</button>
    </div>
    <?php
        }
        elseif($success == 2)
        {
    ?>
    <p>Registration Successful !!</p>
    <?php
        }
        else
        {
    ?>
    <form name="frm" method="post" action="" style="position: absolute; top: 25%; left: 25%; height: 10vw; width: 20vw; background-color: aquamarine; display: flex; justify-content: center; align-items: center; flex-direction: column; row-gap: 2vw;">
        <input type="email" placeholder="                 Email" name="email" style="height: 2vw;">
        <button id="Submit" name="Submit">Submit</button>
    </form>
    <?php
        }
    ?>
</body>
</html>