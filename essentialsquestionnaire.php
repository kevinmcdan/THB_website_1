
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
    <link rel="stylesheet" type="text/css" href="customquestionnaire.css">
    <link rel="stylesheet" type="text/css" href="header.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Condensed:300,400,700">
	<title>Tokyo Handsome Boys Japan Tours | Essentials Questionnaire</title>
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
    <h1>HARAJUKU+SHIBUYA TOUR QUESTIONNAIRE</h1>
    <p>Thank you very much for taking the time to fill out our questionnaire. If any of the questions apply to you, please give full answers, not just "Yes" or "No", so that we can do our best to accomodate your needs. Otherwise, feel free to leave blank spaces.
    </div>
 <div id = "forms">    
    <form action="essentialsquestionnaire.php" method="post" id="contactform">
       
    <h2 id="errorline"></h2>
    <div id = "minibox">
    <p>1. Your name: <input type="text" id="name" name="name" class="entry"></p>
    <p>2. Name on Reservation: <input type="text" id="resname" name="resname" class="entry"></p>
    <p>3. Your age: <input type="text" id="age" name="age" class="entry"></p>
    <p>4. Could you tell us a little bit about your interests and/or hobbies?
    <textarea name="hobbies" id="hobbies" cols="40" rows="5" class="entry"></textarea><br/></p>
    <p>5. What do you hope to experience from this tour?<input type="text" id="alreadyvisiting" name="alreadyvisiting" class="entry"></p>
    <p>6. What significant locations do you plan on visiting in Tokyo before the tour?<input type="text" id="alreadyvisiting" name="alreadyvisiting" class="entry"></p>
    <p>7. Do you use a wheelchair, cane, etc.?<input type="text" id="wheelchair" name="wheelchair" class="entry"></p>
    <p>8. Do you have reservations about being in a location where smoking is permitted?<input type="text" id="smoking" name="smoking" class="entry"></p>
    <h4>9. To what degree are you expecting the following from this tour? Please select a value for each from 1-5, with 1 being "not at all" and 5 being "very much so".</h4>
    <fieldset>
        <p>Knowledge/Insight</p><input type="radio" name="hope_knowledge" value="1"> 1 <input type="radio" name="hope_knowledge" value="2"> 2 <input type="radio" name="hope_knowledge" value="3"> 3 <input type="radio" name="hope_knowledge" value="4"> 4 <input type="radio" name="hope_knowledge" value="5"> 5 <br><br>
        <p>Interaction with Locals</p><input type="radio" name="hope_interaction" value="1"> 1 <input type="radio" name="hope_interaction" value="2"> 2 <input type="radio" name="hope_interaction" value="3"> 3 <input type="radio" name="hope_interaction" value="4"> 4 <input type="radio" name="hope_interaction" value="5"> 5 <br><br>
        <p>Partying Hard</p><input type="radio" name="hope_party" value="1"> 1 <input type="radio" name="hope_party" value="2"> 2 <input type="radio" name="hope_party" value="3"> 3 <input type="radio" name="hope_party" value="4"> 4 <input type="radio" name="hope_party" value="5"> 5 <br><br>
        <p>Hanging Out</p><input type="radio" name="hope_hangout" value="1"> 1 <input type="radio" name="hope_hangout" value="2"> 2 <input type="radio" name="hope_hangout" value="3"> 3 <input type="radio" name="hope_hangout" value="4"> 4 <input type="radio" name="hope_hangout" value="5"> 5 <br><br>
    </fieldset>
    <h4>10. Do you prefer walking or taking public transportation?</h4>
    <fieldset>
        <br><input type="radio" name="travel" value="walk"> Walking<br><br>
        <input type="radio" name="travel" value="train"> Public Transportation<br><br>
        <input type="radio" name="travel" value="mix"> A good mix of both<br><br>
    </fieldset>
    <h4>11. What is your situation like time-wise?</h4>
    <fieldset>
        <p>Time for start of tour (optional):</p> <input type="text" id="time" name="time" class="entry"> <input type="checkbox" name="time_flexible"> I'm flexible<br><br>
        <p>I need the tour to be over within four hours of the start time</p>
        <input type="radio" name="flex_specifictime" value="yes"> Yes <input type="radio" name="flex_specifictime" value="no"> No <br><br>
    </fieldset>
        
    <p>Thank you very much for taking the time to fill out our questionnaire. We promise to bring you a very HANDSOME TOUR and look forward to seeing you then!!</p>
        <button>Submit</button>
    </div>
    </form>
    
    
    <?php
     
require_once('class.phpmailer.php');
    
if (($_SERVER['REQUEST_METHOD'] == 'POST')) {
    
    $message = "";
        
    foreach($_POST as $key => $val) {
        if ($val != "no"){
            if (is_array($val)){
                $message .= "\n" . $key . ": ";
                foreach($val as $subval) {
                     $message .= $subval . " ";
                }
            }else{
                $message .= "\n" . $key . ": " . $val;
            }
        }

    }   
    
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