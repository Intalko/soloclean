<?php $udata = $this->session->userdata('user_data');?>
<header class="main-header">
  <!-- Logo -->
  <a href="index2.html" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>S</b>CLE</span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg">SOLO CLEAN</span>
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top" role="navigation">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <span class="hidden-xs"><i class="fa fa-power-off"></i></span>
          </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header">
              <img src="<?=base_url()?>includes/backend/css_dashboard/dist/img/avatar.png" class="img-circle" alt="User Image">
              <p>
                <a href="<?=base_url()?>admin/logout" class="btn btn-default btn-flat">Sign out</a>
              </p>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
</header>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?=base_url()?>includes/backend/css_dashboard/dist/img/avatar.png" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?= $udata['nama']; ?></p>
      </div>
    </div>
    <?php $bc = $this->session->userdata('breadcrumb'); ?>
    <?php $msbc = $this->session->userdata('main_sub_breadcrumb'); ?>
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <li class="header">Menu Utama</li>
      <!-- DASHBOARD
      <li class="<?php if($bc == 'dashboard'){?>active<?php }?>">
        <a href="<?= base_url()?>admin/dashboard">
          <i class="fa fa-laptop"></i>
          <span>DASHBOARD</span>
        </a>
      </li> -->

      <!-- CATEGORY MANAGEMENT 
      <li class="<?php if(!empty($bc)&&$bc == 'kategori'){?>active<?php }?> treeview">
        <a href="#"><i class="fa fa-user"></i> KATEGORI<i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
              <li class="<?php if(!empty($msbc)&&$msbc == 'kategori'){?>active<?php }?>"><a href="<?= base_url()?>Admin/Category"><i class="fa fa-list "></i> DAFTAR CATEGORY</a></li>
              <li class="<?php if(!empty($msbc)&&$msbc == 'kategori'){?>active<?php }?>"><a href="<?= base_url()?>Admin/Category/Tambah"><i class="fa fa-plus-square"></i> TAMBAH CATEGORY</a></li>
            </ul>
      </li> -->
	  
	  <!-- PRODUCT MANAGEMENT -->
      <li class="<?php if(!empty($bc)&&$bc == 'produk'){?>active<?php }?> treeview">
        <a href="#"><i class="fa fa-user"></i> PRODUK<i class="fa fa-angle-left pull-right"></i></a>
			  <ul class="treeview-menu">
          <li class="<?php if(!empty($msbc)&&$msbc == 'produk'){?>active<?php }?>"><a href="<?= base_url()?>Admin/Product"><i class="fa  fa-list "></i> DAFTAR PRODUCT</a></li>
          <li class="<?php if(!empty($msbc)&&$msbc == 'produk'){?>active<?php }?>"><a href="<?= base_url()?>Admin/Product/Tambah"><i class="fa fa-plus-square"></i> TAMBAH PRODUCT</a></li>
			  </ul>
      </li>
	  
	  <!-- TRANSACTION MANAGEMENT
	  <li class="<?php if($bc == 'transaksi'){?>active<?php }?>">
        <a href="<?= base_url()?>admin/transaksi">
          <i class="fa fa-laptop"></i>
          <span>TRANSAKSI</span>
        </a>
    </li>-->
	  
	  

    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
