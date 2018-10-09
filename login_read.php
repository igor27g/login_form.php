<?php include "db.php" ?>
<?php include "functions.php" ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Read </title>
    <link rel="stylesheet" href="css/styleforloginread.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,700i" rel="stylesheet">

</head>
<body>
    <div class="container">
       <pre>
           <?php
           readRows();
           ?>
            </pre>
    </div>
</body>
</html>