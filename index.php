<?php include "db.php" ?>
<?php include "functions.php" ?>
<?php createRow(); ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Create</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,700i" rel="stylesheet">

</head>
<body>
    
    <div class="container">
      
        <div class="login-form">   
               <h1 class="login-form__header">Login Create</h1> 
                <form action="login_create.php" method="post">
                <div class="form-group">
                   <label for="name" class="form-group__label-1">Name</label>
                   <input type="text" name="name" class="form-control form-group__input" >
                </div>
                <div class="form-group">
                   <label for="username" class="form-group__label-2">Username</label>
                   <input type="text" name="username" class="form-control form-group__input" >
                </div>
                <div class="form-group">
                    <label for="password" class="form-group__label-3">Password</label>
                    <input type="password" name="password" class="form-control form-group__input">
                </div>
                <input class="btn" type="submit" name="submit" value="CREATE">
            </form>
        </div>
    </div>
</body>
</html>