<?php include 'connect.php' ?>
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
	$query= "SELECT * FROM `icrudope` WHERE `id`=$id";
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
 

 $sql="UPDATE crudop SET `name`='$name',`email`='$email',`phone`='$phone',`password`='$password' WHERE `id`= $id ";
$result=$conn->query($sql);

// $result=$conn->query($sql);


if ($conn->query($sql) === TRUE) {
  echo "New record updated successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
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