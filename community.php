<?php 
    $dbOk = false;
    @ $db = new mysqli('localhost', 'root', 'root', 'itws_project');
    // $_COOKIE['user']['aboutMe']
    if ($db->connect_error) {
      echo '<div class="messages">Could not connect to the database. Error: ';
      echo $db->connect_errno . ' - ' . $db->connect_error . '</div>';
    } else {
      $dbOk = true; 
    }
    // cookie[]
    $_COOKIE['user']
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="community.css">
        <title>Community Page</title>
        <script type='text/javascript'>
            function showMessage() {
                alert("Friend Request Sent!");
            }
        </script>
    </head>

    <body>
        <div id='top'>
            <div id="profile">
                <img src="images/p.png" height='80' class='pfp'>
                <div class='i'>
                    <h3><?php $_COOKIE['user']['name']?></h3>
                    <p><?php $_COOKIE['user']['username']?></p>
                </div>
            </div>

            <div id="info">
                <img src="images/bg.jpg" class='pic'>
                <textarea id="share" name="share" placeholder="Share your ideas here"></textarea>
                <button class='Button postB' type='button'>Post</button>
            </div>

            <div id='redirect'>
                <a href="profilepage.html"> <button class='Button profileB' type="button">Profile</button></a>
                <a href="index.html"> <button class='Button homeB' type="button">Home</button></a>
            </div>
        </div>

        <div id='bottom'>
            <div class='user user1'>
                <img src="images/p.png" height='50' class='pfp'>
                <h4>User #1</h4>
                <ul>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, accusamus. Repellendus odit numquam
                        <br>
                        laboriosam distinctio rem, possimus tempora. Commodi sequi nulla illo ducimus sapiente eum delectus,
                        <br>in incidunt quo aliquid?
                    </p>
                    <div class='buttons1'>
                        <button class='Like'>Like</button>
                        <button class='Interested'>I'm Interested</button>
                        <input type="button" id="Friend" value='Send Friend Request' onclick="showMessage()" />
                    </div>
                </ul>
            </div>
            <div class='user user2'>
                <img src="images/p.png" height='50' class='pfp'>
                <h4>User #2</h4>
                <ul>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, accusamus. Repellendus odit numquam
                        <br>
                        laboriosam distinctio rem, possimus tempora. Commodi sequi nulla illo ducimus sapiente eum delectus,
                        <br>in incidunt quo aliquid?
                    </p>
                    <div class='buttons2'>
                        <button class='Like'>Like</button>
                        <button class='Interested'>I'm Interested</button>
                        <input type="button" id="Friend" value='Send Friend Request' onclick="showMessage()" />
                    </div>
                </ul>
            </div>
            <div class='user user3'>
                <img src="images/p.png" height='50' class='pfp'>
                <h4>User #3</h4>
                <ul>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, accusamus. Repellendus odit numquam
                        <br>
                        laboriosam distinctio rem, possimus tempora. Commodi sequi nulla illo ducimus sapiente eum delectus,
                        <br>in incidunt quo aliquid?
                    </p>
                    <div class='buttons3'>
                        <button class='Like'>Like</button>
                        <button class='Interested'>I'm Interested</button>
                        <input type="button" id="Friend" value='Send Friend Request' onclick="showMessage()" />
                    </div>
                </ul>
            </div>
        </div>
    </body>

</html>