
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
    <title><?php echo $title; ?> | Govt. Mgt.   </title>


    

    <!-- Bootstrap core CSS -->
<link href="<?php echo site_url("assets/css/bootstrap.min.css"); ?>" rel="stylesheet">



    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/4.6/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/4.6/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/4.6/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/4.6/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/4.6/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
<link rel="icon" href="/docs/4.6/assets/img/favicons/favicon.ico">
<meta name="msapplication-config" content="/docs/4.6/assets/img/favicons/browserconfig.xml">
<meta name="theme-color" content="#563d7c">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="<?php echo site_url("assets/css/dashboard.css"); ?>" rel="stylesheet">
  </head>
  <body>
    
<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="<?php echo site_url("dashboard"); ?>">Govt. Mgt.</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <!-- <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search"> -->
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="<?php echo site_url("logout"); ?>">Sign out</a>
    </li>
  </ul>
</nav>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">

          <?php $session = session(); ?>
          
          <?php if($session->role=="cm"): ?>

          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url("reports-from-ministers"); ?>">
              Reports
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url("blocks"); ?>">
              Blocks
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url("districts"); ?>">
              Districts
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url("users"); ?>">
              Users
            </a>
          </li>
          <?php  elseif($session->role=="minister"): ?>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url("send-report-to-cm"); ?>">
              Send Report to CM
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url("reports-from-councillors"); ?>">
              Reports
            </a>
          </li>
          <?php else: ?>


          <?php endif; ?>
        </ul>
        

      </div>
    </nav>
