[12:30 PM, 4/15/2023] Sony: <?php include 'connect.php' ?>
<?php
 
$id='';
$name= '';
$email ='';
$phone ='';
$password='';

if(isset($_GET['id'])){
  $id=$_GET['id'];
    $query= "SELECT * FROM `crudop` WHERE `id`=$id";
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
  $sql="UPDATE crudop SET `name`='$name',`email`='$email',`phone`='$phone',`password`='$password' WHERE `id`= $id ";
}

else{
$sql=" INSERT INTO `crudop`(`id`, `name`, `email`, `phone`, `password`) VALUES ('','$name','$email','$phone','$password')";
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


<!-- new page -->

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
    <input type="text" class="form-control"placeholder="enter your name" name= "name" value="<?php echo $name ?>" auto autocomplete="off" >
  </div>
   <div class="mb-3">
    <label>phone </label>
    <input type="text" class="form-control"placeholder="enter your email" name= "phone" value="<?php echo $phone ?>" auto autocomplete="off"  >
  </div>
   <div class="mb-3">
    <label>Email</label>
    <input type="email" class="form-control"placeholder="enter your email" name= "email" value="<?php echo $email ?>" auto autocomplete="off"  >
  </div>
 <div class="mb-3">
    <label>Password</label>
    <input type="text" class="form-control"placeholder="enter your email" name= "password" value="<?php echo $password ?>" auto autocomplete="off" >
  </div>





 
  
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
     
   </div>

  </body>
</html>


<!-- new page -->


[12:30 PM, 4/15/2023] Sony: <?php
include 'connect.php';?>
<?php
$id='';
$name= '';
$email ='';
$phone ='';
$password='';
?>

<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<div class="w3-container">
  <h2>View Index Table</h2>
  

  <table class="w3-table w3-bordered">
    <tr>
      <!-- <th>Sr.no</th> -->
      <th>Id</th>
      <th>Name</th>
      <th>Email</th>
      <th>Phone</th>
      <th>Password</th>
      <th>Action</th>
    </tr>
    <tbody>
      <?php 
      // include "connect.php" ;
      $i=1;
      $sql2="SELECT * FROM `crudop`";
      $result1=$conn->query($sql2);
      // if(!$result){
      //   die("invalid Query");
      // }
      while($row=$result1->fetch_assoc()){
        ?>

      
        <tr>
          <td><?php echo $i; ?></td>
           <td><?php echo $row['name']; ?></td>
           <td><?php echo $row['email']; ?></td>
           <td><?php echo $row['phone']; ?></td>
           <td><?php echo $row['password']; ?></td>
           <td>
          <button class="btn btn-primary "><a href="index.php?id=<?php echo $row['id']?>" class="text-light">update</a></button>
          <button class="btn btn-danger "><a href="delete.php?id=<?php echo $row['id']?>" class="text-light">Delete</a></button>
          </td>
      </tr>
<?php
      }
      ?>


  </tbody>
  </table>
</div>

</body>
</html>
[12:30 PM, 4/15/2023] Sony: <?php include 'connect.php' ?>
<?php

if(isset($_GET['id'])){

$id=$_GET['id'];
	
$sql= "DELETE FROM `crudop` WHERE `id`= $id";


$result=$conn->query($sql);


if($result== true)

{
	// echo "<script> alert("record deleted")</script>";
	echo "<script>location='index-view.php' </script>";
}
// else{



// 	echo "<script> alert("record not delete");</script>";
// }
}

?>
[12:30 PM, 4/15/2023] Sony: <?php include 'connect.php' ?>
<?php
 
$id='';
$name= '';
$email ='';
$phone ='';
$password='';

// if($_SERVER["Request_Method"]=='GET'){
	if(isset($_GET['id'])){
		// header("location:curd21/index.php");
		// exit;
	
	$id= $_GET['id'];
	$query= "SELECT * FROM `crudop` WHERE `id`=$id";
	$res=$conn->query($query);
	$row= $res->fetch_assoc();
	// while(!$row){
	// 	header("location:curd21/index.php");
	// 	exit;

	

	 $name= $row['name'];
  	$email= $row['email'];
  	$phone= $row['phone'];
  	$password= $row['password'];

}
// else{
// 	 	$id= $_POST['id'];
// 	 	$name= $_POST['name'];
// 	 	$email= $_POST['email'];
// 	  	$phone= $_POST['phone'];
// 	  	$password= $_POST['password'];

// }

// if(isset($_GET['variable']['submit'])){
 



$sql="UPDATE crudop …
[12:30 PM, 4/15/2023] Sony: <?php
$servername="localhost";
$username="root";
$password ="";
$database_name= "crud";

// $con = new mysqli('localhost','root','','crud');
$conn = new mysqli($servername,$username,$password,$database_name);


if($conn->connect_error){	


		die("connection Failed".$conn->connect_error);

	}
	echo "";
	
?>