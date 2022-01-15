<?php
  @ $db = new mysqli('localhost', 'root', 'root', 'iit');
  
  if ($db->connect_error) {
    $connectErrors = array(
      'errors' => true,
      'errno' => mysqli_connect_errno(),
      'error' => mysqli_connect_error()
    );
    echo json_encode($connectErrors);
  } else {
    if (isset($_POST["id"])) {
      $projectId = (int) $_POST["id"];
      
      $query = "delete from project where projectid = ?";
      $statement = $db->prepare($query);
      $statement->bind_param("i",$projectId);
      $statement->execute();
      
      $success = array('errors'=>false,'message'=>'Delete successful');
      echo json_encode($success);
      
      $statement->close();
      $db->close();
    }
  }
?>
