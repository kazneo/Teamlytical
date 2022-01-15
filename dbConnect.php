<?php
  $dbOk = false;
  // change iit
  @ $db = new mysqli('localhost', 'root', 'root', 'itws_project');
  
  if ($db->connect_error) {
    echo '<div class="messages">Could not connect to the database. Error: ';
    echo $db->connect_errno . ' - ' . $db->connect_error . '</div>';
  } else {
    $dbOk = true; 
  }
  ini_set('display_errors', 1);
?>