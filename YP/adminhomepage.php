<html>
    <head>
        <title>ADMIN PAGE</title>
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <style>
            body
            {
                background-color:  rgb(135, 74, 150);

            
            }
            table
            {
                background-color:thistle;
                color:  rgb(135, 74, 150);
                
            }
            .btn
            {
                background-color: rgb(135, 74, 150);
                color: thistle;
            }
           
        </style>


<?php
error_reporting(0);
include("conn.php");

$query = "SELECT * FROM register";
$query_run = mysqli_query($conn, $query);

$total = mysqli_num_rows($query_run);
//echo $total;
if($total != 0)
{
//    echo"table has records";
?>
<form action="#" method="post">
<h2 align="center" class="bg-info">Insert/Upadate/Delete all records</h2>
<center>
<table border="1" cellspacing="7" width="95%">
    <tr>
    <th >ID</th>
    <th width="10%">UserNAME</th>
    <th width="20%">Email ID</th>
    <th width="10%">Password</th>
    <th width="10%">Phone Number</th>
    <th width="10%">Gender</th>
    <th width="25%">Address</th>
    <th width="10%">Time</th>
    <th width="5%">User TYPE</th>
    <th width="5%">Upadate</th>
    <th width="25%">Delete</th>
    </tr>


<?php
    while($result = mysqli_fetch_assoc($query_run))
    {
        echo"
        <tr>
            <td> " .$result['id']. "</td>
            <td> " .$result['Name']. "</td>
            <td> ".$result['email']. "</td>
            <td> " .$result['password']. "</td>
            <td>  ".$result['phone']. "</td>
            <td> " .$result['gender']. "</td>
            <td> " .$result['address']. "</td>
            <td>  ".$result['Time']. "</td>
            <td>  ".$result['user_type']. "</td>
            " ?>   
            <td> <a href="registered-edit.php?id=<?php echo $row['id']; ?>" class="btn"><input type="button" class="btn btn-sm" name="update" value="Update"></a>
</td>
            <td> <a href="./delete.php"><input type="button" class="btn btn-big" name="delete" value="Delete"></a></td>

          
     <?php "
     
        </tr>";

    }
}
else{
    echo"No records found";
}
?>(
</form>
</table>
</center>


</head>
</html>

<?php

    if(isset($_POST['update']))
    {
        header('location:registered-edit.php');

    }
?>
