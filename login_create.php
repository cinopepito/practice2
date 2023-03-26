<?php
include('db.php');
if(isset($_POST['submit'])){
$username = $_POST['username'];
$password = $_POST['password'];
$query = "INSERT INTO users (username,password) VALUES('$username','$password')";
$result = mysqli_query($connection,$query);
if(!$result){
    die('query failed'.mysqli_error());
}
}
?>
<form action="" method='post'>
    Username : <input type="text" name='username'><br>
    Password : <input type="paswword" name='password'><br>
    <input type="submit" name='submit'>
</form>