<html class="no-js" lang="gr">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title id="title">RoboJS</title>
	<script src="createbot/translate.js"></script>
  </head>
  <body>
  <?php
  $debug=false;
  $require_password=false;
  $secret_password="1234";
  if($debug)if($_POST!=null){print_r($_POST);}
if($_POST!=null)  {
	require "createbot/createbotfile.php";
}
	require "createbot/createbot_form.php";
  ?>
 
  </body>
  </html>
