<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css.css">
</head>
<body>



<form class="login-form" action="http://lokscloud.ipq.co:8080/lgin.php" method="POST">
  <p class="login-text">
    <span class="fa-stack fa-lg">
      <i class="fa fa-circle fa-stack-2x"></i>
      <i class="fa fa-lock fa-stack-1x"></i>
    </span>
  </p>

  <label for="Password" class="login-text">Login code</label><br>
  <input type="password" id="lname" name="userpwd" required="true" placeholder="password" class="login-password"><br><br>
  <input type="submit" value="Login" class="login-submit">
</form> 

<div class="underlay-photo"></div>
<div class="underlay-black"></div> 


</body>
</html>