<?php
namespace onepersongroup\hw5\views;
class landingview extends View{
    function render($data){
?>
<!DOCTYPE html>
<html lang='en'>
    <head>
    	<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
        <title>Throw-a-Coin-in-the-Fountain</title>
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
    </body>
</html>

<?php
    }
}
?>
