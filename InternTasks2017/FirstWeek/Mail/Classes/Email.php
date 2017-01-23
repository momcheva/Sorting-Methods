<?php

class Email 
{
    public $sender = "";
    public $message = "";
    public $recepient = "";
    
    public function __construct($name, $question, $email){
        $this->name = $name;
        $this->question = $question;
        $this->email = $email;
    }
    
    public function sendMail(){
        $to = "nora.momcheva@gmail.com";
        $sender = "Nora Momcheva";
        $return_to = "nora.momcheva@mentormate.com";
        $content_type = "text\html; charset=us-ascii";
        $client = "PHP/" . phpversion();


        //if "email" variable is filled out, send email
    
    $headers = "From: " . $sender . "\r\n" . "Reply-To: " . $return_to . "\r\n" . 
            "Content-type: " . $content_type . "\r\n" ."X-Mailer: " . $client . "\r\n";
    
    $subject = "Test email subject";
    $contents .= "<html>";
    $contents .= "<h2>Test Email</h2>";
    $contents .= "<br><b>Sender: " . $sender;
    $contents .= "<br><b>Recepient: " . $tо;
    $contents .= "</html>";
    
    //send email and email response
    $output = mail($to, $subject, $contents, $headers);
    
    if($output) echo "Great! Email sent successfully!";
    else echo "I'm sorry, we couldn't send email.";
    }
}
        
  


?>

