<?php
include('dbconn.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>LOGIN FORM</title>
 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
        <h3>Login Here</h3>

        <label for="username">Username</label>
        <input type="text" placeholder="Email or Phone" id="username" name="username">
       
        <label for="password">Password</label>
        <input type="password" placeholder="Password" id="password" name="password">
        <?php $errorinput = ""; echo $errorinput?>

        <button>LogIn</button>
        
        <div class="social">
          <div class="fb"><i class=""></i><a href="register.php">register</a></div>
        </div>
    </form>
    <?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // collect value of input field
        $username = $_POST['username'];
        $password = $_POST['password'];

        session_start();

         $_SESSION['username'] = $username;
         $_SESSION['password'] = $password;

        if(empty($username) or empty($password)){
            echo '<div class="social">
            <div class="fb"><i class=""></i>empty username or password</div>
          </div>';
        }else{

            $sql = "SELECT username , password FROM login WHERE username = '$username' AND password = '$password' ";
            $result = mysqli_query($conn, $sql);
        
        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                
                header('Location: home.php');
            }
          } else {
            echo "wrong username or password";
          }
        }
        }

       
    
      
      mysqli_close($conn);
    ?>
</body>
</html>
