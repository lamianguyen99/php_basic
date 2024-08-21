<!DOCTYPE html>
<html>
<header>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <title>Login Here!</title>
    <h1>Login Page</h1>
</header>
<body>
<form action='finished.php' method='post'>
Username: <input type='text' name='usrnme' /><br>
Password: <input type='password' name='pwd' /><br>
<input type='hidden' name='registerform' value='0'>
<div class='g-recaptcha' data-sitekey='6LewlysqAAAAAKVQsM00xUkk1KlpXPanZFon8t_8'></div>
<br/>
<input type='submit' value='submit'>
</form>

</body>
</html>
