
</head>



<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <nav class="main-header navbar navbar-expand navbar-secondary navbar-light text-sm"
    style="height:58px; background-color: #26618e !important;">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item sidesEle ">
          <a class="nav-link text-light" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>

      </ul>

      <ul class="navbar-nav ml-auto">

        <li class="nav-item sidesEle  hidden-mobile">
          <div class="user-panel  d-flex">
            <div class="image">
              <img src="{{asset('dist/img/avatar4.png')}}" class="img-circle elevation-2" alt="User Image">
              <span class="dot"></span>
            </div>
            <!--<div class="info">-->
            <!--  <a href="#" class="d-block text-white">Alexander Pierce</a>-->
            <!--</div>-->
          </div>
        </li>
        <li class="nav-item sidesEle ">
          <a class="nav-link text-light" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>


      </ul>
    </nav>

    <aside class="main-sidebar sidebar-dark-secondary elevation-4"
      style="background-color: #021829 !important; height: 100vh !important;">



      <a href="{{route('state')}}" class="brand-link text-light  " style="background-color: #26618e !important;" >

        <img src="{{asset('dist/img/klk.png')}}" alt="AdminLTE Logo" class="brand-image img-circle p-1 elevation-3"
          style=" background-color: white;padding: 2px;">
        <span class="brand-text text-white">KLK Vendor</span>

      </a>

      <div class="sidebar">


        <nav>
          <ul class="nav nav-pills nav-sidebar flex-column text-sm nav-flat pt-2" data-widget="treeview" role="menu"
            data-accordion="false">

               <li class="nav-item sidesEle  activePage">
                            <a href="{{route('vendor-dashboard')}}" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        
                            <li class="nav-item sidesEle ">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-user"></i>
                                <p>
                                   Vendor
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item sidesEle ">
                                    <a href="{{route('add-vendor')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add Vendor</p>
                                    </a>
                                </li>
                                <li class="nav-item sidesEle ">
                                    <a href="{{route('view-vendor')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View Vendor</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        
                        <li class="nav-item sidesEle ">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-user"></i>
                                <p>
                                   Work Order
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item sidesEle ">
                                    <a href="{{route('add-workorder')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add Work Order</p>
                                    </a>
                                </li>
                                <li class="nav-item sidesEle ">
                                    <a href="{{route('view-workorder')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View Work Order</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item sidesEle ">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-user"></i>
                                <p>
                                   Work Order Assign
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item sidesEle ">
                                    <a href="{{route('add-workorder-assign')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add WO Assign</p>
                                    </a>
                                </li>
                                <li class="nav-item sidesEle ">
                                    <a href="{{route('view-workorder-assign')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View WO Assign</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        
                             <li class="nav-item sidesEle ">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-user"></i>
                                <p>
                                   Return & Maintanence
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item sidesEle ">
                                    <a href="{{route('view-request')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View RM Request</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        
                        <li class="nav-item sidesEle ">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-user"></i>
                                <p>
                                   Payment
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item sidesEle ">
                                    <a href="{{route('view-payment')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Payment Request</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                
                        <li class="nav-item sidesEle ">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-user"></i>
                                <p>
                                  Vendor Complaint
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item sidesEle ">
                                    <a href="{{route('view-vendor-complaint')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View Vendor Complaint</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        
                            <li class="nav-item sidesEle ">
                            <a href="{{route('view-daily-progress')}}" class="nav-link">
                                 <i class="nav-icon fas fa-user"></i>
                                <p>
                                   Vendor Report
                                </p>
                            </a>
                        </li>

                        <li class="nav-item sidesEle ">
                            <a href="{{route('logout')}}" class="nav-link">
                                <i class="nav-icon fa fa-fw fa-power-off"></i>
                                <p>
                                   Logout
                                </p>
                            </a>
                        </li>
                    </ul>
          </li>
          </ul>
        </nav>

      </div>

    </aside>

