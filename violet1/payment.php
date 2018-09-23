<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">-->
     <link rel="stylesheet" type="text/css" href="css/style.css">
     <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
     
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script> 
<script src="js/nav.js"></script>
    <script src="js/read_more.js"></script>
    <title>Dream Betting</title>
</head>

<body onLoad="run_first()">

	<?php include("include/banner.inc") ?>
<?php include("include/nav.inc") ?>
    <h1 style="align-content:center">Dream Betting</h1>
 
    
<div class="container">
    	<div class="row">
        	<div class="col">
        		<div class="bg-light mt-3 px-2" style="border-radius: 5px; border: #0000ff solid thick">
<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="GLSARANLEUX3U">
<table>
<tr><td><input type="hidden" name="on0" value="Name of drop-down menu">Name of drop-down menu</td></tr><tr><td><select name="os0">
	<option value="Football">Football $10.00 AUD</option>
	<option value="Tennis">Tennis $5.00 AUD</option>
	<option value="Rugby">Rugby $7.00 AUD</option>
</select> </td></tr>
</table>
<input type="hidden" name="currency_code" value="AUD">
<input type="image" src="https://www.paypalobjects.com/en_AU/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_AU/i/scr/pixel.gif" width="1" height="1">
</form>

            	</div>
            </div>
        </div>
    </div>
	
	<?php include("include/footer.inc") ?>
</body>
</html>