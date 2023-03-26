<?php
if(isset($_POST['submit'])){
$username = $_POST['username'];
$password = $_POST['password'];
echo $username .'<br>';
echo $password .'<br>';
}
?>
<form action="" method='post'>
    Username : <input type="text" name='username'><br>
    Password : <input type="paswword" name='password'><br>
    <input type="submit" name='submit'>
</form>