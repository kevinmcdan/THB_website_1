
<!DOCTYPE html>
<html>
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
    <h1>CUSTOM TOUR QUESTIONNAIRE</h1>
    <p>Thank you very much for taking the time to fill out our questionnaire. If any of the questions apply to you, please give full answers, not just "Yes" or "No", so that we can do our best to accomodate your needs. Otherwise, feel free to leave blank spaces.
    </div>
 <div id = "forms">    
    <form action="customquestionnaire.php" method="post" id="contactform">
       
    <h2 id="errorline"></h2>
    <div id = "minibox">
    <p>Your name: <input type="text" id="name" name="name" class="entry"></p>
    <p>Name on Reservation: <input type="text" id="resname" name="resname" class="entry"></p>
    <p>Your age: <input type="text" id="age" name="age" class="entry"></p>
    <p>Your location of stay in Tokyo: <input type="text" id="location" name="location" class="entry"></p>
    <h4>Could you tell us a little bit about your interests and/or hobbies?
    <textarea name="hobbies" id="hobbies" cols="40" rows="5" class="entry"></textarea><br/></h4>
    <h4>1. What kind of places are you interested in visiting? (Click a picture to select an option; please select four or fewer)</h4>
    <img onclick="clicker(this);" class="a" src="cq/tokyoview_dark.png"><img onclick="clicker(this);" class="a" src="cq/park_dark.png"><img onclick="clicker(this);" class="a" src="cq/downtown_dark.png"><img onclick="clicker(this);" class="a" src="cq/sightseeing_dark.png"><img onclick="clicker(this);" class="a" src="cq/localplace_dark.png"><img onclick="clicker(this);" class="a" src="cq/seaside_dark.png">
    <div><h3>Tokyo View</h3><p>Experience the whole city at once!</p></div><div><h3>Park & Garden</h3><p>Enjoy a natural beauty that changes with the seasons</p></div><div><h3>Downtown</h3><p>The middle of the metropolis</p></div><div><h3>Main Sightseeing Spot</h3><p>The places you definitely can't miss</p></div><div><h3>Local Place</h3><p>Areas only the real Tokyoites know</p></div><div><h3>Seaside</h3><p>A view of Tokyo Bay from the manmade island Odaiba</p></div>
    <h4>2. What kind of food are you interested in trying? (Please select two or fewer)</h4>
    <img onclick="clicker(this);" class="a" src="cq/sushi_dark.png"><img onclick="clicker(this);" class="a" src="cq/tempura_dark.png"><img onclick="clicker(this);" class="a" src="cq/okonomiyaki_dark.png"><img onclick="clicker(this);" class="a" src="cq/ramen_dark.png"><img onclick="clicker(this);" class="a" src="cq/yakitori_dark.png"><img onclick="clicker(this);" class="a" src="cq/oden_dark.png"><br>
    <div><h3>Sushi</h3><p>Fresh and hand-pressed by only the best</p></div><div><h3>Tempura</h3><p>Deep fried and crunchy shrimp and/or veggies</p></div><div><h3>Okonomiyaki</h3><p>A savory "pancake" with noodles, pork and cabbage</p></div><div><h3>Noodles</h3><p>Ramen, Soba, Udon - An impressive variety of flavors</p></div><div><h3>Yakitori</h3><p>Grilled chicken hits the spot on a night out</p></div><div><h3>Oden</h3><p>A hearty stew of boiled eggs and vegetables to warm you up</p></div>
    <h4>3. What kind of refreshments would you like to enjoy? (Please select three or fewer)</h4>
    <img onclick="clicker(this);" class="a" src="cq/wagashi_dark.png"><img onclick="clicker(this);" class="a" src="cq/tea_dark.png"><img onclick="clicker(this);" class="a" src="cq/coffee_dark.png"><img onclick="clicker(this);" class="a" src="cq/sake_dark.png"><img onclick="clicker(this);" class="a" src="cq/beer_dark.png"><br>
    <div><h3>Wagashi</h3><p>Traditional and colorful Japanese dessert delights</p></div><div><h3>Matcha Tea</h3><p>Green powdered tea with a strong aroma and flavor</p></div><div><h3>Coffee</h3><p>Bitter or sweet, a nice pick-up in the middle of the day</p></div><div><h3>Sake</h3><p>A depth of flavor for first-timers or experienced sake lovers</p></div><div><h3>Beer</h3><p>Brewed in-shop to bring you a uniquely Japanese craft beer</p></div>
    <h4>4. What kind of experiences are you interested in? We will calculate the probable cost of the experiences you choose so you can expect the cost in advance. (These selections are optional; feel free to only choose from the tour options above!)</h4>
    <img onclick="clicker(this);" class="a" src="cq/sushimaking_dark.png"><img onclick="clicker(this);" class="a" src="cq/artmuseum_dark.png"><img onclick="clicker(this);" class="a" src="cq/shopping_dark.png"><img onclick="clicker(this);" class="a" src="cq/liveshow_dark.png"><img onclick="clicker(this);" class="a" src="cq/maidcafe_dark.png"><img onclick="clicker(this);" class="a" src="cq/oedoonsen_dark.png">
    <div><h3>Culture Lesson</h3><p>Practice making sushi, traditional fabrics, trying on kimonos, or even aikido</p></div><div><h3>Art Museum</h3><p>Cutting-edge beauty in a modern city</p></div><div><h3>Shopping</h3><p>A wide variety of possible shopping experiences</p></div><div><h3>Live Concert</h3><p>Feel the excitement of the Japanese youth in person</p></div><div><h3>Concept Cafe</h3><p>Maid cafe, owl cafe, cat cafe - A kawaii dining experience unique to Tokyo</p></div><div><h3>Hot Spring</h3><p>Wear a yukata and enjoy refreshing and medicinal hot baths</p></div>
    <h4>5. Tell us what experiences you're expecting specifically in regards to the options you selected above (for example, if shopping, what kinds of items you are interested in, etc.) Only required if you selected at least one experience above.
    <textarea name="experiences" id="experiences" cols="40" rows="5" class="entry"></textarea><br/></h4>
    <h4>6. What locations in Tokyo are you planning to go to by yourself or on other tours? (So we don't accidentally include them in your tour!!)
    <textarea name="alreadyvisiting" id="alreadyvisiting" cols="40" rows="5" class="entry"></textarea><br/></h4>
    <h4>7. To what degree are you expecting the following from this tour? Please select a value for each from 1-5, with 1 being "not at all" and 5 being "very much so".</h4>
    <fieldset>
        <p>Knowledge/Insight</p><input type="radio" name="hope_knowledge" value="1"> 1 <input type="radio" name="hope_knowledge" value="2"> 2 <input type="radio" name="hope_knowledge" value="3"> 3 <input type="radio" name="hope_knowledge" value="4"> 4 <input type="radio" name="hope_knowledge" value="5"> 5 <br><br>
        <p>Interaction with Locals</p><input type="radio" name="hope_interaction" value="1"> 1 <input type="radio" name="hope_interaction" value="2"> 2 <input type="radio" name="hope_interaction" value="3"> 3 <input type="radio" name="hope_interaction" value="4"> 4 <input type="radio" name="hope_interaction" value="5"> 5 <br><br>
        <p>Partying Hard</p><input type="radio" name="hope_party" value="1"> 1 <input type="radio" name="hope_party" value="2"> 2 <input type="radio" name="hope_party" value="3"> 3 <input type="radio" name="hope_party" value="4"> 4 <input type="radio" name="hope_party" value="5"> 5 <br><br>
        <p>Hanging Out</p><input type="radio" name="hope_hangout" value="1"> 1 <input type="radio" name="hope_hangout" value="2"> 2 <input type="radio" name="hope_hangout" value="3"> 3 <input type="radio" name="hope_hangout" value="4"> 4 <input type="radio" name="hope_hangout" value="5"> 5 <br><br>
    </fieldset>
    <h4>8. Do you prefer walking or taking public transportation?</h4>
    <fieldset>
        <br><input type="radio" name="travel" value="walk"> Walking<br><br>
        <input type="radio" name="travel" value="train"> Public Transportation<br><br>
        <input type="radio" name="travel" value="mix"> A good mix of both<br><br>
    </fieldset>
    <h4>9. What is your situation like time-wise?</h4>
    <fieldset>
        <p>Time for start of tour (optional):</p> <input type="text" id="time" name="time" class="entry"> <input type="checkbox" name="time_flexible"> I'm flexible<br><br>
        <p>I need the tour to be over within eight hours of the start time</p>
        <input type="radio" name="flex_specifictime" value="yes"> Yes <input type="radio" name="flex_specifictime" value="no"> No <br><br>
    </fieldset>
    <h4>10. What's one thing you absolutely want this tour to feature? (optional)
    <textarea name="message" id="message" cols="40" rows="5" class="entry"></textarea><br/></h4>
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
    $email->Subject   = 'Custom Questionnaire completed';
    $email->Body      = $message;
    //$email->AltBody    = $altbodytext;
    $email->AddAddress( 'k3vinmcd@gmail.com' );
    $email->AddAddress( 'munagezirou@gmail.com' );
    //$email->AddAddress( $result['payer_email'] );
    //$email->isHTML(true);
    //$file_to_attach = 'placeholder.png';

    //$email->AddAttachment( $file_to_attach , 'placeholder.png' );
    $email->Send();
    
    echo $message;
    
    echo '<h2>Your questionnaire has been submitted!</p>';
    
}
     
