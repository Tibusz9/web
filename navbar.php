<!-- Navbar -->
<?php $config = require ('config.php'); ?>
<nav class="main-header navbar navbar-expand navbar-white navbar-light navbar-fixed">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <?php /*
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
      */ ?>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <!-- Messages Dropdown Menu -->
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?p=login&quit" role="button" title="Kijelentkezés">
          <i class="fa fa-times"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?=SITE_URL."/raktar/"; ?>" class="brand-link">
      <?php /* <img src="<?=SITE_LOGO; ?>" alt="<?=SITE_NAME; ?>" class="brand-image img-circle elevation-3" style="opacity: .8"> */?>
      <span class="font-weight-bold" style="font-size: 1rem"><?=SITE_NAME; ?></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block"><?=$_SESSION['adminuser']['realname']; ?></a>
        </div>
      </div>

     <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-header">RENDSZER</li>
          <?php foreach ($config['menu'] as $key => $value) { if ($key != "login") { ?>
          <li class="nav-item">
            <a href="index.php?p=<?=$key; ?>" class="nav-link">
              <i class="nav-icon fa fa-th"></i>
              <p>
                <?=$value; ?>
              </p>
            </a>
          <?php }} ?>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

<script>
  var url="check-pending.php";
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
          var res = this.responseText;
          console.log(res);
          if (res != "0")
          {
            document.getElementById("pendingcounter").innerHTML = res;
          }
          else
          {
            document.getElementById("pendingcounter").innerHTML = "";
          }
        } 
    };
    xhttp.open("GET", url, true);
    xhttp.send();
</script>
