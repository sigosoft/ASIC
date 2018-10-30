<div class="col-md-3 left_col menu_fixed">
  <div class="left_col scroll-view">
    <div class="navbar nav_title" style="border: 0;">
      <a href="index.html" class="site_title"><img src="<?php echo base_url(); ?>images/logo.png" width="51px;"> <span>ASIC</span></a>
    </div>

    <div class="clearfix"></div>

    <!-- menu profile quick info -->
    <div class="profile clearfix">
      <div class="profile_pic">
        <img src="<?php echo base_url(); ?>images/user.png" alt="..." class="img-circle profile_img">
      </div>
      <div class="profile_info">
        <span>Welcome</span>
        <h2>admin@admin.com</h2>
      </div>
    </div>
    <!-- /menu profile quick info -->


    <!-- sidebar menu -->
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
      <div class="menu_section">
        <ul class="nav side-menu">
  <li class="active"><a href="#"><img src="<?php echo base_url(); ?>images/icon/1.png">  Dashboard</a></li>
  <li><a href="#" ><img src="<?php echo base_url(); ?>images/icon/2.png"> <span>Create shift</span> <i class="fa fa-chevron-down" aria-hidden="true"></i> </a>
    <ul class="nav child_menu">
      <li><a href="<?php echo base_url(); ?>admin/shift">Create Shift</a></li>
      <li><a href="<?php echo base_url(); ?>admin/shift/manage_shift">Manage Shift</a></li>
    </ul>
  </li>

  <li><a href="#" ><img src="<?php echo base_url(); ?>images/icon/5.png"> <span>Edit old data</span> <i class="fa fa-chevron-down" aria-hidden="true"></i> </a>
    <ul class="nav child_menu">
      <li><a href="<?php echo base_url(); ?>admin/qc_data">Edit QC Data</a></li>
      <li><a href="<?php echo base_url(); ?>admin/product">Edit Product</a></li>
    </ul>
  </li>
  <!--<li><a href="#"><img src="<?php echo base_url(); ?>images/icon/3.png" > <span> Create Qc record</span></a></li>
  <li><a href="#"><img src="<?php echo base_url(); ?>images/icon/4.png"> <span> Confirm the Production data Sheet</span></a></li>-->
  <!--<li><a href="<?php echo base_url(); ?>admin/qc_data"><img src="<?php echo base_url(); ?>images/icon/5.png"> <span> Edit old data</span></a></li>-->
  <li><a href="<?php echo base_url(); ?>admin/report"><img src="<?php echo base_url(); ?>images/icon/6.png"> <span> Report</span></a></li>
  <li><a href="#"><img src="<?php echo base_url(); ?>images/icon/7.png"> <span> Generate Data sheet</span></a></li>
  <li><a href="#"><img src="<?php echo base_url(); ?>images/icon/8.png"> <span> Print Report</span></a></li>
        </ul>
      </div>
    </div>
    <!-- /sidebar menu -->

    <!-- /menu footer buttons -->
    <div class="sidebar-footer hidden-small">

 <button type="submit" class="btn btn-default btn-logout btn-sm pull-right">
        <span class="glyphicon glyphicon-off"></span> Log out
    </button>

    </div>
    <!-- /menu footer buttons -->
  </div>
</div>