?>
     </div>
    <br>
    <div style="text-align:center">
    <p>All content on this website is ©2017 Tokyo Handsome Boys. Copying and use of any and all materials without permission is prohibited.</p>
    </div>
</body>
    
<script type="text/javascript">
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
       
      

function clicker(x){
    x.src = x.src.replace("_dark", "");
    x.src = x.src.replace(".png", "");
    var id = x.src.replace("http://localhost/tokyoisboring/cq/", "");
    var id = x.src.replace("http://www_tokyohandsomeboys_com/cq/", "");
    var input;
    if (document.getElementById(id) == null){
        var contactform = document.getElementById("contactform");
        input = document.createElement('input');
        document.body.appendChild(input);
        input.setAttribute('id', id);
        input.setAttribute('name', id);
        input.setAttribute('type', 'hidden');
        input.setAttribute('form', 'contactform');
        console.log(document.getElementsByTagName('input'));
    }else{
        input = document.getElementById(id);
    }
    if (x.getAttribute("class") == "b"){
        x.src += "_dark.png";
        x.setAttribute("class", "a");
        input.setAttribute('value', 'no');
    }else{
        x.src += ".png";
        x.setAttribute("class", "b");
        input.setAttribute('value', 'yes');
    }   
}
    
         </script> 
    

</html>