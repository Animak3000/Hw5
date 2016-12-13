<?php
namespace onepersongroup\hw5\views;
/**
* Landing page of website.
*/
class landingview extends View{
    function render($data){
    /**
    * Renders the landing page of the website.
    * @param data array containing any information required for rendering.
    */
?>
<!DOCTYPE html>
<html lang='en'>
    <head>
   	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Throw-a-Coin-in-the-Fountain</title>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
        <script language="javascript" type='text/javascript'>
        function check_value(value){
            switch(value){
                case 1:
                    document.getElementById("image").innerHTML = "<img src='src/resources/fountain1.jpg'>";
                    break;
                case 2:
                    document.getElementById("image").innerHTML = "<img src='src/resources/fountain2.jpg'>"; 
                    break;
                case 3:
                    document.getElementById("image").innerHTML = "<img src='src/resources/fountain3.jpg'>"; 
                    break;
                }
            }
        </script>
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
        <div id='image'></div>
        <form action="charge.php" method="POST">
            <input type="radio" name="fountain" value="one" onclick='check_value(1)'>one 
            <input type="radio" name="fountain" value="two" onclick='check_value(2)'>two 
            <input type="radio" name="fountain" value="three" onclick='check_value(3)'>three 
            <script
                src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                data-key="<?php echo publishable_key ?>"
                data-amount="<?php echo PRICE ?>"
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
