<!DOCTYPE html>
<html lang="en" dir="ltr" id="index">
  <head>
    <title>Team Roster Pro - Login</title>
    <meta name="description" content="Login to lead your Esport team now.">
    <meta charset="utf-8">
    <!-- Let browser know website is optimized for mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Disable the cache to avoid versioning problems -->
    <meta http-equiv="cache-control" content="max-age=0" />
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="expires" content="0" />
  </head>

  <body>
    <div id="header">
    <h1>Esports Profile</h1>
    </div>

    <div class="form-container" id="form-container">
      <h2>Login</h2>
      <form id="login-form" method="post" action="aloris.php">
        <label for="email">Mail:</label>
        <input type="email" name="email" id="email" required>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>

        <button type="submit" value="login">Login</button>
      </form>
    </div>
  </body>
</html>