<?php
include 'connect.php';?>
<?php
$ID='';
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
      $i = 1;
      $sql2="SELECT * FROM `icrudope`";
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
            <button type="update" class ="btn btn-primary"> <a href="index.php?ID=<?php echo $row['ID']?>" >Update</a></button>
            <button type="delete" class ="btn btn-danger"> <a href="delete.php?ID=<?php echo $row['ID']?>" >Delete</a></button>

           <!-- <button class="btn btn-primary "><a href="index.php?id=<?php echo $row['id']?>" >update</a></button>
          <button class="btn btn-danger "><a href="delete.php?id=<?php echo $row['id']?>" >Delete</a></button> -->
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