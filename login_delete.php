<?php include('db.php');?>
<?php include('function.php');?>
<?php
deleteTable();
?>

 <form action="" method='post'>
    Name : <input type="text" name='username'><br>
    Password : <input type="text" name='password'><br>
    <select name="id" id="">
        <?php 
        datashowAlldata()
       ?>
    </select>
    <input type="submit" name='submit' value='delete'>
 </form>