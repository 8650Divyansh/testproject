<?php

$conn = mysqli_connect("localhost","root","","phpcrud");

if(isset($_POST['checking_add']))
{
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $query = "INSERT INTO students (fname,lname,email,pass) VALUES ('$fname','$lname','$email','$pass')";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        echo $return  = "Successfully Stored";
    }
    else
    {
        echo $return  = "Something Went Wrong.!";
    }
}

?>
