<?php 
    include('dbConnect.php')

    // $_COOKIE['user']
    // $userId = $_COOKIE['user']['userId'];
    // $query = "SELECT * FROM friends WHERE userId Or friendId = '{$userId}' ";
    // $query .= "FROM friends ";
    // $query .= "WHERE ";
    // $query .= "user_id OR friend_id = '{$user_id}' ";
    $result = mysqli_query($connection, $query);
    $result_set = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>

<html lang="en">
    <head>
        <title>Profile Page</title>
        <link rel="stylesheet" href="profilepage.css">
    </head>

    <body>
        <!--This contains the menu for user navigation.-->
        <div id="editprofileandmenu">
            <ul id="menu">
                <li><a href="index.html">Home</a></li>
                <li>|</li>
                <li><a href='community.php'>Community</a></li>
                <li>|</li>
                <li><a href="profilepage.php">Profile</a></li>
            </ul>
            <div id="editprofile">
                <button><a href="editprofile.html">Edit Profile</a></button>
            </div>
            <div id="friends">
                <h4>Friends</h4>
                <div id="friendlist">
                    <!-- <li><a href>Friend 1</a></li>
                    <li><a href>Friend 2</a></li>
                    <li><a href>Friend 3</a></li>
                    <li><a href>Friend 4</a></li> -->
                </div>
                <!-- <form action=friend.php>
                    <li>Friend1</li>
                </form> -->
            </div>
        </div>

        <ul id="aboutme">
            <img src="Images/placeholder.png" alt="placeholder" style="width:100px;height:100px;" class="floatLeft">
            <div id="nameusername">
                <h1><?php $_COOKIE['user']['name']?></h1>
                <p><em><?php $_COOKIE['user']['username']?></em></p>
            </div>
            
        </ul>

        <ul id="bio">
            <h2>About Me</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu blandit orci, 
                sit amet vehicula nulla. Nullam tristique odio a ex bibendum efficitur. Nulla 
                ac mauris at arcu dictum dapibus. Pellentesque habitant morbi tristique senectus 
                et netus et malesuada fames ac turpis egestas. Nulla facilisi. Quisque volutpat 
                a lorem sit amet rhoncus. Nulla ut dui vel magna dignissim pulvinar. Fusce rhoncus
                 vitae lorem id sagittis. Vivamus orci lacus, gravida non felis ac, aliquam 
                 lobortis arcu. Nullam imperdiet elementum quam nec dictum. Nunc vulputate tempor 
                 turpis, vitae pulvinar augue commodo in. Quisque cursus euismod fringilla. Lorem 
                 ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sodales, tortor vel 
                 hendrerit luctus, mi massa interdum neque, vel euismod justo purus laoreet purus. 
                 Sed ex enim, tincidunt eu tincidunt ut, aliquet in ante.</p>
            <p><?php 
                if ($_COOKIE['user']['aboutMe'] != ''){
                    $_COOKIE['user']['aboutMe']
            ?><p>
        </ul>

        <div id="skilltables">
            <div id="experience">
                <h3>Experience</h3>
            </div>
            <div id="skills">
                <h3>Skills</h3>
            </div>
            <div id="projects">
                <h3>Projects</h3>
            </div>
        </div>

        <div id="contactandfriends">
            <div id="contact">
                <h4>Contact Information</h4>
                <li>Phone:</li>
                <li>Email: <?php$_COOKIE['user']['email']?></li>
            </div>
            <div id="feed">
                <h4>Feed</h4>
                <li><a href>John Doe</a> liked your post.</li>
                <li><a href>John Doe</a> and <a href>27 others</a> added you as a friend.</li>
            </div>
        </div>
    </body>
</html>