<?php
if(isset($_GET['activation_code'])) $acode = $_GET['activation_code'];
else die("No code!");

include 'connection.php';
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
} else {
    $acode = mysqli_real_escape_string($conn, $acode);
    $query = mysqli_query($conn,"SELECT * FROM credentials WHERE activation_code='$acode'")
    or die(mysqli_error($conn)); 
    if(mysqli_num_rows($query) == 0) {
        echo "Wrong code";
        die();
    } elseif (mysqli_num_rows ($query)==1 && isset($_POST['pass'])) {
        $pass = mysqli_real_escape_string($conn, $_POST['pass']);
        $query3 = mysqli_query($conn,"UPDATE credentials SET password='$pass' WHERE activation_code='$acode'")
        or die(mysqli_error($conn)); 

        echo 'Password Changed';
    }
}

?>

    <form action="resetpassword.php?activation_code=<?php echo $_GET['activation_code'];?>" method="POST">
    <p>New Password:</p><input type="password" name="pass" />
    <input type="submit"  name="submit" value="Signup!" />
    </form>