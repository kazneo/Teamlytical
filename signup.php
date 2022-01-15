<?php
  // echo("hello");
  ini_set('display_errors', 1);
  $dbOk = false;
  $db = new mysqli('localhost', 'root', 'root', 'itws_project');
  if ($db->connect_error) {
    echo '<div class="messages">Could not connect to the database. Error: ';
    echo $db->connect_errno . ' - ' . $db->connect_error . '</div>';
  } else {
    $dbOk = true; 
  }
  // include ('dbConnect.php')
  // var_dump("test");
  // if (isset($_POST["name"])){
  //   $name = htmlspecialchars(trim($_POST["name"]));
  // }
  // if (isset($_POST["username"])){
  //   $userName = htmlspecialchars(trim($_POST["username"]));
  // }
  // if (isset($_POST['email'])){
  //   $email = htmlspecialchars(trim($_POST["email"]));
  // }
  // if (isset($_POST['password'])){
  //   $password = htmlspecialchars(trim($_POST["password"]));
  // }
  // echo ($name);
  // var_dump($_SERVER('REQUEST_METHOD'));
  // if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['Join'])){
  // var_dump($error);
  // if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  //   // var_dump("why");
  //   // if($query = $db->prepare('SELECT * FROM users WHERE email = ?')){
  //   // $query = $db->prepare('SELECT * FROM users WHERE email = ?');
  //   $error = '';
  //   // $query->blind_param('s', $email);
  //   // $query->excute();
  //   // $query->store_result;
  //   if ($query->num_rows > 0){
  //     $error .= '<p class=\'error\'>The email is alredy been used</p>';
  //   } else if (strlen($password)<6) {
  //     $error .= '<p class\'error\'>Password must be at least 6 characters</p>';
  //   }
  //   // var_dump($error);
  //   if (empty($error)){
  //     // $insQuery = $db -> prepare('INSERT INTO user (`name`, `username`, `email`, `password`) VALUE (?, ?, ?, ?)');
  //     $result = $db -> prepare('INSERT INTO user (`name`, `username`, `email`, `password`) VALUE (?, ?, ?, ?)');
  //     // var_dump($name, $userName, $email, $password);
  //     // $insQuery = "insert into users (`name`,`userName`,`eamil`, `password`) values(?,?,?,?)";
  //     $result = bind_param('ssss', $name, $userName, $email, $password);
  //     $result ->execute();
  //     if ($result){
  //       $error .= '<p class=\'sucsess\'>Sucsessfully signed up</p>';

  //       $cookie_name = "user";
  //       $cookie_value = $result;
  //       setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

  //       header('location: community.html')
  //       // echo '<script type ="text/javascript"> window.location.href = "./community.html";</script>';

  //     } else {
  //       $error .= '<p class\'error\'>Somthing went wrong</p>';
        
  //     }
  //     var_dump("test 2");
  //     $query -> close();
  //     $insQuery -> close();
  //   } else {
  //     echo '<div class="messages"><h4>Please correct the following errors:</h4><ul>';
  //     echo $error;
  //     echo '</ul></div>';
  //     echo '<script type="text/javascript">';
  //     echo '  $(document).ready(function() {';
  //     echo '    $("' . $focusId . '").focus();';
  //     echo '  });';
  //     echo '</script>';
  //     var_dump($error);
  //   }
  //   // }
  //   // var_dump("test 3");
  // }
  

  // $error = '';
  // if (isset($_POST["name"])){
  //   $name = (trim($_POST["name"]));
  //   if ($name == ''){
  //     $error .= 'Name can not be empty';
  //   }
  // }
  // if (isset($_POST["username"])){
  //   $username = (trim($_POST["username"]));
  //   if ($username == ''){
  //     $error .= 'username can not be empty';
  //   }
  // }
  // if (isset($_POST['email'])){
  //   $email = (trim($_POST["email"]));
  //   if ($email == ''){
  //     $error .= 'email can not be empty';
  //   }
  // }
  // if (isset($_POST['password'])){
  //   $password = (trim($_POST["password"]));
  //   if ($password == ''){
  //     $error .= 'password can not be empty';
  //   }
  // }

  // if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  //   // form validation: ensure that the form is correctly filled ...
  //   // by adding (array_push()) corresponding error unto $errors array
  //   // if (empty($name)) {array_push($error, 'Name is required'); }
  //   // if (empty($username)) { array_push($errors, "Username is required"); }
  //   // if (empty($email)) { array_push($errors, "Email is required"); }
  //   // if (empty($password)) { array_push($errors, "Password is required"); }
  
  //   // first check the database to make sure 
  //   // a user does not already exist with the same username and/or email
  //   // $query = "SELECT * FROM users WHERE username=$username OR email=$email LIMIT 1";
  //   // // $result = mysqli_query($db, $query);
  //   // $result = $db->query($query);
  //   // $user = fetch_assoc($result);
    
  //   // if ($user) { // if user exists
  //   //   if ($user['username'] === $username) {
  //   //     array_push($errors, "Username already exists");
  //   //   }
  //   //   if ($user['email'] === $email) {
  //   //     array_push($errors, "email already exists");
  //   //   }
  //   // }
  
  //   // Finally, register user if there are no errors in the form
  //   if (empty($errors)) {
  //     $ecriptPassword = md5($password);//encrypt the password before saving in the database
  
  //     $insQuery = "INSERT INTO users (`name`, `username`, `email`, 'password') VALUES (?,?,?,?)";
  //     $statement = $db->prepare($insQuery);
  //     // $statement ->bind_param("ssss",$,$,$,$);
  //     $statement ->bind_param("ssss",$name,$username,$email,$password);
  //     $statement -> excute();
  //     // mysqli_query($db, $insQuery);
  //     $cookie_name = 'user';
  //     $cookie_value = $username;
  //     setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
  //     // $_SESSION['username'] = $username;
  //     // $_SESSION['success'] = "You are now logged in";
  //     $statement->close();
  //     header('location: community.php');
  //   } else {
  //     echo ($error);
  //   }
  // }


  $name = $username = $email = $password = "";
  $username_err = $password_err = $confirm_password_err = "";
  $errors = '';
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
  if (empty(trim($_POST['name']))){
    $errors .= "Please enter a name";
  }
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM user WHERE username = ?";
        
        if($stmt = mysqli_prepare($db, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
          } else{
              echo "Oops! Something went wrong. Please try again later.";
          }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    if(empty(trim($_POST["email"]))){
      $error .= 'Please enter a email';
    } else {
      $email = trim($_POST["email"]);
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err) && empty($error)){         
      $insQuery = "insert into user (`name`,`username`,`email`, `password`) values(?,?,?,?)";
      $statement = $db->prepare($insQuery);
      $statement->bind_param("ssss",$name,$username,$email,$password);
      $statement->execute();
    }
    
    // Close connection
    mysqli_close($db);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signup.css">
    <title>User SignUp</title>
</head>

<body>
    <div class='main'>
        <div class='left'>
            <div class='sub'>
                <h1>Find your community</h1>
                <p>Connect with other users and collaborate on projects</p>
            </div>
        </div>
        <div class='right'>
            <form id="signup" name="signup" action="signup.php" method="post">
                <div class='sub'>
                    <h2>Sign Up</h2>
                    <div class='login'>
                        <p>Already a member? <a href='index.html'>
                                <strong>Log In</strong>
                            </a></p>
                    </div>
                </div>
                <div class='input_name'>
                    <label for="name">Full Name</label>
                    <input id="name" name="name" type="text">
                </div>
                <div class='input_username'>
                    <label for="username">Username</label>
                    <input id="username" name="username" type="text">
                </div>
                <div class='input_email'>
                    <label for="email">Email</label>
                    <input id="email" name="email" type="email">
                </div>
                <div class='input_password'>
                    <label for="password">Password</label>
                    <input id="password" name="password" placeholder="Must be at least 6 characters" type="password">
                </div>
                <!-- <a href="profilepage.html"><button class='Button' type='submit'>Join Us!</button></a> -->
                <button class='Button' type='submit'>Join Us!</button>
            </form>
        </div>
    </div>

</body>

</html>