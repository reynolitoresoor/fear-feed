<?php 
require_once('../config/database.php');
require_once('../config/classes.php');

$page_title = "Profile";

$user = new User();
$user_data = $user->getUserData($_SESSION['user_data']['user_id']);

if($_POST) {
  $update = $user->update($_POST);
  $user_data = $user->getUserData($_SESSION['user_data']['user_id']);
}

include '../inc/header.php';
include '../inc/top-nav.php';
?>
  
  <div class="main">
  	<div class="container">
	  	<div class="row">
	  		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
	  			<?php include '../inc/sidebar.php'; ?>
	  		</div>
	  		<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 box">
	  			<form method="POST" action="" enctype="multipart/form-data">
            <?php if(isset($update)): ?>
            <div class="row">
              <p style="text-align: left;">Profile successfully</p>  
            </div>
            <?php endif; ?>
            <div class="row">
              <div class="col-lg-6 form-group">
                <label class="form-label" for="profile">Profile</label>
                <input type="file" name="profile" id="profile" class="form-control">
              </div>
            </div>
            <div class="row">
              <div class="col-sm form-group">
                <label class="form-label" for="username">Username</label>
                <input type="text" class="form-control" id="email" name="username" value="<?= isset($user_data[0]['username']) ? $user_data[0]['username'] : '' ?>" />
              </div>
              <div class="col-sm form-group">
                <label class="form-label" for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?= isset($user_data[0]['email']) ? $user_data[0]['email'] : '' ?>" />
              </div>
            </div>
            <div class="row">
              <div class="col-sm form-group">
                <label class="form-label" for="old-password">Old Password</label>
                <input type="password" class="form-control" id="old-password" name="old_password" />
              </div>
              <div class="col-sm form-group">
                <label class="form-label" for="new-password">New Password</label>
                <input type="password" class="form-control" id="new-password" name="new_password" />
              </div>
            </div>
            <div class="row">
              <div class="col-sm form-group">
                <label class="form-label" for="first-name">First Name</label>
                <input type="text" class="form-control" id="first-name" name="first_name" value="<?= isset($user_data[0]['first_name']) ? $user_data[0]['first_name'] : '' ?>" />
              </div>
              <div class="col-sm form-group">
                <label class="form-label" for="last-name">Last Name</label>
                <input type="text" class="form-control" id="last-name" name="last_name" value="<?= isset($user_data[0]['last_name']) ? $user_data[0]['last_name'] : '' ?>" />
              </div>
            </div>
            <div class="mt-3" style="text-align: left;">
              <input type="hidden" name="user_id" value="<?php echo $user_data[0]['user_id']; ?>">
              <button type="submit" class="btn btn-primary">Update Profile</button>
            </div>
          </form>
	  		</div>
	  	</div>
	 </div>
  </div>

  <a href="#" class="back-to-top btn-primary d-flex align-items-center justify-content-center" style="border: 1px solid #e6ddd1;"><i class="bi bi-arrow-up-short"></i></a>

  <?php include '../inc/footer.php'; ?>