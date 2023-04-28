<?php include 'connect.php' ?>
<?php
 
$id='';
$name= '';
$email ='';
$phone ='';
$password='';

if(isset($_GET['id'])){
  $id=$_GET['id'];
  $query="SELECT * FROM `icrudope` WHERE `id`='".mysqli_real_escape_string($conn, $id)."'";

   $res=$conn->query($query);
   $row= $res->fetch_assoc();
   $name= $row['name'];
    $email= $row['email'];
    $phone= $row['phone'];
    $password= $row['password'];
}

if(isset($_POST['submit'])){
  $name= $_POST['name'];
  $email= $_POST['email'];
  $phone= $_POST['phone'];
  $password= $_POST['password'];

if($id > 0){
  $sql="UPDATE icrudope SET `name`='$name',`email`='$email',`phone`='$phone',`password`='$password' WHERE 'id'= $id ";
}

else{
 $sql= "INSERT INTO `icrudope`(`id`, `name`, `email`, `phone`, `password`) VALUES ('','$name','$email','$phone','$password')";
}

$result=$conn->query($sql);

if ($result === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}

// $conn->close();
?>




<!doctype html>
<html lang="en">
  <head> 
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >

    <title>curd operation</title>
  </head>
  <body>
   <div class="container my-5" >
    <form method="post">
  <div class="mb-3" >
    <label>Name</label>
    <input type="text" class="form-control" placeholder="enter your name" name="name" value="<?php echo $name ?>" autocomplete="off" >
  </div>
   <div class="mb-3">
    <label>phone </label>
    <input type="text" class="form-control" placeholder="enter your phone number" name="phone" value="<?php echo $phone ?>" autocomplete="off" >
  </div>
   <div class="mb-3">
    <label>Email</label>
    <input type="email" class="form-control" placeholder="enter your email" name="email" value="<?php echo $email ?>" autocomplete="off" >
  </div>
 <div class="mb-3">
    <label>Password</label>
    <input type="password" class="form-control" placeholder="enter the password" name="email" value="<?php echo $email ?>" autocomplete="off" >
  </div>





 
  
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
     
   </div>

  </body>
</html>