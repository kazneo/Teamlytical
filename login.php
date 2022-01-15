<?php
  // include('dbConnect.php')
  $dbOk = false;
  @ $db = new mysqli('localhost', 'root', 'root', 'itws_project');
  
  if ($db->connect_error) {
    echo '<div class="messages">Could not connect to the database. Error: ';
    echo $db->connect_errno . ' - ' . $db->connect_error . '</div>';
  } else {
    $dbOk = true; 
  }

  // session_start()

  // if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
  //   $username = trim($_POST('username'))
  //   $password = trim($_POST('password'))

  //   $error = ''

  //   if (empty($username)){
  //     $error .= '<p class "error">Please enter username</p>'
  //   }
  //   if (empty($password)){
  //     $error .= '<p class "error">Please enter username</p>'
  //   }

  //   if (empty($error)){
  //     if ($query = $db->prepare('SELECT * FROM user WHERE user = ?')){
  //       $query->bind_param('s', $user);
  //       $query->execute();
  //       $row = $query -> fetch();
  //       if ($row){
  //         if(password_verify($password, $row['password'])) {
  //           // $_SESSION['userid'] = $row['id'];
  //           // $_SESSION['user'] = $row['user'];

  //           $cookie_name = "user";
  //           $cookie_value = $row;
  //           setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
  //           header('Location: community.html')
  //           // exit;
  //         } else {
  //           $error .= '<p class "error">Invalid Password</p>'
  //         }
  //       } else {
  //         $error .= '<p class "error">Could not find username</p>'
  //       }
  //       $query.close()
  //     }
  //     mysequalclose($db)
  //   }
?>

<?php 
  $message = '';

  // if(isset($_GET["login"])){
    if(empty($_GET["username"]) || empty($_GET["password"])){
      $message = "<div class='alert alert-danger'>Both Fields are required</div>";
    } else {
      $query = "SELECT * FROM user WHERE username = :username";
      $statement = $connect->prepare($query);
      $statement->execute(array('usename' => $_GET["username"]));
      $count = $statement->rowCount();
      if($count > 0) {
        $result = $statement->fetchAll();
        foreach($result as $row){
          if(password_verify($_GET["password"], $row["password"])){
            setcookie("type", $row, time()+3600);
            // header("Location:community.php");
            echo '<script type ="text/javascript"> window.location.href = "./community.php";</script>'
          }else{
            $message = '<div class="alert alert-danger">Wrong Password _:(´ཀ`」 ∠):</div>';
          }
        }
      } else {
        $message = "<div class='alert alert-danger'>Wrong Username _:(´ཀ`」 ∠):</div>";
      }
    }
  // }
?>

<!DOCTYPE html>

<html lang="en">
    <head>
        <title>Home Page</title>
        <link rel="stylesheet" href="index.css">
    </head>

    <body>
        <div class="container">
            <img class="collab" src="images/collaborating.jpg">
            <div class="logo"> 
                <header>Welcome</header>       
                <h1>Teamlytical</h1>
                <p><em>A collaborative platform built for efficiency.</em></p>
                <!-- <button><a href="signup.html">Get Started</a></button> -->
                <button><a href="./signup.php">Get Started</a></button>
                <div id="else">
                    <li><em>Or scroll to sign into an existing account.</em></li>
                </div>

            </div>
        </div>
        <!--This contains the menu for user navigation.-->
        
        <div class='split'>
            <div class='right'>
                <div id="login">
                    <h2>Welcome Back.</h2>
                    <p>Login with your username and password.</p>
                    <form id="login" name="login" action="login.php" method="get">
                        <div class='input_username'>
                            <label for="username">Username</label>
                            <input id="username" name="username" type="username">
                        </div>
                        <div class='input_password'>
                            <label for="password">Password</label>
                            <input id="password" name="password" type="password">
                        </div>
                        <div class='forgot_password'>
                            <a href>Forgot password?</a>
                        </div>
                        <button class='Button' type='submit'>Login</button>
                    </form>
                </div>
                <div id="menuandpicture">
                    
                    <div id="farright">
                        <img src="images/1.png" style="width:200px; height: 300px">
                    </div>
                </div>
            </div>
            <div class='left'>
                <img src="images/collab3.jpg" alt="Group of collaborating group members." style="width:460px;height:250px;" class="floatLeft">
                <div id='information'>
                    <h3><em>Welcome to Teamlytical.</em></h3>
                    <p>Introduce yourself. Make posts. Explore the community. Indicate interest. Build a team of collaborators fit for your project's needs. </p>
                </div>
            </div>
        </div>
        
    </body>
</html>