<?php

include('server.php');
include('includes/header.php');

?>
<div id="wrapper">
<h2>Log In!</h2>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>" method="post">
<fieldset class="center">

<label>Username</label>
<input type="text" name="username" value="<?php if(isset($_POST['username'])) echo $_POST['username'] ;?>">

<label>Password</label>
<input type="password" name="password" value="<?php if(isset($_POST['password'])) echo $_POST['password'] ;?>">

<button type="submit" name="login_user" class="btn"> Log in! </button>

<button type="button" onclick="window.location.href='<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>' "> Reset </button>

<?php
    include('errors.php'); 
?>
</fieldset>
<p><a href="register.php">Please register here!</a></p>
</form>

</div>
<!-- end wrapper -->
    
<?php include('includes/footer.php');