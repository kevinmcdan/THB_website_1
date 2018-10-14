
<?php

require_once('class.phpmailer.php');

if(isset($_GET['tx']))
{
  $tx = $_GET['tx'];
  $result = process_pdt($tx);
    
    if ($result){
        $bodytext = '' . $result[first_name] . ' ' . $result[last_name] . ',
        
        Your ' . $result[item_name] . ' has been confirmed.
        
        We ask that you fill out a short questionnaire regarding your allergies, food preferences, etc. which can be found at the link below. It will only take a few seconds!
        
        http://tokyohandsomeboys.com/questionnaire.php
        
        Please note this email is only for automatic messages from our server. To contact us directly, please use the contact form on our website, or one or both of our personal emails or phone numbers. 
        
        We are looking forward to seeing you then!
        
        Naoki and Kevin, the TOKYO HANDSOME BOYS
        NAOKI: munagezirou@gmail.com 080-6573-0345
        KEVIN: k3vinmcd@gmail.com 090-6511-7003';
        
        $email = new PHPMailer();
        $email->From      = 'naokiandkevin@tokyohandsomeboys.com';
        
        $email->FromName  = 'Naoki and Kevin';
        $email->Subject   = 'Your reservation is confirmed!';
        $email->Body      = $bodytext;
        //$email->AltBody    = $altbodytext;
        $email->AddAddress( 'k3vinmcd@gmail.com' );
        $email->AddAddress( $result['payer_email'] );
        //$email->isHTML(true);
        //$file_to_attach = 'placeholder.png';

        //$email->AddAttachment( $file_to_attach , 'placeholder.png' );
        $email->Send();
    }
}



/**
 * Processes a PDT transaction id.
 *
 * @author     Torleif Berger
 * @link       http://www.geekality.net/?p=1210
 * @license    http://creativecommons.org/licenses/by/3.0/
 * @return     The payment data if $tx was valid; otherwise FALSE.
 */
function process_pdt($tx)
{
        // Init cURL
        $request = curl_init();

        // Set request options
        curl_setopt_array($request, array
        (
                CURLOPT_URL => 'https://www.sandbox.paypal.com/cgi-bin/webscr',
                CURLOPT_POST => TRUE,
                CURLOPT_POSTFIELDS => http_build_query(array
                (
                        'cmd' => '_notify-synch',
                        'tx' => $tx,
                        'at' => 'QqHbzlEg4EUYv5JeI_DitWUiTLLMp11ioQvo_M31wCmHrOv6t-470VnUoS4',
                )),
                CURLOPT_RETURNTRANSFER => TRUE,
                CURLOPT_HEADER => FALSE,
                //CURLOPT_SSL_VERIFYPEER => TRUE,
                //CURLOPT_CAINFO => 'cacert.pem',
        ));

        // Execute request and get response and status code
        $response = curl_exec($request);
        $status   = curl_getinfo($request, CURLINFO_HTTP_CODE);

        /*if(curl_exec($request) === false)
        {
            echo 'Curl error: ' . curl_error($request);
        }
        else
        {
            echo 'Operation completed without any errors';
            $status   = curl_getinfo($request, CURLINFO_HTTP_CODE);
        }*/
    
        // Close connection
        curl_close($request);
        
    
        // Validate response
        if($status == 200 AND strpos($response, 'SUCCESS') === 0)
        {
                // Remove SUCCESS part (7 characters long)
                $response = substr($response, 7);

                // Urldecode it
                $response = urldecode($response);

                // Turn it into associative array
                preg_match_all('/^([^=\r\n]++)=(.*+)/m', $response, $m, PREG_PATTERN_ORDER);
                $response = array_combine($m[1], $m[2]);

                // Fix character encoding if needed
                if(isset($response['charset']) AND strtoupper($response['charset']) !== 'UTF-8')
                {
                        foreach($response as $key => &$value)
                        {
                                $value = mb_convert_encoding($value, 'UTF-8', $response['charset']);
                        }

                        $response['charset_original'] = $response['charset'];
                        $response['charset'] = 'UTF-8';
                }

                // Sort on keys
                ksort($response);

                // Done!
                return $response;
        }
        echo('failed');
        return FALSE;
}




   /*$transactionID=$_POST["txn_id"];
   $item=$_POST["item_name"];
   $amount=$_POST["mc_gross"];
   $currency=$_POST["mc_currency"];
   $datefields=explode(" ",$_POST["payment_date"]);
   $time=$datefields[0];
   $date=str_replace(",","",$datefields[2])." ".$datefields[1]." ".$datefields[3];
   $timestamp=strtotime($date." ".$time);
   $status=$_POST["payment_status"];
   $firstname=$_POST["first_name"];
   $lastname=$_POST["last_name"];
   $email=$_POST["payer_email"];
   $custom=$_POST["option_selection1"];
   if ($transactionID AND $amount)
      {
      // query to save data
      return $this->insertID;
      }
   else
      {
      return 0;
      }*/

    // the message
    
?>

<!DOCTYPE html>
<html>
  <!-- JS includes -->
  <script type="text/javascript">
   document.write('\x3Cscript src="' + (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//webfonts.creativecloud.com/redressed:n4:all;rock-salt:n4:all.js" type="text/javascript">\x3C/script>');
</script>
<head>
	<meta charset="UTF-8">
	<meta name="description" content="Tokyo Is Boring">	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'">
    
    <link rel="stylesheet" type="text/css" href="policy.css">
    <link rel="stylesheet" type="text/css" href="header.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Condensed:300,400,700">
	<title>About Us</title>
<meta name='robots' content='noindex,follow' />
</head>
<body> 
<div id="header">
    <div id="left">
        <a href="top.html"><img src="logo.png"><h2>Tokyo Handsome Boys</h2></a>
    </div>
    <div id="right">
        <a href="tours.html" style="color:black"><h3>TOURS</h3></a><p> / </p> 
        <a href="aboutus.html" style="color:black"><h3>ABOUT US</h3></a><p> / </p>
        <a href="policy.html" style="color:red"><h3>POLICY</h3></a><p> / </p>
        <a href="contact.php" style="color:black"><h3>CONTACT</h3></a>
    </div>
</div>
    <br>
    <br>
    <br>
<div id="textbox">
<h2>YOUR RESERVATION IS CONFIRMED</h2>
    <hr>
    <p><?php echo($result['first_name'] . ' ' . $result['last_name'] . ',')?></p>
    <br>
    <p>Your <?php echo($result['item_name']) ?> has been confirmed!</p>
    <br>
    <p>A confirmation email has been sent to <?php echo($result['payer_email']) ?>.</p>
    <br>
    <p>Arigatou gozaimasu!</p>
</div>
</body>
</html>
