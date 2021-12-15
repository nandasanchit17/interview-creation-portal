<?php
    use PHPMailer\PHPMailer\PHPMailer;
    include '../config.php';

        require_once "../phpmailer/PHPMailer.php";
        require_once "../phpmailer/SMTP.php";
        require_once "../phpmailer/Exception.php";

    $Id=$_GET['id'];


$query="Select ListOfPeople,StartTime,EndTime from interview_schedule where id='$Id' ";
$res=mysqli_query($con,$query);
if($res)
{
    $row=mysqli_fetch_array($res);
    

        $arr = preg_split ("/\,/",$row['ListOfPeople'] );
        
        $st=$row['StartTime'];
        $en=$row['EndTime'];
        for($i=0;$i<sizeof($arr);$i++)
        {
        
                $name = 'Sanchit Nanda';
                $email = 'sanchit17nanda@gmail.com';
                $subject = 'Interview Timings';
                $body = 'You have an interview scheduled from '.$st.' to '.$en;
        
                $mail = new PHPMailer(true);
            
                $mail->isSMTP();
                $mail->Host = "smtp.zoho.com";
                $mail->SMTPAuth = true;
                $mail->Username = "sanchit17nanda@gmail.com";
                $mail->Password = 'Sanchit12#';
                $mail->Port = 587; //587
                $mail->SMTPSecure = "tls"; //tls
        
                $mail->isHTML(true);
                $mail->setFrom($email, $name);
                $mail->addAddress($arr[$i]);
                $mail->Subject = $subject;
                $mail->Body = $body;
        
                if ($mail->send()) {
                    $status = "success";
                    $response = "Email is sent!";
                    echo '<script>alert("Interview Scheduled and Mail has been sent.")</script>';
        	        echo "<script>window.location.href='../index.php';</script>";
                } else {
                    $status = "failed";
                    $response = "Something is wrong: <br><br>" . $mail->ErrorInfo;
                    echo '<script>alert("Error!")</script>';
                }
       }
    }
else
{
    echo "None found";
}   
echo '<script>alert("Interview Scheduled and Mail has been sent.")</script>';
?>
