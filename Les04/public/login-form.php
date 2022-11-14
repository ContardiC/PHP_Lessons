<?php
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login Form</title>
    </head>
    <body>
        <form action="../src/login.php" method="post">
            <label for="email">Email</label>
            <input type="email" name="email" maxlength="60" required/><br>
            <label for="password">Password</label>
            <input type="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required/><br>
            <small>un numero, una lettera maiuscola, una minuscola e almeno 8 caratteri</small><br>
            <input type="submit"/>
        </form>
    </body>
</html>