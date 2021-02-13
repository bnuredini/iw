<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <link rel="shortcut icon" href="images/favicon.ico">
  <title>Kings of Leon - Login</title>
  <link rel="stylesheet" type="text/css" href="styles/login-style.css">
  <script defer src="js/login-page.js"></script>
</head>
<body>
  <main id="main-container">
    <a href="index.php"><img src="images/home-logo.png" alt="Go back to the main page"></a>
    <h1 id="login-header">Login</h1>

    <div id="login-error-msg-container">
      <p id="login-error-msg">Sorry, you entered an invalid username or passowrd.</p>
    </div>

    <form id="login-form">
      <input type="text" name="username" id="username-fld" class="login-fld" placeholder="username">
      <input type="password" name="password" id="password-fld" class="login-fld" placeholder="password">
      <input type="submit" value="login" id="form-submit">
    </form>
  </main>
</body>
</html>