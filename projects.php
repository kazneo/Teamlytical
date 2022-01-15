<?php
  include('dbConnect.php')
  // $result = mysqli_query($query);
  // $query = mysql_query("SELECT * FROM projects")
  // // $query = mysql_query("select * from tablename"

  // while($row= mysql_fetch_array( $data ))
  // {
  //   echo"<tr>";
  //   echo"<th>Name:</th> <td>".$row['projectName'] . "</td> ";
  //   echo"<th>filePath:</th> <td>".$row['filePath'] . " </td></tr>";
  //   echo"<th>Description:</th> <td>".$row['projectDesc'] . "</td> ";
  // }

  // while($row= mysql_fetch_array( $data )){ 
  //   echo"<tr>"; 
  //   echo"<th>Name:</th> <td>".$row['projectName'] . "</td> "; 
  //   echo"<th>file:</th> <td>".$row['filePath'] . " </td></tr>"; 
  //   echo"<th>Description:</th> <td>".$row['projectDesc'] . "</td> ";  
  // } 


  // $query = "SELECT * FROM user.dbo.user join projects.dbo.files";
  $query = "SELECT * FROM project WHERE `owner` = '".$_COOKIE['user']['username']."' "
  $result = $db->query($query);

  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      if ($row['owner']==$_COOKIE['user']['username']){
        echo "<a href=" . $row['filePath']. '</a>' . $row["projectName"]. "Description". $row['projectDesc'] "<br>";
      }
    }
  }

//   select *
// from Db1.dbo.Clients c
// join Db2.dbo.Messages m on c.ClientId = m.ClientId
?>


<h3>Projects</h3>
<table id="projectTable">
  <?php
    if ($dbOk) {
      $query = 'select * from projects order by projectName';
      $result = $db->query($query);
      $numRecords = $result->num_rows;
      echo '<tr><th>Name:</th><th></th></tr>';
      for ($i=0; $i < $numRecords; $i++) {
        $record = $result->fetch_assoc();
        if ($i % 2 == 0) {
          echo "\n".'<tr id="project-' . $record['projectId'] . '"><td>';
        } else {
          echo "\n".'<tr class="odd" id="projct-' . $record['projectId'] . '"><td>';
        }
        echo htmlspecialchars($record['projectName'])
        // echo '</td><td>';

        echo '</td><td>';
        echo '<img src="resources/delete.png" class="deleteProject" width="16" height="16" alt="delete project"/>';
        echo '</td></tr>';
      }
      
      $result->free();
      $db->close();
    }
  ?>
</table>