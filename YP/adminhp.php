
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

<div class="card">
              <div class="card-header">
                <h3 class="card-title">Registered Users
                </h3>

              </div>
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
                    <th>Time </th>
                    <th>User Type</th>
                    <th>Action</th>
                    
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                     $host = "localhost";
                     $username = "root";
                     $password = "";
                     $database = "loginn";

                     $conn = mysqli_connect("$host","$username","$password","$database");
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
                    <td><?php echo $row['Time']; ?></td>
                    <td><?php echo $row['user_type']; ?></td>

                    <td>
                      <a href="registered-edit.php?id=<?php echo $row['id']; ?>" class="btn btn-info btn-sm" >Edit</a>
                      <button type="button" value="<?php echo $row['id']; ?>" class="btn btn-danger btn-sm deletebtn">Delete</button>
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
                    </div>
                </div>