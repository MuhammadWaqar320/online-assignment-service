<?php
include "connection.php";
// session_start();
// initializing variables
// connect to the database
// $db = mysqli_connect('localhost', 'root', '', 'smajobberoslo');
// REGISTER USER
if (isset($_POST['submit'])) {
  // receive all input values from the form
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $phone = mysqli_real_escape_string($db, $_POST['con']);
  $Id = mysqli_real_escape_string($db, $_POST['id']);


   
        $query="update usertable set name='$name',password='$password',email='$email' where id=$Id";
	  $ch=mysqli_query($db, $query);
	  if($ch==1)
	  {
		echo "<script>window.alert('congratulation! Your profle has been changed');
        </script>";
        ?>

        <script>
         var msg = '<?php echo $Id ?>';
         window.location = "userdash.php?id=" + msg;
     </script>
             <?php
	  }
	  else
	  {
		echo "<script>window.alert('your profile not changed')
        </script>";
        ?>

   <script>
    var msg = '<?php echo $Id ?>';
    window.location = "userdash.php?id=" + msg;
</script>
        <?php
	  }

   
  // Finally, register user if there are no errors in the form

}
?>