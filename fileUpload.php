<?php
    // $dbOk = false;
    // @ $db = new mysqli('localhost', 'root', 'root', 'itws_projects');

    // if ($db->connect_error) {
    //     echo '<div class="messages">Could not connect to the database. Error: ';
    //     echo $db->connect_errno . ' - ' . $db->connect_error . '</div>';
    // } else {
    //     $dbOk = true; 
    // }
    include('dbConnect.php')

    $statusMsg = '';

    // File upload path
    $targetDir = "uploads/";
    $fileName = basename($_FILES["file"]["name"]);
    $targetFilePath = $targetDir . $fileName;
    // $desc = 
    // $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

    if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
        // Insert image file name into database
        $insert = $db->query("INSERT into files (projectName, uploaded_on) VALUES ('".$fileName."', NOW())");
        if($insert){
            $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
        }else{
            $statusMsg = "File upload failed, please try again.";
        } 
    } else {
        $statusMsg = 'Please select a file to upload.';
    }
    // Display status message
    echo $statusMsg;


    if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
        // Insert image file name into database
        $insert = $db->query("INSERT into images (file_name, uploaded_on) VALUES ('".$fileName."', NOW())");
        if($insert){
            $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
        }else{
            $statusMsg = "File upload failed, please try again.";
        } 
    }else{
        $statusMsg = "Sorry, there was an error uploading your file.";
    }
?>

<!-- <form action="fileupload.php" method="post" enctype="multipart/form-data">
    Select File to Upload:
    <input type="file" name="file">
    <input type='description' name='description'>
    <input type="submit" name="submit" value="Upload">
</form> -->

<h3>Select File to Upload:</h3>
<input type="file" name="file">
<input type='description' name='description'>
<input type="submit" name="submit" value="Upload">
?>	