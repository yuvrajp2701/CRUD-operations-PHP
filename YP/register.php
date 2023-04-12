
<?php
session_start();
include ("conn.php");

if (isset($_POST['register'])) {
    # code...
  $name = $_POST['username'];
  $email = $_POST['email'];
  $pass = $_POST['password'];
  $rpass = $_POST['rpassword'];
  $pno = $_POST['pno'];
  $gender = $_POST['gender'];
  $address = $_POST['address'];


  if ($name != "" && $email != "" && $pass != "" && $rpass != "" && $pno != "" && $gender != "" && $address != "" )
  {
    if($pass == $rpass)
    {
  $query ="INSERT INTO register (name,email,password,phone,gender,address) values
   ('$name','$email','$pass','$pno','$gender','$address')";
  $query_run = mysqli_query($conn,$query);

  
  if($query_run)
  {
echo"ADDED";    
header("location: userhomepage.php");

  }
  else
  {
echo"NOt added";
  }
}
else{
    echo"  MATCH THE PASSWORD";
    
}
}

else
{
    echo"Insert DATA";
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Emp. REGISTER</title>
</head>
<body>
    <div class="container">
        <div class="title" >
        <h1>User Login</h1>
        </div>
        <div class="form">
            <form action="#" method="post">
                <div class="inputF">
           <label for="">User name</label> <input type="text" name="username" class="textfield" placeholder="User name">
           </div>
           <div class="inputF">
           <label for="">Email id</label>
            <input type="email" name="email" class="textfield" placeholder="Email id">
           </div>

           <div class="inputF">
           <label for="">Password</label>
            <input type="password" name="password" class="textfield" placeholder="Password">
            </div>
           
           <div class="inputF">
            <label for="">Re- Type Password</label>
            <input type="password" name="rpassword" class="textfield" placeholder="Re-type Password">
            </div>

            <div class="inputF">
            <label for="">Phone number</label>
            <input type="text" name="pno" class="textfield" placeholder="Phone number">
            </div>
            <div class="inputF">
                <label for="">Gender</label>

                <div class="selectbox">
                <select name="gender" id="">
                    <option value="not selected">Select</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>

                </select>
                </div>
            </div>
            <div class="inputF">
                <label for="">Address</label>
                <textarea class="textfieldd" name="address" placeholder="Address"></textarea>
            </div>
            <div class="inputF terms">
            <label class="check">
                <input type="checkbox" name="checkbox">
                <span class="checkmark"></span>
            </label>
            <p>Agree to terms and conditions</p>
            </div>
        <div class="inputF">
        <input type="submit" name="register" value="REGISTER" class="btn"> 
        </div>

        <div class="inputF">
        <div class="signup">Already member?</div>
        <a href="./index.php" class="link">Login here</a>
        </div>

        
        </form>
        </div>
    </div>

  </body>
</html>
