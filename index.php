<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="Images/icons8-login-50.png">
    <title>Login</title>
</head>
<body style="background-color: hsl(0, 0%, 51%);margin-top:150px ;">
    <h2 style="text-align: center; font-family: monospace;">Register</h2>
    <div style="text-align: center;">
        <form action="validation.php" method="post">
            <input type="text" name="name" placeholder="Name"><br><br>
            <input type="text" name="email" placeholder="Email"><br><br>
            <input type="password" name="password" placeholder="Password"><br><br>
            <input type="submit">
        </form>
        <?php
            $fullUrl = "//$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            
            if(strpos($fullUrl,"signup=fields")==true){
                echo "Fields are required!";
                exit;
            }else if(strpos($fullUrl,"signup=name")==true){
                echo "Name is required!";
                exit;
            }else if(strpos($fullUrl,"signup=email1")==true){
                echo "Email has to be in the right format!";
                exit;
            }else if(strpos($fullUrl,"signup=email")==true){
                echo "Email is required and has to be in the right format!";
                exit;
            }else if(strpos($fullUrl,"signup=password1")==true){
                echo "Password has to be more than 8 characters!";
                exit;
            }else if(strpos($fullUrl,"signup=password")==true){
                echo "Password is required and has to be more than 8 characters!";
                exit;
            }
             
        ?>
    </div>
</body>
</html>