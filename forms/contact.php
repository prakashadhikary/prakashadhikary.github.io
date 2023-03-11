<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
  // $receiving_email_address = 'prakashadhikary456@gmail.com';

  // if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
  //   include( $php_email_form );
  // } else {
  //   die( 'Unable to load the "PHP Email Form" Library!');
  // }

  // $contact = new PHP_Email_Form;
  // $contact->ajax = true;
  
  // $contact->to = $receiving_email_address;
  // $contact->from_name = $_POST['name'];
  // $contact->from_email = $_POST['email'];
  // $contact->subject = $_POST['subject'];

  // // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  // $contact->smtp = array(
  //   'host' => 'ftpupload.net',
  //   'username' => 'epiz_28011094',
  //   'password' => 'lqqZZ4Z95eSSVH',
  //   'port' => '21'
  // );

  // $contact->add_message( $_POST['name'], 'From');
  // $contact->add_message( $_POST['email'], 'Email');
  // $contact->add_message( $_POST['message'], 'Message', 10);

  // echo $contact->send();
?>

<?php
if(isset($_POST['submit'])) {
  $to = "prakashadhikary456@gmail.com"; // Your email address

  // Collect form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  // Construct email body
  $body = "Name: $name\n\nEmail: $email\n\nMessage:\n$message";

  // Set headers
  $headers = "From: $name <$email>\r\n";
  $headers .= "Reply-To: $name <$email>\r\n";

  // Send email
  if(mail($to, $subject, $body, $headers)) {
    // Email sent successfully
    echo "<p>Thank you for contacting me. I'll get back to you soon!</p>";
  } else {
    // Email failed to send
    echo "<p>Sorry, there was a problem sending your message. Please try again later.</p>";
  }
}
?>
