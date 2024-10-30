<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/login-register.css">
    <link rel="shortcut icon" href="../image/sklogo.png" type="image/x-icon">
    <title>Register</title>
</head>
<body>
<section>
    <?php
    if(isset($message)){
        foreach($message as $message){
            echo '
            <div class="message">
                <span>'.$message.'</span>
                <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
            </div>
            ';
        }
    }
    ?>
    <div>
        <div class="wave"></div>
        <div class="wave"></div>
        <div class="wave"></div>
    </div>
    <form action="../controller/register.php" method="post" enctype="multipart/form-data">
        <h3>Register Now</h3>
        <input type="text" required placeholder="Enter your username" class="box" name="name">
        <input type="email" required placeholder="Enter your email" class="box" name="email">
        <input type="text" required placeholder="Enter your address" class="box" name="address">
        <input type="password" required placeholder="Enter your password" class="box" name="pass">
        <input type="password" required placeholder="Confirm your password" class="box" name="cpass">
        <input type="file" name="image" class="box" accept="image/jpg, image/png, image/jpeg">
        <p>already have an account? <a href="login_form.php">login now</a></p>
        <input type="submit" value="register now" class="btn" name="submit">
    </form>
</section>

</body>
</html>