<!DOCTYPE html>
<html lang="en">
    
<head>
    <title>Register</title><meta charset="UTF-8" />
    <link rel="shortcut icon" type="image/x-icon" href="../frontend_links/backend_images/icon.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php include 'links.php'; ?>
</head>
    <body>
        <div id="loginbox">
        	<?php include 'auth.php' ?>
            <form id="loginform" class="form-vertical" method="POST" action="register.php">
				 <div class="control-group normal_text"> <h3><img src="../img/logo.png" alt="Logo" /><br><h5 class="text-success">Southern Luzon State University</h5></h3></div>
        		<?php include 'errors.php'; ?>
                <input type="hidden" name="group_id">
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lg"><i class="fa fa-id-card"> </i></span><input type="text" name="fname" placeholder="Name" required/>
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lg"><i class="fa fa-user"> </i></span><input type="text" name="uname" placeholder="Username" required/>
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lo"><i class="fa fa-envelope"> </i></span><input type="email" name="email" placeholder="Email" required/>
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_ly"><i class="fa fa-lock"> </i></span><input type="password" onkeyup="checkPass(); return false;" id="pass1" name="pass" placeholder="Password" required/>
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_ly"><i class="fa fa-lock"> </i></span><input type="password" onkeyup="checkPass(); return false;" id="pass2" name="cpass" placeholder="Confirm Password" required/>
                        </div>
                    </div>
                </div>
                <center><div id="error-nwl"></div></center>
                <div class="form-actions">
                    <span class="pull-right"><input type="submit" name= "register" value="Register" class="btn btn-success" /></span>
                    <span class="pull-left"><a href = "login.php" type="submit" class="btn btn-info">Back to login</a></span>
                </div>
            </form>
        </div>
    </body>
</html>
<script type="text/javascript">
	function checkPass()
	{
	    var pass1 = document.getElementById('pass1');
	    var pass2 = document.getElementById('pass2');
	    var message = document.getElementById('error-nwl');
	    var goodColor = "#66cc66";
	    var badColor = "#ff6666";
	 	
	    if(pass1.value.length > 5)
	    {
	        pass1.style.backgroundColor = goodColor;
	        message.style.color = goodColor;
	        message.innerHTML = "character number ok!"
	    }
	    else
	    {
	        pass1.style.backgroundColor = badColor;
	        message.style.color = badColor;
	        message.innerHTML = "Enter atleast 6 characters"
	        return;
	    }
	  
	    if(pass1.value == pass2.value)
	    {
	        pass2.style.backgroundColor = goodColor;
	        message.style.color = goodColor;
	        message.innerHTML = "Password match!"
	    }
		else
	    {
	        pass2.style.backgroundColor = badColor;
	        message.style.color = badColor;
	        message.innerHTML = "Password doesn't match!"
	    }
	}  
</script>
