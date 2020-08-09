<?php
/*if ( function_exists( 'mail' ) )
{
    echo 'mail() is available';
}
else
{
    echo 'mail() has been disabled';
}*/
?>

<?php
    $name = $_POST['name'];
    $from = $_POST['email'];
    $message = $_POST['message'];
    $phone = $_POST['phone'];
    $company = $_POST['company'];
    $country = $_POST['country'];

    $to_email = "info@twa-sa.com";
    $subject = "TWA Website Form Message";
    $content = "<h3>Name: $name</h3>";
    $content .= "<p>From: $from</p>";
    $content .= "<p>Phone: $phone</p>";
    $content .= "<p>Company: $company</p>";
    $content .= "<p>Country: $country</p>";
    $content .= "<p>Message: $message</p>";
    $headers = "From: noreply@twa-sa.com\r\n";
    $headers .= "X-Mailer: PHP/".phpversion();
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    mail($to_email,$subject,$content,$headers);
?>