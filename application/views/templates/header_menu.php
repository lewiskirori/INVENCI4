
<header class="main-header">
    <!-- Logo -->
    <a href="<?php echo base_url('/dashboard') ?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini">
      <style>
      .logo-mini{
        font-family: Nunito, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
        font-weight: bold;
      }
    </style> Inv </span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">
      <style>
      .logo-lg{
        font-family: Nunito, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
        font-weight: bold;
        letter-spacing: 1px;
      }
    </style>
    <img src="<?php echo site_url('assets/dBASE-ico.ico'); ?>"> InvenCi4</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <span class="nav-msge">
      <style>
      .nav-msge a{
        font-family:Nunito, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
        font-size: 1.5rem;
        color: white;
        display: flex;
        cursor: default;
      }
    </style><a href="<?php echo base_url('/dashboard') ?>">
   
    
			<?php 
            /* Set the $timezone variable to become the current timezone */
            date_default_timezone_set('Africa/Nairobi');
            
            /* This sets the $time variable to the current hour in the 24 hour clock format */
            $time = date("H");
            
            /* If the time is less than 1200 hours, show good morning */
            if ($time < "12") {
                echo "Good Morning";
            } else
            /* If the time is greater than or equal to 1200 hours, but less than 1600 hours, so good afternoon */
            if ($time >= "12" && $time < "16") {
                echo "Good Afternoon";
            } else
            /* Should the time be between or equal to 1600 and 2000 hours, show good evening */
            if ($time >= "16" && $time < "22") {
                echo "Good Evening";
            } else
            /* Finally, show good night if the time is greater than or equal to 2000 hours */
            if ($time >= "22") {
                echo "Shouldn't you be in bed? Good Night";
            }
            ?>
            <br>
            <?php echo $_SESSION["username"]; ?> | <?php echo date('l') .', '.date('M').' '.date('jS'); ?></span></a>

    <!-- <li class="header">Settings</li> -->
    <style>
      .logout-process{
        font-family: Nunito, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
        font-weight: bolder;
        font-size: inherit;
        display: inline;
        color: #23527C;
        float: right;
        width: 100px;
        right: 50%;
        margin-top: -33px;
        outline: none;
        justify-content: center;
        border: 2px solid #1E282C;
        border-radius: 10px;
        padding: 1px 3px;
        letter-spacing: 1px;
        cursor: pointer;
        transform: translateX(-7px);
        
      }
      .logout-process:hover{
        border: 2px solid #1E282C;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        transform: translateX(-10px);
      }
    </style>
        <!-- user permission info -->
        <?php
        $unique_id = bin2hex(random_bytes(25)); // random string of 50 chars
        $url = base_url("auth/logout?c=auth&m=logout&id=$unique_id");
        ?>
        <a href="<?php echo $url; ?>" class="logout-process"><i class="fa fa-power-off" style="font-size:23px"></i> Log out</a>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  
