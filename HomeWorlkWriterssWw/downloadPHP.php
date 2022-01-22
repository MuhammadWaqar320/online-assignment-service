<?php
 include "connection.php";
 session_start();
 $Id = $_GET['id'];
    // fetch file to download from database
    $sql = "SELECT * FROM upload WHERE id=$Id";
    $result = mysqli_query($db, $sql);
    $file = mysqli_fetch_assoc($result);
    $filepath = 'uploads/' . $file['name'];
    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('uploads/' . $file['name']));
        readfile('uploads/' . $file['name']);

        // Now update downloads count
        exit;
    }
    else
    {
        echo "Sorry file can't download";
    }
?>