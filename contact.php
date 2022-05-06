<?php
    $name       = $_POST['name'];
    $email     	= $_POST['email'];
    $message    = $_POST['message'];

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    //Load Composer's autoloader
    require_once '/home/customer/vendor/autoload.php';


    $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
    try {
        //Server settings
        $mail->SMTPDebug = 0;                                 // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = "INSERT-HOST";  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = "INSERT-USERNAME";                 // SMTP username
        $mail->Password = "INSERT-PASSWORD";                           // SMTP password
        $mail->SMTPSecure = "ssl";                           // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 465;                                    // TCP port to connect to

        //Recipients
        $mail->setFrom("INSERT-USERNAME");
        $mail->addAddress("INSERT-RECIPIENT");     // Add a recipient

        //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = "New Email From Contact Form";
        $mail->Body    = "	Name : ".$name."<br>Email: ".$email."<br>Message: ".$message;

        $mail->send();
        echo 'success';
        exit();
    } catch (Exception $e) {
        echo 'error';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    }

?>