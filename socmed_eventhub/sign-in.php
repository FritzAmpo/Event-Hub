<title>Sign In Your Account</title>
<?php

include 'views/header.php';
?>
<form id="signinform" action="models/signin-user.php" method="POST">
    <label for="uname">Username or Email</label>
    <input type="text" id="username" name="uname" placeholder="Username or Email" require>
    <label for="uname">Password</label>
    <input type="password" id="password" name="pass" placeholder="Password" require>
    <div id="signedinbox">
        <input type="checkbox" id="signedin" name="signin" value="signedin">
        <label for="signedin">Keep Me Signed In</label>
        <input type="submit" value="Sign In">
    </div>
</form>

<?php 
include 'views/footer.php';
?>