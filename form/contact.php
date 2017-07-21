<?php
if(isset($_POST['email'])) {

    //here is the email to information
    $email_to ="michael.hands@live.com";
    $email_subject ="This is from your website contact form";
    $email_from ="My website";
    
    //error code
    
    function died($error){
        echo "We are sorry, but there were error(s) found with the form you submitted.";
        echo "These error(s) appear below.<br/><br/>";
        echo $error. "<br/><br/>";
        echo "Please go back and fix these errors." <br/>
        die();
    }

    //validation
    
    if(!isset($_POST['name']) ||
    !isset($POST['comments'])) {
        died('We are sorry but there seems to be a problem with the form you submitted.');

    }
    
    $name = $_POST['name'];
    $name = $_POST['email'];
    $name = $_POST['comments'];
    
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
    if(!preg_match($email_exp, $email)) {
        $error_message .= 'The email address you entered does not appear to be valid.<br/>';
    }
    
    $string_exp = "/^[A-Za-z.'-]+$/";
    if (!preg_match($string_exp, $name)){
    $error_message .= 'The Name you entered does not appear to be valid.<br/>';
    }
    
    if(strlen($comments) < 2 {
        $error_message .= 'The Comments you have entered does not appear to be valid.<br/>';
    }
    if(strlen($error_message) > 0 ) {
        died($error_message);
        }
       $email_message = "Form Details below.\n\n";
       
    function clean_string($string){
    $bad = array("content=type", "bcc:", "to:", "cc:", "href");
        return str_replace($bad, "", $string);
    }
       $email_message .= "name:" . clean_string($name) . "\n";
       $email_message .= "email:" . clean_string($email) . "\n";
       $email_message .= "comments:" . clean_string($comments) . "\n";
       
       //create email headers
       $headers = 'From:' .$email_From . "\r\n". 'Reply-To:' .$email. "\r\n" .
       'X-Mailer: PHP/' .phpversion();
       @mail($email_to, $email_subject, $email_message, $headers);
         
?>
<!--success message goes here-->
Thankyou for contacting us. We will be in touch with you shortly. <br/>
Please click<a href="index.html">here</a>to go back to the homepage
<?php
       
}

?>