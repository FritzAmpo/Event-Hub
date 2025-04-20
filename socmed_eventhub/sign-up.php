<title>Sign Up</title>
<?php

include 'views/header.php';

?>
<form id="signinform" action="models/signup_user.php" method="POST">
    <label for="uname">Username</label>
    <?php
        if(isset($_GET['uname_error'])){
            if($_GET['uname_error']==1){
                echo "<span class='error'>* Invalid username or username already exists</span>";
            }
        }
    
    ?>
    <input type="text" id="username" name="uname" placeholder="Username" require>
    <label for="email">Email</label>
        <?php
        if(isset($_GET['email_error'])){
            if($_GET['email_error']==1){
                echo "<span class='error'>* Invalid email or email already exists</span>";
            }
        }
    
    ?>
    <input type="text" id="email" name="email" placeholder="Email" require>
    <label for="fname">Firstname</label>
    <input type="text" id="firstname" name="fname" placeholder="First name" require>
    <label for="lname">Lastname</label>
    <input type="text" id="lastname" name="lname" placeholder="Last name" require>  
    <label for="lname">Gender</label>
    <select id="gender" name="gender">
        <option value="male">Male</option>
        <option value="female">Female</option>
    </select>
    <label for="bdate">Birthday</label>
    <input type="date" id="bdate" name="bdate" required>  
    <label for="pass">Password</label>
                <?php
        if(isset($_GET['password_error'])){
            if($_GET['password_error']==1){
                echo "<div class='error'>*Password doe't match</span>";
            }
        }
    
    ?>
    <input type="password" id="pass" name="pass" placeholder="Password" require>
    <label for="cpass">Confirm Password</label>
    <input type="password" id="cpass" name="cpass" placeholder="Confirm Password" require>
    <div id="signedinbox">
        <input type="checkbox" id="signedin" name="signin" value="signedin">
        <label for="signedin">I have read <a href="">EULA </a></label>   
    </div>
    <input type="submit" value="Sign In">
    
</form>

<?php


include 'views/footer.php';

?>