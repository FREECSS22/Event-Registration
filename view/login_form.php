<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/login-register.css">
    <link rel="shortcut icon" href="./image/sklogo.png" type="image/x-icon">
    <title>Login</title>
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
            <form action="../db/login.php" method="post" enctype="multipart/form-data">
                <h3>LOGIN NOW</h3>
                <input type="email" required placeholder="Enter your email" class="box" name="email">
                <input type="password" required placeholder="Enter your password" class="box" name="pass" id="password">
            <div class="showpwd">
                <input type="checkbox" id="showPassword">
                <label for="showPassword">Show Password</label>
            </div>
            
            <p>don't have an account? <a href="register_form.php">register now</a></p>
            <input type="submit" value="login now" class="btn" name="submit">
        </form>
    </section>
    
    <script>
        document.getElementById('showPassword').addEventListener('change', function() {
            const passwordField = document.getElementById('password');
            passwordField.type = this.checked ? 'text' : 'password';
        });
    </script>
</body>
</html>