<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <link rel="shortcut icon" href="images/favicon.ico">
  <title>Kings of Leon - Register</title>
  <link rel="stylesheet" type="text/css" href="styles/register-style.css">
  <script defer src="js/register-page.js"></script>
</head>
<body>
  <main id="main-container">
    <a href="index.php"><img src="images/home-logo.png" width="50" alt="Go back to the main page"></a>
    <h1 id="register-header">Register</h1>

    <div id="register-error-msg-container">
      <p id="register-error-msg">Sorry, you entered an invalid username or passowrd.</p>
    </div>

    <form action="register_auth.php" method="POST" id="register-form">
      <input type="text" name="username" id="username-fld" class="register-fld" placeholder="username">
      <input type="email" name="email" id="email-fld" class="register-fld" placeholder="e-mail address">
      <input type="password" name="password" id="password-fld" class="register-fld" placeholder="password">
      <input type="submit" name="register" value="register" id="register-btn">
    </form>
  </main>
</body>
</html>
