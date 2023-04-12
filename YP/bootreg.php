<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <title>registered user</title>
</head>
<body>
    

<div class="container">
    <div class="row">
        <div class="col-md-12">
<form action="#" method="post">        
    <div class="card">
              <div class="card-header">
                <h3 class="card-title">Registered Users
                </h3>
           
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>id</th>
                    <th>Name</th>
                    <th>Email Id</th>
                    <th>Password</th>
                    <th>Phone Number</th>
                    <th>Gender</th>
                    <th>Address</th>

                    <th>Time</th>
                    <th>User Type</th>

                    <th>Action</th>
                    
                  </tr>
                  </thead>
                  <tbody>
                    <?php
            include('./conn.php');
                        $query = "SELECT * FROM register";
                        $query_run = mysqli_query($conn, $query);

                        if(mysqli_num_rows($query_run) > 0){
                              foreach($query_run as $row)
                              {
                        
                                ?>
                                    <tr>
                   <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['Name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['password']; ?></td>
                    <td><?php echo $row['phone']; ?></td>
                    <td><?php echo $row['gender']; ?></td>
                    <td><?php echo $row['address']; ?></td>
                    <td><?php echo $row['Time']; ?></td>
                    <td><?php echo $row['user_type']; ?></td>

                    <td>
                      <a href="registered-edit.php?id=<?php echo $row['id']; ?>" class="btn btn-info btn-success" >Edit</a>
                      <a href="bootreg.php?id=<?php echo $row['id']; ?>" class="btn btn-info btn-danger" >Delete</a>

                    </td>
                  </tr>
                                <?php
                              }
                        }
                        else{
                          ?>
                            <tr>
                              <td> No Record Found.</td>
                            </tr>
                          <?php
                        }
                          ?>
                  
                        </tbody>
                        </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


</body>
</html>

<?php

if (isset($_GET['id']))
{
    $id = $_GET['id'];
    $del = "DELETE FROM register where id='$id'";
    $res =mysqli_query($conn, $del);

    if($res)
    {
        echo "deleted successfully";
    }
    else{
        echo"nahi hua bhaiiiiiiiiiii";
    }
}

?>