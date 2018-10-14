
<!DOCTYPE html>
<html>
</script>
  <!-- JS includes -->
  <script type="text/javascript">
   document.write('\x3Cscript src="' + (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//webfonts.creativecloud.com/redressed:n4:all;rock-salt:n4:all.js" type="text/javascript">\x3C/script>');
</script>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="description" content="Contact the Tokyo Handsome Boys with any questions about our group or private tours!">	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'">
    <link rel="stylesheet" type="text/css" href="contact.css">
    <link rel="stylesheet" type="text/css" href="header.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Condensed:300,400,700">
	<title>Tokyo Handsome Boys Japan Tours | Contact Us</title>
<meta name='robots' content='index,follow' />
</head>
<body> 
    <?php include_once("analyticstracking.php") ?>
<div id="header">
    <div id="left">
    <a href="top.html"><img src="logo.png"><h2>Tokyo Handsome Boys</h2></a>
    </div>
    <div id="right">
        <a href="tours.html" style="color:black"><h3>TOURS</h3></a><p> / </p> 
        <a href="aboutus.html" style="color:black"><h3>ABOUT US</h3></a><p> / </p>
        <a href="policy.html" style="color:black"><h3>POLICY</h3></a><p> / </p>
        <a href="contact.php" style="color:red"><h3>CONTACT</h3></a><p> / </p>
        <a href="https://www.airbnb.com/rooms/4158544" style="color:black"><h3>AIRBNB</h3></a>
    </div>
</div>
<div class="description">
    <h1>TALK TO THE HANDSOME BOYS</h1>
 <div id = "forms">    
    <form action="contact.php" method="post" id="contactform">
       
    <h2 id="errorline"></h2>
    <div id = "minibox">
    <p>Full Name:<input type="text" id="fullname" name="name" class="entry"><br/></p>
    <p>Email:<input type="text" name="email" id="email" class="entry"><br/></p>
    <p>Confirm Email:<input type="text" id="email2" class="entry"><br/></p>
    <p>Subject:<input type="text" name="subject" id="subject" class="entry"><br/></p>
        <p>Message:<textarea name="message" id="message" cols="40" rows="5" class="entry"></textarea><br/></p>
        <button type="button" onclick="checkForm()">Submit</button>
    </div>
    </form>
    
    
    <?php
     
require_once('class.phpmailer.php');     

if (($_SERVER['REQUEST_METHOD'] == 'POST')) {
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $subject = $_POST['subject'];

    //first mail: for handsome boys
    $body = "From: $name\n E-Mail: $email\n Message:\n $message";
    
    $mailer = new PHPMailer();
    $mailer->From      = $email;

    $mailer->FromName  = $name;
    $mailer->Subject   = $subject;
    $mailer->Body      = $body;
    $mailer->AddAddress( 'tokyohandsomeboys@gmail.com' );
    //$email->isHTML(true);
    //$file_to_attach = 'placeholder.png';

    //$email->AddAttachment( $file_to_attach , 'placeholder.png' );
    $mailer->Send();
    
    //second mail: for customer to confirm
    $body = "Your message on the contact form at tokyohandsomeboys.com was submitted successfully!\nThe contents of your message are displayed below.\nYou can reply to this email to contact us directly if you need to.\n\n $message";
    
    $mailer = new PHPMailer();
    $mailer->From      = 'tokyohandsomeboys@gmail.com';

    $mailer->FromName  = 'Tokyo Handsome Boys';
    $mailer->Subject   = $subject;
    $mailer->Body      = $body;
    $mailer->AddAddress( $email );
    //$email->isHTML(true);
    //$file_to_attach = 'placeholder.png';

    //$email->AddAttachment( $file_to_attach , 'placeholder.png' );
    $mailer->Send();
    
    echo '<h2>Your message has been sent!</p>';
    
}
     
?>
     </div>
    <h1>ON SOCIAL MEDIA</h1>
        <div id="img">
        <a href="https://www.facebook.com/TOKYO-Handsome-BOYS-1085178448177390/"><img src="https://whatswp.com/wp-content/uploads/2014/04/sh.png"></a>
        <a href="https://www.instagram.com/tokyohandsomeboy/?ref=badge" class="ig-b- ig-b-48"><img src="//badges.instagram.com/static/images/ig-badge-48.png" alt="Instagram" /></a>
        <a target="_blank" href="https://www.tripadvisor.com/Attraction_Review-g1066452-d12161829-Reviews-Tokyo_Handsome_Boys-Nakano_Tokyo_Tokyo_Prefecture_Kanto.html"><img src="https://www.tripadvisor.com/img/cdsi/img2/branding/socialWidget/32x32_green-21690-2.png"/></a>

    </div>
    <h1>HOW TO FIND US</h1>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3239.836501232224!2d139.716630615229!3d35.70564083624045!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188d1daee80bcd%3A0x750f2e6fc1d6defe!2s55+Babashitach%C5%8D%2C+Shinjuku-ku%2C+T%C5%8Dky%C5%8D-to+162-0045!5e0!3m2!1sen!2sjp!4v1479373152414" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    <h1>CALL ME BEEP ME IF YOU WANNA REACH ME</h1>
    <h2>NAOKI: &emsp;munagezirou@gmail.com&emsp;+81-80-7573-0345</h2>
    <h2>KEVIN: &emsp;k3vinmcd@gmail.com&emsp;+81-90-6511-7003</h2>
    
</div>
    <br>
    <div style="text-align:center">
    <p>All content on this website is ©2017 Tokyo Handsome Boys. Copying and use of any and all materials without permission is prohibited.</p>
    </div>
    
    <script>
function checkForm(){
        var fullname = document.getElementById('fullname');
        var email = document.getElementById('email');
        var email2 = document.getElementById('email2');
        var subject = document.getElementById('subject');
        var contactform = document.getElementById('contactform');
        var errorline = document.getElementById('errorline');
        var message = document.getElementById('message');
        console.log(errorline);
        if(fullname.value.length == 0){
            errorline.innerHTML = "Please enter a name.";
        } else if(email.value.indexOf('@') == -1){
            errorline.innerHTML = "Please enter a valid email address.";
        } else if(email.value != email2.value){
            errorline.innerHTML = "Please confirm your email entries.";
        } else if(subject.value.length == 0){
            errorline.innerHTML = "Please enter a subject for your message.";
        } else if(message.value.length == 0){
            errorline.innerHTML = "Please enter a message.";
        } else{
            contactform.submit();
        }
            
            
    }
    </script>    

</body>
</html>