<!DOCTYPE html>
<html lang="en">
    
<head>
    <title>Yamang Lupa - Login</title><meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php include ("authentication.php"); ?>
    <?php include 'links.php'; ?>
</head>
    <body>
        <div id="loginbox">
            <div class="card card-register mx-auto mt-5 bg-light">
                <div class="card-header alert alert-success alert-link"><h4>Information:</h4></div>
                  <div class="card-body">
                    <div class="text-center">
                    <?php include 'auth.php'; ?>
                      <!-- notification message -->
                        <?php if (isset($_SESSION['success'])) : ?>
                          <div class="error success" >
                            <h3>
                              <?php 
                                echo $_SESSION['success']; 
                                unset($_SESSION['success']);
                              ?>
                            </h3>
                          </div>
                        <?php endif ?>
                        <!-- logged in user information -->
                        <?php  if (isset($_SESSION['fname'])) : ?>
                          <h4 class="alert alert-info">Name:&nbsp <?php echo $_SESSION['fname']; ?></h4>
                        <?php endif ?>
                        <cite>
                          Note: You have successfully registered a new account.
                        </cite>
                    </div>
                    <a class="btn btn-primary btn-block" href="logout.php">Back to login</a>
                </div>
            </div>
        </div>
    </body>
</html>
