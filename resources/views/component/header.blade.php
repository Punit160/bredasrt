<style>
  .dot {
    display: block;
    position: absolute;
    height: 10px !important;
    width: 10px !important;
    background-color: #6de708;
    border-radius: 50%;
    top: 25px;
    left: 35px;
  }

  .activePage {
    background-color: #785822;

    font-weight: 800;
  }

  .sidesEle {
    font-size: 16px;
    font-weight: 400;
  }
</style>
</head>



<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <nav class="main-header navbar navbar-expand navbar-secondary navbar-light text-sm"
      style="height:58px; background-color: rgb(51, 50, 50) !important; position: sticky; top: 0%; ">
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
      style="background-color:rgb(51, 50, 50) !important; height: 100vh !important; position: fixed;">



      <a href="{{route('state')}}" class="brand-link text-light  " >

        <img src="{{asset('dist/img/klk.png')}}" alt="AdminLTE Logo" class="brand-image img-circle p-1 elevation-3"
          style=" background-color: white;padding: 2px;">
        <span class="brand-text text-white">KLK Ventures</span>

      </a>

      <div class="sidebar">


        <nav>
          <ul class="nav nav-pills nav-sidebar flex-column text-sm nav-flat mb-2" data-widget="treeview" role="menu"
            data-accordion="false">
    @if($role == '1' || $role == '0')

               <li class="nav-item sidesEle ">
                            <a href="{{route('dashboard')}}" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                   SRT Dashboard
                                </p>
                            </a>
                        </li>
                            <li class="nav-item sidesEle">
                            <a href="{{route('bssl-dashboard')}}" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                  SSL Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item sidesEle ">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-users"></i>
                                <p>
                                   User
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item sidesEle ">
                                    <a href="{{route('add-user')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add User</p>
                                    </a>
                                </li>
                                <li class="nav-item sidesEle ">
                                    <a href="{{route('view-user')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View User</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item sidesEle ">
                            <a href="{{route('view-srt')}}" class="nav-link">
                                <i class="nav-icon fas fa-map-marked"></i>
                                <p>
                                   SRT
                                </p>
                            </a>
                        </li>
                        
                                <li class="nav-item sidesEle ">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-users"></i>
                                <p>
                                   SSL
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item sidesEle ">
                                    <a href="{{route('add-bssl')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add SSL</p>
                                    </a>
                                </li>
                                <li class="nav-item sidesEle ">
                                    <a href="{{route('view-bssl')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View SSL</p>
                                    </a>
                                </li>
                                 <li class="nav-item sidesEle ">
                                    <a href="{{route('upload-biharssl-data')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Upload SSL</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        

                        <li class="nav-item sidesEle ">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-user"></i>
                                <p>
                                   Report
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item sidesEle ">
                                    <a href="{{route('phasewise-report')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Phase Wise</p>
                                    </a>
                                </li>
                                <li class="nav-item sidesEle ">
                                    <a href="{{route('districtwise-report')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>District Wise</p>
                                    </a>
                                </li>
                                <li class="nav-item sidesEle ">
                                    <a href="{{route('vendorwise-report')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Vendor Wise</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        
                        <li class="nav-item sidesEle ">
                            <a href="{{route('view-product')}}" class="nav-link">
                                <i class="nav-icon fas fa-box"></i>
                                <p>
                                   Product
                                </p>
                            </a>
                        </li>

                        <li class="nav-item sidesEle ">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-users"></i>
                                <p>
                                   Request
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item sidesEle ">
                                    <a href="{{route('add-request')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add Request</p>
                                    </a>
                                </li>
                                <li class="nav-item sidesEle ">
                                    <a href="{{route('view-request')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View Request</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item sidesEle ">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-users"></i>
                                <p>
                                   Dispatch
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                            <li class="nav-item sidesEle ">
                                    <a href="{{route('inhouse-product-dispatch')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Inhouse Dispatch</p>
                                    </a>
                                </li>
                                <li class="nav-item sidesEle ">
                                    <a href="{{route('view-inhouse-dispatch')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View Inhouse</p>
                                    </a>
                                </li>
                                <li class="nav-item sidesEle ">
                                    <a href="{{route('add-product-dispatch')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Product Dispatch</p>
                                    </a>
                                </li>
                                <li class="nav-item sidesEle ">
                                    <a href="{{route('view-product-dispatch')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View Outer</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item sidesEle ">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-user"></i>
                                <p>
                                   Complaint
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item sidesEle ">
                                    <a href="{{route('add-complaint')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add Complaint</p>
                                    </a>
                                </li>
                                <li class="nav-item sidesEle ">
                                    <a href="{{route('view-complaint')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View Complaint</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
            @elseif($role == '2')
            
                           <li class="nav-item sidesEle ">
                            <a href="{{route('dashboard')}}" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>

                        <li class="nav-item sidesEle ">
                            <a href="{{route('view-srt')}}" class="nav-link">
                                <i class="nav-icon fas fa-map-marked"></i>
                                <p>
                                   SRT
                                </p>
                            </a>
                        </li>
                 <li class="nav-item sidesEle ">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-user"></i>
                                <p>
                                   Complaint
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item sidesEle ">
                                    <a href="{{route('add-complaint')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add Complaint</p>
                                    </a>
                                </li>
                                <li class="nav-item sidesEle ">
                                    <a href="{{route('view-complaint')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View Complaint</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item sidesEle ">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-user"></i>
                                <p>
                                   Report
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item sidesEle ">
                                    <a href="{{route('phasewise-report')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Phase Wise</p>
                                    </a>
                                </li>
                                <li class="nav-item sidesEle ">
                                    <a href="{{route('districtwise-report')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>District Wise</p>
                                    </a>
                                </li>
                                <li class="nav-item sidesEle ">
                                    <a href="{{route('vendorwise-report')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Vendor Wise</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
            
            @elseif($role == '3')
            
                        <li class="nav-item sidesEle ">
                            <a href="{{route('view-product')}}" class="nav-link">
                                <i class="nav-icon fas fa-box"></i>
                                <p>
                                   Product
                                </p>
                            </a>
                        </li>

                        <li class="nav-item sidesEle ">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-users"></i>
                                <p>
                                   Request
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item sidesEle ">
                                    <a href="{{route('view-request')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View Request</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item sidesEle ">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-users"></i>
                                <p>
                                   Dispatch
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                            <li class="nav-item sidesEle ">
                                    <a href="{{route('inhouse-product-dispatch')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Inhouse Dispatch</p>
                                    </a>
                                </li>
                                <li class="nav-item sidesEle ">
                                    <a href="{{route('view-inhouse-dispatch')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View Inhouse</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                                      <li class="nav-item sidesEle ">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-user"></i>
                                <p>
                                   Complaint
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item sidesEle ">
                                    <a href="{{route('add-complaint')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add Complaint</p>
                                    </a>
                                </li>
                                <li class="nav-item sidesEle ">
                                    <a href="{{route('view-complaint')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View Complaint</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
            
            
            @elseif($role == '4')
            
                        <li class="nav-item sidesEle ">
                            <a href="{{route('view-product')}}" class="nav-link">
                                <i class="nav-icon fas fa-box"></i>
                                <p>
                                   Product
                                </p>
                            </a>
                        </li>

                        <li class="nav-item sidesEle ">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-users"></i>
                                <p>
                                   Request
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item sidesEle ">
                                    <a href="{{route('view-request')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View Request</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item sidesEle ">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-users"></i>
                                <p>
                                   Dispatch
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item sidesEle ">
                                    <a href="{{route('add-product-dispatch')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Product Dispatch</p>
                                    </a>
                                </li>
                                <li class="nav-item sidesEle ">
                                    <a href="{{route('view-product-dispatch')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View Outer</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
            
                       <li class="nav-item sidesEle ">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-user"></i>
                                <p>
                                   Complaint
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item sidesEle ">
                                    <a href="{{route('add-complaint')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add Complaint</p>
                                    </a>
                                </li>
                                <li class="nav-item sidesEle ">
                                    <a href="{{route('view-complaint')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View Complaint</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
            
            
                    @elseif($role == '5')
                <li class="nav-item sidesEle ">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-users"></i>
                                <p>
                                   Request
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item sidesEle ">
                                    <a href="{{route('view-request')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View Request</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                                      <li class="nav-item sidesEle ">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-user"></i>
                                <p>
                                   Complaint
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item sidesEle ">
                                    <a href="{{route('add-complaint')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add Complaint</p>
                                    </a>
                                </li>
                                <li class="nav-item sidesEle ">
                                    <a href="{{route('view-complaint')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View Complaint</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

            @elseif($role == '6')
            
               <li class="nav-item sidesEle ">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-users"></i>
                                <p>
                                   Request
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item sidesEle ">
                                    <a href="{{route('add-request')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add Request</p>
                                    </a>
                                </li>
                                <li class="nav-item sidesEle ">
                                    <a href="{{route('view-request')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View Request</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        
                         <li class="nav-item sidesEle ">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-user"></i>
                                <p>
                                   Complaint
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item sidesEle ">
                                    <a href="{{route('add-complaint')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add Complaint</p>
                                    </a>
                                </li>
                                <li class="nav-item sidesEle ">
                                    <a href="{{route('view-complaint')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View Complaint</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
              </ul>
            </li>
            
            @endif
            
                                <li class="nav-item sidesEle ">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-user"></i>
                                <p>
                                     SSL Complaint
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item sidesEle ">
                                    <a href="{{route('add-ssl-complaint')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add SSL Complaint</p>
                                    </a>
                                </li>
                                <li class="nav-item sidesEle ">
                                    <a href="{{route('view-ssl-complaint')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View SSL Complaint</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        
                        
                        <li class="nav-item sidesEle ">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-user"></i>
                                <p>
                                     SRT Complaint
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item sidesEle ">
                                    <a href="{{route('add-srt-complaint')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add SRT Complaint</p>
                                    </a>
                                </li>
                                <li class="nav-item sidesEle ">
                                    <a href="{{route('view-srt-complaint')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View SRT Complaint</p>
                                    </a>
                                </li>
                            </ul>
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

