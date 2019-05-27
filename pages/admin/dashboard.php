<?php  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- CSS Header -->
	<?php include '../../includes/header.php'; ?>
  <!-- CSS Header -->
</head>
<body>
	<div class="container-scroller">  
		<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <!-- Navbar -->
      <?php include '../../includes/navbar_menu.php'; ?>
      <!-- Navbar -->
    </nav>
		<div class="container-fluid page-body-wrapper">
			<nav class="sidebar sidebar-offcanvas" id="sidebar">
      <ul class="nav">
        <!-- Profile -->
        <?php include '../../includes/sidebar_profile.php'; ?>
        <!-- Profile -->

        <!-- Sidebar -->
        <?php include '../../includes/sidebar.php'; ?>
        <!-- Sidebar -->
      </ul>
      </nav>
			<div class="main-panel">
				<div class="content-wrapper">
					<div class="row">
              <!-- Content -->
					</div>
				</div>
        <!-- JS Script & Footer -->
	      <?php include '../../includes/footer.php'; ?> 
        <!-- JS Script & Footer -->
			</div>
		</div>
	</div>
</body>
</html>