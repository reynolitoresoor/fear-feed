<nav id="navbar" class="sidebar-menu navbar">
	<ul class="flex-column align-content-start">
	  <li><a class="nav-link d-flex flex-column" href="<?php echo base_url.'profile'; ?>"><img class="img-responsive profile" width="50" height="50" src="<?php if(!empty($user_data[0]['profile'])){echo base_url.$user_data[0]['profile'];}else{echo base_url.'uploads/profile/profile.png';} ?>" /><?php echo $user_data[0]['username']; ?></a></li>
	  <li><a class="nav-link <?php if(strtolower($page_title) == 'home'){echo 'active';} ?>" href="<?php echo base_url; ?>">Home</a></li>
	  <li><a class="nav-link <?php if(strtolower($page_title) == 'profile'){echo 'active';} ?>" href="<?php echo base_url.'profile'; ?>">Profile</a></li>
	  <li><a class="nav-link <?php if(strtolower($page_title) == 'friends'){echo 'active';} ?>" href="<?php echo base_url.'friends'; ?>">Friends</a></li>
	  <li><a class="nav-link <?php if(strtolower($page_title) == 'friend requests'){echo 'active';} ?>" href="<?php echo base_url.'friends/friend-requests.php'; ?>">Friend Requests</a></li>
	  <li><a class="nav-link <?php if(strtolower($page_title) == 'posts'){echo 'active';} ?>" href="<?php echo base_url.'posts'; ?>">Posts</a></li>
	</ul>
	<i class="bi bi-list mobile-nav-toggle"></i>
</nav>