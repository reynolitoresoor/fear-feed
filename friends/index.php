<?php 
require_once('../config/database.php');
require_once('../config/classes.php'); 
$page_title = "Friends";

if(!isset($_SESSION['user_data'])) {
   header('Location: '.base_url);
}
$user = new User();
$user_data = $user->getUserData($_SESSION['user_data']['user_id']);
$friends = $user->getUserConfirmedFriends($user_data[0]['user_id']);

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
	  			<form method="POST" action="">
            <div class="row">
              <?php if($friends){ ?>
                <h2 class="text-primary">Your friends.</h2>
                <hr class="border" />
              <?php foreach($friends as $friend): ?>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-3 d-flex flex-row" style="text-align: left;">
                <img class="img-responsive profile mr-3" width="150" height="150" src="<?php echo base_url.$friend['profile']; ?>" /> 
                <a href="#"><?php echo $friend['username']; ?></a>
              </div>
              <?php endforeach; ?>
              <?php } else { ?>
              <h2 class="text-primary">You have no friend yet.</h2>
              <?php } ?>
            </div>
          </form>
	  		</div>
	  	</div>
	 </div>
  </div>

  <a href="#" class="back-to-top btn-primary d-flex align-items-center justify-content-center" style="border: 1px solid #e6ddd1;"><i class="bi bi-arrow-up-short"></i></a>

  <?php include '../inc/footer.php'; ?>