<?php
session_start();

if(!isset($_SESSION["users"])){
    header("location: header.php"); 
}

include ("../includes/koneksi.php");

if (isset($_POST["submit"])){
    $username = mysqli_real_escape_string($conn, $_POST["username"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $password = mysqli_real_escape_string($conn, md5($_POST["password"]));

    if ($password === $password){
       
            $photo_name = $_FILES["photo"]["name"];
            $photo_tmp_name = $_FILES["photo"]["tmp_name"];
            $photo_size = $_FILES["photo"]["size"];
            $photo_new_name = rand() . $photo_name;

            if ($photo_size > 5242888) {
                echo "<script>alert('Photo is very big. Maximum photo uploading size is 5mb.');</script>";
            } else {
                $sql = "UPDATE users SET username='$username', password='$password', photo='$photo') WHERE id='{$_SESSION["users"]}'";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                    echo "<script>alert('Profile Updated successfully.');</script>";
                    move_uploaded_file($photo_tmp_name, "uploads/" . $photo_new_name);
                } else {
                    echo "<script>alert('Profile can not updated.');</script>";
                    echo $conn->error;
                }
            }
        
    } else {
        echo "<script>alert('Password Not Matched. Please Try Again.');</script>";
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="welcome.css">

    <title>Profile Page</title>
    
</head>
<body class="profile-page">
<header>
       <h1 class="logo">MINARFA</h1>
       <nav>
           <ul class="navbar">
               <li><a href="#">Home</a></li>
               <li><a href="#">About</a></li>
               <li><a href="#">Contact</a></li>
           </ul>
       </nav>
       <a class="log" href="#"><button>Login</button></a>
    </header>
    <div class="wrapper">
        <h2>Profile</h2>
        <form action="" method="post" enctype="multipart/form-data">
            <?php

            $sql = "SELECT * FROM users WHERE id='{$_SESSION["users"]}'";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
            ?>

        
        <div class="inputBox">
            <input type="username" id="username" name="username" placeholder="Enter Username" value="<?php echo $row['username']; ?>" disabled required>
        </div>
        <div class="inputBox">
            <input type="email" id="email" name="email" placeholder="Enter Email" value="<?php echo $row['email']; ?>" required>
        </div>
        <div class="inputBox">
            <input type="password" id="password" name="password" placeholder="Enter Password" value="<?php echo $row['password']; ?>" required>
        </div>
        <div class="inputBox">
            <label for="photo">Photo</label>
            <input type="file" accept="image/*" id="photo" name="photo" required>
        </div>
        <img src="uploads/<?php echo $row["photo"]; ?>" width="150px" height="auto" alt="">

        <div>
            <button type="submit" name="submit" class="btn">Update Profile</button>
        </div>
        <div>
        <a type="" class="btn" href="../kuis/kuis.php" role="button">Start Test</a>
        </div>
            <?php
                }
            }
            ?>
        </form>
    </div>
</body>
</html>
