<?php 
use yii\helpers\Url;

?>

  <!-- Main Sidebar Container -->
  ?>
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="<?=Yii::$app->request->baseUrl;?>/img/AdminLTELogo.png?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">TEAM 404</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?=Yii::$app->request->baseUrl;?>/img/avatar04.png" class="img-circle elevation-2" alt="User Image">
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="<?=Url::to(['site/index'])?>" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p> Dashboard </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?=Url::to(['dashboard/index'])?>" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p> Customers </p>
            </a>
          </li>

          <li class="nav-item has-treeview">
            <a href="<?=Url::to(['dashboard/order'])?>" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p> Orders</p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="<?=Url::to(['dashboard/payment'])?>" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p> Payments </p>
            </a>
          </li>
          

          <li class="nav-item">
            <a href="lockscreen.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
            </a>
          </li>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

