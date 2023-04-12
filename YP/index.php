<?php

include("conn.php");
if (isset($_POST['login']))
{
    $name = $_POST['name'];
    $pass = $_POST['pass'];

    $query = "SELECT * FROM register where Name = '$name' && password = '$pass'";
    $query_r = mysqli_query($conn, $query);
  //  $total = mysqli_num_rows($query_r);
    //echo $total;
$row=mysqli_fetch_array($query_r);
  

    if($row["user_type"] == "admin")
    {
            header('location:adminhp.php');
    
    }
else
{
    header('location:userhomepage.php');

}
}
else {
    echo"Aeeeeeee";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
    <div class="center">
        <h1>Login</h1>
    <div class="form" >
        <form action="#" method="post">
        <input type="text" name="name" class="textfield" placeholder="Username">
        <input type="password" name="pass" class="textfield" placeholder="Password">

        <div class="forgotpass"><a href="#" class="link" onclick="message()">Forgot password</a></div>

        <input type="submit" name="login" value="Login" class="btn">

        <div class="signup">New member ? <a href="./register.php" class="link">SignUp here</a></div>
        </form>
    </div>
    </div>

    <script>
        function message()
        {
            alert("Password YADD KARRRRRRRRR");
        }
    </script>
</body>
</html>

