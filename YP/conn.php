<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "loginn";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if($conn)
{
    //echo"successfull";
}

else{
    echo "CONN.. marr ja bhai ";
}


if(isset($_POST['updateuser']))
{
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $Time = $_POST['Time'];
    $user_type = $_POST['user_type'];

    $query ="UPDATE register SET Name='$name', email='$email', password='$password',
    phone='$phone', gender='$gender', address='$address', user_type='$user_type' where id = '$id' ";
    $query_run = mysqli_query($conn , $query);

    if($query_run)
    {
        
        $_SESSION['status'] = "User Updated Successfully";
        header("location: bootreg.php");
    }
    else{
        echo"Try Again";
    }
}


if(isset($_POST['deletebtn']))
{
    $id = $_POST['id'];
    $query = "DELETE from register where id ='$id'";
    $qrun = mysqli_query($conn, $qrun);

        if($qrun)
        {
            header("location: bootreg.php");
        }

        else{
            echo "can not delete the user";
        }

}


?>