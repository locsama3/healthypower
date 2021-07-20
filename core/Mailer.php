<?php 
    class Mailer {

        private $mail;

        function __construct ($sender = '', $password = '', $nameSender = '') {
            
            $this->mail = new PHPMailer\PHPMailer\PHPMailer(true);  //true: enables exceptions

            global $config;

            $configMailer = $config['mailer'];

            if ($sender == '') {
                $sender = $configMailer['username'];
            }

            if ($password == '') {
                $password = $configMailer['password'];
            }

            if ($nameSender == '') {
                $nameSender = $configMailer['name'];
            }
            
            //Server settings
            $this->mail->SMTPDebug  = 0;                                      //Enable verbose debug output
            $this->mail->isSMTP();                                            //Send using SMTP
            $this->mail->CharSet    = $configMailer['charset'];                                       
            $this->mail->Host       = $configMailer['host'];                  //Set the SMTP server to send through
            $this->mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $this->mail->Username   = $sender;                                //SMTP username
            $this->mail->Password   = $password;                              //SMTP password
            $this->mail->SMTPSecure = $configMailer['SMTPSecure'];            //Enable implicit TLS encryption
            $this->mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`   
            $this->mail->setFrom($sender, $nameSender); 
            
        }

        public function sendMail($receiver, $nameReceiver, $data) {

            //Recipients
            $this->mail->addAddress($receiver, $nameReceiver);     //Add a recipient   
            if (!empty($data['reply']) && $data['replyInfo']) {
                $this->mail->addReplyTo($data['reply'], $data['replyInfo']);
            }          

            //Attachments
            if (!empty($data['attachments'])) {
                foreach ($data['attachments'] as $filePath) {
                    $this->mail->addAttachment($filePath);         //Add attachments
                }
            }

            //Content
            $this->mail->isHTML(true);                             //Set email format to HTML
            $this->mail->Subject = $data['subject'];
            $this->mail->Body    = $data['content'];
            $this->mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
            $this->mail->smtpConnect( array(
                "ssl" => array(
                    "verify_peer" => false,
                    "verify_peer_name" => false,
                    "allow_self_signed" => true
                )
            ));

            if ($this->mail->send()) {
                return true;
            } else {
                return false;
            }
        }
    }
?>