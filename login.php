<!DOCTYPE html>
<html>
<header>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

</header>
<body>

<?php
echo "<title>Login Here!</title>"; //Page title
echo "<h1>Login Page</h1>"; //Heading
echo "<form action='finished.php' method='post'>"; 
echo "Username: <input type='text' name='usrnme' /><br>";  //Username box
echo "Password: <input type='password' name='pwd' />  <br>"; //Password box
echo "<input type='hidden' name='registerform' value='0'>"; //Hidden Field.
echo "<div class='g-recaptcha' data-sitekey='6LewlysqAAAAAKVQsM00xUkk1KlpXPanZFon8t_8'></div>";
echo "<br/>";

echo "<input type='submit' value='submit'>"; //Submit button.
echo "</form>"; 
?>
</body>
</html>
