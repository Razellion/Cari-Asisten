<form action="<?php echo site_url('Lecturer/create') ?>" method="POST">
  <div class="container">

  <div style="margin-top: 30px">
   <h1 style="text-align: center; font-family: cursive; padding-bottom: 20px;font-weight: bold;color: black">CREATE ANNOUNCEMENT</h1>
  </div>

  <div class="row">
    <div class="col-md-7">

      	<div  style="background-color: white; padding-bottom: 15px; border-radius: 5px;padding-left: 10px">
  			<label for="title" style="font-size: 17px; text-align: center; font-family: cursive; margin-top: 30px">Title:</label>
    		<input type="text" name="title" style=" width:80%; padding-left:250px;border-radius: 3px; border:2px solid black; margin-left: 20px;"> <br/>
    		<label for="course" style="font-size: 17px; text-align: center; font-family: cursive; ">Course:</label>
   			 <input type="text" name="course" style=" width:33%; border-radius: 3px;border:2px solid black; margin-left: 5px">
   			 	<label for="periode" style="font-size: 17px; text-align: center; font-family: cursive; ">Periode:</label>
   			 <input type="text" name="period" style="width:35%; border-radius: 3px;border:2px solid black">
    	</div>
    </div>
    <div class="col-md-5">

      	<div style="  margin-top :50px; float : left; margin-bottom: : 30px;">
      		<label style="font-family: cursive;">Faculty: </label>
  			<select name="faculty">
  			<option></option>
  			<option value="FIF">FIF</option>
  			<option value="FIK">FIK</option>
  			<option value="FKB">FKB</option>
  			<option value="FTE">FTE</option>
  			<option value="FEB">FEB</option>
  			<option value="FRI">FRI</option>
  			</select>
		</div>
		<div style="padding-right:50px; float:right; margin-top: 50px;">
			<label style="font-family: cursive;">Category:</label>
  			<select name="category">
  			<option></option>
  			<option value="asisten dosen">Asisten Dosen</option>
  			<option value="asisten praktikum">Asisten Praktikum</option>
  			<option value="asisten laboratorium">Asisten Laboratorium</option>
  			</select>
		</div>
    </div>
  </div>
  <div class="row" style="padding-top: 20px;background-color: white;margin-top: 30px; margin-left: 3px;border-radius: 5px">
  	<div style="padding-left: 10px;padding-bottom: 10px;border-radius: 3px">
			<label style="font-size: 17px; text-align: center; font-family: cursive; ">Content:</label><br>
			<input type="textarea" name="content" style="border-radius: 3px;border:2px solid black; width: 1100px; height:220px;">
		</div>
  </div>
  <input type="submit" class="btn btn-primary" value="Post Announcement" style="align-content: center; margin-left: 750px; background-color: #cc0000;margin-bottom: 50px; margin-top: 30px;font-family: cursive; color:white">
</div>
</form>
</body>
</html>
