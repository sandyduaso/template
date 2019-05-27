<!-- Navbar Logo -->
<div class="text-left navbar-brand-wrapper d-flex align-items-center justify-content-between">
  <!-- <a class="navbar-brand brand-logo" href="index.html"><img src="../../images/logo.svg" alt="logo"/></a>
  <a class="navbar-brand brand-logo-mini" href="index.html"><img src="../../images/logo-mini.svg" alt="logo"/></a> 
   --><button class="navbar-toggler align-self-center" type="button" data-toggle="minimize">
  <span class="mdi mdi-menu"></span>
  </button>
</div>

<!-- Navbar Menu -->
<div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
  <ul class="navbar-nav navbar-nav-right">
    <li class="nav-item nav-search d-none d-lg-flex">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="search">
          <i class="mdi mdi-magnify"></i>
          </span>
        </div>
        <input type="text" class="form-control" placeholder="Type to search..." aria-label="search" aria-describedby="search">
      </div>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center" id="notificationDropdown" href="#" data-toggle="dropdown">
      <i class="mdi mdi-bell-outline mx-0"></i>
      </a>
      <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
        <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
      </div>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center" id="messageDropdown" href="#" data-toggle="dropdown">
        <i class="mdi mdi-email-outline mx-0"></i>
      </a>
      <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
        <p class="mb-0 font-weight-normal float-left dropdown-header">Messages</p>
      </div>
    </li>
    <li class="nav-item nav-user-icon">
      <a class="nav-link" href="#">
      <img src="../../images/faces/face28.jpg" alt="profile"/>
      </a>
    </li>
  </ul>
</div>