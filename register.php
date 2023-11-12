<?php
require_once "config.php";

$username = $email =$password = $confirm_password = "";
$username_err =$email_err = $password_err = $confirm_password_err = "";

if ($_SERVER['REQUEST_METHOD'] == "POST"){

    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Username cannot be blank";
    }
    else{
        $sql = "SELECT id FROM users WHERE username = ?";
        $stmt = mysqli_prepare($conn, $sql);
        if($stmt)
        {
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set the value of param username
            $param_username = trim($_POST['username']);

            // Try to execute this statement
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    $username_err = "This username is already taken"; 
                }
                else{
                    $username = trim($_POST['username']);
                }
            }
            else{
                echo "Something went wrong";
            }
        }
    }

    mysqli_stmt_close($stmt);
//

  // Check if email is empty
//   if(empty(trim($_POST["email"]))){
//     $email_err  = "email cannot be blank";
// }
// else{
//     $sql = "SELECT id FROM users WHERE email = ?";
//     $stmt = mysqli_prepare($conn, $sql);
//     if($stmt)
//     {
//         mysqli_stmt_bind_param($stmt, "s", $param_email);

//         // Set the value of param email
//         $param_email = trim($_POST['email']);

//         // Try to execute this statement
//         if(mysqli_stmt_execute($stmt)){
//             mysqli_stmt_store_result($stmt);
//             if(mysqli_stmt_num_rows($stmt) == 1)
//             {
//                 $email_err = "This email is already taken"; 
//             }
//             else{
//                 $email = trim($_POST['email']);
//             }
//         }
//         else{
//             echo "Something went wrong";
//         }
//     }
// }

// mysqli_stmt_close($stmt);

    
// Check for password
if(empty(trim($_POST['password']))){
    $password_err = "Password cannot be blank";
}
elseif(strlen(trim($_POST['password'])) < 5){
    $password_err = "Password cannot be less than 5 characters";
}
else{
    $password = trim($_POST['password']);
}

// Check for confirm password field
if(trim($_POST['password']) !=  trim($_POST['confirm_password'])){
    $password_err = "Passwords should match";
}


// If there were no errors, go ahead and insert into the database
if(empty($username_err) && empty($password_err) && empty($confirm_password_err))
{
    $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    if ($stmt)
    {
        mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);

        // Set these parameters
        $param_username = $username;
        $param_password = password_hash($password, PASSWORD_DEFAULT);

        // Try to execute the query
        if (mysqli_stmt_execute($stmt))
        {
            header("location:adminwelcome.php");
        }
        else{
            echo "Something went wrong... cannot redirect!";
        }
    }
    mysqli_stmt_close($stmt);
}
mysqli_close($conn);
}

?>







<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Register Form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/form.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>Register Now</h3>
      <input type="text" name="username" required placeholder="enter your username">
      <input type="email" name="email" required placeholder="enter your email" pattern=".+@gmail.com">
      <input type="password" name="password" required placeholder="enter your password">
      <input type="password" name="confirm_password" required placeholder="confirm your password">
      <!-- <select name="user_type">
         <option value="user">user</option>
         <option value="admin">admin</option>
      </select> -->
      <input type="submit" name="submit" value="register now" class="form-btn">
      <!-- <p>already have an account? <a href="login.php">Login Now</a></p> -->
   </form>

</div>

</body>
</html>