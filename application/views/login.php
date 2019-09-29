
    <div>
    <div class="container-create" style="margin-left: 500px; margin-right: 500px;background-color: white;border-radius: 10px; margin-top: 50px;border: 2px solid black">
  
<form>
  <div class="form-group" style="margin-top: 30px; width:100%;">
    <h2 style="text-align: center; font-family: cursive;">LOGIN</h1>
    <form method='post' action='<?php echo site_url("user/login_user");?>'>
    <label for="InputEmail1" style="font-size: 17px; text-align: center; font-family: cursive;padding-left: 50px; margin-top: 30px">Email:</label>
    <input type="email" id="InputEmail1" style="padding-left:100px;border-radius: 3px;border:2px solid black;margin-left: 30px; width: 65%;">
  </div>
  <div class="form-group" style="margin-top: 20px">
    <label for="InputPassword1" style="font-size: 17px; text-align: center; font-family: cursive; padding-left: 50px">Password:</label>
    <input type="password" id="InputPassword1" style="padding-left: 100px;border-radius: 3px;border:2px solid black; width: 65%;">
  </div>
  <button type="submit" class="btn btn-primary" style="margin-left: 45%; background-color: #cc0000;margin-bottom: 50px; margin-top: 30px;font-family: cursive;">Sign in</button>
    </form>
    </div>
  </div>
</body>
</html>