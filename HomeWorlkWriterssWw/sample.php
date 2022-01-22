<?php
 include "connection.php";
 session_start();
    // fetch file to download from database
   if(isset($_POST['submit']))
   {
       $file=$_POST['name'];
    echo $file;
       $filepath = 'sample/' . $file;
    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('sample/' . $file));
        readfile('sample/' . $file);

        // Now update downloads count
        exit;
    }
    else
    {
        echo "sorry";
    }
   }
   else
   {

   }











    
?>