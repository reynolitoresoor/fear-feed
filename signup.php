<?php 
if(session_start()) {
  session_destroy();
}

require_once('config/database.php');
require_once('config/classes.php');
$page_title = "Sign Up";
include 'inc/header.php'; 

if($_POST) {
  $user = new User();
  $user_id = $user->save($_POST);
  if($user_id > 0) {
    $_SESSION['account_created'] = "You can now login.";
    header('Location: '.base_url);
  }

}
?>
<div class="wrapper">
  <div id="formContentSignup">
    <!-- Tabs Titles -->
    <div class="text-center">
      <a href="<?php echo base_url; ?>"><img src="<?php echo base_url.'uploads/images/logo.png'; ?>" /></a>
    </div>
    <!-- Login Form -->
    <form method="POST" action="" class="signup">
      <div class="first">
        <h2 class="text-center">Sign Up</h2>
      </div>
      <div class="row text-left">
        <div class="col-sm">
          <label class="form-label" for="first-name">First Name:</label>
          <input type="text" id="first-name" class="first-name" name="first_name" placeholder="First Name">
        </div>
        <div class="col-sm">
          <label class="form-label" for="last-name">Last Name:</label>
          <input type="text" id="last-name" class="last-name" name="last_name" placeholder="Last Name">
        </div>
      </div>
      <div class="row text-left">
        <div class="col-sm">
          <label class="form-label" for="email">Email:</label>
          <input type="email" id="email" class="email" name="email" placeholder="Email" required>
        </div>
        <div class="col-sm">
           <label class="form-label" for="username">Username:</label>
           <input type="text" id="username" class="username" name="username" placeholder="Username" required>
        </div>
      </div>
      <div class="row text-left">
        <div class="col-sm">
          <label class="form-label" for="password">Password:</label>
          <input type="password" id="password" class="password" name="password" placeholder="Password" required>
        </div>
        <div class="col-sm">
          <label class="form-label" for="confirm_pass">Confirm Password</label>
          <input type="password" id="confirm_pass" class="confirm_pass" name="confirm_pass" placeholder="Confirm Password" required>
        </div>
      </div>
      <div class="row mt-3" style="text-align: right;">
        <div class="col-sm">
        </div>
        <div class="col-sm">
          <input type="submit" class="signup" value="CREATE">
        </div>
      </div>
    </form>

  </div>
</div>
<?php include 'inc/footer.php'; ?>