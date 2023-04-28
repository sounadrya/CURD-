<?php include 'connect.php' ?>
<?php

if(isset($_GET['ID'])){

  $id=$_GET['ID'];

 $sql = "DELETE FROM `icrudope` WHERE `ID` = $id";


  $result=$conn->query($sql);

  if($result== true) {
    echo "<script>location='view_index.php' </script>";
  } else {
    echo "<script> alert('record not deleted');</script>";
  }
}

?>