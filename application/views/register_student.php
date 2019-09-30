	<div>
			<div class="container-create"style="width: 500px;height: 430px;background-color:white;color:black;margin-left: 35%; margin-top: 50px; border-radius: 15px; border: 2px solid black;">
			<form method='post' action='<?php echo site_url("user/createAccStudent");?>'>
			<h1 style=" margin-bottom:10px; font-size: 30px; padding-left: 10px; padding-top: 10px; text-align: left; font-family: cursive;">Register as Student</h1>
			<div style="margin-top: 35px;height: 250px;width: 380px;margin-left: 15px;">
				<div class="row" style="margin-bottom: 20px;">
					<div class="col-sm-4"> Full Name: </div>
					<div class="col-sm-8"><input style=" width :300px; border: 2px solid black;" type="text" id="fname" name="name"></div>
				</div>
				<div class="row" style="margin-bottom: 20px;">
					<div class="col-sm-4"> NIM: </div>
					<div class="col-sm-8"><input style="width :300px; border: 2px solid black;" type="text" id="fnim" name="nim"></div>
				</div>
				<div class="row" style="margin-bottom: 20px;">
					<div class="col-sm-4"> Email: </div>
					<div class="col-sm-8"><input style="width :300px; border: 2px solid black;" type="text" id="femail" name="email"></div>
				</div>
				<div class="row" style="margin-bottom: 20px;">
					<div class="col-sm-4">Password: </div>
					<div class="col-sm-8"><input style="width :300px; border: 2px solid black;"  type="text" id="fpassword" name="password"></div>
				</div>
				<div class="row" style="margin-bottom: 20px;">
					<div class="col-sm-4">Phone No: </div>
					<div class="col-sm-8"><input style="width:300px; border: 2px solid black;"  type="text" id="fphone" name="phoneNumber"></div>
				</div>
				<div>
					<button type="submit" style=" border :none; background-color:#cc0000; width: 100px; height: 30px; margin-left: 350px; margin-top: 30px; ">
						<p style=" padding-top:2px; font-size:15px; font-family:cursive; text-align:center; color: white;">Finish</p>
					</button>
				</div>
			</div>
			</form>
			</div>	
	</div>
</body>
</html>