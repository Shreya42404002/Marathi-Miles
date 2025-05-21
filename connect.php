<?php
    $conn=mysqli_connect("localhost","root","","marathi_miles","3307");
    if($conn==false)
    {
        echo "<script>alert('Connection Failed');</script>";
    }
?>