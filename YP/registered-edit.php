<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <title>EDIT User</title>
</head>
<body>
    

<div class="container">
    <div class="row">
        <div class="col-md-12">
    <div class="card">
              <div class="card-header">
                <h3 class="card-title">Edit-Registered Users
                </h3>
                <a href="bootreg.php" class="btn btn-danger btn-sm float-right">Back</a>
              </div>
              <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                            <form action="#" method="post">
                                    <div class="modal-body">
                                <?php
                                include("conn.php");
                                if(isset($_GET['id']))
                                {
                                    $id = $_GET['id'];
                                    $query = "SELECT * FROM register WHERE id='$id' limit 1";
                                    $query_run = mysqli_query($conn,$query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $row)
                                            {
                                                ?>
                                                <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                                                     <div class="form-group">
                                                <label for="">Name</label>
                                                <input type="text"  name="name" value="<?php echo $row['Name'] ?>" class="form-control" placeholder="Name">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Email Id</label>
                                                <input type="email" name="email" value="<?php echo $row['email'] ?>" class="form-control" placeholder="Email">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Password</label>
                                                <input type="text" name="password" value="<?php echo $row['password'] ?> "class="form-control" placeholder="Password">
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="">Phone Number</label>
                                                <input type="text" name="phone" value="<?php echo $row['phone'] ?>" class="form-control" placeholder="phone number">
                                            </div>

                                            <div class="form-group">
                                                <label for="">Gender</label>
                                                <input type="text" name="gender" value="<?php echo $row['gender'] ?> "class="form-control" placeholder="Gender">
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="">Address</label>
                                                <input type="text" name="address" value="<?php echo $row['address'] ?> "class="form-control" placeholder="address">
                                            </div>

                                            <div class="form-group">
                                                <label for="">Time</label>
                                                <input type="text" name="Time" value="<?php echo $row['Time'] ?> "class="form-control" placeholder="Time">
                                            </div>
                                            
                                             <div class="form-group">
                                                <label for="">User Type</label>
                                                <input type="text" name="user_type" value="<?php echo $row['user_type'] ?> "class="form-control" placeholder="user type">
                                            </div>
                                            
                                            
                                               <?php
                                            }

                                        }
                                        else {
                                            echo"<h4> No  record found </h4>";
                                        }
                                }
                                
                                ?>
                                </div>
                                    <div class="modal-footer">
                                       
                                        <button type="submit" name="updateuser" class="btn btn-primary">UPDATE</button>
                                    </div>
                                    </form>
                            </div>
                        </div>
                    </div>
                        </div>
                    </div>
                </div>
            </div>
            </section>
        </div>


</body>
</html>

<?php

?>