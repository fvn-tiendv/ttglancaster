<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Send email via Gmail SMTP server in PHP</title>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div id="main">
            <h1>Send Email via Gmail SMTP Server in PHP</h1>
            <div id="login">
                <h2>Send Email</h2>
                <hr/>
                <form action="index.php" method="post">
                    <input type="text" placeholder="Họ và tên" name="ten"/>
                    <input type="text" placeholder="0909151109" name="sdt"/>
                    <input type="text" placeholder="Email" name="email"/>  
                    <input type="text" placeholder="Tiêu đề: " name="subject"/>
                    <textarea rows="4" cols="50" placeholder="Nội dung..." name="message"></textarea>
                    <input type="submit" value="Send" name="send"/>
                </form>    
            </div>
        </div>
          <?php
        
              require 'phpmailer/PHPMailerAutoload.php';
              
              if(isset($_POST['send']))
                  {

                    // $to_id = $_POST['toid'];
                    $message = $_POST['message'];
                    $subject = $_POST['subject'];
                    $ten = $_POST['ten'];
                    $sdt = $_POST['sdt'];
                    $email = $_POST['email'];

                    $mail = new PHPMailer;
                    $mail->CharSet = 'UTF-8';
                    $mail->isSMTP();

                    $mail->Host = 'smtp.gmail.com';

                    $mail->Port = 587;

                    $mail->SMTPSecure = 'tls';

                    $mail->SMTPAuth = true;
                    $mail-> Username = "lancasterttg@gmail.com";
                    $mail -> Password = "eowzvchvttxaiucc";

                    $mail->setFrom('info.ttglancaster@gmail.com', 'TTG LANCASTER');

                    $mail->addReplyTo('info.ttglancaster@gmail.com', 'TTG LANCASTER');

                    // $mail->addAddress($to_id);
                    $mail->addAddress('info.ttglancaster@gmail.com');

                    $mail->Subject = $subject;
                    $mail->IsHTML(true);

                    $mail->Body='Họ và tên khách hàng:  '.$ten.'<br />
						Số điện thoại:  '.$sdt.'<br />
						Email:  '.$email.'<br />
						Nội dung:  <i>'.$message.'</i><br /><br />
						Browser:  '.$_SERVER['HTTP_USER_AGENT'].'<br />
						IP:  '.$_SERVER['REMOTE_ADDR'].'<br />
						';


                    // $mail->msgHTML($message);

                    if (!$mail->send()) {
                       $error = "BẠN VUI LÒNG NHẬP ĐẦY ĐỦ CÁC TRƯỜNG! " . $mail->ErrorInfo;
                        ?><script>alert('<?php echo $error ?>');</script><?php
                    } 
                    else {
                       echo '<script>alert("YÊU CẦU CỦA BẠN ĐÃ ĐƯỢC GỬI ĐI, CHÚNG TÔI SẼ LIÊN HỆ VỚI BẠN!");</script>';
                    }
               }
        ?>
    </body>
</html>
