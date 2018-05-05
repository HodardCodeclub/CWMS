<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
      </div>
      <div class="pull-left info">
        <p>CWMS   <?php echo $_SESSION['usr_name']; ?></p>

        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">

      <li class="active ">
        <a href="index.php">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <!-- <ul>

          <li class="active"><a href="index.php"><i class="fa fa-circle-o"></i> Dashboard</a></li>
        </ul> -->
      </li>
      <li class="">
        <a href="./pages/tables/branches.php">
          <i class="fa fa-files-o"></i>
          <span>Branches</span>

        </a>
        <!-- <ul class="treeview-menu">
          <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
          <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
          <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
          <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
        </ul> -->
      </li>
      <li>
        <a href="./pages/tables/projects.php">
          <i class="fa fa-th"><s/i> <span>Projects</span>
        </a>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-pie-chart"></i>
          <span>Vendors</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-laptop"></i>
          <span>Items</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>

      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-edit"></i> <span>Purchase Order</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>

      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-table"></i> <span>Special Instruction</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>

      </li>
      <li>
        <a href="pages/calendar.html">
          <i class="fa fa-calendar"></i> <span>Vendor Payment Request</span>

        </a>
      </li>
      <li>
        <a href="pages/mailbox/mailbox.html">
          <i class="fa fa-envelope"></i> <span>Report</span>

        </a>
      </li>




    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
