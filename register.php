<?php
include('dbconn.php');

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>REGISTER FORM</title>
 
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
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <h3>register</h3>

        <label for="username">Username</label>
        <input type="text" name = "username"placeholder="Email or Phone" id="username">

        <label for="password">Password</label>
        <input type="password" name ="password"placeholder="Password" id="password">

        <button>register</button>
        <div class="social">
          <div class="fb"><i class=""></i><a href="login.php">login</a></div>
        </div>        
    </form>
</body>
</html>

<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $username = $_POST['username'];
    $password = $_POST['password'];
    $_SESSION['$username'];
    $_SESSION['$password'];


    $sql = "INSERT INTO login(username , password) VALUES ('$username' , '$password')";

    if(empty($username) or empty($password)){
        echo 'empty username or password !!';
    }else if (mysqli_query($conn, $sql)) {
        header("location:login.php");
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
    
}


  mysqli_close($conn);
?>

