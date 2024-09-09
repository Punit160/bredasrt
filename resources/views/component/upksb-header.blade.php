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
        <span class="brand-text text-white">KLK Ventures-{{$state}}</span>

      </a>

      <div class="sidebar">


        <nav>
          <ul class="nav nav-pills nav-sidebar flex-column text-sm nav-flat" data-widget="treeview" role="menu"
            data-accordion="false">
              
                                               <li class="nav-item sidesEle bord ">
                            <a href="#" class="nav-link p-2">
                                <i class="nav-icon fas fa-poll-h"></i>
                                <p class="text-white">Dashboard<i class="fas fa-angle-left right"></i></p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item sidesEle bord  ">
                                    <a href="{{route('jammu-dash')}}" class="nav-link   p-2  ">
                                        <i class="fas fa-arrow-right nav-icon" style="font-size: small;"></i>
                                        <p class="text-white ">
                                            UP SRT Dashboard
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item sidesEle bord  ">
                                    <a href="{{route('up-ssl-dashboard')}}" class="nav-link   p-2  ">
                                        <i class="fas fa-arrow-right nav-icon" style="font-size: small;"></i>
                                        <p class="text-white ">
                                             UP SSL Dashboard
                                        </p>
                                    </a>
                                </li>

                                <li class="nav-item sidesEle bord  ">
                                    <a href="{{route('ongrid-dash')}}" class="nav-link   p-2  ">
                                        <i class="fas fa-arrow-right nav-icon" style="font-size: small;"></i>
                                        <p class="text-white ">
                                          UP Ongrid Dashboard
                                        </p>
                                    </a>
                                </li>
                                
                                
                                <li class="nav-item sidesEle bord  ">
                                    <a href="{{route('offgrid-dash')}}" class="nav-link   p-2  ">
                                        <i class="fas fa-arrow-right nav-icon" style="font-size: small;"></i>
                                        <p class="text-white ">
                                           UP Offgrid Dashboard
                                        </p>
                                    </a>
                                </li>
                                
                                <li class="nav-item sidesEle bord  ">
                                    <a href="{{route('kusumb-dash')}}" class="nav-link   p-2  ">
                                        <i class="fas fa-arrow-right nav-icon" style="font-size: small;"></i>
                                        <p class="text-white ">
                                           Kusum B Dashboard
                                        </p>
                                    </a>
                                </li>
                                
                                  
                                <li class="nav-item sidesEle bord  ">
                                    <a href="{{route('kusumc-dash')}}" class="nav-link   p-2  ">
                                        <i class="fas fa-arrow-right nav-icon" style="font-size: small;"></i>
                                        <p class="text-white ">
                                           Kusum C  Dashboard
                                        </p>
                                    </a>
                                </li>
                                
                                  <li class="nav-item sidesEle bord  ">
                                    <a href="{{route('powerpack-dash')}}" class="nav-link   p-2  ">
                                        <i class="fas fa-arrow-right nav-icon" style="font-size: small;"></i>
                                        <p class="text-white ">
                                           Power Pack Dashboard
                                        </p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                    
                                <li class="nav-item sidesEle bord ">
                            <a href="#" class="nav-link p-2">
                                <i class="nav-icon fas fa-poll-h"></i>
                                <p class="text-white">Kusum B Survey<i class="fas fa-angle-left right"></i></p>
                            </a>
                            <ul class="nav nav-treeview">


                                <li class="nav-item sidesEle bord  ">
                                    <a href="#" class="nav-link   p-2  ">
                                        <i class="fas fa-arrow-right nav-icon" style="font-size: small;"></i>
                                        <p class="text-white ">
                                            Add Survey
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item sidesEle bord  ">
                                    <a href="{{route('view-kusum-B')}}" class="nav-link   p-2  ">
                                        <i class="fas fa-arrow-right nav-icon" style="font-size: small;"></i>
                                        <p class="text-white ">
                                            View Survey 
                                        </p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        
  
                           <li class="nav-item sidesEle bord ">
                            <a href="#" class="nav-link p-2">
                                <i class="nav-icon fas fa-poll-h"></i>
                                <p class="text-white">Kusum C Survey<i class="fas fa-angle-left right"></i></p>
                            </a>
                            <ul class="nav nav-treeview">


                                <li class="nav-item sidesEle bord  ">
                                    <a href="{{route('add-kusum-C')}}" class="nav-link   p-2  ">
                                        <i class="fas fa-arrow-right nav-icon" style="font-size: small;"></i>
                                        <p class="text-white ">
                                            Add Survey
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item sidesEle bord  ">
                                    <a href="{{route('view-kusum-C')}}" class="nav-link   p-2  ">
                                        <i class="fas fa-arrow-right nav-icon" style="font-size: small;"></i>
                                        <p class="text-white ">
                                            View Survey
                                        </p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        
                        <li class="nav-item sidesEle bord ">
                            <a href="#" class="nav-link p-2">
                                <i class="nav-icon fas fa-poll-h"></i>
                                <p class="text-white">UP SSL<i class="fas fa-angle-left right"></i></p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item sidesEle bord  ">
                                    <a href="{{route('add-up-ssl')}}" class="nav-link   p-2  ">
                                        <i class="fas fa-arrow-right nav-icon" style="font-size: small;"></i>
                                        <p class="text-white ">
                                            Add UP SSL
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item sidesEle bord  ">
                                    <a href="{{route('view-up-ssl')}}" class="nav-link   p-2  ">
                                        <i class="fas fa-arrow-right nav-icon" style="font-size: small;"></i>
                                        <p class="text-white ">
                                            View UP SSL
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item sidesEle bord ">
                            <a href="#" class="nav-link p-2">
                                <i class="nav-icon fas fa-poll-h"></i>
                                <p class="text-white">UP Off Grid <i class="fas fa-angle-left right"></i></p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item sidesEle bord  ">
                                    <a href="{{route('add-offgrid')}}" class="nav-link   p-2  ">
                                        <i class="fas fa-arrow-right nav-icon" style="font-size: small;"></i>
                                        <p class="text-white ">
                                            Add Off Grid
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item sidesEle bord  ">
                                    <a href="{{route('view-offgrid')}}" class="nav-link   p-2  ">
                                        <i class="fas fa-arrow-right nav-icon" style="font-size: small;"></i>
                                        <p class="text-white ">
                                            View Off Grid
                                        </p>
                                    </a>
                                </li>
                                     <li class="nav-item sidesEle bord  ">
                                    <a href="{{route('upload-offgrid-data')}}" class="nav-link   p-2  ">
                                        <i class="fas fa-arrow-right nav-icon" style="font-size: small;"></i>
                                        <p class="text-white ">
                                            Upload Off Grid
                                        </p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                          <li class="nav-item sidesEle bord ">
                            <a href="#" class="nav-link p-2">
                                <i class="nav-icon fas fa-poll-h"></i>
                                <p class="text-white">UP On Grid<i class="fas fa-angle-left right"></i></p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item sidesEle bord  ">
                                    <a href="{{route('add-ongrid')}}" class="nav-link   p-2  ">
                                        <i class="fas fa-arrow-right nav-icon" style="font-size: small;"></i>
                                        <p class="text-white ">
                                            Add On Grid
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item sidesEle bord  ">
                                    <a href="{{route('view-ongrid')}}" class="nav-link   p-2  ">
                                        <i class="fas fa-arrow-right nav-icon" style="font-size: small;"></i>
                                        <p class="text-white ">
                                            View On Grid
                                        </p>
                                    </a>
                                </li>
                                     <li class="nav-item sidesEle bord  ">
                                    <a href="{{route('upload-ongrid-data')}}" class="nav-link   p-2  ">
                                        <i class="fas fa-arrow-right nav-icon" style="font-size: small;"></i>
                                        <p class="text-white ">
                                            Upload On Grid
                                        </p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        
                                             
                               <li class="nav-item sidesEle bord ">
                            <a href="#" class="nav-link p-2">
                                <i class="nav-icon fas fa-poll-h"></i>
                                <p class="text-white">Power Pack<i class="fas fa-angle-left right"></i></p>
                            </a>
                            <ul class="nav nav-treeview">


                                <li class="nav-item sidesEle bord  ">
                                    <a href="{{route('add-power')}}" class="nav-link   p-2  ">
                                        <i class="fas fa-arrow-right nav-icon" style="font-size: small;"></i>
                                        <p class="text-white ">
                                            Add PP
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item sidesEle bord  ">
                                    <a href="{{route('view-power')}}" class="nav-link   p-2  ">
                                        <i class="fas fa-arrow-right nav-icon" style="font-size: small;"></i>
                                        <p class="text-white ">
                                            View PP 
                                        </p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                         <li class="nav-item sidesEle ">
                            <a href="{{route('view-product')}}" class="nav-link">
                                <i class="nav-icon fas fa-box"></i>
                                <p>
                                  UP Product
                                </p>
                            </a>
                        </li>

                        <li class="nav-item sidesEle ">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-users"></i>
                                <p>
                                  UP Request
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
                                 UP Dispatch
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
                                 UP Complaint
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item sidesEle ">
                                    <a href="{{route('add-kusumb-complaint')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add Complaint</p>
                                    </a>
                                </li>
                                <li class="nav-item sidesEle ">
                                    <a href="{{route('view-kusumb-complaint')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View Complaint</p>
                                    </a>
                                </li>
                                 <li class="nav-item sidesEle ">
                                    <a href="{{route('final-kusumb-complaint')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Resolved Complaint</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                             <li class="nav-item sidesEle ">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-user"></i>
                                <p>
                                 UP SWP Complaint
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item sidesEle ">
                                    <a href="{{route('add-swp-complaint')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add Complaint</p>
                                    </a>
                                </li>
                                <li class="nav-item sidesEle ">
                                    <a href="{{route('view-swp-complaint')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View Complaint</p>
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
        </nav>

      </div>

    </aside>