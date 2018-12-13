<?php 
    include '../admin/connection.php';
    $errors = array();

      if (isset($_POST['send'])) {
        
        $_SESSION['success'] = "Successfully Registered!";
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        //ensure that from fields are filled properly
        if (empty($name)) {
            array_push($errors, "Fullname is required");
        }
        if (empty($phone)) {
            array_push($errors, "Username is required");
        }
        if (empty($email)) {
            array_push($errors, "Password is required");
        }

        if (count($errors) == 0) {
            $sql = "INSERT INTO message (name, phone, email, message)
            VALUES ('$name', '$phone', '$email', '$message')";
            $query = mysqli_query($conn, $sql);
            $_SESSION['name'] = $name;
            header('location: contact.php'); //redirect to homepage
        }
        mysqli_close($conn);
      }

?>