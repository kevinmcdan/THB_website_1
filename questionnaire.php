
<!DOCTYPE html>
<html>
</script>
  <!-- JS includes -->
  <script type="text/javascript">
   document.write('\x3Cscript src="' + (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//webfonts.creativecloud.com/redressed:n4:all;rock-salt:n4:all.js" type="text/javascript">\x3C/script>');
</script>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="description" content="Questionnaire for reserved guests">	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'">
    <link rel="stylesheet" type="text/css" href="questionnaire.css">
    <link rel="stylesheet" type="text/css" href="header.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Condensed:300,400,700">
	<title>Tokyo Handsome Boys Japan Tours | Questionnaire</title>
<meta name='robots' content='noindex,follow' />
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
        <a href="contact.php" style="color:black"><h3>CONTACT</h3></a><p> / </p>
        <a href="https://www.airbnb.com/rooms/4158544" style="color:black"><h3>AIRBNB</h3></a>
    </div>
</div>
<div class="description">
    <h1>QUESTIONNAIRE</h1>
    <p>Thank you very much for taking the time to fill out our questionnaire. If any of the questions apply to you, please give full answers, not just "Yes" or "No", so that we can do our best to accomodate your needs. Otherwise, feel free to leave blank spaces.
    </div>
 <div id = "forms">    
    <form action="questionnaire.php" method="post" id="contactform">
       
    <h2 id="errorline"></h2>
    <div id = "minibox">
    <p>Your name: <input type="text" id="name" name="name" class="entry"></p>
    <p>Name on Reservation: <input type="text" id="resname" name="resname" class="entry"></p>
    <p>Do you have any food allergies?<input type="text" id="allergies" name="allergies" class="entry"></p>
   <p>Are you a vegetarian or vegan?<input type="text" id="vegan" name="vegan" class="entry"></p>
    <p>Do you have any other health-based dietary restrictions?<input type="text" id="dietary" name="dietary" class="entry"></p>
    <p>Are there any foods you cannot eat for religious reasons?<input type="text" id="religion" name="religion" class="entry"></p>
    <p>Do you use a wheelchair, cane, etc.?<input type="text" id="wheelchair" name="wheelchair" class="entry"></p>
    <p>Do you have reservations about being in a restaurant where smoking is permitted?<input type="text" id="smoking" name="smoking" class="entry"></p>
    <p>What about Tokyo are you most interested in?<input type="text" id="tokyo" name="tokyo" class="entry"></p>
        
        <button>Submit</button>
    </div>
    </form>
    
    
    <?php
     
require_once('class.phpmailer.php');
    
if (($_SERVER['REQUEST_METHOD'] == 'POST')) {
    
    $message = 'Name: ' . $_POST['name'] . '
    Reservation Name: ' . $_POST['resname'] . '
    Allergies: ' . $_POST['allergies'] . '
    Is Vegan/Vegetarian: ' . $_POST['vegan'] . '
    Dietary Restrictions: ' . $_POST['dietary'] . '
    Religious Restrictions: ' . $_POST['religion'] . '
    In a Wheelchair: ' . $_POST['wheelchair'] . '
    OK with Smoking: ' . $_POST['smoking'] . '
    Interest in Tokyo: ' . $_POST['tokyo'];
    
    $email = new PHPMailer();
    $email->From      = 'questionnaire@tokyohandsomeboys.com';

    $email->FromName  = $_POST['name'];
    $email->Subject   = 'Questionnaire completed';
    $email->Body      = $message;
    //$email->AltBody    = $altbodytext;
    $email->AddAddress( 'k3vinmcd@gmail.com' );
    $email->AddAddress( 'munagezirou@gmail.com' );
    //$email->AddAddress( $result['payer_email'] );
    //$email->isHTML(true);
    //$file_to_attach = 'placeholder.png';

    //$email->AddAttachment( $file_to_attach , 'placeholder.png' );
    $email->Send();
    
    echo '<h2>Your questionnaire has been submitted!</p>';
    
}
     
?>
     </div>
    <br>
    <div style="text-align:center">
    <p>All content on this website is ©2017 Tokyo Handsome Boys. Copying and use of any and all materials without permission is prohibited.</p>
    </div>
    
    <script>
function checkForm(){
        var allergies = document.getElementById('allergies');
        var vegan = document.getElementById('vegan');
        var dietary = document.getElementById('dietary');
        var religion = document.getElementById('religion');
        var wheelchair = document.getElementById('wheelchair');
        var smoking = document.getElementById('smoking');
        var tokyo = document.getElementById('tokyo');
        console.log(errorline);
        /*if(fullname.value.length == 0){
            errorline.innerHTML = "Please enter a name.";
        } else if(email.value.indexOf('@') == -1){
            errorline.innerHTML = "Please enter a valid email address.";
        } else if(email.value != email2.value){
            errorline.innerHTML = "Please confirm your email entries.";
        } else if(subject.value.length == 0){
            errorline.innerHTML = "Please enter a subject for your message.";
        } else if(message.value.length == 0){
            errorline.innerHTML = "Please enter a message.";
        } else{*/
            contactform.submit();
        }
            
            
    }
    </script>    

</body>
</html>