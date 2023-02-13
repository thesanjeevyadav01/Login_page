<?php
if (isset($_POST['submit'])){
  $username = $_POST['username'];
  $password = $_POST['password'];
  $image_name = $_FILES['images'] ['name']; 
  $tmp_name = $_FILES['images'] ['tmp_name']; 
  $folder= "images/".$image_name;
  move_uploaded_file($tmp_name, $folder);



}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login Page</title>
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <hr>

        <form action="index.php" method="post" enctype="multipart/form-data">
            <input type="text" name="username" id="Username" placeholder="Username">
            <br>
            <input type="password" name="password" id="Password" placeholder="Password">
            <br>
            <p class="forget">Forget Password?</p>
            <br>
            <p class="image">Choose an Image</p>

            <input class="img" type="file" name="images" id="images" accept=".jpg , .png , .jpeg" >
            <br><br>
<br>
            <button type="submit" name="submit" class="btn">Login</button>
            <br>
            <p class="signup"> Not a member? <a href="#">Signup</a></p>
            <br>

        </form>
    </div>
</body>
</html>