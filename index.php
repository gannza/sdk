<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://yegobox.com/sdk/styles.css">
<style>
  .button1{
    background-color: brown;
  }
</style>
</head>
<body class="mat-typography" style="margin:200px">
<a href="https://github.com/yegobox/flutterwave-sdk/tree/master"><strong>Yegobox Payment SDK Documentation</strong></a>
  <payment-sdk  
  enablemomo='true' 
  showbutton='false' modal="md" 
  amount='100' 
  action='Donate' 
  timeout="1000"
  currency="RWF",
  is_creator_account="false",
  account_id=""
  enableredirect="true"
  redirecturl="https://yegobox.com/"
  testing="false"
  ></payment-sdk>
<script src="https://yegobox.com/sdk/payment-sdk.js" type="text/javascript"></script>
</body>

<script>
const el = document.querySelector('payment-sdk');

el.addEventListener('response', (event) => console.log("html",event.detail));
</script>

</html>