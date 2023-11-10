<?php 
require_once('config/database.php');
require_once('config/classes.php');
$page_title = "Login";

if(isset($_SESSION['user_data'])) {
  header('Location: '.base_url.'home');
}

if($_POST) {
	$user = new User();
    $result = $user->login($_POST);
    if($result) {
    	$_SESSION['user_data'] = $result;
    	header('Location: '.base_url.'home');
    } else {
        $_SESSION['login_error'] = "Invalid username or password.";   
    }
}

include 'inc/header.php'; 
?>
<div class="wrapper">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="first text-center">
      <a href="<?php echo base_url; ?>"><img src="<?php echo base_url.'uploads/images/logo.png' ?>"></a>
    </div>

    <!-- Login Form -->
    <form method="POST" action="" class="login">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <?php if(isset($_SESSION['account_created'])){ ?>
          <p class="text-success"><?= $_SESSION['account_created'] ?></p>
          <?php } ?>
          <?php if(isset($_SESSION['login_error'])){ ?>
          <p class="text-danger"><?= $_SESSION['login_error'] ?></p>
          <?php } ?>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <label class="form-label" for="username">Email:</label>
          <input type="text" id="username" class="username" name="username">
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <label class="form-label">Password:</label>
          <input type="password" id="password" class="password" name="password">
        </div>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="text-align: right;padding: 0px;margin-top: 30px;margin-block: 20px;">
        <input type="submit" class="login" value="LOGIN">
      </div>
      <p style="text-align: right;"><a href="<?php echo base_url.'signup.php' ?>">Sign Up</a></p>
    </form>

  </div>
</div>
<?php include 'inc/footer.php'; ?>