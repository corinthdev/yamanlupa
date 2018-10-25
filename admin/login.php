<!DOCTYPE html>
<html lang="en">
    
<head>
    <title>Login</title><meta charset="UTF-8" />
    <link rel="shortcut icon" type="image/x-icon" href="../img/icon.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php include 'links.php'; ?>
</head>
    <body>
        <div id="loginbox">
            <?php include 'auth.php'; ?>
            <form id="loginform" class="form-vertical" method="POST" action="login.php">
				 <div class="control-group normal_text"> <h3><img src="../img/logo.png" alt="Logo" /><br><h5 class="text-success">Southern Luzon State University</h5></h3></div>
                 <?php if (isset($_SESSION['error'])) : ?>
                  <strong>
                  <div class="alert alert-danger">
                      <?php 
                        echo $_SESSION['error']; 
                        unset($_SESSION['error']);
                      ?>
                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                  </div>
                  </strong>
                <?php endif ?>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lg"><i class="fa fa-user"> </i></span><input type="text" name="username" placeholder="Username" required/>
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_ly"><i class="fa fa-lock"></i></span><input type="password" name="password" placeholder="Password" required/>
                        </div>
                    </div>
                </div>
                <div class="form-actions">
                    <span><a href="../index.php" class="flip-link btn btn-default">Back to home</a></span>
                    <a href="register.php" class="flip-link btn btn-info">Register</a>&nbsp&nbsp
                    <span><a href="#" class="flip-link btn btn-info" id="to-recover">Forgot Password?</a></span>
                    <span class="pull-right"><input type="submit" name="login" value="Login" class="btn btn-success" /></span>
                </div>
            </form>
            <form id="recoverform" action="#" class="form-vertical">
				<p class="normal_text">Enter your e-mail address below and we will send you instructions how to recover a password.</p>
				
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lo"><i class="fa fa-envelope"></i></span><input type="text" placeholder="E-mail address" />
                        </div>
                    </div>
               
                <div class="form-actions">
                    <span class="pull-left"><a href="#" class="flip-link btn btn-success" id="to-login">&laquo; Back to login</a></span>
                    <span class="pull-right"><a class="btn btn-info">Recover</a></span>
                </div>
            </form>
        </div>
    </body>
</html>
