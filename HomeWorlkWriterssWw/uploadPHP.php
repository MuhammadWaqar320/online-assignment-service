<?php
include "connection.php";
?>
<?php
// REGISTER USER
if (isset($_POST['submit'])) {
  // receive all input values from the form
  $name = mysqli_real_escape_string($db, $_POST['Name']); 
  $id = mysqli_real_escape_string($db, $_POST['id']); 
  $oid = mysqli_real_escape_string($db, $_POST['oid']); 
//   Finally, register user if there are no errors in the form
$filename = $_FILES['file']['name'];
$extension = pathinfo($filename, PATHINFO_EXTENSION);
$destination = 'uploads/' . $filename;
// the physical file on a temporary uploads directory on the server
$file = $_FILES['file']['tmp_name'];
$size = $_FILES['file']['size'];
if(!in_array($extension, ['pdf', 'docx','txt','xls','doc'])) 
{
    echo "<script>window.alert('Your file extension must be .pdf,.docx,doc,,txt or xls')
    window.location='addpage.php';
    </script>";
} 
elseif ($_FILES['file']['size'] > 1000000) 
{ // file shouldn't be larger than 1Megabyte
    echo "File too large!";
} 
else 
{
    // move the uploaded (temporary) file to the specified destination
     if (move_uploaded_file($file, $destination)) {
      
        $query="INSERT INTO upload(name,user_id,file,size) VALUES('$name','$id','$filename','$size')";
        $chk=mysqli_query($db, $query);
        if($chk==1)
        {
           
            $q="INSERT into orderdone SELECT * from orderpending where id='$oid'";
            $chk1=mysqli_query($db, $q);
            if($chk1==1)
            {
               $qq= "DELETE FROM orderpending WHERE id= '$oid'";
               $chk2=mysqli_query($db, $qq);
               if($chk2==1)
               {
                echo "<script>window.alert('File is uploaded successfully')
                window.location='admindash.php';
                </script>";
               }
            }
          
        }
        else
        {
            echo "<script>window.alert('File is not uploaded')
            window.location='upload.php';
            </script>";
        }
    }
       
}
}
?>
