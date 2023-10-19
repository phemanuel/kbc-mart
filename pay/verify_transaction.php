<?php
session_start();

$ref = $_GET['reference'];

if ($ref == "") {
header("location:javascript://history.go(*1)");
}
?>
<?php

  $curl = curl_init();
  
  curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.paystack.co/transaction/verify/" . rawurlencode($ref),
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
      "Authorization: Bearer sk_live_3cd4de2321edddfa4adc4cf77aeecc1f31f50e19",
      "Cache-Control: no-cache",
    ),
  ));
  
  $response = curl_exec($curl);
  $err = curl_error($curl);
  curl_close($curl);
  
  if ($err) {
    echo "cURL Error #:" . $err;
  } else {
    //echo $response;
  $result = json_decode($response);
  }
  if($result->data->status == 'success') {
  //------get results===
  $status = $result->data->status ;
  $reference = $result->data->reference ;
  $cus_email = $result->data->customer->email ;
  $cus_amount = $result->data->amount ;

$_SESSION['status'] = $status ;
$_SESSION['reference'] = $reference ;
$_SESSION['cus_amount'] = $cus_amount ;
$_SESSION['cus_email'] = $cus_email ;

  //date_default_timzone_set('Africa/Lagos');
  //$date_time =  date('Y/m/d h:i:s a',time());
  
  header("location: saveinfo.php");
  }
  
  else{
  echo $response ;
   header("location: error.php");
  }
  
?>