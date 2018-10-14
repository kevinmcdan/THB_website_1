
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="description" content="Tokyo Is Boring">	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Make Reservation</title>
    <meta name='robots' content='index,follow' />
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="dist/css/bootstrap-select.css">
    <link rel="stylesheet" type="text/css" href="reserve.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="dist/js/bootstrap-select.js"></script>
    <script type="text/javascript">   
    
   document.write('\x3Cscript src="' + (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//webfonts.creativecloud.com/redressed:n4:all;rock-salt:n4:all.js" type="text/javascript">\x3C/script>');
    </script>
  
	
</head>
<body> 
<div class="description">
    <h1>Reserve <?php echo $_GET["tour"]; ?></h1>
    <br/>
    
<div id = "forms">
    <p id="errorline"></p>
    
    <p>Full Name:<input type="text" id="fullname" class="entry"><br/></p>
    <p>Email:<input type="text" id="email" class="entry"><br/></p>
    <p>Confirm Email:<input type="text" id="email2" class="entry"><br/></p>
    <p>Date:<input type="text" id="datepicker" class="entry" onchange="printTours();"></p>
    
    <div id="times"><p id="timeList"></p></div>    
    
    <p>Group Size:<select data-live-search="false" title="Please enter your Group Size" id="groupsize" onchange="if (this.selectedIndex) calculatePrice();" class="entry">
            <option value="1" selected="selected">1</option>
                <option value="2" >2</option>
                <option value="3" >3</option>
                <option value="4" >4</option>
                <option value="5" >5</option>
                <option value="6" >6</option>
                <option value="7" >7</option>
                <option value="8" >8</option>
              </select></p>
        
    <script>
    var timeFlag = 0;
        
    function calculatePrice() {
        var e = document.getElementById("groupsize");
        var groupSize = e.options[e.selectedIndex].value;
        var price = groupSize * 6000;
        var finalPrice = document.getElementById("finalPrice"); 
        console.log(finalPrice.value);
        finalPrice.value = price;
        console.log(finalPrice.value);
    }
        
    function printTours() {
        var timeList = document.getElementById('timeList');
        while (timeList.hasChildNodes()) {
            timeList.removeChild(timeList.lastChild);
        }
        
        var times = ['2:00 PM','5:00 PM','8:00 PM'];
        var paragraphs = [];
        timeList.innerHTML = "Times available:";
        for (var i = 0; i < times.length; i++){
            paragraphs[i] = document.createElement("p");
            timeList.appendChild(paragraphs[i]);
            paragraphs[i].innerHTML = times[i];
            paragraphs[i].setAttribute("id",i);
            paragraphs[i].setAttribute("class","paragraph");
            console.log(times[i]);
            paragraphs[i].setAttribute("onclick","recolor(this)")
        }
    }
        
    function recolor(current){
        var paragraphs = document.getElementsByClassName("paragraph");
        for (var i = 0; i < paragraphs.length; i++){
            document.getElementById(i).setAttribute("style","color:black");
        }
        document.getElementById(current.id).setAttribute("style","text-shadow: 2px 2px yellow");
    
        timeFlag = 1;
    }
        
    function checkForm(){
        console.log("ok");
        var fullname = document.getElementById('fullname');
        var email = document.getElementById('email');
        var email2 = document.getElementById('email2');
        var form = document.getElementById('datepicker');
        var form = document.getElementById('payform');
        var errorline = document.getElementById('errorline');
        var paragraphs = document.getElementsByClassName("paragraph");
        console.log(errorline);
        if(fullname.value.length == 0){
            errorline.innerHTML = "Please enter a name.";
        } else if(email.value.indexOf('@') == -1){
            errorline.innerHTML = "Please enter a valid email address.";
        } else if(email.value != email2.value){
            errorline.innerHTML = "Please confirm your email entries.";
        } else if(datepicker.value.length == 0){
            errorline.innerHTML = "Please select a date.";
        } else if(timeFlag == 0){
            errorline.innerHTML = "Please select an available time.";
        } else{ 
            payform.submit();
        }
            
            
    }
    </script>
    
    </div>
    
    <p><br/></p>
    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" id="payform">
    <input type="hidden" name="cmd" value="_xclick">
    <input type="hidden" name="business" value="k3vinmcd@gmail.com">
    <input type="hidden" name="currency_code" value="JPY">

    <input type="hidden" name="item_name" value="<?php echo $_GET["tour"]; ?>">
        <input type="hidden" name="amount" id="finalPrice" value="6000">

    <div class="textarea"><p class="small"> Pay through credit card, debit card or paypal via our secured checkout.</p></div>
        
    </form>
  
    <input type="image" id="paypal" src="http://www.paypal.com/en_US/i/btn/x-click-but01.gif" onclick="checkForm();">
    
    <br/><div class="textarea"><p class="small"> We will send a request form via email in which you can write all information for food preferences, allergies, etc. We are happy to meet your every need. CUSTOM TOUR patrons will receive a more comprehensive request form.</p></div><br/>

<a href="tours.html" id="back"><p style="color: red" style="text-shadow: 2x 2x black">BACK</p></a>
    
</body>
</html>
