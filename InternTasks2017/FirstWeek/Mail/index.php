<?php 

include 'formvalidator.php';

if (isset($_POST['submit']) && !empty($_POST['submit'])) {
    $to = $_POST['email'];
    $sender = 'Nora Momcheva';
    $from = 'nora.momcheva@mentormate.com';
    $message = $_POST['question'];

//if "email" variable is filled out, send email // define headers

    $headers = "From: " . $sender . "\r\n";
    $headers .= "Reply-To: " . $from . "\r\n"; 
    $headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8" . "\r\n";

// define subject

    $subject = 'Test email subject';

    $output = mail($to, $subject, $message, $headers);

    if ($output === true) {
        echo 'Mail has been sent. Thank you!';
    } else {
        echo 'Mail failed sending.';
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv ="X-UA-Compatible" content ="ie=edge">
        <title>Send mail</title>
    </head>
    <body>
        <p><span class="error">* required field.</span></p>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" >
            <b>Name:</b><br>
            <input type="text" value="" name="name">
            <span class="error">* <?php echo $nameErr;?></span>
            <br>
            <b>Email</b><br>
            <input type="text" value="" name="email">
            <span class="error">* <?php echo $emailErr;?></span>
            <br>
            <b>Question:</b><br>
            <textarea type="text" name="question" cols="30" rows="10"></textarea>
            <br><br>
            <input type="submit" name="submit" value="Send">
        </form>
    </body>
</html>

