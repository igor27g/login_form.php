<?php include "db.php" ?>
<?php 

function showAllData() {
global $connection;
$query = "SELECT * FROM user2";
$result = mysqli_query($connection, $query);
if(!$result) {
    die('Query FAILED' . mysqli_error());
}

while($row = mysqli_fetch_assoc($result)) {
$id = $row['id'];                            
echo "<option value='$id'>$id</option>";
                        } 
}

function createRow() {
global $connection;    
$name = $_POST['name'];
$username = $_POST['username'];
$password = $_POST['password'];
    
$name = mysqli_real_escape_string($connection, $name);    
$username = mysqli_real_escape_string($connection, $username);
$password = mysqli_real_escape_string($connection, $password);



$hashFormat = "$2y$10$";
$salt = "thispasswordislong2018";
$hashF_and_salt = $hashFormat . $salt;
$password = crypt($password, $hashF_and_salt);
    
$query = "INSERT INTO user2(name, username, password) ";
$query .= "VALUES ('$name' ,'$username', '$password')";
    
$result = mysqli_query($connection, $query);

if(!$result) {
    die('Query FAILED' . mysqli_error());
}
}


function UpdateTable() {
if (isset($_POST['submit'])) {
global $connection;
$name = $_POST['name'];
$username = $_POST['username'];
$password = $_POST['password'];
$id = $_POST['id'];

$query = "UPDATE user2 SET ";
$query .= "name = '$name' ,";
$query .= "username = '$username', ";
$query .= "password = '$password' ";
$query .= "WHERE id = $id ";
    
$result = mysqli_query($connection, $query);
    if(!$result) {
        die ("Query failed" . mysqli_error($connection));
}    
}
}

function deleteRow() {
if (isset($_POST['submit'])) {  
global $connection;
$name = $_POST['name'];
$username = $_POST['username'];
$password = $_POST['password'];
$id = $_POST['id'];

$query = "DELETE FROM user2 ";
$query .= "WHERE id = $id ";
    
$result = mysqli_query($connection, $query);
    if(!$result) {
        die ("Query failed" . mysqli_error($connection));
}    
}
}

function readRows() {
global $connection;
$query = "SELECT * FROM user2";
$result = mysqli_query($connection, $query); 
    if(!$result) {
die ('Query Failed' .mysqli_error());
}     
while($row = mysqli_fetch_assoc($result)) {
print_r($row);
}
}



?>