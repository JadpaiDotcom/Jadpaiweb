<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Login</title>
    
    
    
    
        <link rel="stylesheet" href="<?php echo base_url();?>style/login/css/style.css">

    
    
    
  </head>

  <body>

    <body class="align">

  <div class="site__container">

    <div class="grid__container">

      <form action="<?php echo site_url('login_customer/checklogin')?>" method="post" class="form form--login">

        <div class="form__field">
          <label class="fontawesome-user" for="login__username"><span class="hidden">Username</span></label>
          <input name="username" type="text" class="form__input" placeholder="Username" required>
        </div>

        <div class="form__field">
          <label class="fontawesome-lock" for="login__password"><span class="hidden">Password</span></label>
          <input name="password" type="password" class="form__input" placeholder="Password" required>
        </div>

        <div class="form__field">
          <input type="submit" value="Sign In">
        </div>

      </form>

      <p class="text--center">Not a member? <a href="<?php echo site_url('Login_customer/register')?>">Sign up now</a> <span class="fontawesome-arrow-right"></span></p>

    </div>

  </div>

</body>
    
    
    
    
    
  </body>
</html>
