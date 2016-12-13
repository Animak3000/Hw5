<?php
	namespace onepersongroup\hw5\views;
	class landingview extends View{
	    function render($data){
?>
		<!DOCTYPE html>
		<html lang='en'>
		    <head>
		   		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
				<meta name="viewport" content="width=device-width, initial-scale=1">
		        <title>Throw-a-Coin-in-the-Fountain</title>

				<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
				<script type="text/javascript" src="https://js.stripe.com/v2/"></script>

				
		    </head>
		    <body>
		        <h1>Throw-a-Coin-in-the-Fountain</h1>
		        <p>Hello and welcome to the website.</p>
		        <p>Select a language:</p>
		        <form>
		            <select name="language">
		            	<option value="english">English</option>
		            	<option value="spanish">Spanish</option>
		            </select>
		            <input type="submit" name="l" value="Select">
		        </form>
		        <p>Select a Custom Fountain to throw a coin in:</p>
		       
						<form action="charge.php" method="POST">
							<script
							  src="https://checkout.stripe.com/checkout.js" class="stripe-button"
							  data-key="pk_test_gEYsLXBw5oBTQoHWHetdeJah"
							  data-amount="200"
							  data-name="Throw-a-Coin-in-the-Fountain"
							  data-description="Make a Wish"
							  data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
							  data-locale="auto">
							</script>
						</form>
		    </body>
		</html>
	<?php
    	}
	}
?>