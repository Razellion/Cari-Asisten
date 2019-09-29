
<!--     <div>
    <div style="margin-left: 500px; margin-right: 500px;background-color: white;border-radius: 10px; margin-top: 50px;border: 2px solid black">
  
  <div style="margin-top: 30px; width:100%;">
    <h2 style="text-align: center; font-family: cursive;">LOGIN</h1>
    <form method='post' action='<?php echo site_url("user/login_user");?>'>
    <label for="InputEmail1" style="font-size: 17px; text-align: center; font-family: cursive;padding-left: 50px; margin-top: 30px">Email:</label>
    <input type="email" id="email" style="padding-left:10px;border-radius: 3px;border:2px solid black;margin-left: 30px; width: 65%;">
  </div>
  <div style="margin-top: 20px">
    <label for="InputPassword1" style="font-size: 17px; text-align: center; font-family: cursive; padding-left: 50px">Password:</label>
    <input type="password" id="password" style="padding-left: 10px;border-radius: 3px;border:2px solid black; width: 65%;">
  </div>
  <button type="submit" style="margin-left: 45%; background-color: #cc0000;margin-bottom: 50px; margin-top: 30px;font-family: cursive;">Sign in</button>
    </form>
    </div>
  </div> -->
  <div style="width: 40%;margin-left: 30%; margin-right: 25%;background-color: white;border-radius: 10px; margin-top: 100px;border: 2px solid black">
  <form method='post' action='<?php echo site_url("user/login_user");?>'>
          <h2 style="text-align: center; font-family: cursive;margin-top: 30px">LOGIN</h1>
          <div style="display: inline-block;">
          <label for="InputEmail1" style="font-size: 17px; text-align: center; font-family: cursive;padding-left: 50px; margin-top: 30px;">Email:</label></div>
          <input type="text" name="email" class="input-box" style="padding-left:10px;border-radius: 3px;border:2px solid black;margin-left: 30px; width: 65%;margin-bottom: 30px" placeholder="Sign-In ID (Email Address)">
          <br/>
          <div style="display: inline-block">
          <label for="InputPassword1" style="font-size: 17px; text-align: center; font-family: cursive; padding-left: 50px">Password:</label></div>
          <input type="password" name="password" class="input-box" style="padding-left:10px;border-radius: 3px;border:2px solid black; width: 65%;margin-bottom: 30px" placeholder="Password">
          <br/>
          <button type="submit" class="btn-danger" style="background-color: #cc0000;margin-left: 45%;margin-bottom: 30px;font-family: cursive;">Sign In</button>
  </form>
  <div>
</body>
</html>