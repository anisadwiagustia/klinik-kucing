<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">
</head>
<body>

  <div class="container">
    <div class="login-form">
      <h1>Login</h1>
      <form action="login/login" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <button type="submit">Login</button>
      </form>
      <p>
        <a href="#">Lupa password?</a>
      </p>
    </div>
  </div>

</body>
</html>
