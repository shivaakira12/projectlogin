<?php
@include 'config.php';
session_start();
if(!isset($_SESSION['usermail'])){
    header('location:login_form.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <div class="content">
            <h3>Welcome</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Expedita temporibus totam quod veritatis necessitatibus consectetur, perspiciatis dignissimos mollitia dolor vel quidem amet aliquam atque eos dolores in ratione esse quasi.</p>
            <p>your email : <span><?php echo $_SESSION['usermail'];?></span></p>
            <a href="logout.php" class="logout">Logout</a>
        </div>
    </div>
</body>
</html>