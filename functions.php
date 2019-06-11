<?php

function link_url(string $uri) : string
{

    $url  = BASE_URL . $uri ;

    return $url ;

}

function sendEmail(array $values):bool
{
    $user_email =$values['email'];
    $subject =$values['title'];
    $content =$values['content'];
    $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
    try {
        //Server settings
        // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = YOUY_EMAIL;                 // SMTP username
        $mail->Password = YOUR_PASSWORD;                           // SMTP password
        $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 465;                                    // TCP port to connect to
        $mail->SMTPAuth = true;
        $mail->CharSet = 'utf-8';
        $mail->FromName = 'ارتباط با ما';
        $mail->ContentType = 'text/html;charset=utf-8';

        //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->AddAddress($user_email, 'User');
        $mail->AddAddress($mail->Username, 'Admin');
        $mail->Subject =$subject;
        $mail->Body = $content;
        /*$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';*/

        $send = $mail->send();
        if ($send)
            $sendMessage =true;

    } catch (Exception $e) {
            $sendMessage = flase ;
        }
    $mail->SmtpClose();
    return $sendMessage;
    }

